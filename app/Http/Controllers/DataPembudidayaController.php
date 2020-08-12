<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembudidaya;

class DataPembudidayaController extends Controller
{
    public function index(){
        $pembudidaya =  Pembudidaya::all();
        return view('admin.pembudidaya', compact('pembudidaya'));
    }
}
