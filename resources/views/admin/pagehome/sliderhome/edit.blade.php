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
                            <li><a href="/pageabout" class="">About</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="adminconfig" class=""><i class="lnr lnr-cog"></i> <span>Admin Konfigurasi</span></a></li>
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
                <h1 class="mt-3">Edit Data Slider Home</h1>
            
                <form method="POST" action="/homeslider/update/{{$sliderhome->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
            
                    <div class="form-group">
                        <label for="text_h1">Text H1</label>
                        <input type="text" class="form-control @error('text_h1') is-invalid @enderror" id="text_h1" placeholder="input Text-H1" name="text_h1" value="{{$sliderhome->text_h1}} >
                        @error('text_h1')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label for="text_h2">Text H1</label>
                        <input type="text" class="form-control @error('text_h2') is-invalid @enderror" id="text_h2" placeholder="input Text-H2" name="text_h2" value="{{$sliderhome->text_h2}} >
                        @error('text_h2')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label for="button">Text Button</label>
                        <input type="text" class="form-control @error('button') is-invalid @enderror" id="button" placeholder="input Text Button" name="button" value="{{$sliderhome->button}}>
                        @error('button')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="gambar">Gambar Barang</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar" value="{{$sliderhome->gambar}}">
                    </div>
                    

                        <p>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </p>
                        <p>
                        <a class="btn btn-danger" href="/homeslider" role="button">Kembali</a>
                        </p>                                                                   
                            </form>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection