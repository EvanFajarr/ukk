@extends('template.admin')
@section('konten')
<form action='{{ url('lokasi') }}'  method='post'>

    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{url('lokasi')}}' class="btn btn-outline-success"><i class="bi bi-skip-backward-btn-fill"></i></a>
        @include('pesan.pesan')
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='name' value="{{Session::get('name')}}" id="name">
            </div>
        </div>


        <div class="mb-3 row">
            <label for="tahun" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-outline-primary" name="submit"><i class="bi bi-save"></i></button></div>
        </div>

    </div>

</form>

@endsection
