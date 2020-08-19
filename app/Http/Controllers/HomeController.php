<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('pembudidaya.home.home');
    }
    public function tentang()
    {
        return view('pembudidaya.tentang.tentang');
    }
}
