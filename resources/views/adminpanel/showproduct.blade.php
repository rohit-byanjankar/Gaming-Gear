@extends('adminpanel.layouts.master')

@section('content')
    <table class="table table-striped mt-2">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Detail</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>
          <td>{{$product->id}}</th>
          <td>{{$product->name}}</td>
          <td>{{$product->detail}}</td>
          <td>{{$product->category}}</td>
          <td>{{$product->price}}</td>
          <td class="p-3"><img src = "{{$product->image}}" width = 80 height =85></td>
        </tr>
        @endforeach
      </tbody>
    </table>
<div class="ml-4 ">
  {{$products->links()}}
</div>
@endsection
