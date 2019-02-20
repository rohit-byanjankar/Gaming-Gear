@extends('layout.master')
@section('content')

  <style type="text/css">
  .carousel-inner img
  {
    height: 100%;
    width: 100%;
  }
  </style>

<!-- Search Box -->
  <div class="col-lg-8 mt-3 mx-auto">
      <form class="navbar-form" role="search" method = 'get' action='/search'>
          <div class="input-group">
            {{csrf_field()}}
              <input class="form-control" placeholder="Search via name" name="search" type="text">
              <div class="input-group-append">
                <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
              </div>
          </div>
        </form>
    </div>
 <div id="demo" class="carousel slide container" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner mt-3">
    <div class="carousel-item active">
      <img class="img-thumbnail" src="img/rsz_2keyboard.png" alt="cpu" width="1100" height="400">
    </div>
    <div class="carousel-item">
      <img class="img-thumbnail"  src="img/caraousel2.png" alt="keyboard" width="1100" height="400">
    </div>
    <div class="carousel-item">
      <img class="img-thumbnail" src="img/caraousel3.jpg" alt="monitor" width="1100" height="400">
    </div>

  </div>
  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <!--Body Heading-->
  <div class="container-fluid mt-5 bg-light">
        <h2 class="text-center text-success">
      Our Best Deals
        </h2>   
  </div>

<div class="container-fluid mt-3">
    <div class="row"> 
      @foreach($bests as $best)
      <div class="card col-sm-4 col-lg-3  ml-5 mt-4" style="width:350px; height: 330px;">
          <h5 class="card-title text-dark text-center">{{$best->name}}</h5>
        <img class="card-img-top ml-2 mt-1 img-thumbnail" src="{{asset($best->image)}}" alt="Card image" style="width:90%; height:200px;">
        <div class="card-body mx-auto">
          <a href="/product/{{$best->id}}" class="btn btn-dark">View Description</a>
        </div>
      </div>
      @endforeach
    </div>
    {{-- <div class="mt-4">
			{{$best->links()}}
		</div>	 --}}
</div>
@endsection
