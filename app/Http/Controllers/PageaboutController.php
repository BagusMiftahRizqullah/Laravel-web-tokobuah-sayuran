<?php

namespace App\Http\Controllers;
use App\Models\pageabout;
use Illuminate\Http\Request;

class PageaboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageabout = pageabout::all();

        return view('admin.pageabout.index', compact('pageabout'));
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
     * @param  \App\Models\pageabout  $pageabout
     * @return \Illuminate\Http\Response
     */
    public function show(pageabout $pageabout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pageabout  $pageabout
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pageabout=pageabout::find($id);
        
        return view('admin.pageabout.edit', compact('pageabout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pageabout  $pageabout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pageabout =pageabout::find($id);
        $pageabout->h1 = $request['h1'];
        $pageabout->isi1 = $request['isi1'];
        $pageabout->h2 = $request['h2'];
        $pageabout->isi2 = $request['isi2'];
        $pageabout->h3 = $request['h3'];
        $pageabout->isi3 = $request['isi3'];
        $pageabout->h4 = $request['h4'];
        $pageabout->isi4 = $request['isi4'];
       
        
        $file = $request->file('gambar');
        $file_name = $file->getClientOriginalName();
        
               // isi dengan nama folder tempat kemana file diupload
		
		$request->file ('gambar') ->move("style/images/",$file_name);
        

        $pageabout->gambar = $file_name;
        $pageabout->save();
        
        //matakuliah::update($request->all());
        return redirect('/pageabout');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pageabout  $pageabout
     * @return \Illuminate\Http\Response
     */
    public function destroy(pageabout $pageabout)
    {
        //
    }
}
