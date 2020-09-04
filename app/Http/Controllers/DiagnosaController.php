<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gejala;
use App\Pembudidaya;
use App\Penyakit;
use App\Aturan;
use App\Bobot;
use App\Diagnosa;
use App\DiagnosaDetail;

class DiagnosaController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return view('pembudidaya.diagnosa.diagnosa', compact('gejalas'));
    }

    public function diagnosa(Request $request)
    {
        $arrPenyakit =[];
        $arrGejala =[];
        $arrBobotID =[];
        $arrValueBobot = [];
        $arrEP = [];
        $hasilDiagnosa = [];
        $hasilDiagnosaPenyakit;
        $hasilDiagnosaEP = 0;
        $j = 0;

        foreach (Penyakit::all() as $penyakit) {
            $vAturan = Aturan::where('penyakit_id',$penyakit['id'])->get();
            $allFoundGejala = [];
            $allBobot = [];
            $i = 0;
            foreach ($request->gejala as $gejala_id_found) {
                foreach ($vAturan as $aturan){
                    if ($gejala_id_found == $aturan['gejala_id']) {
                        $allFoundGejala[$i]=$aturan['gejala_id'];
                        $allBobot[$i]=$aturan['bobot_id'];
                        $i++;
                    }
                }
            }
                if (count($allFoundGejala) > 0) {
                    $arrPenyakit[$j] = $penyakit['id'];
                    $arrGejala[$j] = $allFoundGejala;
                    $arrBobotID[$j] = $allBobot;
                    $j++;
                }
        }

        $k=0;
        foreach ($arrBobotID as $values) {
            $tempss = [];
            $s=0;
            $hasil=0;
            foreach ($values as $value) {
                $bobot = Bobot::find($value);
                $tempss[$s] = $bobot->bobot;
                $hasilPangkatNBE = pow(1 * $bobot->bobot, 2);
                $hasil += $hasilPangkatNBE;
                $s++;
            }
            if (count($tempss)>0) {
                $arrValueBobot[$k] = $tempss;
                $arrEP[$k] = sqrt($hasil);
                $k++;
            }
        }

        $indexPenyakit=0;
        foreach ($arrEP as $key => $value) {
            if ($value>$hasilDiagnosaEP) {
                $hasilDiagnosaEP = $value;
                $indexPenyakit = $key;
            }
        }

        foreach ($arrPenyakit as $key => $value) {
            if ($indexPenyakit==$key) {
                $hasilDiagnosaPenyakit = $value;
            }
        }

        // dd($hasilDiagnosaEP);
        // dd($hasilDiagnosaPenyakit);
        // dd(number_format($hasilDiagnosaEP*100,0));
        // dd($arrEP);
        // dd($arrBobotID);
        // dd($arrValueBobot);
        // dd($arrGejala);
        $diagnosa = new Diagnosa;
        $diagnosa->user_id = auth()->user()->id;
        $diagnosa->penyakit_id = $hasilDiagnosaPenyakit;
        $diagnosa->save();
        
        foreach ($request->gejala as $key => $gejala) {
            $diagnosaDetail = new DiagnosaDetail;
            $diagnosaDetail->diagnosa_id = $diagnosa->id;
            $diagnosaDetail->gejala_id = $gejala;
            $diagnosaDetail->save();
        }
        $persentase = number_format($hasilDiagnosaEP*100,0);
        return view('pembudidaya.diagnosa.hasildiagnosa', compact('hasilDiagnosaEP','arrValueBobot','arrEP','arrPenyakit','arrBobotID','diagnosa', 'hasilDiagnosaPenyakit', 'persentase'));
    }

    public function hasilDiagnosa($id)
    {
        $detailDiagnosa = DiagnosaDetail::where('diagnosa_id', $id)->get();

        $arrPenyakit =[];
        $arrGejala =[];
        $arrBobotID =[];
        $arrValueBobot = [];
        $arrEP = [];
        $hasilDiagnosa = [];
        $hasilDiagnosaPenyakit;
        $hasilDiagnosaEP = 0;
        $j = 0;

        foreach (Penyakit::all() as $penyakit) {
            $vAturan = Aturan::where('penyakit_id',$penyakit['id'])->get();
            $allFoundGejala = [];
            $allBobot = [];
            $i = 0;
            foreach ($detailDiagnosa as $gejala_id_found) {
                foreach ($vAturan as $aturan){
                    if ($gejala_id_found->gejala_id == $aturan['gejala_id']) {
                        $allFoundGejala[$i]=$aturan['gejala_id'];
                        $allBobot[$i]=$aturan['bobot_id'];
                        $i++;
                    }
                }
            }
            if (count($allFoundGejala) > 0) {
                $arrPenyakit[$j] = $penyakit['id'];
                $arrGejala[$j] = $allFoundGejala;
                $arrBobotID[$j] = $allBobot;
                $j++;
            }
        }

        $k=0;
        foreach ($arrBobotID as $values) {
            $tempss = [];
            $s=0;
            $hasil=0;
            foreach ($values as $value) {
                $bobot = Bobot::find($value);
                $tempss[$s] = $bobot->bobot;
                $hasilPangkatNBE = pow($bobot->bobot,2);
                $hasil += $hasilPangkatNBE;
                $s++;
            }

            if (count($tempss)>0) {
                $arrValueBobot[$k] = $tempss;
                $arrEP[$k] = sqrt($hasil);
                $k++;
            }
        }

        $indexPenyakit=0;
        foreach ($arrEP as $key => $value) {
            if ($value>$hasilDiagnosaEP) {
                $hasilDiagnosaEP = $value;
                $indexPenyakit = $key;
            }
        }

        foreach ($arrPenyakit as $key => $value) {
            if ($indexPenyakit==$key) {
                $hasilDiagnosaPenyakit = $value;
            }
        }
        // dd($arrBobotID);
        $persentase = number_format($hasilDiagnosaEP*100,0);
        $diagnosa = Diagnosa::find($id);
        return view('pembudidaya.diagnosa.hasildiagnosa', compact('hasilDiagnosaEP','arrValueBobot','arrEP','arrPenyakit','arrBobotID','diagnosa', 'hasilDiagnosaPenyakit', 'persentase'));
    }
}
