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
                    <h5>Gejala</h5>
                    <label>Gejala-gejala yang nampak pada ikan koi anda:</label>
                    <label class="box">One
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <label class="box">One
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <label class="box">One
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <label class="box">One
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <label class="box">One
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <label class="box">One
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <label class="box">One
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <label class="box">One
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <label class="box">One
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <label class="box">One
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <label class="box">One
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <button type="submit" class="btn btn-signin mb-4 float-sm-right mt-4">Check Hasil Diagnosa</button>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-4">
            <aside>
                <div class="widget">
                    <div class="widget-content">
                        <div class="card">
                            <div class="card-body">
                                <h5>Riwayat Diagnosa</h5>
                                <label>Anda telah mendiagnosa:</label>
                                <div class="content mt-3">
                                    <h6 class="judul-diagnosa">
                                        Penyakit: Kutu air
                                    </h6>
                                    <small class="judul-diagnosa">
                                        Pada tanggal: 23 Juli 2020
                                    </small>
                                    <hr>
                                </div>
                                <div class="content mt-3">
                                    <h6 class="judul-diagnosa">
                                        Penyakit: Kutu air
                                    </h6>
                                    <small class="judul-diagnosa">
                                        Pada tanggal: 23 Juli 2020
                                    </small>
                                    <hr>
                                </div>
                                <div class="content mt-3">
                                    <h6 class="judul-diagnosa">
                                        Penyakit: Kutu air
                                    </h6>
                                    <small class="judul-diagnosa">
                                        Pada tanggal: 23 Juli 2020
                                    </small>
                                    <hr>
                                </div>
                                <div class="content mt-3">
                                    <h6 class="judul-diagnosa">
                                        Penyakit: Kutu air
                                    </h6>
                                    <small class="judul-diagnosa">
                                        Pada tanggal: 23 Juli 2020
                                    </small>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>

</div>
@endsection
