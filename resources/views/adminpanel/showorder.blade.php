@extends('adminpanel.layouts.master')

@section('content')
    <table class="table table-striped mt-2">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Product name</th>
          <th scope="col">User email</th>
        </tr>
      </thead>
      <tbody>
        @foreach($orders as $product)
        <tr>
          <td>{{$product->id}}</th>
          <td>{{$product->name}}</td>
          <td>{{$product->email}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
@endsection
