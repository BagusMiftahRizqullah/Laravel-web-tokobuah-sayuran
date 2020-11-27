<?php

namespace App\Http\Controllers;

use App\Models\logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $logo = logo::all();
        return view('admin.pagehome.editlogo', compact('logo'));
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
     * @param  \App\Models\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logo=logo::find($id);
        
        return view('admin.pagehome.editlogo.index', compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $logo =logo::find($id);
        $logo->nama = $request['nama'];
        
        $file = $request->file('gambar');
        $file_name = $file->getClientOriginalName();
        
               // isi dengan nama folder tempat kemana file diupload
		
		$request->file ('gambar') ->move("style/images/",$file_name);
        

        $logo->gambar = $file_name;
        $logo->save();
        
        //matakuliah::update($request->all());
        return redirect('/pagehome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(logo $logo)
    {
        //
    }
}
