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

<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Admin Konfigurasi</h3>
            <div id="toastr-demo" class="panel">
                <div class="panel-body">
                    <!-- CONTEXTUAL -->
                    
                    <p class="demo-button">
                        <a class="btn btn-primary" href="/adminconfig/tambah" role="button">Tambah Admin</a>
                    </p>
                    <div class="container">
                        <div class="row">
                            <div class="col-8"></div>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($adminconfig as $adc)
                                        <tr>
                                            <td>{{ $no ++ }}</td>
                                            <td>{{ $adc->name}}</td>                       
                                            <td>{{ $adc->email}}</td>
                                            <td>{{ $adc->password}}</td>
                                            <td>
                                                <a class="btn btn-warning btn-toastr"  href="/adminconfig/edit/{{ $adc->id }}" >Edit Data Admin</a>
                                                <a class="btn btn-danger btn-toastr"  href="/adminconfig/hapus/{{ $adc->id }}" >Delete Data Admin</button>
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
