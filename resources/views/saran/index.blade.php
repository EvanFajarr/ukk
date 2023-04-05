

@extends('template.admin')
@section('konten')
<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-md-4">name</th>
            <th class="col-md-2">email</th>
            <th class="col-md-2">saran</th>
            @can('admin')
            <th class="col-md-2">aksi</th>
            @endcan
        </tr>
    </thead>
    <tbody>

        @foreach ($saran as $item)

        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->saran}}</td>
        </tr>

        @endforeach
    </tbody>
</table>


@endsection

