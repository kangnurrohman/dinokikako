<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gejala;
use App\Bobot;
use App\Penyakit;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyakit = Penyakit::all();
        $bobots = Bobot::all();
        $gejalas = Gejala::all();
        return view('pembudidaya.penyakit', compact('gejalas', 'bobots', 'penyakit'));
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
        $penyakit = new Penyakit;
        $penyakit->kode = $request->kode;
        $penyakit->nama = $request->nama;
        $penyakit->penyebab = $request->penyebab;
        $penyakit->definisi = $request->definisi;
        $penyakit->save();
        $penyakit->pengobatan = $request->pengobatan;
        foreach ($request->gejala as $gejala_id) {
            $penyakit->attachGejala($gejala_id);
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Penyakit $penyakit)
    {
        return view('pembudidaya.penyakitread', compact('penyakit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
