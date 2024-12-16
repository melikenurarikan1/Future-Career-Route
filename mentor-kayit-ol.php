<?php 
session_start();
include("baglanti.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Formdan gelen verileri al
  $isimSoyisim = $_POST['isimSoyisim'];
  $email = $_POST['email'];
  $telefon = $_POST['telefon'];
  $dogumTarihi = $_POST['dogumTarihi'];
  $dersAdi = $_POST['dersAdi'];
  $sifre = $_POST['sifre'];
  $sifreTekrar = $_POST['sifre_tekrar'];

  
  // Şifre eşleşmesini kontrol et
  if ($sifre != $sifreTekrar) {
      die("Şifreler uyuşmuyor.");
  }
  
  // Şifreyi hashle
  $sifreHash = password_hash($sifre, PASSWORD_DEFAULT);
  
  // Dosya yüklemeleri
  $fotoURL = null;
  if (!empty($_FILES['foto']['name'])) {
      $fotoURL = "uploads/" . basename($_FILES['foto']['name']);
      move_uploaded_file($_FILES['foto']['tmp_name'], $fotoURL);
  }
  
  $cvURL = null;
  if (!empty($_FILES['cv']['name'])) {
      $cvURL = "uploads/" . basename($_FILES['cv']['name']);
      move_uploaded_file($_FILES['cv']['tmp_name'], $cvURL);
  }
  
  $videoURL = null;
  if (!empty($_FILES['video']['name'])) {
      $videoURL = "uploads/" . basename($_FILES['video']['name']);
      move_uploaded_file($_FILES['video']['tmp_name'], $videoURL);
  }
  
  // SQL sorgusu
  $sql = "INSERT INTO Mentor (IsimSoyisim, Email, Telefon, DogumTarihi, FotoURL, CVURL, DersAdi, Video, Sifre)
  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

  
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssssssss", $isimSoyisim, $email, $telefon, $dogumTarihi, $fotoURL, $cvURL, $dersAdi, $videoURL, $sifreHash);

  
  if ($stmt->execute()) {
    
    $_SESSION['isimSoyisim'] = $isimSoyisim;
    $_SESSION['email'] = $email;  // E-posta bilgisini session'da sakla
    $_SESSION['telefon'] = $telefon;
    $_SESSION['mentor_id'] = $conn->insert_id; // Mentor ID'yi oturuma ekliyoruz
    header("Location: mentorun-profili.php"); // Mentorun profili sayfasına yönlendirme
    exit();
  } else {
      echo "Hata: " . $stmt->error;
  }
  
  $stmt->close();
}
$conn->close();
?>
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
              <li><a href="index.php" class="nav-link active">Ana Sayfa</a></li>
              <li><a href="about.php">Hakkımızda</a></li>
              <!-- <li class="has-children">
                <a href="job-listings.php" class="active">Job Listings</a>
                <ul class="dropdown">
                  <li><a href="job-single.php">Job Single</a></li>
                  <li><a href="post-job.php" class="active">Post a Job</a></li>
                </ul>
              </li> -->
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
              <li><a href="contact.php">İletişim</a></li>
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
            <h1 class="text-white font-weight-bold">Kayıt Ol (Mentor)</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Ana Sayfa</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Kayıt Ol (Mentor)</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section class="site-section">
      <div class="container">

        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div>
                <h2>Kayıt Ol (Mentor)</h2>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-4">
            <div class="row">
              <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Preview</a>
              </div>
              <div class="col-6">
                <a href="#" class="btn btn-block btn-primary btn-md">Save Job</a>
              </div>
            </div>
          </div> -->
        </div>
        <div class="row mb-5">
          <div class="col-lg-12">
            <form action="mentor-kayit-ol.php" method="POST" class="p-4 p-md-5 border rounded"  enctype="multipart/form-data">
              
                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                       <label class="text-black" for="fname">Ad - Soyad</label>
                       <input type="text" name="isimSoyisim" id="fname" class="form-control" placeholder="Ad - Soyad" required>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="fname">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email adres" required>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="fname">Telefon numarası</label>
                        <input type="text" name="telefon" id="telefon" class="form-control" placeholder="Telefon numarası" required>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="fname">Doğum günü</label>
                        <input type="date" name="dogumTarihi" id="dogum_tarihi" class="form-control" required>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="company-website-tw d-block">Resiminiz</label> <br>
                        <label class="btn btn-primary btn-md btn-file">
                            Dosyaya Gözat<input type="file" name="foto" hidden required>
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="company-website-tw d-block">CV</label> <br>
                        <label class="btn btn-primary btn-md btn-file">
                            Dosyaya Gözat<input type="file" name="cv" hidden required>
                        </label>
                      </div>
                      <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                          <label class="text-black" for="fname">Vermek isteiğiniz ders</label>
                          <input type="text" name="dersAdi" id="ders" class="form-control" placeholder="Vermek istediğiniz ders" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="company-website-tw d-block">Hazırlık video</label> <br>
                        <label class="btn btn-primary btn-md btn-file">
                            Dosyaya Gözat<input type="file" name="video" hidden required>
                        </label>
                      </div>
                      <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="fname">Şifre</label>
                        <input type="password" name="sifre" id="sifre" class="form-control" placeholder="Şifre" required>
                      </div>
                    </div>
                    <div class="row form-group mb-4">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="fname">Şifre(tekrar)</label>
                        <input type="password" name="sifre_tekrar" id="sifre_tekrar" class="form-control" placeholder="Şifre(tekrar)" required>
                      </div>
                    </div>
      
                    <div class="row form-group">
                      <div class="col-md-12">
                      <input type="submit" class="btn px-4 btn-primary text-white" value="Kayıt Ol">

                       
                      </div>
                    </div>

            </form>
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
            <h3>Bizimle Ulaş</h3>
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
session_start();
include("baglanti.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Formdan gelen verileri al
  $isimSoyisim = $_POST['isimSoyisim'];
  $email = $_POST['email'];
  $telefon = $_POST['telefon'];
  $dogumTarihi = $_POST['dogumTarihi'];
  $dersAdi = $_POST['dersAdi'];
  $sifre = $_POST['sifre'];
  $sifreTekrar = $_POST['sifre_tekrar'];

  
  // Şifre eşleşmesini kontrol et
  if ($sifre != $sifreTekrar) {
      die("Şifreler uyuşmuyor.");
  }
  
  // Şifreyi hashle
  $sifreHash = password_hash($sifre, PASSWORD_DEFAULT);
  
  // Dosya yüklemeleri
  $fotoURL = null;
  if (!empty($_FILES['foto']['name'])) {
      $fotoURL = "uploads/" . basename($_FILES['foto']['name']);
      move_uploaded_file($_FILES['foto']['tmp_name'], $fotoURL);
  }
  
  $cvURL = null;
  if (!empty($_FILES['cv']['name'])) {
      $cvURL = "uploads/" . basename($_FILES['cv']['name']);
      move_uploaded_file($_FILES['cv']['tmp_name'], $cvURL);
  }
  
  $videoURL = null;
  if (!empty($_FILES['video']['name'])) {
      $videoURL = "uploads/" . basename($_FILES['video']['name']);
      move_uploaded_file($_FILES['video']['tmp_name'], $videoURL);
  }
  
  // SQL sorgusu
  $sql = "INSERT INTO Mentor (IsimSoyisim, Email, Telefon, DogumTarihi, FotoURL, CVURL, DersAdi, Video, Sifre)
  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

  
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssssssss", $isimSoyisim, $email, $telefon, $dogumTarihi, $fotoURL, $cvURL, $dersAdi, $videoURL, $sifreHash);

  
  if ($stmt->execute()) {
    $_SESSION['mentor_id'] = $conn->insert_id; // Mentor ID'yi oturuma ekliyoruz
    header("Location: mentorun-profili.php"); // Mentorun profili sayfasına yönlendirme
    exit();
  } else {
      echo "Hata: " . $stmt->error;
  }
  
  $stmt->close();
}
$conn->close();
?>
