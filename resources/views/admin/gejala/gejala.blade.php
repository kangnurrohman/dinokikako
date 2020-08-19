@extends('main')
@section('content')
@section('title', 'Gejala')
@include('partials.nav')

<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Gejala</li>
        </ol>
    </nav>

    <div class="row">

        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>Data Gejala</h5>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode</th>
                                <th>Gejala</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gejala as $no => $gejala)
                            <tr>
                                <td>{{++$no}}</td>
                                <td>{{$gejala->kode}}</td>
                                <td>{{$gejala->nama}}</td>
                                <td>
                                    <form method="post" action="{{ route('gejala.destroy', $gejala->id) }}">
                                        {{ method_field('delete') }}
                                        {{ csrf_field() }}
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                            data-target="#createGejala">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                            onclick="updateGejala('{{route('gejala.edit', $gejala->id)}}')"
                                            data-target="#updateGejala">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm(`Yakin mau menghapus ?`)"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>

</div>
@section('modal')
@if (auth()->user()->role == 'admin')
{{-- masukkan gejala --}}
<div class="modal fade" id="createGejala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title title-penyakit">Tambah Gejala Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="desc-penyakit">
                    Deskripsikan gejala dengan kalimat yang singkat
                </p>
                <form action="{{route('gejala.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Kode Gejala</label>
                        <input name="kode" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gejala</label>
                        <input name="nama" type="text" class="form-control">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success mb-4"><i class="fa fa-plus"
                                aria-hidden="true"></i>Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Edit gejala --}}
<div class="modal fade" id="updateGejala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title title-penyakit">Edit Gejala</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>
@endif

@endsection
@endsection
