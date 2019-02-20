<!DOCTYPE html>
<html lang="en">
  <head>
      <title>
          Welcome!!
      </title>
    <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  </head>
  <body>
        @include('layout.navbar')
        @yield('content')
        @include('layout.footer')

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>

    @yield('scripts')
</body>
</html>