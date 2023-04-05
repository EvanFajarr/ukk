@extends('template.user')
@section('konten')



    <div style="margin-botton:50px;" class="banner" >
     @include('pesan.pesan')
        <div class="container">
          <h1 class="font-weight-semibold">Layanan Pengaduan Rakyat</h1>
          <h6 style="margin-top:20px;"  class="font-weight-normal text-muted pb-3">Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang,tanpa ribet dan ruwet
            kami ada untuk anda yang sedang mumet.</h6>
          <div>
            <a href="/home/create" class="btn btn-outline-info mr-1">Pengaduan</a>
          </div>
          <img  style="margin-top:20px;"  src="images/coba1.png" alt="" class="img-fluid">
        </div>
      </div>
      <div class="content-wrapper">
        <div class="container">
          <section class="features-overview" id="features-section" >
            <div class="content-header">
              <h2>Alur Pengaduan</h2>
              <h6 class="section-subtitle text-muted">Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap</h6>
            </div>
            <div class="d-md-flex justify-content-between">
              <div class="grid-margin d-flex justify-content-start">
                <div class="features-width">
                  <img style="height:100px;"src="images/verif.svg" alt="" class="img-icons">
                  <h5 class="py-3">Proses Verifikasi</h5>
                  <p class="text-muted">Dalam 3 hari, laporan Anda akan diverifikasi dan diteruskan kepada instansi berwenang </p>

                </div>
              </div>
              <div class="grid-margin d-flex justify-content-center">
                <div class="features-width">
                  <img style="height:100px;" src="images/tanggapan2.svg" alt="" class="img-icons">
                  <h5 class="py-3">Proses Tindak Lanjut</h5>
                  <p class="text-muted">Dalam 5 hari, instansi akan menindaklanjuti dan membalas laporan Anda </p>

                </div>
              </div>
              <div class="grid-margin d-flex justify-content-end">
                <div class="features-width">
                  <img  style="height:100px;" src="images/selesai.svg" alt="" class="img-icons">
                  <h5 class="py-3">Selesai</h5>
                  <p class="text-muted">Laporan Anda akan terus ditindaklanjuti hingga terselesaikan</p>

                </div>
              </div>
            </div>
          </section>


          <section style="margin-botton:50px;" class="digital-marketing-service" id="digital-marketing-section">
            <div class="content-header">
               <center><h2>Informasi Akun</h2></center>
              </div>
            <div class="row align-items-center">
              <div class="col-12 col-lg-7 grid-margin grid-margin-lg-0" data-aos="fade-right">
                <h3 class="m-0"> Happy {{ date('l') }}  {{  auth()->guard('masyarakat')->user()->name  }}</h3>
                <div class="col-lg-7 col-xl-6 p-0">
                  <p class="py-4 m-0 text-muted">
                    <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">NIK</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">{{  auth()->guard('masyarakat')->user()->nik }}</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Name</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">{{  auth()->guard('masyarakat')->user()->name }}</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">{{  auth()->guard('masyarakat')->user()->email }}</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Telephone</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">{{  auth()->guard('masyarakat')->user()->tlp }}</p>
                        </div>
                      </div>
                  </p>
                  <p class="font-weight-medium text-muted">Tetaplah Hidup Walaupun Tidak Berguna</p>

                </div>
              </div>
              <div class="col-12 col-lg-5 p-0 img-digital grid-margin grid-margin-lg-0" data-aos="fade-left">
                <img src="images/Group1.png" alt="" class="img-fluid">
              </div>
            </div>

            </div>
          </section>



          <section class="case-studies" id="case-studies-section">
            <div  style="padding:50 50 50 50;"class="row grid-margin">
              <div class="col-12 text-center pb-5">
                <h2>Pengaduanmu</h2>

              </div>
              @foreach ($pengaduan as $item)
              <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
                <div class="card color-cards">
                  <div class="card-body p-0">
                    <div class="bg-primary text-center card-contents">
                      <div class="card-image">
                        {{-- <img  style="max-height:100%; max-width:100%;"src='{{ url('foto').'/'.$item->foto }}' class="d-block w-100 img-fluid" id="gambar" alt="picture"/> --}}
                      </div>
                      <div class="card-desc-box d-flex align-items-center justify-content-around">
                        <div>
                          <h6 class="text-white pb-2 px-3">{{ $item->status }}</h6>
                          <a href="detailPengaduan/{{ $item['id'] }}" class="btn btn-outline-primary" target="blank">Selengkapnya</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-details text-center pt-4">
                        <h6 class="m-0 pb-1">{{ $item->tanggal }}</h6>
                        <p>{{ $item->lokasi }}</p>
                        @if ($item->status == "terkirim")
                        <a href= '{{url('home/'.$item->id.'/edit')}}'  class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                        @endif

                        @if ($item->status == "ditolak")
                        <form onsubmit="return confirm('Yakin mau menghapus data?')" class='d-inline' action="{{ url('home/'.$item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                        </form>
                        @endif
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              </div>
            </div>
          </section>

          <section class="customer-feedback" id="feedback-section">
            <div class="row">
              <div class="col-12 text-center pb-5">
                <h2>Kritik Dan Saran</h2>
                <h6 class="section-subtitle text-muted m-0">Terima Kasih Sudah Memberikan Kontribusi Kepada kami</h6>
              </div>

              <div class="owl-carousel owl-theme grid-margin">
                @foreach ($saran as $item)
                  <div class="card customer-cards">
                    <div class="card-body">
                      <div class="text-center">
                        <img src="images/pp.png" width="89" height="89" alt="" class="img-customer">
                        <p class="m-0 py-3 text-muted">{{ $item->name }} </p>
                        <div class="content-divider m-auto"></div>
                        <h6 class="card-title pt-3">{{ $item->saran }}</h6>
                        {{-- <h6 class="customer-designation text-muted m-0">Marketing Manager</h6> --}}
                      </div>
                    </div>
                  </div>
                  @endforeach
            </div>

          </section>
<!-- Modal for Contact - us Button -->
<form action='{{ url('saran') }}'  method='post'  enctype="multipart/form-data">

    @csrf
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Kritik Dan Saran</h4>
          @include('pesan.pesan')
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="Name">Name</label>
              <input type="text" class="form-control" name='name' value="{{Session::get('name')}}" id="name" placeholder="{{  auth()->guard('masyarakat')->user()->name }}">
            </div>
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="text" class="form-control" name='email' value="{{Session::get('email')}}" id="email" placeholder="{{  auth()->guard('masyarakat')->user()->email }}">
            </div>
            <div class="form-group">
              <label for="saran">saran</label>
              <textarea class="form-control"  value="{{Session::get('saran')}}"  name='saran'  id="saran" placeholder="tambahkan saranmu"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <div class="mb-3 row">
            <label for="tahun" class="col-sm-2 col-col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-outline-primary" name="submit"><i class="bi bi-save"></i></button></div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</form>




