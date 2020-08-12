{{-- lihat penyakit --}}
<div class="modal fade" id="readPenyakit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title title-penyakit">Tentang Penyakit: Kutu Ikan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="desc-penyakit">
                    Parasit ini memiliki delapan kaki dan tubuh bulat. Kutu ini juga memiliki pengisap besar yang
                    digunakan
                    untuk
                    menempel pada ikan. Parasit ini menyebabkan iritasi pada ikan dan menyebabkan infeksi bakteri.
                    Iritasi akan
                    membuat koi melakukan flashing (berenang dan membalik cepat) dan menggosok-gosok tubuhnya.
                </p>
            </div>
            <div class="modal-header title-penyakit">
                <h5 class="modal-title">Pengobatan: Kutu Ikan</h5>
            </div>
            <div class="modal-body">
                <p class="desc-penyakit">
                    Kutu ikan dapat diambil menggunakan pinset atau penjepit kecil lainnya. Setelah dibuang, gosok kan
                    Neospirin
                    pada
                    area yang terinfeksi. Gunakan Dimilin untuk merawat kolam.
                </p>
            </div>
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
                    <div class="row">
                        <div class="col-md-6 ml-auto">
                            <div class="form-group">
                                <label>Kode Penyakit</label>
                                <input name="kode" type="text" class="form-control" placeholder="Kode Penyakit">
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
                                <textarea name="definisi" class="form-control" rows="5" required="required"
                                    placeholder="Pengobatan Penyakit..."></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 ml-auto">
                            <div class="form-group">
                                <label>Gejala-gejala yang terjadi:</label>
                                <div class="col-md-12">
                                    <label class="box">One
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                        <span>
                                            <select>
                                                <option>Select an option</option>
                                                <option>Hello</option>
                                                <option>World</option>
                                                <option>Sköll</option>
                                                <option>Julien</option>
                                            </select>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

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
