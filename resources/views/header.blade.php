<?php 
  use App\Http\Controllers\ProductController;
  $obj = new ProductController;
  $total=0;
  if(session()->has('user'))
    $total= $obj->cartItem();
?>


<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">E-commerce</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/myorders">Orders</a>
          </li>
          <li class="ps-3">
              <form class="d-flex" role="search" action="/search" method="POST">
                @csrf
                <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search" autocomplete="off">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
          </li>
         </ul>  
      </div>
      <div class="pe-5 d-flex align-items-center">
       <div><a href="/cartList" class="text-decoration-none">Cart({{$total}})</a></div>
       <div class="collapse navbar-collapse ps-4" id="navbarNavDarkDropdown">
          @if (session()->has('user'))
         <ul class="navbar-nav">
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{session('user')['name']}}
             </a>
             <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
               <li><a class="dropdown-item" href="/logout">Logout</a></li>
             </ul>
           </li>
         </ul>
         @else 
         <a class="text-decoration-none" href="/login">Login</a>
         <a class="text-decoration-none ms-3" href="/register">Register</a>
         @endif
        </div>
      </div>
    </div>
  </nav>