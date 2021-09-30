<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">

  <a class="navbar-brand" href="#">
<img src ="{{asset('image/p1.png')}}" width="50" height="30" class="d-inline-block align-top" alt=""><font face="verdana" color="#61CE70">PharmaServe</font>
 </a>
    
    

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Carts(0)</a>
        </li>
     </ul>   
      <form action="/search" class="d-flex">
        <input class="form-control me-2 search-box" name="query" placeholder="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        
      </form>
      
    </div>
  </div>
</nav>