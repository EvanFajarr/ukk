<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">


<title>Tambah Pengaduan</title>
<form action='{{ url('home') }}'  method='post'  enctype="multipart/form-data">
    @include('pesan.pesan')
    @csrf
    <div style="padding:50 50 50 50;" class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{url('home')}}' class="btn btn-outline-success"><i class="bi bi-skip-backward-btn-fill"></i></a>

        <div class="mb-3 row">
          <label for="user_id" class="col-sm-2 col-form-label">user id</label>
          <div class="col-sm-10">
          <select type="text" name="user_id"  name="user_id"  value="{{Session::get('user_id')}}" id="user_id"  class="form-control">
            <option >   {{  auth()->guard('masyarakat')->user()->id }}</option>
          </select>
        </div>
      </div>

        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2 col-col-sm-2 col-form-label">tanggal</label>
            <div class="col-sm-10">
            <input type="date" name="tanggal"  value="{{Session::get('tanggal')}}"id="tanggal" class="form-control">
            </div>
        </div>


          <div class="mb-3 row">
            <label for="nik" class="col-sm-2 col-form-label">nik</label>
            <div class="col-sm-10">
            <select type="text" name="nik"  name="nik"  value="{{Session::get('nik')}}" id="nik"  class="form-control">
              <option > {{  auth()->guard('masyarakat')->user()->nik}}</option>
            </select>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="isi" class="col-sm-2 col-form-label">Isi</label>
          <div class="col-sm-10">
          <textarea class="form-control summernote" name="isi"  value="{{Session::get('isi')}}" id="isi"></textarea>
          </div>
      </div>

      <div class="mb-3 row">
        <label for="lokasi" class="col-sm-2 col-form-label">lokasi</label>
        <div class="col-sm-10">
        <select type="text" name="lokasi"  name="lokasi"  value="{{Session::get('lokasi')}}" id="lokasi"  class="form-control">
        @foreach ($lokasi as $lokasis)
        <option > {{ $lokasis->name }}</option>
        @endforeach
      </select>
      <p class="text-muted">*silahkan pilih lokasi yang sesuai</p>
        </div>
    </div>

    <div class="mb-3 row">
      <label for="detail_lokasi" class="col-sm-2 col-form-label">detail lokasi</label>
      <div class="col-sm-10">
      <textarea class="form-control  " name="detail_lokasi"  value="{{Session::get('detail_lokasi')}}" id="detail_lokasi">
      </textarea>
    </div>
  </div>




      <div class="mb-3 row">
        <label for="foto" class="col-sm-2 col-col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name='foto'id="foto">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="tahun" class="col-sm-2 col-col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-outline-primary" name="submit"><i class="bi bi-save"></i></button></div>
    </div>
</div>

</form>

