<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req){
        // dd($req);
        $user = User::where(['email'=>$req->email])->first();
        // dd($user);

        if($user && Hash::check($req->password,$user->password)){
            $req->session()->put('user',$user);
            // dd(session('user'));
            return redirect('/login');
        }
        else {
            return "Username or password not matched";
        }
    }
    function register(Request $req){
        $user = new User;
        $user->name = $req->user_name;
        $user->email = $req->email;
        $user->password = Hash::make($req->user_name);
        $user->save();
        return redirect('/login');
    }
}
