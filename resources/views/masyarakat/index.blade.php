

@extends('template.admin')
@section('konten')
<a href='{{url('/masyarakat/create')}}' class="btn btn-outline-success">+</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-md-3">nik</th>
            <th class="col-md-4">name</th>
            <th class="col-md-2">telephone</th>
            <th class="col-md-2">email</th>
            <th class="col-md-2">aksi</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($masyarakat as $item)

        <tr>
            <td>{{$item->nik}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->tlp}}</td>
            <td>{{$item->email}}</td>
                  <td>
                    <form onsubmit="return confirm('Yakin mau menghapus data?')" class='d-inline' action="{{ url('masyarakat/'.$item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                    </form>
                </td>
        </tr>

        @endforeach
    </tbody>
</table>


@endsection

