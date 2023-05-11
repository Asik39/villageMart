@extends('layout.app')

@section('title','Log In')

@section('content')
<section class="main">
    <div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
				<div class="login-form">
					<div class="login-header">
						<p class="fs-1 fw-bold">Login</p>
					</div>
					<div class="login-body">
						<form action="{{ url('./login') }}" method="post">
							@csrf
							<div class="form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
							</div>
							@error('email')
            					<p class="text-danger mb-2">{{ $message }}</p>
        					@enderror
							<div class="form-group">
								<label for="password">Password:</label>
								<input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
							</div>
							@error('password')
            					<p class="text-danger mb-2">{{ $message }}</p>
        					@enderror
							<button type="submit" class="btn btn-primary btn-block">Login</button>
						</form>
						<div class="text-center mt-2" id="Resistar_link">
							<a href="{{url('./register')}}"> Don't have account? Resistar Now!</a>
							
						</div>
						<div class="Forgot_pass">
							<a href="{{url('./forgetPassword')}}">Forgot password?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection