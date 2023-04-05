

@extends('template.admin')
@section('konten')

@include('pesan.pesan')

       <h1>Pengaduan Masuk</h1>
       @foreach ($pengaduan as $pengaduans)

               @if ($pengaduans->status == "terkirim")
               <div class="col-sm-12">
                 <div style="margin-top:15px;"class="card shadow-lg p-3 mb-5 bg-body rounded border-dark mb-3">
                     <div class="card-body text-center">
                       <p class="fw-bold" id="card-text">{{ $pengaduans->id }}</p>
                         <p class="fw-bold text-danger" id="card-text">{{ $pengaduans->tanggal }}</p>
                         <p class="fw-bold text-primary" id="card-text" >Status : {{ $pengaduans->status }}</p>
                         <a href="tanggapan/{{ $pengaduans['id'] }}" class="btn btn-outline-primary btn-sm"><i class="bi bi-chat-right-text">   Tanggapan</i></a>
                         <a href= '{{url('admin/'.$pengaduans->id.'/edit')}}'  class="btn btn-outline-warning btn-sm"><i class="bi bi-zoom-in"> Verifikasi</i></a>
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
               @if ($pengaduans->status == "proses")
               <div class="col-sm-12">
                 <div style="margin-top:15px;"class="card shadow-lg p-3 mb-5 bg-body rounded border-dark mb-3">
                     <div class="card-body text-center">
                       <p class="fw-bold" id="card-text">{{ $pengaduans->id }}</p>
                         <p class="fw-bold text-danger" id="card-text">{{ $pengaduans->tanggal }}</p>
                         <p class="fw-bold text-primary" id="card-text" >Status : {{ $pengaduans->status }}</p>
                         <a href="tanggapan/{{ $pengaduans['id'] }}" class="btn btn-outline-primary btn-sm"><i class="bi bi-chat-right-text">   Tanggapan</i></a>
                         <a href= '{{url('admin/'.$pengaduans->id.'/edit')}}'  class="btn btn-outline-warning btn-sm"><i class="bi bi-zoom-in"> Verifikasi</i></a>
                         @can('admin')
                         <a href='cetak/{{ $pengaduans['id'] }}' class="btn btn-outline-danger btn-sm"><i class="bi bi-filetype-pdf">Cetak Laporan</i></a>
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

