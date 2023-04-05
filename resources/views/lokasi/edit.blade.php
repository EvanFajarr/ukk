@extends('template.admin')
@section('konten')
<form action='{{ url('lokasi/'.$lokasi->id) }}'  method='post'>
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{url('lokasi')}}' class="btn btn-outline-succes"><i class="bi bi-skip-backward-btn-fill"></i></a>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
            {{$lokasi->id}}
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama Lokasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='name' value="{{$lokasi->name}}" id="kabupaten">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tahun" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit"><i class="bi bi-save"></i></button></button></div>
        </div>

    </div>
</form>
@endsection
