<!DOCTYPE html>
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
    <link
      href="../assets/vendor/boxicons/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/swiper/swiper-bundle.min.css"
      rel="stylesheet"
    />

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../aksi/aksi.css" rel="stylesheet"/>

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
            <img src="../assets/img/logo.png" alt="..." class="pt-3 pb-3"/>
          </a>
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="../index.php">BERANDA</a></li>
            <li><a href="#calculator">KALKULATOR</a></li>
            <li><a href="../about/about.php">TENTANG</a></li>
            <li><a href="../articles/articlepage.php">ARTIKEL</a></li>
            <li><a href="./aksi.php" class="active">AKSI LINGKUNGAN</a></li>
            <?php
              session_start();
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
             <button type="button" class="btn btn-success rounded-5" onclick="window.location.href='../Login/logout.php'">
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
        <div class="jumbotron">
            <div class="jumbo-heading">
             <h1 class="Jumbo-heading-1">Heading 1</h1>
             <h2 class="Jumbo-heading-2">Heading 2</h2>
            </div>
            <div class="jumbo-desk">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae vel dignissimos quos expedita sint assumenda ipsum. Non, et. </p>
            </div>
     
            <div class="btn-jumbo-container">
             <button class="btn-jumbo" type="submit">SUBMIT</button>
            </div>
        </div>

        <div class="main-content">
            <div class="titlle-main-content">
                <h3>Kampanye Aksi Lingkungan</h3>
            </div>
            <section class="kampanye">
                <div class="card m-3 shadow p-3 mb-5 bg-body rounded border border-success p-2 border-opacity-10" style="width: 351px;">
                    <img src="../assets/img/img_4.jpg" class="card-img-top" style="height:250px ;" alt="...">
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>    
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn">IKUT BERAKSI</a>
                    </div>
                  </div>
                  <div class="card  m-3 shadow p-3 mb-5 bg-body rounded border border-success p-2 border-opacity-10" style="width: 351px;">
                    <img src="../assets/img/img_4.jpg" class="card-img-top" style="height:250px ;" alt="...">
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>    
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn">IKUT BERAKSI</a>
                    </div>
                  </div>
                  <div class="card  m-3 shadow p-3 mb-5 bg-body rounded border border-success p-2 border-opacity-10" style="width: 351px;">
                    <img src="../assets/img/img_4.jpg" class="card-img-top" style="height:250px ;" alt="...">
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>  
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn">IKUT BERAKSI</a>
                    </div>
                  </div>
            </section>

            <div class="titlle-main-content">
                <h3>Artikel Terbaru</h3>
            </div>
            <section class="article-short">
               <div class="article-short-wrap">
                   <div class="article-image">
                       <img src="../assets/img/person_2.jpg" alt="..." />
                   </div>
                   <div class="article-news">
                       <h4 class><a href="...">TITTLE</a></h4>
                       <p>Lorem ipsum is the filler text that typically demonstrates the font and style of a text in a document or visual demonstration. It serves as a place holder indicating where the text will be in the final iteration.
                        Originally from Latin, Lorem ipsum has no intelligible meaning. It is simply a display of letters to be viewed as a sample with given graphical elements in a file. Lipsum" (a portmanteau of lorem and ipsum) generators are commonly used to form generic text in a file. The words are adequately like normal text to demonstrate a font, without distracting the reader with its content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                   </div>
               </div>
               <div class="article-short-wrap">
                <div class="article-image">
                    <img src="../assets/img/person_2.jpg" alt="..." />
                </div>
                <div class="article-news">
                    <h4><a href="...">TITTLE</a></h4>
                    <p>Lorem ipsum is the filler text that typically demonstrates the font and style of a text in a document or visual demonstration. It serves as a place holder indicating where the text will be in the final iteration.
                     Originally from Latin, Lorem ipsum has no intelligible meaning. It is simply a display of letters to be viewed as a sample with given graphical elements in a file. Lipsum" (a portmanteau of lorem and ipsum) generators are commonly used to form generic text in a file. The words are adequately like normal text to demonstrate a font, without distracting the reader with its content.</p>
                     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="article-short-wrap">
                <div class="article-image">
                    <img src="../assets/img/person_2.jpg" alt="..." />
                </div>
                <div class="article-news">
                    <h4><a href="...">TITTLE</a></h4>
                    <p>Lorem ipsum is the filler text that typically demonstrates the font and style of a text in a document or visual demonstration. It serves as a place holder indicating where the text will be in the final iteration.
                     Originally from Latin, Lorem ipsum has no intelligible meaning. It is simply a display of letters to be viewed as a sample with given graphical elements in a file. Lipsum" (a portmanteau of lorem and ipsum) generators are commonly used to form generic text in a file. The words are adequately like normal text to demonstrate a font, without distracting the reader with its content.</p>
                     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="load-more">
                <button type="button" class="btn-article"><a href="../articles/articlepage.html">LOAD MORE</a></button>
            </div>
            
            </section>
        </div>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="footer" role="contentinfo">
      <div class="container">
        <div class="row" data-aos="fade-right">
          <div class="col-md-3 mb-4">
            <img src="../assets/img/logo.png" alt="" class="footer-logo" />
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
