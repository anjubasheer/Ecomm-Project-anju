@extends('master1')
@section("content")

<div class="custom-product">
  <div class="row">
     <div class="col-sm-4">
        <a href="">Filter</a>
     </div>
     <div class="col-sm-4">
          <div class="trending-wrapper">
             <h5>Result for Products</h5>
                @foreach ($products as $item)
                      <div class="search-item">
                        <a href="/detail/{{$item['id']}}">
                        <img class="trending-img" src="{{$item['gallery']}}">
                        <div class="">
                           <h4>{{$item['name']}}</h4>
                           
                         </div>
                        </a>
                      </div>
                  @endforeach
          </div>
      </div>
</div>
</div>
@endsection