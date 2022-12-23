@extends('master')
@section('content')
<div class="container">
    @if ($results->count()>0)
        
    <h3>Trending Products</h3>    
    <div class="d-flex justify-content-around flex-wrap">
      @foreach ($results as $product)
      <a href="/detail/{{$product['id']}}" class="text-decoration-none text-black">
          <div class="">
            <img src="{{$product['gallery']}}" class="" alt="img" style="height:200px;">
            <div class="">
              <h5>{{$product['name']}}</h5>
            </div>
          </div>
        </a>
          @endforeach
    @else
         <div class="alert alert-danger" role="alert">
             Products don't exits
         </div>
    @endif
</div>
@endsection