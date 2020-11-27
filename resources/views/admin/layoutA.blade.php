<!doctype html>
<html lang="en">

<head>
	<title>@yield('judul')  Dasboard-Toko Buah & Sayuran</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{ asset('style/vendor/bootstrap/css/bootstrap.min.css') }} ">
	<link rel="stylesheet" href="{{ asset('style/vendor/font-awesome/css/font-awesome.min.css') }} ">
	<link rel="stylesheet" href="{{ asset('style/vendor/linearicons/style.css') }} ">
	<link rel="stylesheet" href="{{ asset('style/vendor/toastr/toastr.min.css') }} ">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('style/css/main.css') }}  ">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ asset('style/css/demo.css') }} ">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('style/img/apple-icon.png') }} ">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('style/img/favicon.png') }}  ">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="/"><img src="{{ asset('style/img/logo-dark.png') }}  " alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('style/img/user.png') }}  " class="img-circle" alt=""> <span>{{ Auth::user()->name ?? ''}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="{{ route('logoutadmin')}}"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		
		<!-- END NAVBAR -->
		@yield('leftbar')
		
        <!-- MAIN -->
        @yield('konten')
    
        


		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2020 <a href="#" target="_blank">Toko Buah & Sayur</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{ asset('style/vendor/jquery/jquery.min.js') }} "></script>
	<script src="{{ asset('style/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('style/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }} "></script>
	<script src="{{ asset('style/vendor/toastr/toastr.min.js') }} "></script>
	<script src="{{ asset('style/scripts/klorofil-common.js') }} "></script>
</body>

</html>
