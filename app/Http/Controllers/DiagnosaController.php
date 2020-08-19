<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function index()
    {
        return view('pembudidaya.diagnosa.diagnosa');
    }
}
