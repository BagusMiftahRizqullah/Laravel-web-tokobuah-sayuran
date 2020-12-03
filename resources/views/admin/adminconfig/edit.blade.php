@extends('admin.layoutA')
@section('title', 'Konfigurasi Admin') 
@section('konten')
@section('leftbar')

<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/admin" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a href="/barang" class=""><i class="lnr lnr-code"></i> <span>Barang</span></a></li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="/pagehome" class="">Home</a></li>
                            <li><a href="/pageabout" class="">About</a></li>
                       
                        </ul>
                    </div>
                </li>
                <li><a href="/adminconfig" class="active"><i class="lnr lnr-cog"></i> <span>Admin Konfigurasi</span></a></li>
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
        <div class="container">
            <div class="row">
                <div class="col-8">
                <h1 class="mt-3">Tambah Data Admin</h1>
            
                <form method="POST" action="/adminconfig/update/{{$adminconfig->id}}" enctype="form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="input Nama Admin" name="name"  value="{{$adminconfig->name}}">
                                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                    
                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="input Email Admin" name="email" value="{{$adminconfig->email}}">
                                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="input Password Admin" name="password" >
                                    @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Password Komfirmasi</label>
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Input Ulang Password" name="password_confirmation">
                                    @error('password_confirmation')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>


                                <p>
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                                </p>
                                <p>
                                <a class="btn btn-danger" href="javascript:window.history.go(-1);" role="button">Kembali</a>
                                </p>                                                                   
                            </form>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection