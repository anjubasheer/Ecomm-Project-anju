<?php
  use App\Http\Controllers\productController;
  $total=0;
  if (Session::has('user')){
  $total= productController::CartItem();
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">

  <a class="navbar-brand" href="#">
<img src ="{{asset('image/p1.png')}}" width="50" height="30" class="d-inline-block align-top" alt=""><font face="verdana" color="#61CE70">PharmaServe</font>
 </a>
    
    

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cart({{$total}})</a>
        </li>
        
     </ul>   
      <form action="/search" class="d-flex">
        <input class="form-control me-2 search-box" name="query" placeholder="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        
      </form>

      <ul class="nav navbar-nav navbar-right">
      @if(Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><button class="btn btn-outline-success"><img src="{{ asset('image/p2.png') }}" style="width:20px;" alt="">{{Session::get('user')['name']}}</button>
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <li><a href="/login1"><button class="btn btn-outline-success"><img src="{{ asset('image/p2.png') }}" style="width:20px;" alt="">Login</button></a></li>
          @endif
        </ul>
      
      
    </div>
  </div>
</nav>