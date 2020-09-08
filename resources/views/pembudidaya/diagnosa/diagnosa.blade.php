@extends('main')
@section('content')
@section('title', 'Diagnosa')
@include('partials.nav')

<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Diagnosa</li>
        </ol>
    </nav>

    <div class="row">

        <div class="col-sm-12 col-lg-8 mb-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('storeDiagnosa')}}" method="post">
                        {{ csrf_field() }}
                        <h5>Gejala</h5>
                        <label>Gejala-gejala yang nampak pada ikan koi anda:</label>
                        @foreach ($gejalas as $gejala)
                        <label class="box">
                            <input type="checkbox" name="gejala[]" value="{{$gejala->id}}">{{$gejala->nama}}
                            <span class="checkmark"></span>
                        </label>
                        @endforeach
                        <button type="submit" class="btn btn-signin mb-4 float-sm-right mt-4">Check Hasil
                            Diagnosa</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-4">
            <aside>
                <div class="widget">
                    <div class="widget-content">
                        <div class="card">
                            <div class="card-body">
                                @php
                                $riwayat = App\Diagnosa::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->paginate(8);
                                @endphp
                                @if ($riwayat->count() <= 0) <h5>Riwayat Diagnosa</h5>
                                    <label>Anda belum pernah mendiagnosa</label>
                                    @else
                                    <h5>Riwayat Diagnosa</h5>
                                    <label>Anda telah mendiagnosa:</label>
                                    @foreach ($riwayat as $item)
                                    @php
                                    $penyakit = App\Penyakit::find($item->penyakit_id);
                                    @endphp
                                    <a href="{{route('hasildiagnosa', $item->id)}}">
                                        <div class="content mt-3">
                                            <h6 class="judul-diagnosa">
                                                Penyakit: {{$penyakit->nama}}
                                            </h6>
                                            <small class="judul-diagnosa">
                                                Pada tanggal: {{ date('j M Y h:i:s',strtotime($item->created_at))}}
                                            </small>
                                            <hr>
                                        </div>
                                    </a>
                                    @endforeach
                                    {{$riwayat->links('pagination.bootstrap-4')}}
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>
@endsection
