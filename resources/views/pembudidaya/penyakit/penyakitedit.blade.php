<div class="modal-header">
    <h5 class="modal-title title-penyakit">Edit Penyakit: {{$penyakit->nama}}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="container-fluid">
        <form action="{{route('penyakit.update', $penyakit->id)}}" method="post">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="row">
                <div class="col-md-6 ml-auto">
                    <div class="form-group">
                        <label>Kode Penyakit</label>
                        <input name="kode" type="text" class="form-control" placeholder="Kode Penyakit"
                            required="required" value="{{$penyakit->kode}}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama Penyakit :</label>
                        <input type="text" name="nama" class="form-control" required="required"
                            placeholder="Nama dari penyakit..." value="{{$penyakit->nama}}">
                    </div>
                    <div class="form-group">
                        <label>Penyebab :</label>
                        <input type="text" name="penyebab" class="form-control" required="required"
                            placeholder="Penyakit disebabkan oleh..." value="{{$penyakit->penyebab}}">
                    </div>
                    <div class="form-group">
                        <label>Definisi Penyakit :</label>
                        <textarea name="definisi" class="form-control" rows="5"
                            placeholder="Jelaskan mengenai penyakit ini...">{{$penyakit->definisi}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Pengobatan Penyakit :</label>
                        <textarea name="pengobatan" class="form-control" rows="5"
                            placeholder="Pengobatan Penyakit...">{{$penyakit->pengobatan}}</textarea>
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
                                            <input class="check" type="checkbox" name="gejala[]"
                                                value="{{$gejala->id}}">{{$gejala->nama}}
                                            <span class="checkmark"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <select id="blue" name="bobot[]">
                                            <option value="">--pilih--</option>
                                            @foreach ($bobots as $bobot)
                                                <option value="{{$bobot->id}}">{{$bobot->bobot}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                @endforeach
                                <script>
                                @foreach($penyakit -> gejala as $gejala)
							        $(".check[value={{ $gejala->id }}]").attr('checked', true);
                                @endforeach()
                                </script>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-warning btn-sm float-sm-right"><i
                    class="fa fa-pencil-square-o"></i>Edit Penyakit</button>
        </form>
    </div>
</div>
