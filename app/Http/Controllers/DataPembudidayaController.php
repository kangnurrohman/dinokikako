<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembudidaya;
use App\User;

class DataPembudidayaController extends Controller
{
    public function index()
    {
        $pembudidaya =  Pembudidaya::all();
        return view('admin.pembudidaya.pembudidaya', compact('pembudidaya'));
    }
}
