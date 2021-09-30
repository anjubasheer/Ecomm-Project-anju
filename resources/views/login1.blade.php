@extends('master1')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
        <form action="" method="POST">
               <div class="form-group">
                 @csrf
               <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                <input type="email" name="email" id=" " class="form-control form-control-sm validate">
                
              </div>

              <div class="form-group">
              <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                <input type="password"  name="password" id="modalLRInput11" class="form-control form-control-sm validate">
                
              </div>
              <div class="text-center mt-2">
                <button class="btn btn-info">Log in </button>
              </div>
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
          </form>

        </div>
    </div>


</div>






@endsection