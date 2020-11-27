@extends('admin.login.layout')
@section('title', 'Register Admin') 
@section('konten')

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form method="POST" action="{{ route('registeradmin')}}" >
                    @csrf
                    <span class="login100-form-title p-b-51">
						Register Admin
					</span>
                        
                    <div class="form-group">
                        <label for="name">Nama </label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="input Nama" name="name" value="{{old('name')}}">
                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="input E-Mail" name="email" value="{{old('email')}}">
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="input Password" name="password">
                        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Password Confirmation</label>
                        <input type="text" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="konfirmasi Password" name="password_confirmation">
                        @error('password_confirmation')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                
                    <div class="form-group">
                    <p>
                    <button type="submit" class="btn btn-primary">REGISTASI</button>
                    </p>
                    </div>
                    <div class="form-group">
                    <p>
                    <a class="btn btn-danger" href="javascript:window.history.go(-1);" role="button">Kembali</a>
                    </p>                    
                    </div>                                               
                </form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

@endsection
