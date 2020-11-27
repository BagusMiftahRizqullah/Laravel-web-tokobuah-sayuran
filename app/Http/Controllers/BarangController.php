<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = barang::all();
         return view('admin.barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = barang::all();
        
        return view('admin.barang.tambah',compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'jumlah_barang' => 'required',
            'harga_barang' => 'required',
            'gambar' => 'required',
        ]);

        $barang = new barang;
        $barang->kode_barang = $request['kode_barang'];
        $barang->nama_barang = $request['nama_barang'];
        $barang->jumlah_barang = $request['jumlah_barang'];
        $barang->harga_barang = $request['harga_barang'];
        
        
        $file = $request->file('gambar');
        $file_name = $file->getClientOriginalName();
        
               // isi dengan nama folder tempat kemana file diupload
		
		$request->file ('gambar') ->move("style/gambar_barang/",$file_name);
        

        $barang->gambar = $file_name;
        $barang->save();
        return redirect('/barang')->with('status','Data Berhasil Ditambahkan Cokk!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang=barang::find($id);
        
        return view('admin.barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang =barang::find($id);
        
        $barang->kode_barang = $request['kode_barang'];
        $barang->nama_barang = $request['nama_barang'];
        $barang->jumlah_barang = $request['jumlah_barang'];
        $barang->harga_barang = $request['harga_barang'];
        
        
        $file = $request->file('gambar');
        $file_name = $file->getClientOriginalName();
        
               // isi dengan nama folder tempat kemana file diupload
		
		$request->file ('gambar') ->move("style/gambar_barang/",$file_name);
        

        $barang->gambar = $file_name;
        $barang->save();
        
        //matakuliah::update($request->all());
        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
      
        $barang = \DB::table('tb_barang')->where('id',$id)->delete();
        // alihkan halaman ke halaman awal
        return redirect()->back();
    }
}
