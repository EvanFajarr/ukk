<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<title>Detail Pengaduan</title>
  <div class="container mt-5 mb-5">
    <div  class="row d-flex justify-content-center">
        <div class="col-md-12 ">
            <div class="card ">
                <div class="row ">
                    <div class="col-md-6">
                      @if ($pengaduan->foto)
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src='{{ url('foto').'/'.$pengaduan->foto }}' width="100%" /> </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="kolom p-4">
                            <a href='{{url('home')}}' class="btn btn-outline-success"><i class="bi bi-skip-backward-btn-fill"></i></a>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">{{ $pengaduan->tanggal }}</span>
                                <h5 class="text-uppercase">Status: {{ $pengaduan->status }}</h5>
                                <div class="lokasi d-flex flex-row align-items-center">
                                    <span class="lokasi">{{ $pengaduan->lokasi }} </span>
                                    <div class="ml-2">
                                      <span>,{{$pengaduan->detail_lokasi }}</span>
                                </div>
                            </div>
                            <p class="about">{!! $pengaduan->isi !!}</p>
                            <div class="sizes mt-5">
                                <h6 class="text-uppercase">Tanggapan</h6>
                                <div class="p-3 p-md-4 border rounded-4 ">
                                @foreach ($tanggapans as $tanggapan)
                                <div class="mt-4 mb-3">
                                  <span class="text-uppercase text-muted brand">{{ $tanggapan->tanggapan }}</span><br>
                                  <span class="text-uppercase text-muted brand"><i class="bi bi-person-check-fill"></i> {{ $tanggapan->user->name }} | <i class="bi bi-clock-history"></i> {{ $tanggapan->created_at->diffForHumans() }} </span>
                                </div>
                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
              .card{
                border:none;
            }
            .card:hover{
              transform: scale(1.05);
              top:-10px;
              box-shadow: 0 10px 20px rgba(20, 14, 14, 0.12), 0 4px 8px rgba(0,0,0,.06);
            }
            .kolom{
              background-color: #eee
            }
            .brand{
              font-size: 13px
            }
            .lokasi{
              color:red;
              font-weight: 700;
              }
              .about{
                font-size: 14px;
                }
                .btn{
                  margin-top:10px;
                }
                            .cart i{
                              margin-right: 10px
                              }

                              .col-md-12{
                                height:100vh;
                              }
</style>

