@extends('admin.layoutA')
@section('title', 'Page Home') 
@section('leftbar')
<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/admin" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a href="/barang" class=""><i class="lnr lnr-code"></i> <span>Barang</span></a></li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i><span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="/pagehome" class="active">Home</a></li>
                            <li><a href="page-login.html" class="">Login</a></li>
                            <li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->
@endsection

@section('konten')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Home Page</h3>
                   
                </div>
                <div class="panel-body">
                    <!-- CONTEXTUAL -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="metric">
                                <div class="row">
                                    <div class="col-sm-6">
                                      <div class="card">
                                    @foreach($logo as $log)
                                        <div class="card-body">
                                          <h2 class="card-title">Logo</h2>
                                            <div class="container-login100-form-btn m-t-17">
                                                <a href="/logo/edit/{{ $log->id }}" class="btn btn-primary">Edit</a>
                                            </div>
                                        </div>
                                    @endforeach
                                      </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="metric">
                                <div class="row">
                                    <div class="col-sm-6">
                                      <div class="card">
                                        <div class="card-body">
                                          <h2 class="card-title">Slider</h2>
                                            <div class="container-login100-form-btn m-t-17">
                                                <a href="/homeslider" class="btn btn-primary">Edit</a>
                                            </div>
                                         
                                        </div>
                                      </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="metric">
                                <div class="row">
                                    <div class="col-sm-6">
                                      <div class="card">
                                    
                                        <div class="card-body">
                                          <h2 class="card-title">ImageHome</h2>
                                            <div class="container-login100-form-btn m-t-17">
                                                <a href="/homeimg" class="btn btn-primary">Edit</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="metric">
                                <div class="row">
                                    <div class="col-sm-6">
                                      <div class="card">
                                        <div class="card-body">
                                          <h2 class="card-title">Home Promo</h2>
                                            <div class="container-login100-form-btn m-t-17">
                                                <a href="/homepromo" class="btn btn-primary">Edit</a>
                                            </div>
                                         
                                        </div>
                                      </div>
                                    </div>
                            </div>
                        </div>
                    </div>
@endsection