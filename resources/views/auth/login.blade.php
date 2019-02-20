@extends('layout.master')

@section('content')
<div class="card mt-5" style="margin:auto; width:290px">
     
     <form class="card-body" method="POST" action='/login'>
        {{ csrf_field() }}
        <div class="d-flex justify-content-center nav nav-tabs">
          <span class="nav-item"><a href="#" class="nav-link active">Log In</a></span>
           <span class="nav-item"><a href="/signup" class="nav-link">Sign Up</a></span>
        </div>
        
          <div class="mt-4">
            <label for="fname">Username:</label>
            <input type="text" class="form-control" placeholder="Username" name="username">
                <span id="Uvalid" class="error text-danger">Enter Username</span>
          </div>  

          <div class="mt-4">
            <label for="password">Password:</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
            
                <span id="Pvalid" class="error text-danger">Enter Password</span>  
          </div>

        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-success mt-2" id="validate">Log in</button>
        </div>
      </form>
      @if($errors->all())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			 @endif
  </div>
@endsection

@section('scripts')
 <script src={{asset("js/loginValidate.js")}}></script> 
<script>
$('footer').addClass('fixed-bottom');
</script>
@endsection