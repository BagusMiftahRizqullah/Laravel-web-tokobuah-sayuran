@extends('admin.layoutA')
@section('title', 'Edit Barang') 
@section('leftbar')
<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/admin" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a href="/barang" class="active"><i class="lnr lnr-code"></i> <span>Barang</span></a></li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="/pagehome" class="">Home</a></li>
                         
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection

@section('konten')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-8">
                <h1 class="mt-3">Edit Data Barang</h1>
            
                <form method="POST" action="/barang/update/{{$barang->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="kode_barang">Kode Barang</label>
                            <input type="text" class="form-control @error('kode_barang') is-invalid @enderror" id="kode_barang" placeholder="input Kode Barang" name="kode_barang" value="{{$barang->kode_barang}}">
                            @error('kode_barang')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                            
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" placeholder="input Nama Barang" name="nama_barang" value="{{$barang->nama_barang}}">
                            @error('nama_barang')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="jumlah_barang">Jumlah Barang</label>
                            <input type="number" class="form-control @error('jumlah_barang') is-invalid @enderror" id="jumlah_barang" placeholder="input Jumlah Barang" name="jumlah_barang" value="{{$barang->jumlah_barang}}">
                            @error('jumlah_barang')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="harga_barang">Harga Barang</label>
                            <input type="number" class="form-control @error('harga_barang') is-invalid @enderror" id="harga_barang" placeholder="input Harga Barang" name="harga_barang" value="{{$barang->harga_barang}}">
                            @error('harga_barang')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="gambar">Gambar Barang</label>
                            <input type="file" class="form-control-file" id="gambar" name="gambar" value="{{$barang->gambar}}">
                        </div>
                    

                        <p>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </p>
                        <p>
                        <a class="btn btn-danger" href="/barang" role="button">Kembali</a>
                        </p>                                                                   
                            </form>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection