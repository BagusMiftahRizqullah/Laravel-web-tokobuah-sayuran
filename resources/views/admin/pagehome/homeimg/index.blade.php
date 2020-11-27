@extends('admin.layoutA')
@section('title', 'Edite Home Image') 
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
        <div class="container-fluid">
            <h3 class="page-title">Home Image</h3>
            <div id="toastr-demo" class="panel">
                <div class="panel-body">
                    <!-- CONTEXTUAL -->
                    
                    {{-- <p class="demo-button">
                        <a class="btn btn-primary" href="homeslider/tambah" role="button">Tambah Data Slide</a>
                    </p> --}}
                    <div class="container">
                        <div class="row">
                            <div class="col-8"></div>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">nama</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($img as $imgs)
                                        <tr>
                                            <td>{{ $no ++ }}</td>
                                            <td>{{ $imgs->nama}}</td>                       
                                            <td><img src="{{ asset('style/images/'.$imgs->gambar)  }}" style="max-height:70px;max-width:70px;margin-top:10px;"></td>
                                            <td>
                                                <a class="btn btn-warning btn-toastr"  href="/homeimg/edit/{{ $imgs->id }}" >Edit Gambar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                            </table> 
                            </div>
                        </div>
                        <p>
                            <a class="btn btn-danger" href="/pagehome" role="button">Kembali</a>
                            </p>    
                    </div>
                    
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
@endsection
