<?php

namespace App\Http\Controllers;

use session;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    //
    function index(){
        $data = Product::all();
        // dd($data);
        return view('product',['products'=>$data]);
    }
    function detail($id){
         $data  = Product::find($id);
         return view('detail',["product"=>$data]);
    }

    function addToCart(Request $req){
        $cart = new Cart;
        if($req->session()->has('user')){
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else return redirect('/login');
    }

    function cartItem(){
        $userId = session('user')['id'];
        // dd($userId);
        return Cart::where('user_id',$userId)->count();
    }

    function cartList(){
        if (session()->has('user')){

            $userId = session('user')['id'];
            $products=DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$userId)->select('products.*','cart.id as cart_id')->get();
            return view('cartlist',['products'=>$products]);
        }
        else return redirect('/login');
    }
    function remove($id){
        Cart::destroy($id);
        return redirect('/cartList');
    }

    function order(){
        $userId = session('user')['id'];
        $total=DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$userId)->sum('products.price');
        return view('ordernow',['total'=>$total]);
    }
    function orderplace(Request $req){
        $userId = session('user')['id'];
        // dd($user)   
        // return $req;
        $allCart=Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        return redirect('/');
    }
    function myorders(){
        if (session()->has('user')){
        $userId = session('user')['id'];
        $orders=DB::table('orders')->join('products','orders.product_id','=','products.id')->where('orders.user_id',$userId)->get();
        return view('myorders',['orders'=>$orders]);
        }
         else return redirect('/login');
    }

    function search(Request $req){
        $results = Product::where('name','like','%'.$req['search'].'%')->get();
        return view('search',['results'=>$results]);
    }
}
