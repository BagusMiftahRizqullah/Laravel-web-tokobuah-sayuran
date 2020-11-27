@extends('admin.layoutA')
@section('title', 'Edite Slider') 
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
        
        <div class="container">
            <div class="row">
                <div class="col-8">
                <h1 class="mt-3">Konfigurasi Slider</h1>
            
                <form method="POST" action="/homeslider/tambah" enctype="multipart/form-data">
                            @csrf            
                            <div class="form-group">
                                <label for="text_h1">Text H1</label>
                                <input type="text" class="form-control @error('text_h1') is-invalid @enderror" id="text_h1" placeholder="input Text-H1" name="text_h1">
                                @error('text_h1')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="text_h2">Text H2</label>
                                <input type="text" class="form-control @error('text_h2') is-invalid @enderror" id="text_h2" placeholder="input Text-H2" name="text_h2">
                                @error('text_h2')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="button">Text Button</label>
                                <input type="text" class="form-control @error('button') is-invalid @enderror" id="button" placeholder="input Text Button" name="button">
                                @error('button')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="gambar">Gambar Slider</label>
                                <input type="file" class="form-control-file" id="gambar" name="gambar">
                            </div>
                            <p>
                            <button type="submit" class="btn btn-primary">Tambah Data Slider</button>
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