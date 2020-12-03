@extends('admin.login.layout')
@section('title', 'Login Admin') 
@section('konten')

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method='POST' action='{{ route('loginadmin')}}'>
                    @csrf
					<span class="login100-form-title p-b-51">
						Login Admin
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
						<input class="input100" @error('email') is-invalid @enderror type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						@error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100"  @error('password') is-invalid @enderror type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						@error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						{{-- <div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot?
							</a>
						</div> --}}
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" >
							Login
						</button>
						@if (Session::has('message'))
                    	<p class="alert alert-danger">{{ Session::get('message') }}</p>
						@endif
					</div>

					
				

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

@endsection
