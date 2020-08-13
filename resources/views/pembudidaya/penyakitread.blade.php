<div class="modal-header">
    <h5 class="modal-title title-penyakit">Tentang Penyakit: {{$penyakit->nama}}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <p class="desc-penyakit">
        @if ($penyakit->definisi == null)
        Maaf, belum ada penjelasan lengkap mengenai apa sebenarnya penyakit {{$penyakit->nama}}.
        @endif
        {{$penyakit->definisi}}
    </p>
</div>
<div class="modal-header title-penyakit">
    <h5 class="modal-title">Pengobatan: {{$penyakit->nama}}</h5>
</div>
<div class="modal-body">
    <p class="desc-penyakit">
        @if ($penyakit->definisi == null)
        Maaf, untuk pengobatan penyakit {{$penyakit->nama}} masih dalam tahap penelitian.
        @endif
        {{$penyakit->pengobatan}}
    </p>
</div>
