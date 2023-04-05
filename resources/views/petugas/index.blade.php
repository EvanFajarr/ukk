

@extends('template.admin')
@section('konten')
<a href='{{url('/petugas/create')}}' class="btn btn-outline-success">+</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-md-3">rolle</th>
            <th class="col-md-4">name</th>
            <th class="col-md-2">telephone</th>
            <th class="col-md-2">email</th>
            @can('admin')
            <th class="col-md-2">aksi</th>
            @endcan
        </tr>
    </thead>
    <tbody>

        @foreach ($User as $item)
        @if ($item->rolle == "petugas")
        <tr>
            <td>{{$item->rolle}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->tlp}}</td>
            <td>{{$item->email}}</td>
            @can('admin')
            <td>
                <form onsubmit="return confirm('Yakin mau menghapus data?')" class='d-inline' action="{{ url('petugas/'.$item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                </form>
            </td>
            @endcan
        </tr>
@endif
        @endforeach
    </tbody>
</table>


@endsection

