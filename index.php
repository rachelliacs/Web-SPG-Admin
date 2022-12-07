<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Beranda</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item mt-3">
    <a class="nav-link " href="index.php?page=beranda">
      <i class="bi bi-grid"></i>
      <span>Beranda</span>
    </a>
  </li><!-- End Beranda Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Manage</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="index.php?page=artikel">
          <i class="bi bi-circle"></i><span>Artikel</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bi bi-circle"></i><span>Jurusan</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bi bi-circle"></i><span>Verifikasi Nilai</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bi bi-circle"></i><span>Pendaftaran</span>
        </a>
      </li>
      <li>
        <a href="index.php?page=siswaDiterima">
          <i class="bi bi-circle"></i><span>Siswa Diterima</span>
        </a>
      </li>
    </ul>
  </li><!-- End Manage Nav -->

  <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?page=akun">
          <i class="bi bi-person"></i>
          <span>Profile Admin</span>
        </a>
      </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link " href="index.php?page=beranda">
      <i class="bi bi-box-arrow-in-left"></i>
      <span>Keluar</span>
    </a>
  </li><!-- End Logout Nav -->

</ul>

</aside><!-- End Sidebar-->

  <main id="main">
    <?php 
    if (isset($_GET['page'])) {
      $page = $_GET['page'];
      switch ($page) {
        case 'beranda':
          include 'page/beranda.php';
          break;
        case 'akun':
          include "page/akun.php";
        case 'artikel':
          include "page/artikel.php";
          break;
        case 'siswaDiterima':
          include "page/siswaDiterima.php";
          break;
      }
    } if (isset($_GET['jurusan'])) {
      $jurusan = $_GET['jurusan'];
      switch ($jurusan) {
        case 'animasi':
          include "jurusan/animasi.php";
          break;
        case 'desainGrafis':
          include "jurusan/desainGrafis.php";
          break;
        case 'logistik':
          include "jurusan/logistik.php";
          break;
        case 'multimedia':
          include "jurusan/multimedia.php";
          break;
        case 'mekatronika':
          include "jurusan/mekatronika.php";
          break;
        case 'perhotelan':
          include "jurusan/perhotelan.php";
          break;
        case 'produksi':
          include "jurusan/produksi.php";
          break;
        case 'rpl':
          include "jurusan/rpl.php";
          break;
        case 'tkj':
          include "jurusan/tkj.php";
          break;
      }
    } 
    // else {
    //   include "page/beranda.php";
    // }
    
    ?>
  </main>
  
    <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- IonIcons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>