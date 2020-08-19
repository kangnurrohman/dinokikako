<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gejala;
use App\Bobot;
use App\Penyakit;
use DB;

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
        $gejala = $request->input('gejala');
        $penyakit_id = DB::table('penyakit')->insertGetId([
            'kode' => $request->input('kode'),
            'nama' => $request->input('nama'),
            'penyebab' => $request->input('penyebab'),
            'definisi' => $request->input('definisi'),
            'pengobatan' => $request->input('pengobatan'),
        ]);
        for ($i=0; $i < count($gejala); $i++) {


            $nilai_asli_gejala = $gejala[$i];
            $index_gejala = $gejala[$i] -= 1;
            
            $bobot = $request->input('bobot')[$index_gejala];
            
            DB::table('aturan')->insert([
                    'gejala_id' => $nilai_asli_gejala,
                    'penyakit_id' => $penyakit_id,
                    'bobot_id' => $bobot,
            ]);
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
        $id_p = DB::table('aturan')->select('*')->where('penyakit_id',$id)->get();
        foreach ($id_p as $key => $value) {
            $ids=$value->penyakit_id;
            DB::table('aturan')->where('penyakit_id','=', $ids)->delete();
        }
        DB::table('penyakit')->where('id','=', $id)->delete();
        return back();
    }
}
