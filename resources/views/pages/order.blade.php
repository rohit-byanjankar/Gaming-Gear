@extends('layout.master')

@section('content')
<h3 class="container mt-5"> THANKYOU YOUR ORDER HAS BEEN PLACED.</h3>

@php ($product = $product[0])
<div class="container w-75 mt-4">  
        <h4 class="container text-danger">Order Detail</h4>
    <div class="table-responsive">          
    <table class="table danger">
      <thead>
        <tr>
          <th>Order ID:</th>
          <th>Product Name:</th>
          <th>Price:</th>
          <th>Payment Method:</th>
        </tr>
      </thead>
      <tbody>
        <tr class="danger">
        <td>{{$product->id}}</td>
          <td>{{$product->name}}</td>
          <td>{{$product->price}}</td>
          <td>E-Sewa</td>
        </tr>
      </tbody>
    </table>
    </div>
    <div class="container">
   <h5 class="text-muted large ">How to pay via E-Sewa:</h5>
        <span class="ml-3 large text-danger">1. Find shop with E-Sewa/use your own E-Sewa if you have.<br></span>
        <span class="ml-3 large text-danger">2. Go to Send Money tab in E-Sewa's Homepage.<br></span>
        <span class="ml-3 large text-danger">3. Send money to E-Sewa ID:</span><b> 9861167885</b><br>
        <span class="ml-3 large text-danger">4. Leave your phone number and address in E-Sewa remarks.</span>
  </div>
</div>
@endsection

@section('scripts')
<script>
$('footer').addClass('fixed-bottom');
</script>
@endsection