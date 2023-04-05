@extends('template.admin')
@section('konten')
<form action='{{ url('admin/'.$pengaduan->id) }}'  method='post'>
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{url('admin')}}' class="btn btn-outline-success btn-sm">Kembali</a>
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
                <img style= 'max-height:100%;max-width:100%;' src='{{ url('foto').'/'.$pengaduan->foto }}'/>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <select type="text" class="form-control" name='status' value="{{$pengaduan->status}}" id="status">
                    @if ($pengaduan->status == "terkirim")
                    <option selected>terkirim</option>
                    @else
                    <option >terkirim</option>
                    @endif

                    @if ($pengaduan->status == "proses")
                    <option selected>proses</option>
                    @else
                    <option >proses</option>
                    @endif

                    @if ($pengaduan->status == "selesai")
                    <option selected>selesai</option>
                    @else
                    <option >selesai</option>
                    @endif

                    @if ($pengaduan->status == "ditolak")
                    <option selected>ditolak</option>
                    @else
                    <option >ditolak</option>
                    @endif
                </select>

            </div>

        <div class="mb-3 row">
            <label for="tahun" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>

    </div>
</form>
@endsection
