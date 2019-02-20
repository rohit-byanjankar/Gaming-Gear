@extends('layout.master')
@section('content')
<div class="container-fluid mt-3">
    <div class="text-center text-danger">
    <h5>Result for "{{$request->input('search')}}"</h5>
    </div>

    <div class="row">
      @foreach($products as $product)
      <div class="card col-sm-4 col-lg-3  ml-5 mt-4" style="width:350px; height: 100%;">
        <h5 class="card-title text-dark text-center">{{$product->name}}</h5>
        <img class="card-img-top ml-2 mt-1 img-thumbnail" src="{{asset($product->image)}}" alt="Card image" style="width:90%; height:200px;">
        <div class="card-body mx-auto">
          <a href="/product/{{$product->id}}" class="btn btn-dark ">View Description</a>
        </div>
      </div>
      @endforeach
    </div>
</div>
@endsection

@if(count($products)<4)
@section('scripts')
<script>
$('footer').addClass('fixed-bottom');
</script>
@endsection

@endif