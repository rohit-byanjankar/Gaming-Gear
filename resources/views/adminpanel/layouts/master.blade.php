<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
    crossorigin="anonymous">
  </head>
  <body>
      @include('adminpanel.layouts.navbar')
      <div class="container-fluid">
            <div class="row">
                @include('adminpanel.layouts.sidebar')
                <main role="main" class="col-10 ml-sm-auto ">
                        @yield('content')
                </main>
            </div>
      </div>
</body>
</html>