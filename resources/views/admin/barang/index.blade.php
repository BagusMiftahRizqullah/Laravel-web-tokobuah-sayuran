@extends('admin.layoutA')
@section('title', 'Barang') 
@section('konten')
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
<!-- END LEFT SIDEBAR -->
@endsection   
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Barang</h3>
            <div id="toastr-demo" class="panel">
                <div class="panel-body">
                    <!-- CONTEXTUAL -->
                    
                    <p class="demo-button">
                        <a class="btn btn-primary" href="/barang/tambah" role="button">Tambah Barang</a>
                    </p>
                    <div class="container">
                        <div class="row">
                            <div class="col-8"></div>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Barang</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Jumlah Barang</th>
                                        <th scope="col">Harga Barang</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($barang as $bar)
                                        <tr>
                                            <td>{{ $no ++ }}</td>
                                            <td>{{ $bar->kode_barang}}</td>                       
                                            <td>{{ $bar->nama_barang}}</td>
                                            <td>{{ $bar->jumlah_barang}}</td>
                                            <td>{{ $bar->harga_barang}}</td>
                                            <td><img src="{{ asset('style/gambar_barang/'.$bar->gambar)  }}" style="max-height:70px;max-width:70px;margin-top:10px;"></td>
                                            <td>
                                                <a class="btn btn-warning btn-toastr"  href="/barang/edit/{{ $bar->id }}" >Edit Barang</a>
                                                <a class="btn btn-danger btn-toastr"  href="/barang/hapus/{{ $bar->id }}" >Delete Barang</button>
                                            </td>
                                        </tr>
                                    @endforeach
                            </table> 
                            </div>
                        </div>
                    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
@endsection
