<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Pembudidaya;
use App\User;

class PembudidayaController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function signin()
    {
        return view('pembudidaya.signin.signin');
    }

    public function signup()
    {
        return view('pembudidaya.signin.signup');
    }

    public function postsignup(Request $request)
    {
        $user = new User;
        $user->role = 'pembudidaya';
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        $pembudidaya = Pembudidaya::create($request->all());

        return redirect('pembudidayasignin');
    }

    public function pembudidayapostsignin(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password')))
        {
            return redirect('diagnosa');
        }
        return redirect('pembudidayasignin');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('pembudidayasignin');
    }

}
