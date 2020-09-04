@extends('main')
@section('content')
@section('title', 'Hasil Diagnosa')
@include('partials.nav')
<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hasil Diagnosa</li>
        </ol>
    </nav>

    <div class="row">

        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>Hasil Diagnosa</h5>
                    <label>Gejala yang nampak pada ikan koi:</label>
                    <div class="mt-1">
                        <ol class="list-gejala pl-4">
                            @php
                            $detailDiagnosa = App\DiagnosaDetail::where('diagnosa_id', $diagnosa->id)->get();
                            @endphp
                            @foreach ($detailDiagnosa as $item)
                            @php
                            $gejala = App\Gejala::find($item->gejala_id);
                            @endphp
                            <li>{{$gejala->nama}}</li>
                            @endforeach
                        </ol>
                        <hr>
                        @php
                        $penyakit = App\Penyakit::find($hasilDiagnosaPenyakit);
                        @endphp
                        <h6>Ikan anda kemungkinan besar terkena penyakit: {{$penyakit->nama}}</h6>
                        <label class="d-block">Persentase: {{$persentase}}%</label>
                        <label class="d-block">Penyebab: {{$penyakit->penyebab}}</label>
                        <label class="d-block">Definisi: {!!$penyakit->definisi!!} </label>
                        <label class="d-block">Solusi: {!!$penyakit->pengobatan!!}</label>
                        <hr>
                        <h6>Perhitungan EP: </h6>
                        @foreach ($arrValueBobot as $key => $item)
                        @php
                        $tempss = [];
                        $s=0;
                        $hasil=0;
                        $total = count($item);
                        $penyakits = App\Penyakit::find($arrPenyakit[$key]);
                        @endphp
                        <label class="d-block">{{$key+1}}. EP ({{$penyakits['nama']}}) = &radic; (
                            @foreach ($item as $index => $items)
                            (1 x {{$items}})<sup>2</sup>
                            @if ($index < $total-1) + @endif @endforeach )={{number_format($arrEP[$key],2)}}</label>
                                @endforeach <hr>
                                <h6>Cari Nilai EP Tertinggi: </h6>
                                <label class="d-block"><b> MAX (</b></label>
                                @foreach ($arrValueBobot as $key => $item)
                                @php
                                $tempss = [];
                                $s=0;
                                $hasil=0;
                                $total = count($item);
                                $penyakit = App\Penyakit::find($arrPenyakit[$key]);
                                @endphp
                                @if ($hasilDiagnosaEP==$arrEP[$key])
                                <label class="d-block"><b>
                                        &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;({{$penyakit['nama']}} =
                                        {{number_format($arrEP[$key],2)}}) </b></label>
                                @else
                                <label class="d-block"> &#160;&#160;&#160;&#160;&#160;&#160;&#160;({{$penyakit['nama']}}
                                    = {{number_format($arrEP[$key],2)}}) </label>
                                @endif
                                @endforeach
                                <label class="d-block"><b> ) </b></label>
                                @php
                                $penyakit = App\Penyakit::find($hasilDiagnosaPenyakit);
                                @endphp
                                <label class="d-block"><b> Hasil EP Tertinggi = {{number_format($hasilDiagnosaEP,2)}}
                                        merupakan penyakit {{ $penyakit->nama }}</b></label>
                                <hr>

                    </div>
                    <a href="{{URL::previous()}}"><button type="button"
                            class="btn btn-signin mb-4 float-sm-right mt-4">Selesai</button></a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
