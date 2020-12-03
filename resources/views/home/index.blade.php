@extends('layout')
@section('title', 'Home') 


@section('headmenu')
 <!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse" id="navbar-menu">
    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
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
  
  <!-- Start Slider -->

    <div id="slides-shop" class="cover-slides">
        
            <ul class="slides-container">
                @foreach ($sliderhome as $slidhome)
                <li class="text-center">
                    <img src="{{ asset('style/gambar_slider/'.$slidhome->gambar)  }} " alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="m-b-20"><strong>{{ $slidhome->text_h1}}</strong></h1>
                                <p class="m-b-40">{{ $slidhome->text_h2}}</p>
                                <p><a class="btn hvr-hover" href="#">{{ $slidhome->button}}</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="slides-navigation">
                <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            </div>
    </div>
<!-- End Slider -->

 <!-- Start Categories  -->
 <div class="categories-shop">
    
        <div class="container">
            <div class="row">
                @foreach ($img as $imgs)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="shop-cat-box">
                        
                        <img class="img-fluid" src="{{ asset('style/images/'.$imgs->gambar)  }}" alt="" />
                        <a class="btn hvr-hover" href="#">{{ $imgs->nama}}</a>
                    </div>
                </div>
                @endforeach
            </div>
         </div>
</div>

<!-- End Categories -->


<!-- Start Products  -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Buah & Sayuran</h1>
                    <p>Dipilih dengan menjaga kualitas</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".top-Featured">Top featured</button>
                        <button data-filter=".best-Seller">Best seller</button>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row special-list">
            @foreach($homepromo as $homepro)
            <div class="{{$homepro->kategori}}">
               
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale"> Sale</p>
                        </div>
            
                        <img src="{{ asset('style/gambar_homepromo/'.$homepro->gambar)  }}  " class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Add to Cart</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>{{ $homepro->nama}}</h4>
                        <h5>Rp.{{ $homepro->harga}}</h5>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Products  -->  
@endsection









