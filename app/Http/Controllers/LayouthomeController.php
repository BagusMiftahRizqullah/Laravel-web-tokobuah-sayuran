<?php

namespace App\Http\Controllers;
use App\Models\logo;
use Illuminate\Http\Request;

class LayouthomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = logo::all();
        return view('layout', compact('logo'));
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
     * @param  \App\Models\layouthome  $layouthome
     * @return \Illuminate\Http\Response
     */
    public function show(layouthome $layouthome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\layouthome  $layouthome
     * @return \Illuminate\Http\Response
     */
    public function edit(layouthome $layouthome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\layouthome  $layouthome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, layouthome $layouthome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\layouthome  $layouthome
     * @return \Illuminate\Http\Response
     */
    public function destroy(layouthome $layouthome)
    {
        //
    }
}
