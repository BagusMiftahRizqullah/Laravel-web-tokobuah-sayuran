<?php

namespace App\Http\Controllers;

use App\Models\homepromo;
use Illuminate\Http\Request;

class HomepromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homepromo = homepromo::all();
        return view('admin.pagehome.homepromo.index', compact('homepromo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $homepromo = homepromo::all();
        
        return view('admin.pagehome.homepromo.tambah',compact('homepromo'));
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
          
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'gambar' => 'required',
        ]);

        $homepromo = new homepromo;
        
        $homepromo->nama = $request['nama'];
        $homepromo->kategori = $request['kategori'];
        $homepromo->harga = $request['harga'];
        
        
        $file = $request->file('gambar');
        $file_name = $file->getClientOriginalName();
        
               // isi dengan nama folder tempat kemana file diupload
		
		$request->file ('gambar') ->move("style/gambar_homepromo/",$file_name);
        

        $homepromo->gambar = $file_name;
        $homepromo->save();
        return redirect('/homepromo')->with('status','Data Berhasil Ditambahkan Cokk!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\homepromo  $homepromo
     * @return \Illuminate\Http\Response
     */
    public function show(homepromo $homepromo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\homepromo  $homepromo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $homepromo=homepromo::find($id);
        
        return view('admin.pagehome.homepromo.edit', compact('homepromo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\homepromo  $homepromo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $homepromo =homepromo::find($id);
        
      
        $homepromo->nama = $request['nama'];
        $homepromo->kategori = $request['kategori'];
        $homepromo->harga = $request['harga'];
        
        
        $file = $request->file('gambar');
        $file_name = $file->getClientOriginalName();
        
               // isi dengan nama folder tempat kemana file diupload
		
		$request->file ('gambar') ->move("style/gambar_homepromo/",$file_name);
        

        $homepromo->gambar = $file_name;
        $homepromo->save();
        
        //matakuliah::update($request->all());
        return redirect('/homepromo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\homepromo  $homepromo
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
      
        $homepromo = \DB::table('tb_homepromo')->where('id',$id)->delete();
        // alihkan halaman ke halaman awal
        return redirect()->back();
    }
}
