
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse bg-body-tertiary">
          <div style="height:20rem;"class="position-sticky pt-3 sidebar-sticky">
            <ul  class="nav flex-column">
              <li class="nav-item">
                <a  href="/admin" class="nav-link">  Pengaduan Masuk</a>
           <span data-feather="file" class="align-text-bottom"></span>
              </li>

              <li class="nav-item">
                <a  href="/history" class="nav-link" > History</a>
              </li>
              <li class="nav-item">
                <a  href="/masyarakat" class="nav-link" > Data Masyarakat</a>
              </li>

              <li class="nav-item">
                <a  href="/petugas" class="nav-link" > Data Petugas</a>
              </li>

              <li class="nav-item">
                <a  href="/saran" class="nav-link" >Saran</a>
              </li>

              <li class="nav-item">
                <a  href="/lokasi" class="nav-link" > Data Lokasi</a>
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

        {{-- <div class="container-fluid">
            <div class="row">
              <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">
                        <span data-feather="home" class="align-text-bottom"></span>
                        Dashboard
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="file" class="align-text-bottom"></span>
                        Orders
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="shopping-cart" class="align-text-bottom"></span>
                        Products
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="users" class="align-text-bottom"></span>
                        Customers
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                        Reports
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="layers" class="align-text-bottom"></span>
                        Integrations
                      </a>
                    </li>
                  </ul>

                  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                    <span>Saved reports</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                      <span data-feather="plus-circle" class="align-text-bottom"></span>
                    </a>
                  </h6>
                  <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="file-text" class="align-text-bottom"></span>
                        Current month
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="file-text" class="align-text-bottom"></span>
                        Last quarter
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="file-text" class="align-text-bottom"></span>
                        Social engagement
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="file-text" class="align-text-bottom"></span>
                        Year-end sale
                      </a>
                    </li>
                  </ul>
                </div>
              </nav>





 --}}
