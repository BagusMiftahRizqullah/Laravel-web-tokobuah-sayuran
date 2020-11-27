<?php

namespace App\Http\Controllers;

use App\Models\sliderhome;
use Illuminate\Http\Request;

class SliderhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliderhome = sliderhome::all();
         return view('admin.pagehome.sliderhome.index', compact('sliderhome'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sliderhome = sliderhome::all();
        
        return view('admin.pagehome.sliderhome.tambah',compact('sliderhome'));
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
            'text_h1' => 'required',
            'text_h2' => 'required',
            'button' => 'required',
            'gambar' => 'required',
        ]);

        $sliderhome = new sliderhome;
        $sliderhome->text_h1 = $request['text_h1'];
        $sliderhome->text_h2 = $request['text_h2'];
        $sliderhome->button = $request['button'];
        
        $file = $request->file('gambar');
        $file_name = $file->getClientOriginalName();
        
               // isi dengan nama folder tempat kemana file diupload
		
		$request->file ('gambar') ->move("style/gambar_slider/",$file_name);
        
        $sliderhome->gambar = $file_name;
        $sliderhome->save();
        return redirect('/homeslider')->with('status','Data Berhasil Ditambahkan Cokk!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sliderhome  $sliderhome
     * @return \Illuminate\Http\Response
     */
    public function show(sliderhome $sliderhome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sliderhome  $sliderhome
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sliderhome=sliderhome::find($id);
        
        return view('admin.pagehome.sliderhome.edit', compact('sliderhome'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sliderhome  $sliderhome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sliderhome =sliderhome::find($id);
        
        $sliderhome->text_h1 = $request['text_h1'];
        $sliderhome->text_h2 = $request['text_h2'];
        $sliderhome->button = $request['button'];
        
        
        $file = $request->file('gambar');
        $file_name = $file->getClientOriginalName();
        
               // isi dengan nama folder tempat kemana file diupload
		
		$request->file ('gambar') ->move("style/gambar_slider/",$file_name);
        

        $sliderhome->gambar = $file_name;
        $sliderhome->save();
        
        //matakuliah::update($request->all());
        return redirect('/homeslider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sliderhome  $sliderhome
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        $sliderhome = \DB::table('tb_slider')->where('id',$id)->delete();
        // alihkan halaman ke halaman awal
        return redirect()->back();
    }
}
