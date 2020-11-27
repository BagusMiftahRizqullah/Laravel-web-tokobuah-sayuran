<?php

namespace App\Http\Controllers;
use App\Models\sliderhome;
use App\Models\logo;
use App\Models\homeimg;
use App\Models\homepromo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homepromo = homepromo::all();
        $logo   = logo::all();
        $img   = homeimg::all();
        $sliderhome = sliderhome::all();
        return view('home.index', compact('homepromo','logo','sliderhome','img'));
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
     * @param  \App\Models\awal  $awal
     * @return \Illuminate\Http\Response
     */
    public function show(awal $awal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\awal  $awal
     * @return \Illuminate\Http\Response
     */
    public function edit(awal $awal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\awal  $awal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, awal $awal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\awal  $awal
     * @return \Illuminate\Http\Response
     */
    public function destroy(awal $awal)
    {
        //
    }
}
