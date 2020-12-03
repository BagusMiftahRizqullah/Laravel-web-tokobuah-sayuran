<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Session;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('admin.login.index');
    }

    public function postLogin(Request $request)
    {
        if (!\Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            Session::flash('message', "Email atau Password salah");
            return redirect ()->back();

        }

        return redirect ()->route('admin');

    }


    public function getRegister()
    {
        return view('admin.login.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email|unique:tb_admin',
            'password' => 'required|min:6|confirmed', //confirmasi
           
        ]);

        $admin = admin::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        
        // USER LOGIN
        auth()->LoginUsingId($admin->id);

        return redirect ()->route('admin');
    }


    public function logout()
    {
        \Auth:: logout();

        return redirect ()->route('loginadmin');
    }


}
