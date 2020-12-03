@extends('admin.layoutA')
@section('title', 'Edite Logo') 
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
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Gambar Home Page</h3>
                   
                </div>
                <div class="panel-body">
                    <form action="/homeimg/update/{{$img->id}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama Gambar</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="input Nama Logo" name="nama" value="{{$img->nama}}">
                                @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        
                            <div class="form-group">
                                <td><img src="{{ asset('style/images/'.$img->gambar)  }}" style="max-height:200px;max-width:200px;margin-top:10px;"></td>
                            </div>

                            <div class="form-group">
                                <label for="gambar">Gambar Home Page</label>
                                <input type="file" class="form-control-file" id="gambar" name="gambar" value="{{$img->gambar}}">
                            </div>
                    

                        <p>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </p>
                        <p>
                        <a class="btn btn-danger" href="/homeimg" role="button">Kembali</a>
                        </p>                                                                   
                    </form>
                </div>
@endsection