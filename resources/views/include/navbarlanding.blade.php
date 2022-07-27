<header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">Tsufuk Indonesia</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Lanah</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Galeri</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Jadwal</a></li>
          <li><a class="nav-link scrollto" href="#team">Pendaftaran anggota</a></li>
          
          <li>
            @auth
            <a href="javascript:;" class="nav-link scrollto" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
              </form>
            </a>
            @else  
            <a class="nav-link scrollto" href="{{ route('login') }}">Login</a>
            @endauth
            
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header