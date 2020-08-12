@extends('main')
@section('content')
@section('title', 'Penyakit')
@include('partials.nav')

<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Penyakit</li>
        </ol>
    </nav>

    <div class="row">

        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>Data Penyakit</h5>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Penyakit</th>
                                <th>Gejala yang Nampak</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Kutu Ikan</td>
                                <td>
                                    <dl>
                                        <dd>- Megap-megap dipermukaan air</dd>
                                        <dd>- Menyendiri</dd>
                                        <dd>- Radang dan iritasi pada kulit</dd>
                                    </dl>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-signin btn-sm" data-toggle="modal"
                                        data-target="#readPenyakit">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    @if (auth()->user()->role == 'admin')
                                    <button type="submit" class="btn btn-success btn-sm" data-toggle="modal"
                                        data-target="#tambahPenyakit">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                    <button type="submit" class="btn btn-warning btn-sm" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </button>
                                    <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                    @endif
                                </td>
                            </tr>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>

</div>
@section('modal')
@include('partials.modal')
@endsection
@endsection
