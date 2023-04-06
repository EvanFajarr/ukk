
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse bg-body-tertiary">
          <div style="height:20rem;"class="position-sticky pt-3 sidebar-sticky">
            <ul  class="nav flex-column">
              <li class="nav-item">
                <a  href="/admin" class="nav-link"> <i class="bi bi-envelope-exclamation"> Pengaduan Masuk</i></a>
           <span data-feather="file" class="align-text-bottom"></span>
              </li>

              <li class="nav-item">
                <a  href="/history" class="nav-link" > <i class="bi bi-journal-check"> History</i></a>
              </li>
              <li class="nav-item">
                <a  href="/masyarakat" class="nav-link" > <i class="bi bi-people-fill"> Data Masyarakat</i></a>
              </li>

              <li class="nav-item">
                <a  href="/petugas" class="nav-link"> <i class="bi bi-person-fill-check"> Data Petugas</i></a>
              </li>

              <li class="nav-item">
                <a  href="/saran" class="nav-link"><i class="bi bi-chat-dots"> Saran</i></a>
              </li>

              <li class="nav-item">
                <a  href="/lokasi" class="nav-link"><i class="bi bi-geo-alt"> Data Lokasi</i></a>
              </li>


              <li class="nav-item">
              <form action="{{ url('/logout') }}" method="post">
                @csrf
                   <button type="submit" class="btn btn-outline-warning "><i class="bi bi-box-arrow-right">Logout</i></button>
              </form>
              </li>

            </ul>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

       <style>
        .nav-item{
            margin-left:15px;
            margin-bottom:10px;
        }
       </style>

        </nav>

