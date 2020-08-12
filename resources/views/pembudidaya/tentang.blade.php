@extends('main')
@section('content')
@section('title', 'Tentang')
@include('partials.nav')
<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tentang Aplikasi</li>
        </ol>
    </nav>

    <div class="row">

        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>Tentang Aplikasi</h5>
                    <label>Identitas pembuat</label>
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>: Moh Ainur Rohman</td>
                        </tr>
                        <tr>
                            <td>Nim</td>
                            <td>:1910652001</td>
                        </tr>
                        <tr>
                            <td>Fakultas</td>
                            <td>:Teknik</td>
                        </tr>
                        <tr>
                            <td>Program Studi</td>
                            <td>:Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td>Universitas</td>
                            <td>:Universitas Muhammadiyah Jember</td>
                        </tr>
                    </table>
                    <hr>
                    <label>Deskripsi</label>
                    <label style="text-align: justify">
                        DINOKIKAKO ialah kepanjangan dari "DIagNOsa penyaKIt iKAn KOi. Sebuah sistem yang digunakan
                        untuk
                        mendiagnosa
                        penyakit ikan menggunakan metode Euclidean Probability. Sebuah metode untuk menghitung
                        probabilitas dengan
                        pendekatan gejala yang muncul.
                    </label>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
