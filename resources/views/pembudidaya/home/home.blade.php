@extends('main')
@section('content')
@section('title', 'Dashboard')
@include('partials.nav')

<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ">
                <h2 class="display-5">Selamat Datang di Sistem Diagnosa Penyakit Ikan Koi (Dinokikako)</h2>
                <p class="lead mt-3">
                    Apakah ikan anda mengalami sakit ? <br> Silakan klik tombol dibawah ini untuk memulai konsultasi
                </p>
                <a class="btn btn-lg mt-3" href="{{route('diagnosa')}}" role="button">Diagnosa</a>
            </div>
            <div class="col-md-6 col-lg-6 d-none d-lg-block text-right">
                <img src="{!! asset('assets/img/banner.png') !!}" width="462" height="376" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
