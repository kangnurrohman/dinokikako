<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('admin.signin.signin');
    }

    public function postsignin(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password')))
        {
            return redirect('riwayat');
        }
            return redirect('adminsignin');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('adminsignin');
    }
}
