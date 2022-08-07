{{-- admin --}}
@if(auth()->check() && auth()->user()->hasRole('admin'))
<div class="sidebar ">
    <div class="scrollbar-inner sidebar-wrapper ">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('template_admin') }}/assets/img/profile2.jpg">
            </div>
            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span style="color: white">
                        Admin
                        <span class="user-level">Administrator</span>
                        <span class="caret"></span>
                    </span>
                </a>
                <div class="clearfix"></div>

                <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                    <ul class="nav">
                        <li>
                            <a href="#profile">
                                <span class="link-collapse" style="color: white">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#edit">
                                <span class="link-collapse" style="color: white">Edit Profile</span>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="#settings">
                                <span class="link-collapse" style="color: white">Settings</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a href="/admin" style="color: white">
                    <i class="la la-dashboard" style="color: white"></i>
                    <p>Dashboard</p>

                </a>
            </li>

            <li class="nav-item">
                <a href="/pelatih" style="color: white">
                    <i class="la la-user" style="color: white"></i>
                    <p>Data Pelatih</p>

                </a>
            </li>

            <li class="nav-item">
                <a href="/anggota " style="color: white">
                    <i class="la la-user" style="color: white"></i>
                    <p>Data Anggota</p>

                </a>

            </li>

            {{-- <li class="nav-item">
                <a href="/lanah" style="color: white">
                    <i class="la la-th" style="color: white"></i>
                    <p>Lanah</p>

                </a>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#lanah" aria-expanded="false" aria-controls="lanah">
                    <i class="la la-th" style="color: white"></i>
                        <span class="menu-title" style="color: white">Lanah</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="lanah">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a href="/lanah">
                                <p style="color: white">List Lanah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/lanah_detail">
                                <p style="color: white">Detail Lanah</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a href="/jadwal" style="color: white">
                    <i class="la la-th" style="color: white"></i>
                    <p>Jadwal Kegiatan</p>

                </a>
            </li>

            {{-- <li class="nav-item">
                <a href="/iuran" style="color: white">
                    <i class="la la-th" style="color: white"></i>
                    <p>Iuran</p>

                </a>
            </li> --}}

            <li class="nav-item">
                <a href="/informasi" style="color: white">
                    <i class="la la-th" style="color: white"></i>
                    <p>Informasi</p>

                </a>
            </li>

            <li class="nav-item">
                <a href="/galeri" style="color: white">
                    <i class="la la-th" style="color: white"></i>
                    <p>Galeri</p>

                </a>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link scrollto" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" style="color: white">
                    <i class="la la-th" style="color: white"></i>
                    <p>Logout</p>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </a>
            </li>
        </ul>
    </div>
</div>

{{-- pelatih --}}

@elseif(auth()->check() && auth()->user()->hasRole('pelatih'))
<div class="sidebar ">
    <div class="scrollbar-inner sidebar-wrapper ">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('template_admin') }}/assets/img/profile2.jpg">
            </div>
            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span style="color: white">
                        Adam
                        <span class="user-level">Pelatih</span>
                        <span class="caret"></span>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                    <ul class="nav">
                        <li>
                            <a href="#profile">
                                <span class="link-collapse" style="color: white">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#edit">
                                <span class="link-collapse" style="color: white">Edit Profile</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a href="/admin" style="color: white">
                    <i class="la la-dashboard" style="color: white"></i>
                    <p>Dashboard</p>

                </a>
            </li>

            <li class="nav-item">
                <a href="/anggota " style="color: white">
                    <i class="la la-user" style="color: white"></i>
                    <p>Data Anggota</p>

                </a>
            </li>

            <li class="nav-item">
                <a href="/lanah" style="color: white">
                    <i class="la la-th" style="color: white"></i>
                    <p>Lanah</p>

                </a>
            </li>

            <li class="nav-item">
                <a href="/jadwal" style="color: white">
                    <i class="la la-th" style="color: white"></i>
                    <p>Jadwal Kegiatan</p>

                </a>
            </li>

            <li class="nav-item">
                <a href="/iuran" style="color: white">
                    <i class="la la-th" style="color: white"></i>
                    <p>Iuran</p>

                </a>
            </li>



            <li class="nav-item">
                <a href="javascript:;" class="nav-link scrollto" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" style="color: white">
                    <i class="la la-th" style="color: white"></i>
                    <p>Logout</p>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </a>
            </li>

        </ul>
    </div>
</div>

{{-- anggota --}}
@elseif(auth()->check() && auth()->user()->hasRole('anggota'))
<div class="sidebar ">
    <div class="scrollbar-inner sidebar-wrapper ">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('template_admin') }}/assets/img/profile2.jpg">
            </div>
            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span style="color: white">
                        Naufal R
                        <span class="user-level">Anggota</span>
                        <span class="caret"></span>
                    </span>
                </a>
                <div class="clearfix"></div>

                <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                    <ul class="nav">
                        <li>
                            <a href="#profile">
                                <span class="link-collapse" style="color: white">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#edit">
                                <span class="link-collapse" style="color: white">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#settings">
                                <span class="link-collapse" style="color: white">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a href="/admin" style="color: white">
                    <i class="la la-dashboard" style="color: white"></i>
                    <p>Dashboard</p>

                </a>
            </li>

            <li class="nav-item">
                <a href="/jadwal" style="color: white">
                    <i class="la la-th" style="color: white"></i>
                    <p>Jadwal Kegiatan</p>

                </a>
            </li>
            <li class="nav-item">
                <a href="/iuran" style="color: white">
                    <i class="la la-th" style="color: white"></i>
                    <p>Iuran</p>

                </a>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link scrollto" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" style="color: white">
                    <i class="la la-th" style="color: white"></i>
                    <p>Logout</p>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </a>
            </li>

        </ul>
    </div>
</div>
@endhasrole
