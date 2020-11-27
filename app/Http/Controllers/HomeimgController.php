<?php

namespace App\Http\Controllers;

use App\Models\homeimg;
use Illuminate\Http\Request;

class HomeimgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $img = homeimg::all();
        return view('admin.pagehome.homeimg.index', compact('img'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\homeimg  $homeimg
     * @return \Illuminate\Http\Response
     */
    public function show(homeimg $homeimg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\homeimg  $homeimg
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $img=homeimg::find($id);
        
        return view('admin.pagehome.homeimg.edit', compact('img'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\homeimg  $homeimg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $img =homeimg::find($id);
        $img->nama = $request['nama'];
        
        $file = $request->file('gambar');
        $file_name = $file->getClientOriginalName();
        
               // isi dengan nama folder tempat kemana file diupload
		
		$request->file ('gambar') ->move("style/home_img/",$file_name);
        

        $img->gambar = $file_name;
        $img->save();
        
        //matakuliah::update($request->all());
        return redirect('/homeimg');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\homeimg  $homeimg
     * @return \Illuminate\Http\Response
     */
    public function destroy(homeimg $homeimg)
    {
        //
    }
}
