@extends('layout.master')
@section('content')
			<div class="card mt-1" style="margin:auto; width:400px;">
				<form class="card-body" action='/signup'  method="post">
					{{csrf_field()}}
				        <div class="d-flex justify-content-center nav nav-tabs">
				          <span class="nav-item"><a href="/login" class="nav-link">Log In</a></span>
				           <span class="nav-item "><a href="#" class="nav-link active">Sign Up</a></span>
				        </div>
				        
						<div class="mt-1">
							<label for="Uname">Username:</label>
							<input type="text" class="form-control" placeholder="Username" name="username" id="uname">
							<p id="p0" class='text-danger small'></p>
						</div>

						<div class="row mt-1">
								<span class="col-md-6">
									<label for="Fname">First Name:</label>
									<input type="text" class="form-control" name="fname" placeholder="First Name" id="fname">
									<p id="p1" class='text-danger small'></p>
								</span>
								
								<span class="col-md-6">
									<label for="Lname">Last Name:</label>
									<input type="text" class="form-control" name="lname" placeholder="Last Name" id="lname">
									<p id="p5" class='text-danger small'></p>
								</span>
							</div>

						<div class="mt-1">
							<label for="email">Email:</label>
							<input type="email" class="form-control" name="email" placeholder="Email" id="email">
							<p id="p2" class='text-danger small'></p>
						</div>

						<div class="row mt-1">
							<span class="col-md-6">
								<label for="password">Password:</label>
								<input type="password" class="form-control" name = 'password' placeholder="Password" id="psw">
								<p id="p3" class='text-danger small'></p>
							</span>
							
							<span class="col-md-6">
								<label for="Cpassword">Confirm Password:</label>
								<input type="password" class="form-control" name="cpsw" placeholder="Confirm Password" id="cpsw">
								<p id="p4" class='text-danger'></p>
							</span>
						</div>

					<div class="d-flex justify-content-center mt-1">
							<button type="submit" class="btn btn-success" id="validate">Sign up</button>
					</div>
				</form>
			</div>

@endsection

@section('scripts')
<script src="{{asset('js/formval.js')}}">
</script>
<script>
$('footer').addClass('fixed-bottom');  
</script>
@endsection