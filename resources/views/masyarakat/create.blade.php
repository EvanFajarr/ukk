@extends('template.admin')
@section('konten')

<form action='{{ url('masyarakat') }}'  method='post'>

    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{url('masyarakat')}}' class="btn btn-outline-success"><i class="bi bi-skip-backward-btn-fill"></i></a>
        @include('pesan.pesan')
        <div class="mb-3 row">
            <label for="nik" class="col-sm-2 col-form-label">Nik</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nik' value="{{Session::get('nik')}}" id="nik">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='name' value="{{Session::get('name')}}" id="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='email' value="{{Session::get('email')}}" id="email">
            </div>
        </div>

        <div class="mb-3 row">
         <label for="password" class="col-sm-2 col-form-label">Password</label>
         <div class="col-sm-10">
                <input type="password"  class="form-control"name="password"id="password">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tlp" class="col-sm-2 col-form-label">Telephone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='tlp' value="{{Session::get('tlp')}}" id="tlp">
            </div>
        </div>


        <div class="mb-3 row">
            <label for="tahun" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit"><i class="bi bi-save"></i></button></div>
        </div>

    </div>

</form>

@endsection
