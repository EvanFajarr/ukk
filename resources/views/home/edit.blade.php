@extends('template.user')
@section('konten')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<!-- START FORM -->
<form action='{{ url('home/'.$pengaduan->id) }}'  method='post' enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{url('home')}}' class="btn btn-outline-success"><i class="bi bi-skip-backward-btn-fill"></i></a>
        <div class="mb-3 row">
            <label for="lokasi" class="col-sm-2 col-form-label">lokasi</label>
            <div class="col-sm-10">
                <select type="text" name="lokasi"  name="lokasi"  value="{{$pengaduan->lokasi}}" id="lokasi"  class="form-control">
                    <option >  {{ $pengaduan->lokasi }}</option>
                  </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="detail_lokasi" class="col-sm-2 col-form-label">detail lokasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='detail_lokasi' value="{{$pengaduan->detail_lokasi}}" id="detail_lokasi">
            </div>
        </div>


        <div class="mb-3 row">
            <label for="isi" class="col-sm-2 col-form-label">Isi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='isi' value="{{$pengaduan->isi}}" id="isi">
            </div>
        </div>


        @if ($pengaduan->foto)
        <img style='max-height:100px;max-width:100px' src='{{ url('foto').'/'.$pengaduan->foto }}'/>
        @endif
        <div class="mb-3 row">
            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name='foto'id="foto">
                <P class="text-muted">*Mohon pastikan gambar tidak kosong</P>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="tahun" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit"><i class="bi bi-save"></i></button></div>
        </div>

    </div>
</form>
    <!-- AKHIR FORM -->
    @endsection
