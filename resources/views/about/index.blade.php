@extends('layout')
@section('title', 'About') 
@section('headmenu')
 <!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse" id="navbar-menu">
    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item active"><a class="nav-link" href="/about">About Us</a></li>
        <li class="dropdown">
            <a href="/shop" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
            <ul class="dropdown-menu">
                <li><a href="/shop">Sidebar Shop</a></li>
                <li><a href="/shop-detail">Shop Detail</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="checkout.html">Checkout</a></li>
                <li><a href="my-account.html">My Account</a></li>
                <li><a href="wishlist.html">Wishlist</a></li>
            </ul>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->
@endsection

@section('konten')
     <!-- Start All Title Box -->
     <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ABOUT US</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">ABOUT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <!-- Start About Page  -->
    @foreach ($pageabout as $pb)
    <div class="about-box-main">
        <div class="container">
            <div class="row">
				<div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid" src="{{ asset('style/images/'.$pb->gambar)  }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">{{ $pb->h1}}</span></h2>
                    <p>{{ $pb->isi1}}</p>
                    
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>{{ $pb->h2}}</h3>
                        <p>{{ $pb->isi2}} </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>{{ $pb->h3}}</h3>
                        <p>{{ $pb->isi3}}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>{{ $pb->h4}}</h3>
                        <p>{{ $pb->isi4}} </p>
                    </div>
                </div>
            </div>
          
            </div>
        </div>
    </div>
    @endforeach
    <!-- End About Page -->
@endsection