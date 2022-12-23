@extends('master')
@section('content')
<div class="container">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($products as $product)
                
            <div class="carousel-item {{$product['id']==1?'active':''}}" data-bs-interval="10000">
                <a href="/detail/{{$product['id']}}">
                    <div style="text-align: center;"><img src="{{$product['gallery']}}" class="" alt="img" style="height:400px;"></div>
                    <div class="carousel-caption d-none d-md-block" style="background-color: #b8b8b8e6;">
                      <h5>{{$product['name']}}</h5>
                      <p>{{$product['description']}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <h3>Trending Products</h3>    
      <div class="d-flex justify-content-between flex-wrap">
        @foreach ($products as $product)
        <a href="/detail/{{$product['id']}}" class="text-decoration-none text-black">
            <div class="">
              <img src="{{$product['gallery']}}" class="" alt="img" style="height:200px;">
              <div class="">
                <h5>{{$product['name']}}</h5>
              </div>
            </div>
          </a>
            @endforeach
      </div>
</div>
@endsection