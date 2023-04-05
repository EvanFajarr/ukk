

@extends('template.admin')
@section('konten')
<a href='{{url('/lokasi/create')}}' class="btn btn-outline-success">+</a>
@include('pesan.pesan')
<table class="table table-striped">

    <thead>
        <tr>
            <th class="col-md-4">name</th>
            <th class="col-md-2">aksi</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($lokasi as $item)

        <tr>
            <td>{{$item->name}}</td>

                  <td>
                    <a href= '{{url('lokasi/'.$item->id.'/edit')}}'  class="btn btn-outline-warning btn-sm"><i class="bi bi-pen"></i></a>
                    <form onsubmit="return confirm('Yakin mau menghapus data?')" class='d-inline' action="{{ url('lokasi/'.$item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                    </form>
                </td>
        </tr>

        @endforeach
    </tbody>
</table>


@endsection

