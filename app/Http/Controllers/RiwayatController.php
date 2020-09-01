<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagnosa;

class RiwayatController extends Controller
{
    public function index()
    {
        return view('admin.riwayat.riwayat');
    }

    public function destroy($id)
    {
        $diagnosa = Diagnosa::where('penyakit_id', $id)->first();
        $diagnosa->delete();
        return back()->with('sukses','Data berhasil dihapus');;
    }
}
