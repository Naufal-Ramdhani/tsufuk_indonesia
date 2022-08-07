<header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo d-flex">
        <h1><a href="index.html" >Tsufuk Indonesia</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto " href="#galeri">Galeri</a></li>  
          <li><a class="nav-link scrollto" href="#services">Lanah</a></li>
          <li><a class="nav-link scrollto " href="#informasi">Informasi</a></li>
          <li><a class="nav-link scrollto" href="#jadwal">Jadwal</a></li>
          @guest
            <li><a class="nav-link scrollto" href="{{ route('register') }}">Pendaftaran anggota</a></li>
          @endguest
          
          <li>
            @auth 
              @if(auth()->check() && auth()->user()->hasRole('admin'))
              <a href="{{ route('admin') }}">Dashboard</a>
              @elseif(auth()->check() && auth()->user()->hasRole('pelatih'))
              <a href="{{ route('pelatih') }}">Dashboard</a>
              @elseif(auth()->check() && auth()->user()->hasRole('anggota'))
              <a href="{{ route('anggota') }}">Dashboard</a>
              @endif
            @else  
            <a class="nav-link scrollto" href="{{ route('login') }}">Login</a>
            @endauth
            
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header