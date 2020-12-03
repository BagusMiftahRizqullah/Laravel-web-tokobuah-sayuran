<?php

namespace App\Http\Controllers;

use App\Models\adminconfig;
use Illuminate\Http\Request;
use Session;

class AdminconfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminconfig = adminconfig::all();
         return view('admin.adminconfig.index', compact('adminconfig'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        return view('admin.adminconfig.tambah');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email|unique:tb_admin',
            'password' => 'required|min:6|confirmed', //confirmasi
           
        ]);

        $adminconfig = adminconfig::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        
        // // USER LOGIN
        // auth()->LoginUsingId($admin->id);

        return redirect ()->route('adminconfig');
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
     * @param  \App\Models\adminconfig  $adminconfig
     * @return \Illuminate\Http\Response
     */
    public function show(adminconfig $adminconfig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adminconfig  $adminconfig
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminconfig=adminconfig::find($id);
        
        return view('admin.adminconfig.edit', compact('adminconfig'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adminconfig  $adminconfig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
       
        $adminconfig =adminconfig::find($id);
       
        $adminconfig->name = $request['name'];
        $adminconfig->email = $request['email'];
        $adminconfig->password = bcrypt($request['password']);
        $adminconfig->save();
        return redirect('/adminconfig');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adminconfig  $adminconfig
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
      
        $adminconfig = \DB::table('tb_admin')->where('id',$id)->delete();
        // alihkan halaman ke halaman awal
        return redirect()->back();
    }
}
