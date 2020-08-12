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
                                            onclick="edit('{{route('gejala.edit', $gejala->id)}}')"
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
@include('partials.modal')
@endsection
@endsection
