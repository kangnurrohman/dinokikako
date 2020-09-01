<form method="post" action="{{route('gejala.update', $gejala->id)}}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class=" form-group">
        <label>Kode Gejala</label>
        <input name="kode" type="text" class="form-control" value="{{ $gejala->kode }}" readonly>
    </div>
    <div class="form-group">
        <label>Gejala</label>
        <input name="nama" type="text" class="form-control" value="{{ $gejala->nama }}">
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-warning"><i class="fa fa-pencil-square-o"
                aria-hidden="true"></i>Edit</button>
    </div>
</form>
