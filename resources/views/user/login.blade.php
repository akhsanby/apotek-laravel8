@extends('templates/auth')
@section('title', 'Login')
@section('content')
<!-- Outer Row -->
<div class="row justify-content-center">

	<div class="col-xl-10 col-lg-12 col-md-9">

		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
					<div class="col-lg-6">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
							</div>
							@if (session('success'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>
							@elseif (session('error'))
							<div class="alert alert-danger">
								{{ session('error') }}
							</div>
							@endif
							<form class="user" action="/logged" method="post">
								@csrf
								<div class="form-group">
									<input type="text" name="username" class="form-control form-control-user" placeholder="Enter Username">
									@error('username') <small class="text-danger"> {{ $message }} </small> @enderror
								</div>
								<div class="form-group">
									<input type="password" name="password1" class="form-control form-control-user" placeholder="Enter Password">
									@error('password1') <small class="text-danger"> {{ $message }} </small> @enderror
								</div>
								<button type="submit" class="btn btn-primary btn-user btn-block">
									Login
								</button>
							</form>
							<hr>
							<div class="text-center">
								<a class="small" href="/register">Create an Account!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop