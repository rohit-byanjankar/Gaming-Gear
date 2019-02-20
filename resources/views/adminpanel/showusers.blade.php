@extends('adminpanel.layouts.master')

@section('content')
<table class="table table-striped mt-2">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($user as $user)
    <tr>
      <td>{{$user->id}}</th>
      <td>{{$user->uname}}</td>
      <td>{{$user->fname}}</td>
      <td>{{$user->lname}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
