

@extends('template.admin')
@section('konten')
@include('pesan.pesan')

       <h1>History Pegaduan Masyarkat</h1>
       @foreach ($pengaduan as $pengaduans)

               @if ($pengaduans->status == "selesai")
               <div class="col-sm-12">
                 <div style="margin-top:15px;"class="card shadow-lg p-3 mb-5 bg-body rounded border-dark mb-3">
                     <div class="card-body text-center">
                       <p class="fw-bold" id="card-text">{{ $pengaduans->id }}</p>
                         <p class="fw-bold text-danger" id="card-text">{{ $pengaduans->tanggal }}</p>
                         <p class="fw-bold text-primary" id="card-text" >Status : {{ $pengaduans->status }}</p>
                         @can('admin')
                         <a href='admin/{{ $pengaduans['id'] }}/cetak' class="btn btn-outline-danger btn-sm"><i class="bi bi-filetype-pdf">  Cetak Laporan</i></a>
                         @endcan
                         <p id="card-text"><i class="bi bi-clock-history"></i> {{ $pengaduans->created_at->diffForHumans() }}</p>
                       </div>
                       <style>
                         #card-text{
                           margin-bottom:10px;
                         }
                         </style>
                     </div>
                   </div>
                   </div>
               @endif

               @endforeach
@endsection

