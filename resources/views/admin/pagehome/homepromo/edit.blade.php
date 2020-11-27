@extends('admin.layoutA')
@section('title', 'Edit Home Promo') 
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
                <h1 class="mt-3">Edit Data Promo</h1>
            
                <form method="POST" action="/homepromo/update/{{$homepromo->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                        
                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="input Nama Barang" name="nama" value="{{$homepromo->nama}}">
                        @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori">
                        <option value="">Pilih </option>
                            <option value="col-lg-3 col-md-6 special-grid best-seller">Best Seller</option>
                            <option value="col-lg-3 col-md-6 special-grid top-featured">Top Featured</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="harga">Harga Barang</label>
                        <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="input Harga" name="harga" value="{{$homepromo->harga}}">
                        @error('harga')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <td><img src="{{ asset('style/gambar_homepromo/'.$homepromo->gambar)  }}" style="max-height:200px;max-width:200px;margin-top:10px;"></td>
                    </div>


                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar" value="{{$homepromo->gambar}}">
                    </div>
                    

                        <p>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </p>
                        <p>
                        <a class="btn btn-danger" href="/homepromo" role="button">Kembali</a>
                        </p>                                                                   
                            </form>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection