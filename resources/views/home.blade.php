
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   
</head>
<style>
    .search-box{
        width : 500px !important;
    }
    .slider-img{
        height: 500px !important;
    }
    .trending-img{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
</style>
<body>
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
          <a class="nav-link" href="#">Cart(0)</a>
        </li>
        
        
     </ul>   
      <form action="/search" class="d-flex">
        <input class="form-control me-2 search-box" name="query" placeholder="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        
      </form>

      <ul class="nav navbar-nav navbar-right">
      
          <li><a href="/login1"><button class="btn btn-outline-success"><img src="{{ asset('image/p2.png') }}" style="width:20px;" alt="">Login</button></a></li>
         
        </ul>
      
      
    </div>
  </div>
</nav>


<div class="row">
     <div class="col-sm-8 offset-sm-2" >

     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('image/med6.jpg') }}" class="d-block w-100 slider-img" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('image/med4.jpg') }}" class="d-block w-100 slider-img" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('image/med7.jpg') }}" class="d-block w-100 slider-img" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
</div>


<div class="row">
     <div class="col" >
     <div class="trending-wrapper">
<h3>Trending Products</h3>
  @foreach ($products as $item)
    <div class="trending-item">
    <a href="/detail/{{$item['id']}}">
     <img class="trending-img" src="{{$item['gallery']}}" alt="First slide">
     <div class="">
         <h3>{{$item['name']}}</h3>
    </div>
</a>
</div>
   @endforeach
</div>
</div>

     </div>
</div>    



    
</body>
</html>