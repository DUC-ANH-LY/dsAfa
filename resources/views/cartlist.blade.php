@extends('master')
@section('content')
<div class="container">
    <div class="col-sm-10">
        @if ($products->count()>0)
        <div>
            <h3>Results for Products</h3>
            @foreach ($products as $product)
                <div class="row">
                    <div class="col-sm-3">
                        <a href="/detail/{{$product->id}}">
                        <img src="{{$product->gallery}}" alt="img" style="height: 100px"></a>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <h2>{{$product->name}}</h2>
                            <h4>{{$product->description}}</h4>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="/removecart/{{$product->cart_id}}" class="btn btn-danger">Remove to Cart</a>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
        <a href="/ordernow" class="btn btn-success">Order Now</a>
        @else 
            <div class="alert alert-danger" role="alert">
                 Cart doesn't have any items
            </div>
        @endif
    </div>
</div>
@endsection