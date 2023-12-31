
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RESPON</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets') ?>/img/resto.png" rel="icon">
  <link href="<?= base_url('assets') ?>/img/restaurant.png" rel="restaurant">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,600,600i,700,700i|Lobster|Rowdies:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets') ?>/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets') ?>/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-pin-map-fill d-flex align-items-center"><span>Pemrograman Geospasial Web: Lanjut</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="#hero">ResPon</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="<?= base_url('assets') ?>/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Galeri</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#contact" class="book-a-table-btn scrollto">Kontak</a>
      

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(<?= base_url('assets') ?>/img/slide.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Persebaran Restoran</span> di Kota Pontianak</h2> 
                <p class="animate__animated animate__fadeInUp">Kota Pontianak merupakan Ibukota Provinsi Kalimantan Barat. Kota Ini Memiliki Julukan Kota Khatulistiwa karena dilalui oleh Garis Khatulistiwa yang terletak di wilayah Siantan terdapat Tugu Khatulistiwa. Di Kota Pontianak memiliki banyak restoran pilihan yang dapat dijadikan referensi saat berkunjung ke Kota Pontianak.</p>
                <div>
                  <a href="<?= base_url('home') ?>" class="btn-menu animate__animated animate__fadeInUp scrollto">PETA RESPON</a>
                </div>
              </div>
            </div>
          </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("<?= base_url('assets') ?>/img/beranda.png");'>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>Tentang <strong>RESPON</strong></h3>
              <p>
                RESPON atau Restoran Pontianak adalah WebGIS yang bertujuan untuk memberikan informasi mengenai restoran yang terdapat di Kota Pontianak dan dapat dilakukan update data apabila restoran mengalami perubahan.  
              </p>
              <p class="fst-bold">
                Fitur-fitur dari WebGIS RESPON adalah sebagai berikut:
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Peta Titik Persebaran Restoran.</li>
                <li><i class="bx bx-check-double"></i> Tambah Titik Restoran.</li>
                <li><i class="bx bx-check-double"></i> Ubah Titik dan Informasi Restoran.</li>
                <li><i class="bx bx-check-double"></i> Hapus Titik Restoran.</li>
                <li><i class="bx bx-check-double"></i> Tabel Titik Restoran.</li>
                <li><i class="bx bx-check-double"></i> Rute ke Restoran Lain.</li>
              </ul>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Keunggulan Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Keunggulan dari <span>RESPON</span></h2>
          <p>Berikut adalah keunggulan dari WebGIS RESPON</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Memberikan informasi lokasi restoran yang ada di Kota Pontianak.</h4>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Menambahkan dan menghapus data titik restoran.</h4>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4> Memberikan rute terbaik dari satu restoran ke restoran lainnya.</h4>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Keunggulan Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Restoran di <span>RESPON</span></h2>
          <p>Beberapa gambar dari restoran yang terdapat di WebGIS RESPON.</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?= base_url('assets') ?>/img/gallery/galeri-1.png" class="gallery-lightbox">
                <img src="<?= base_url('assets') ?>/img/gallery/galeri-1.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?= base_url('assets') ?>/img/gallery/galeri-2.jpg" class="gallery-lightbox">
                <img src="<?= base_url('assets') ?>/img/gallery/galeri-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?= base_url('assets') ?>/img/gallery/galeri-3.jpg" class="gallery-lightbox">
                <img src="<?= base_url('assets') ?>/img/gallery/galeri-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?= base_url('assets') ?>/img/gallery/galeri-4.jpg" class="gallery-lightbox">
                <img src="<?= base_url('assets') ?>/img/gallery/galeri-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?= base_url('assets') ?>/img/gallery/galeri-5.jpg" class="gallery-lightbox">
                <img src="<?= base_url('assets') ?>/img/gallery/galeri-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?= base_url('assets') ?>/img/gallery/galeri-6.png" class="gallery-lightbox">
                <img src="<?= base_url('assets') ?>/img/gallery/galeri-6.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?= base_url('assets') ?>/img/gallery/galeri-7.jpg" class="gallery-lightbox">
                <img src="<?= base_url('assets') ?>/img/gallery/galeri-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?= base_url('assets') ?>/img/gallery/galeri-8.png" class="gallery-lightbox">
                <img src="<?= base_url('assets') ?>/img/gallery/galeri-8.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Hubungi</span> Kami</h2>
          <p>Jika anda memiliki kritik dan saran dapat menghubungi salah satu kontak di bawah ini</p>
        </div>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
          <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-person"></i>
              <h4>Info:</h4>
              <p>Annisya Tadzkiah Vidiarini<br>21/481137/SV/19735<br>Sarjana Terapan<br>Sistem Informasi Geografis</p>
            </div>

            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Lokasi:</h4>
              <p>Departemen Teknologi Kebumian<br>Sekolah Vokasi<br>Universitas Gadjah Mada<br>Yogyakarta, DIY 55281</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>annisya.tadzkiah2603@mail.<br>ugm.ac.id</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-whatsapp"></i>
              <h4>Pesan:</h4>
              <p>+62 813 5052 4726</p>
            </div>
          </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>RESPON</h3>
      <p>WebGIS Persebaran Lokasi Restoran di Kota Pontianak</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-gmail"></i></a>
        <a href="#" class="twitter"><i class="bx bxl-chrome"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets') ?>/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('assets') ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets') ?>/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('assets') ?>/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets') ?>/js/main.js"></script>

</body>

</html>