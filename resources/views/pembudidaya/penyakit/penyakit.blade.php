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
                                <th>Penyebab</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penyakit as $no => $penyakit)
                            <tr>
                                <td>{{++$no}}</td>
                                <td>{{$penyakit->nama}}</td>
                                <td>
                                    <dl>
                                        @php
                                        $i = 0;
                                        @endphp
                                        @forelse ($penyakit->gejala as $key => $gejala )
                                        <dd>
                                            - {{$gejala->nama}}
                                            @if ($key == $i)
                                            ({{$penyakit->bobot[$i]->bobot}})
                                            @php
                                            $i++;
                                            @endphp
                                            @endif
                                        </dd>
                                        @empty
                                        Maaf, belum ada data gejala untuk penyakit ini.
                                        @endforelse
                                    </dl>
                                </td>
                                <td>{{$penyakit->penyebab}}</td>
                                <td>
                                    <form method="post" action="{{ route('penyakit.destroy', $penyakit->id) }}">
                                        {{ method_field('delete') }}
                                        {{ csrf_field() }}
                                        <button type="button" class="btn btn-signin btn-sm"
                                            onclick="readPenyakit('{{ route('penyakit.show', $penyakit->id) }}')"
                                            data-toggle="modal" data-target="#readPenyakit">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                        @if (auth()->user()->role == 'admin')
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                            data-target="#tambahPenyakit">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-warning btn-sm"
                                            onclick="updatePenyakit('{{ route('penyakit.edit', $penyakit->id) }}')"
                                            data-toggle="modal" data-target="#updatePenyakit">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm(`Yakin mau menghapus ?`)"><i
                                                class="fa fa-trash"></i></button>
                                        @endif
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
{{-- lihat penyakit --}}
<div class="modal fade" id="readPenyakit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

        </div>
    </div>
</div>

{{-- tambah penyakit --}}
@if (auth()->user()->role == 'admin')
<div class="modal fade" id="tambahPenyakit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title title-penyakit">Tambah Penyakit Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="{{route('penyakit.store')}}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6 ml-auto">
                                <div class="form-group">
                                    <label>Kode Penyakit</label>
                                    <input name="kode" type="text" class="form-control" placeholder="Kode Penyakit"
                                        required="required">
                                </div>
                                <div class="form-group">
                                    <label>Nama Penyakit :</label>
                                    <input type="text" name="nama" class="form-control" required="required"
                                        placeholder="Nama dari penyakit...">
                                </div>
                                <div class="form-group">
                                    <label>Penyebab :</label>
                                    <input type="text" name="penyebab" class="form-control" required="required"
                                        placeholder="Penyakit disebabkan oleh...">
                                </div>
                                <div class="form-group">
                                    <label>Definisi Penyakit :</label>
                                    <textarea name="definisi" class="form-control" rows="5" required="required"
                                        placeholder="Jelaskan mengenai penyakit ini..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Pengobatan Penyakit :</label>
                                    <textarea name="pengobatan" class="form-control" rows="5" required="required"
                                        placeholder="Pengobatan Penyakit..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 ml-auto">
                                <div class="form-group">
                                    <label>Gejala-gejala yang terjadi:</label>
                                    <div class="col-md-12">
                                        <table>
                                            @foreach ($gejalas as $gejala)
                                            <tr>
                                                <td>
                                                    <label class="box">
                                                        <input type="checkbox" name="gejala[]"
                                                            value="{{$gejala->id}}">{{$gejala->nama}}
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <select id="blue" name="bobot[]">
                                                        <option selected value="">--pilih--</option>
                                                        @foreach ($bobots as $bobot)
                                                        <option value="{{$bobot->id}}">{{$bobot->bobot}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm float-sm-right"><i class="fa fa-plus"></i>
                            Tambahkan
                            Penyakit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

{{-- update penyakit --}}
@if (auth()->user()->role == 'admin')
<div class="modal fade" id="updatePenyakit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

        </div>
    </div>
</div>
@endif
@endsection
@endsection
