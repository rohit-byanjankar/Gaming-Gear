@extends('layout.master')

@section('content')
		<!--PRODUCT DESCRIPTION START-->
		<div class="container mt-4 ">
			<div class="row">
				@php ($product = $product[0])
				<div class="col-md-6 col-sm-6 mt-3">
					<img src="{{asset($product->image)}}" class="img-fluid img-thumbnail shadow-lg p-2">	
				</div>

				<div class="col-md-6 col-sm-6  mt-4">
						<h4 class="text-success">{{$product->name}}</h4>
					<p class="text-info">{{$product->detail}}</p>
					<h5 class="text-danger">Rs.{{$product->price}}</h5>
					@if(Auth::check())
					<a href="/order/{{$product->id}}" class="btn btn-dark">Buy</a>
					@else
					<br>
						<h5 class="text-info">Please Log In first to Buy</h5>
						<a href="/login" class="btn btn-dark">Log In</a>
					@endif
				</div>
			</div>
		</div>
		<!--PRODUCT DESCRIPTION END-->
@endsection

@section('scripts')
<script>
$('footer').addClass('fixed-bottom');
</script>
@endsection