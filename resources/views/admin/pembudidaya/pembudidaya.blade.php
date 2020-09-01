@extends('main')
@section('content')
@section('title', 'Data Pembudidaya')
@include('partials.nav')

<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Pembudidaya</li>
        </ol>
    </nav>

    <div class="row">

        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>Data Pembudidaya</h5>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Pembudidaya</th>
                                <th>Email</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembudidaya as $no => $pembudidaya)
                            <tr>
                                <td>{{++$no}}</td>
                                <td>{{$pembudidaya->nama}}</td>
                                <td>{{$pembudidaya->email}}</td>
                                <td>{{$pembudidaya->alamat}}</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
