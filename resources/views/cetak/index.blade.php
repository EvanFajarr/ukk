<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
            {{$pengaduan->id}}
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nik" class="col-sm-2 col-form-label">nik</label>
            <div class="col-sm-10">
            {{$pengaduan->nik}}
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2 col-form-label">tanggal</label>
            <div class="col-sm-10">
            {{$pengaduan->tanggal}}
            </div>
        </div>

        <div class="mb-3 row">
            <label for="lokasi" class="col-sm-2 col-form-label">lokasi</label>
            <div class="col-sm-10">
            {{$pengaduan->lokasi}}
            </div>
        </div>

        <div class="mb-3 row">
            <label for="detail_lokasi" class="col-sm-2 col-form-label">isi</label>
            <div class="col-sm-10">
          {{ $pengaduan->isi }}
            </div>
        </div>

        <div class="mb-3 row">
            <label for="detail_lokasi" class="col-sm-2 col-form-label">Foto </label>
            <div class="col-sm-10">
                <img style= 'height:90%;width:50%;' src='{{ url('foto').'/'.$pengaduan->foto }}'/>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="status" class="col-sm-2 col-form-label">status</label>
            <div class="col-sm-10">
          {{ $pengaduan->status }}
            </div>
        </div>



    </div>
    <script>
        window.print()
    </script>
</form>

