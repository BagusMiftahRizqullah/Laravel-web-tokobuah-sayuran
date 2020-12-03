@extends('admin.layoutA')
@section('title', 'Edit Page About') 
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
                            <li><a href="/pageabout" class="active">About</a></li>
                       
                        </ul>
                    </div>
                </li>
                <li><a href="adminconfig" class=""><i class="lnr lnr-cog"></i> <span>Admin Configurasi</span></a></li>
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
                <h1 class="mt-3">Edit Page About</h1>
            
                <form method="POST" action="/pageabout/update/{{$pageabout->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="h1">Header 1</label>
                            <input type="text" class="form-control @error('h1') is-invalid @enderror" id="h1" placeholder="input Header 1 page about" name="h1" value="{{$pageabout->h1}}">
                            @error('h1')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                            
                        <div class="form-group">
                            <label for="isi1">isi Sectinon 1</label>
                            <input type="isi1" class="form-control @error('isi1') is-invalid @enderror" id="isi1" placeholder="input isi Section 1 page about" name="isi1" value="{{$pageabout->isi1}}">
                            @error('isi1')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="h2">Header Bawah 1</label>
                            <input type="h2" class="form-control @error('h2') is-invalid @enderror" id="h2" placeholder="input Header Bawah 1 page about" name="h2" value="{{$pageabout->h2}}">
                            @error('h2')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="isi2">isi Section1 Bawah 1</label>
                            <input type="text" class="form-control @error('isi2') is-invalid @enderror" id="isi2" placeholder="input isi Header Bawah 1" name="isi2" value="{{$pageabout->isi2}}">
                            @error('isi2')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="h3">Header Bawah 2</label>
                            <input type="text" class="form-control @error('h3') is-invalid @enderror" id="h3" placeholder="input Header Bawah 2 page about" name="h3" value="{{$pageabout->h3}}">
                            @error('h3')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="isi3">isi Section Bawah 2</label>
                            <input type="text" class="form-control @error('isi3') is-invalid @enderror" id="isi3" placeholder="input isi Header Bawah 2" name="isi3" value="{{$pageabout->isi3}}">
                            @error('isi3')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="h4">Header Bawah 3</label>
                            <input type="text" class="form-control @error('h4') is-invalid @enderror" id="h4" placeholder="input Header 3 page about" name="h4" value="{{$pageabout->h4}}">
                            @error('h4')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="isi4">isi Section Bawah 3</label>
                            <input type="text" class="form-control @error('isi4') is-invalid @enderror" id="isi4" placeholder="input isi Header Bawah 3" name="isi4" value="{{$pageabout->isi4}}">
                            @error('isi4')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <td><img src="{{ asset('style/images/'.$pageabout->gambar)  }}" style="max-height:200px;max-width:200px;margin-top:10px;"></td>
                        </div>
                        
                        <div class="form-group">
                            <label for="gambar">Gambar Barang</label>
                            <input type="file" class="form-control-file" id="gambar" name="gambar" value="{{$pageabout->gambar}}">
                        </div>
                    

                        <p>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </p>
                        <p>
                        <a class="btn btn-danger" href="/pageabout" role="button">Kembali</a>
                        </p>                                                                   
                            </form>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection