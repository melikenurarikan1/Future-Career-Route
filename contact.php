<!doctype html>
<html lang="en">
  <head>
    <title>Future Career Route</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/quill.snow.css">
    

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">    
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Yükleniyor...</span>
    </div>
  </div>
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6">
            <a href="index.php">
              <img src="images/Logo.png" alt="logo" style="width:110px; height:auto;">
            </a>
          </div>
          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.php" class="nav-link">Ana Sayfa</a></li>
              <li><a href="about.php">Hakkımızda</a></li>
              <!-- <li class="has-children">
                <a href="job-listings.php">Job Listings</a>
                <ul class="dropdown">
                  <li><a href="job-single.php">Job Single</a></li>
                  <li><a href="post-job.php">Post a Job</a></li>
                </ul>
              </li>  -->
              <!-- <li class="has-children">
                <a href="services.php">Pages</a>
                <ul class="dropdown">
                  <li><a href="services.php">Services</a></li>
                  <li><a href="service-single.php">Service Single</a></li>
                  <li><a href="blog-single.php">Blog Single</a></li>
                  <li><a href="portfolio.php">Portfolio</a></li>
                  <li><a href="portfolio-single.php">Portfolio Single</a></li>
                  <li><a href="testimonials.php">Testimonials</a></li>
                  <li><a href="faq.php">Frequently Ask Questions</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                </ul>
              </li> -->
              <li><a href="blog.php">Programlar</a></li>
              <li><a href="contact.php" class="active">İletişim</a></li>
              <li class="d-lg-none"><a href="post-job.php">Giriş Yap</a></li>
              <li class="d-lg-none"><a href="kayit-ol-secigi.php">Kayıt Ol</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="post-job.php" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Giriş Yap</a>
              <a href="kayit-ol-secigi.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Kayıt Ol</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3" onclick="OnePageNavigation()"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Bize Ulaş</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Ana Sayfa</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>İletişim</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form action="contact.php"  method="POST" class="">

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Ad</label>
                  <input type="text"  name="Isim" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Soyad</label>
                  <input type="text"  name="Soyisim" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email"  name="KullaniciMail"  id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Konu</label> 
                  <input type="subject" name="Konu"  id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Soru</label> 
                  <textarea  name="Soru"  id="message" cols="30" rows="7" class="form-control" placeholder="Notlarınızı veya sorularınızı buraya yazın..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-md text-white">Gönder</button>
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Adres</p>
              <p class="mb-4">Mühendislik-Mimarlık Fakültesi.Yozgat.Türkiye</p>

              <p class="mb-0 font-weight-bold">Telefon numarası</p>
              <p class="mb-4"><a href="#">+905527335980</a></p>

              <p class="mb-0 font-weight-bold">Email Adres</p>
              <p class="mb-0"><a href="#">bmprojeleri@gmail.com</a></p>

            </div>
          </div>
        </div>
      </div>
    </section>

  
    
    <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Trend Meslek Alanları</h3>
            <ul class="list-unstyled">
              <li><a href="Muhendislik.php">Mühendislik</a></li>
              <li><a href="tip.php">Tıp</a></li>
              <li><a href="hukuk.php">Hukuk</a></li>
              <li><a href="egitim.php">Eğitim</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Şirket</h3>
            <ul class="list-unstyled">
              <li><a href="about.php">Hakkımızda</a></li>
              <li><a href="#">Kariyer</a></li>
              <li><a href="blog.php">Programlar</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Destek</h3>
            <ul class="list-unstyled">
              <li><a href="contact.php">Destek</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Hizmet Şartları</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Bize Ulaşın</h3>
            <div class="footer-social">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Telif hakkı &copy;<script>document.write(new Date().getFullYear());</script> Bütün hakkılar saklıdır <a href="https://colorlib.com" target="_blank" ></a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
          </div>
        </div>
      </div>
    </footer>
  
  </div>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/quill.min.js"></script>
    
    
    <script src="js/bootstrap-select.min.js"></script>
    
    <script src="js/custom.js"></script>
   
   
     
  </body>
</html>
<?php
include("baglanti.php");

// POST'tan gelen verileri al
$isim = $_POST['Isim'];
$soyisim = $_POST['Soyisim'];
$email = $_POST['KullaniciMail'];
$konu = $_POST['Konu'];
$soru = $_POST['Soru'];


// Prepared Statement kullanarak SQL sorgusunu hazırla
$stmt = $conn->prepare("INSERT INTO Iletisim (Isim, Soyisim, KullaniciMail, Konu, Soru) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $isim, $soyisim, $email, $konu, $soru);

if ($stmt->execute()) {
  echo "<script>
          document.addEventListener('DOMContentLoaded', function() {
              let notification = document.createElement('div');
              notification.innerHTML = 'Kayıt başarıyla eklendi!';
              notification.style.position = 'fixed';
              notification.style.top = '10px';
              notification.style.right = '10px';
              notification.style.backgroundColor = '#28a745';
              notification.style.color = 'white';
              notification.style.padding = '10px 20px';
              notification.style.borderRadius = '5px';
              notification.style.boxShadow = '0 2px 5px rgba(0,0,0,0.3)';
              notification.style.zIndex = '1000';
              notification.style.fontSize = '16px';
              document.body.appendChild(notification);

              // 3 saniye sonra bildirimi kaldır
              setTimeout(() => notification.remove(), 3000);
          });
        </script>";
} else {
  
}



// Bağlantıyı kapat
$stmt->close();
$conn->close();
?>
