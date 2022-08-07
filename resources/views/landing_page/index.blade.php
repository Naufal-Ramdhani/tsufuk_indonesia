@extends('layout.app_landing')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>BELADIRI KELUARGA MUSLIM</h1>
      <h2>Solusi Tepat Tangguhnya Keluarga</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Ikatan Beladiri Tsufuk dan Puteri Gading Indonesia </h3>
            <p style="text-align: justify">
              Lembaga Beladiri Muslim Thifan Tsufuk adalah lembaga pelatihan yang secara khusus bergerak di bidang penyelenggaraan pelatihan beladiri untuk muslim dan muslimah. Sekolah Beladiri Muslim Thifan Tsufuk mengemban amanah untuk mengembangkan dan menyebarluaskan beladiri muslim legendaris China Utara “Thifan Po Khan”. Memiliki pengalaman memfasilitasi pelatihan untuk individu maupun lembaga, baik lembaga umum, lembaga pendidikan dan lembaga pendidikan pesantren.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up">
            <div class="box">
              <center>
                <img src="{{asset('assets1')}}/img/tsufuk/LOGO_TSUFUK.png" alt=""  style="width: 200px; height: 280px;">
              </center>
              <span>01</span>
              <h4>Tsufuk</h4>
              <p style="text-align: justify">Latihan Beladiri Thifan Tsufuk yang diperuntukkan khusus laki-laki mempelajari jurus-jurus yang sangat efektif digunakan dalam pembelaan diri dan pertarungan jarak dekat, menengah dan jangkauan. Serta mempelajari teknik-teknik tangan kosong dan senjata.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
            <div class="box">
              <center>
                <img src="{{asset('assets1')}}/img/tsufuk/LOGO_PuteriGading.png" alt=""  style="width: 200px; height: 280px;">
              </center>
              <span>02</span>
              <h4>Puteri Gading</h4>
              <p style="text-align: justify">Thifan Puteri Gading merupakan program pelatihan beladiri Thifan yang khusus diperuntukkan bagi perempuan. Jurus-jurusnya yang halus dan mengutamakan kecepatan membuat beladiri ini sangat sesuai dengan anatomi dan fisiologi kaum perempuan.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box" >
              <center>
                <img src="{{asset('assets1')}}/img/tsufuk/pamflet1.png" alt=""  style="width: 200px; height: 280px;">
              </center>
              <span>03</span>
              <h4> Perlengkapan</h4>
              <p style="text-align: justify">Lembaga beladiri Tsufuk indonesia memiliki perlengkapan yang wajib dimiliki oleh seluruh anggotanya yaitu seragam
                dan beberapa perlengkapan pendukung untuk Turgul/Sparring seperti Head Protector, MMA Golves, Gum Shield dan Groin Protector.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row d-flex align-items-center">

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->

    <!-- ======= Team Section ======= -->
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <!-- End Contact Section -->

    <!-- Modal gallery -->
    <section id="galeri" class="about">
      <!-- Section: Images -->
      <section class="">
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div
              class="bg-image hover-overlay ripple shadow-1-strong rounded"
              data-ripple-color="light"
            >
              <img
                src="{{asset('assets1')}}/img/tsufuk/sparing.jpg" alt=""  
                class="w-100"
              />
              <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
              </a>
            </div>
          </div>
    
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div
              class="bg-image hover-overlay ripple shadow-1-strong rounded"
              data-ripple-color="light"
            >
              <img
                src="{{asset('assets1')}}/img/tsufuk/LPG.jpg" alt=""  
                class="w-100"
              />
              <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
              </a>
            </div>
          </div>
    
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div
              class="bg-image hover-overlay ripple shadow-1-strong rounded"
              data-ripple-color="light"
            >
              <img
              src="{{asset('assets1')}}/img/tsufuk/pg.jpg" alt=""  
              class="w-100"
              />
              <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
              </a>
            </div>
          </div>
          
        </div>
      </section>
      <!-- Section: Images -->
    
      <!-- Section: Modals -->
      <section class="">
        <!-- Modal 1 -->
        <div
          class="modal fade"
          id="exampleModal1"
          tabindex="-1"
          aria-labelledby="exampleModal1Label"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="ratio ratio-16x9">
                <iframe
                  src="https://www.youtube.com/embed/A3PDXmYoF5U"
                  title="YouTube video"
                  allowfullscreen
                ></iframe>
              </div>
    
              <div class="text-center py-3">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal 2 -->
        <div
          class="modal fade"
          id="exampleModal2"
          tabindex="-1"
          aria-labelledby="exampleModal2Label"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="ratio ratio-16x9">
                <iframe
                  src="https://www.youtube.com/embed/wTcNtgA6gHs"
                  title="YouTube video"
                  allowfullscreen
                ></iframe>
              </div>
    
              <div class="text-center py-3">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal 3 -->
        <div
          class="modal fade"
          id="exampleModal3"
          tabindex="-1"
          aria-labelledby="exampleModal3Label"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="ratio ratio-16x9">
                <iframe
                  src="https://www.youtube.com/embed/vlDzYIIOYmM"
                  title="YouTube video"
                  allowfullscreen
                ></iframe>
              </div>
    
              <div class="text-center py-3">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section: Modals -->
    </section>
    <!-- Modal gallery -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  {{-- <div id="preloader"></div> --}}

  <!-- Vendor JS Files -->
  @endsection('content')