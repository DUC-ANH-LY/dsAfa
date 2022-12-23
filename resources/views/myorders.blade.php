@extends('master')
@section('content')
<div class="container">
    <div class="col-sm-10">
        <div>
            <h3>My orders</h3>
            @foreach ($orders as $product)
                <div class="row">
                    <div class="col-sm-3">
                        <a href="/detail/{{$product->id}}">
                        <img src="{{$product->gallery}}" alt="img" style="height: 100px"></a>
                    </div>
                    <div class="col-sm-5">
                        <div>
                            <h2>Name: {{$product->name}}</h2>
                            <h4>Delivery Status: {{$product->status}}</h4>
                            <h4>Address: {{$product->address}}</h4>
                            <h4>Payment Status: {{$product->payment_status}}</h4>
                            <h4>Payment Method: {{$product->payment_method}}</h4>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection