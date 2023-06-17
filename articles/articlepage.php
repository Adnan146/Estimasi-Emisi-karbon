
<?php
session_start();
include "config.php";
?>
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Esemka | Estimasi Emisi Karbons</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="../assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="article.css">

    <!-- =======================================================
  * Template Name: SoftLand
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center border">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
          <!-- <h1><img src="/assets/img/logo.png" alt=""><a href="#">EsEmKa</a></h1> -->
          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="./index.html">
            <img src="../assets/img/logo-name.png" alt="..." class="pt-3 pb-3"/>
          </a>
        </div>

        <nav id="navbar" class="navbar">
          <ul>
          <li><a href="../index.php" >BERANDA</a></li>
            <li>
              <?php
              if(!$_SESSION){
            ?>
            <a href="../Login/login.php">KALKULATOR</a>
            <?php
              }elseif($_SESSION['id']){
            ?>
            <a href="#calculator">KALKULATOR</a>
            <?php        
              }
            ?>
            </li>
            <li><a href="../about/about.php">TENTANG</a></li>
            <li><a href="./articlepage.php" class="active">ARTIKEL</a></li>
            <li>
              <?php
              if(!$_SESSION){
            ?>
            <a href="../Login/login.php">AKSI LINGKUNGAN</a>
            <?php
              }elseif($_SESSION['id']){
            ?>
            <a href="../aksi/aksi.php">AKSI LINGKUNGAN</a>
            <?php        
              }
            ?>
            </li>
            <?php
              if(!$_SESSION){
            ?>
            <li>
            <button type="button" class="btn btn-success rounded-5" onclick="window.location.href='../Login/login.php'">
                MASUK
              </button>
          </li>
          <?php
              }elseif($_SESSION['level'] == "user"){
            ?>
             <button type="button" class="btn btn-success rounded-5 btn-logout" onclick="window.location.href='../Login/logout.php'">
                KELUAR
              </button>
            <?php
            }
            ?>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <main id="main">
      <!-- Article page start -->
      <div class="article-page d-block ">
        <div
          class="article-heading-fluid bg-primary opacity-75 d-flex position-relative"
          style="justify-content: center; height: 200px"
        >
          <h1
            class="text-light text-start fs-3 position-absolute bottom-0 m-5"
            style="justify-content:center;"
          >
            Selamat Datang di Halaman Artikel EsEmKa
          </h1>
        </div>
        <?php
          
          $data = mysqli_query($conn, "select * from tb_artikel");
         while ($d = mysqli_fetch_array($data)) {
                                        
          ?>
        <div class="main-content">
      <section class="artikel">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
            <div class="card shadow p-3 mb-5 bg-body rounded border border-success p-2 border-opacity-10" >
            <img src=<?php echo $d['image']?> class="card-img-top" style="height:250px ;" alt="..."> 
                    <div class="card-body">   
                      <h5 class="card-title"><?=$d['title']?></h5>
                      <h6 class="card-subtitle mb-2 text-muted"><?=$d['date']?></h6>  
                      <p class="card-text"><?=$d['deskripsi']?></p>
                      <a href="<?=$d['link']?>" class="btn btn-warning">Selengkapnya</a>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </section>
      </div>
      <?php
        }
    ?>
       
      <!-- Article page end -->
    </main>
    
    

    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="footer" role="contentinfo">
      <div class="container">
        <div class="row" data-aos="fade-right">
          <div class="col-md-3 mb-4">
            <img src="../assets/img/logo-esemka.png" alt="" class="footer-logo" style="width: 90px;"/>
          </div>
          <div class="col-md-9 mt-4">
            <div class="row site-section pt-0">
              <div class="col-md-4 mb-4 mb-md-0">
                <h3>Navigation</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Article</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">What We Do</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
              <div class="col-md-4 mb-4 mb-md-0">
                <h3>More</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Project</a></li>
                  <li><a href="#">Events</a></li>
                  <li><a href="#">Donate</a></li>
                  <li><a href="#">Blog</a></li>
                </ul>
              </div>
              <div class="col-md-4 mb-4 mb-md-0">
                <h3>Connect</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">LinkedIn</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div
          class="row justify-content-center text-center"
          data-aos="fade-right"
        >
          <div class="col-md-7">
            <p class="copyright mt-5">
              &copy; Copyright EsEmKa. All Rights Reserved
            </p>
            <div class="credits">
              <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
            </div>
          </div>
        </div>
      </div>
    </footer>

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>
