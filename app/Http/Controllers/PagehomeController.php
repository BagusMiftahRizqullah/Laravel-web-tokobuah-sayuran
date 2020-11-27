<?php

namespace App\Http\Controllers;

use App\Models\pagehome;
use App\Models\logo;
use App\Models\homeimg;
use Illuminate\Http\Request;

class PagehomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = logo::all();
        $img = homeimg::all();
        return view('admin.pagehome.index', compact('logo','img'));
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
     * @param  \App\Models\pagehome  $pagehome
     * @return \Illuminate\Http\Response
     */
    public function show(pagehome $pagehome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pagehome  $pagehome
     * @return \Illuminate\Http\Response
     */
    public function edit(pagehome $pagehome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pagehome  $pagehome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pagehome $pagehome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pagehome  $pagehome
     * @return \Illuminate\Http\Response
     */
    public function destroy(pagehome $pagehome)
    {
        //
    }
}
