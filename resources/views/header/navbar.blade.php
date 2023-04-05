
<header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-100">

        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">

            </div>
            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
            </button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#header-section">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features-section">Alur</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#case-studies-section">Pengaduan</a>
          </li>



          <li class="nav-item  pl-4 pl-lg-0">
            <a class="nav-link" href="#digital-marketing-section"> {{ auth()->guard('masyarakat')->user()->name }}</a>
        </li>

        <li class="nav-item btn-contact-us pl-4 pl-lg-0">
            <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Saran</button>
          </li>

          <li style="margin-top:15px;"class="nav-item pl-4 pl-lg-0">
            <form action="{{ url('/logout') }}" method="post">
                @csrf
                   <button type="submit" class="btn btn-outline-warning  ">Logout</button>
              </form>
        </li>
        </ul>
      </div>
    </div>
    </nav>
  </header>
