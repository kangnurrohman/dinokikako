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
                                <th>Tgl Diagnosa</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $riwayat = App\Diagnosa::orderBy('created_at', 'desc')->get();
                            @endphp
                            @foreach ($riwayat as $no => $item)
                            @php
                            $penyakit = App\Penyakit::find($item->penyakit_id);
                            $pembudidaya = App\User::find($item->user_id);
                            @endphp
                            <tr>
                                <td>{{++$no}}</td>
                                <td>{{$pembudidaya->nama}}</td>
                                <td>{{$penyakit->nama}}</td>
                                <td>{{ date('j M Y',strtotime($item->created_at))}}</td>
                                <td>
                                        <a href="{{route('hasildiagnosa', $item->id)}}">
                                            <button type="button" class="btn btn-signin btn-sm">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm delete" riwayatid="{{$item->penyakit_id}}"><i class="fa fa-trash"></i></a>
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
@endsection
@section('buttonadd')
    <script>
        $('.delete').click(function(){
            var riwayat_id = $(this).attr('riwayatid');
            swal({
                title: "Apakah anda yakin ?",
                text: "Mau menghapus riwayat ini !!!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/riwayat/"+riwayat_id+"/delete";
                } 
            });
        }); 
    </script>
@endsection