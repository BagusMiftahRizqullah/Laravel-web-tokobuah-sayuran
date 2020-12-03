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
                <li><a href="adminconfig" class=""><i class="lnr lnr-cog"></i> <span>Admin Konfigurasi</span></a></li>
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
            <h3 class="page-title">Page About</h3>
            <div id="toastr-demo" class="panel">
                <div class="panel-body">
                    <!-- CONTEXTUAL -->
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-8"></div>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">H-1</th>
                                        <th scope="col">Isi-1</th>
                                        <th scope="col">H-2</th>
                                        <th scope="col">Isi-2</th>
                                        <th scope="col">H-3</th>
                                        <th scope="col">Isi-3</th>
                                        <th scope="col">H-4</th>
                                        <th scope="col">Isi-4</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($pageabout as $pb)
                                        <tr>
                                            <td>{{ $no ++ }}</td>
                                            <td>{{ $pb->h1}}</td>                       
                                            <td>{{ $pb->isi1}}</td>
                                            <td>{{ $pb->h2}}</td>                       
                                            <td>{{ $pb->isi2}}</td>
                                            <td>{{ $pb->h3}}</td>                       
                                            <td>{{ $pb->isi3}}</td>
                                            <td>{{ $pb->h4}}</td>                       
                                            <td>{{ $pb->isi4}}</td>
                                            <td><img src="{{ asset('style/images/'.$pb->gambar)  }}" style="max-height:70px;max-width:70px;margin-top:10px;"></td>
                                            <td>
                                                <a class="btn btn-warning btn-toastr"  href="/pageabout/edit/{{ $pb->id }}" >Edit Barang</a>
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
