<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>About EsEmKa | Estimasi Emisi Karbon</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/img/favicon.png" rel="icon" />
    <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

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
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
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
            <li><a href="about.php" class="active">TENTANG</a></li>
            <li><a href="../articles/articlepage.php">ARTIKEL</a></li>
            <li><a href="../aksi/aksi.php">AKSI LINGKUNGAN</a></li>
            <?php
              session_start();
              if(!$_SESSION){
            ?>
            <li>
            <button type="button" class="btn btn-success rounded-5" onclick="window.location.href='../Login/login.php'">
                LOGIN
              </button>
              </li>
          <?php
              }elseif($_SESSION['id']){
            ?>
             <li>
             <button type="button" class="btn btn-success rounded-5 logout" onclick="window.location.href='../Login/logout.php'">
                LOGOUT
              </button>
              </li>
            <?php
            }
            ?>
           
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-90 h-90" src="img/logo.png" alt="logo" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Selamat Datang di <span class="text-primary">EsEmKa (Estimasi Emisi Karbon)!</span></h1>
                    <p class="mb-4">Di Esemka, kami memiliki kepedulian yang tinggi terhadap masalah serius emisi karbon dan dampaknya terhadap lingkungan. Perjalanan kami dimulai sebagai proyek capstone dalam program MSIB Kampus Merdeka, yang memberikan kami kesempatan untuk mengaplikasikan pengetahuan dan keterampilan kami dalam menciptakan solusi inovatif.</p>
                    <p class="mb-4">Tujuan utama EsEmKa adalah untuk meningkatkan kesadaran masyarakat akan dampak emisi karbon. Sadar akan dampak emisi karbon mengajak kita untuk mengubah perilaku dan mengambil tindakan berkelanjutan, seperti mengurangi konsumsi energi fosil, beralih ke sumber energi terbarukan, mendukung transportasi ramah lingkungan, dan menerapkan praktik keberlanjutan dalam kehidupan sehari-hari.</p>
                    <p class="mb-4">Dengan kesadaran dan tindakan kolektif, kita dapat menjaga planet ini sebagai tempat yang layak dihuni bagi generasi mendatang, serta melestarikan keanekaragaman hayati dan sumber daya alam yang sangat berharga bagi kita semua.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="row gy-5 gx-4 justify-content-center cards">
        <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="position-relative border border-blue pt-5 pb-4 px-4">
                <div class="d-inline-flex align-items-center justify-content-center bg-blue rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                    <i class="fa fa-globe fa-3x text-white"></i>
                </div>
                <h5 class="mt-4">Misi Kami</h5>
                <hr class="w-25 mx-auto bg-blue mb-1">
                <hr class="w-50 mx-auto bg-blue mt-0">
                <p class="mb-0">Misi Esemka adalah menyediakan solusi inovatif yang memberdayakan individu, bisnis, dan komunitas untuk memahami, mengukur, dan mengurangi jejak karbon mereka. Kami percaya bahwa dengan meningkatkan kesadaran dan mengambil tindakan kolektif, kita dapat memberikan dampak positif yang signifikan bagi planet kita.</p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="position-relative border border-blue pt-5 pb-4 px-4">
                <div class="d-inline-flex align-items-center justify-content-center bg-blue rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                    <i class="fa fa-book-open fa-3x text-white"></i>
                </div>
                <h5 class="mt-4">Kisah Kami</h5>
                <hr class="w-25 mx-auto bg-blue mb-1">
                <hr class="w-50 mx-auto bg-blue mt-0">
                <p class="mb-0">Esemka lahir dari upaya kolektif sekelompok orang yang bersemangat tentang lingkungan. Terinspirasi oleh keinginan untuk mengatasi perubahan iklim, kami memutuskan untuk mewujudkan proyek ini sebagai proyek program MSIB Kampus Merdeka. Program ini memberikan kami kesempatan untuk menggabungkan pengetahuan akademis dengan pengalaman praktis dalam mengembangkan platform yang dapat diandalkan dan mudah digunakan.</p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
            <div class="position-relative border border-blue pt-5 pb-4 px-4">
                <div class="d-inline-flex align-items-center justify-content-center bg-blue rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                    <i class="fa fa-envelope-open-text fa-3x text-white"></i>
                </div>
                <h5 class="mt-4">Nilai-Nilai Kami</h5>
                <hr class="w-25 mx-auto bg-blue mb-1">
                <hr class="w-50 mx-auto bg-blue mt-0">
                <p class="mb-0">Di Esemka, kami didorong oleh serangkaian nilai inti yang menjadi panduan dalam setiap tindakan kami. Integritas, inovasi, dan kolaborasi adalah dasar dari pekerjaan kami. Kami berkomitmen untuk transparansi, memastikan pengguna kami memiliki akses pada informasi yang jujur dan dapat dipercaya.</p>
            </div>
        </div>
    </div>


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Team</h6>
                <h1 class="mb-5">Tim Developer Kami</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/adnan.png" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="https://github.com/Adnan146"><i class="fab fa-github"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/zuzlifatul-adnan-a5a345271/"><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/fourz_adnan/"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Zuzlifatul Adnan</h5>
                            <small>Leader, Back-end Developer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="https://github.com/Adnan146"><i class="fab fa-github"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/zuzlifatul-adnan-a5a345271/"><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/fourz_adnan/"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Febryan Luther Barahama</h5>
                            <small>UI Design</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="https://github.com/Adnan146"><i class="fab fa-github"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/zuzlifatul-adnan-a5a345271/"><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/fourz_adnan/"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Dwiki Febriyanto</h5>
                            <small>Front-End Developer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="https://github.com/sanysantiastry"><i class="fab fa-github"></i></a>
                            <a class="btn btn-square mx-1" href="https://id.linkedin.com/in/sany-santiastry-146a2a20b"><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/sas.juyeon/"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Sany Santiastry</h5>
                            <small>Front-End Developer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
        

    <!-- Footer Start -->
    <footer class="footer" role="contentinfo">
        <div class="container-footer">
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
            </div>
          </div>
        </div>
      </footer>

    <!-- <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-blue w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">EsEmKa</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-blue btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>