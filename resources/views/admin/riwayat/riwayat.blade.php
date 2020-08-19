@extends('main')
@section('content')
@section('title', 'Riwayat')
@include('partials.nav')

<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Riwayat hasil diagnosa</li>
        </ol>
    </nav>

    <div class="row">

        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>Riwayat Hasil Diagnosa</h5>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Pendiagnosa</th>
                                <th>Penyakit Ikan</th>
                                <th>Persentase</th>
                                <th>Tgl Diagnosa</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ainur Rohman</td>
                                <td>Kutu Ikan</td>
                                <td>40%</td>
                                <td>20 Juli 2020</td>
                                <td>
                                    <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
