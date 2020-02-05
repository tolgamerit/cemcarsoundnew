<?php
ob_start();
session_start();
define("include", true);
include("assets/config.php");
include("assets/function.php");
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="language" content="Turkish" />
  <link rel="canonical" href="https://cemcarsound.com/" />
  <meta property="og:title" content="CemCarSound – Adana Multimedya Navigasyon Hizmeti">
  <meta property="og:description" content="CemcarSound - Adana Navigasyon, Geri Dönüş Kamerası Montajı ve Harita Güncelleme ">
  <meta property="og:image" content="https://cemcarsound.com/img/main.jpg">
  <title>İletişim | <?php echo $query['site_name']; ?> | İletişim</title>
    <meta name="keywords" content="<?php echo $query['keywords']; ?>" />
    <meta name="description" content="<?php echo $query['description']; ?>" />
    <?php echo $query['analytics']; ?>
    <link href="img/favicon.ico" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
 
  <link href="css/style.css" rel="stylesheet">
</head>
<body id="body">
  <section id="topbar"  style=" border-bottom: 1px solid #eee;" class="d-none d-lg-block">
    <div class="container clearfix">
    <div class="contact-info float-left">
              <i class="fa fa-envelope-o"></i> <a href="mailto:<?php echo $query['mail']; ?>"><?php echo $query['mail']; ?></a>
              <i class="fa fa-phone"></i> <a href="tel:+90<?php echo $query['phone2']; ?>"><?php echo $query['phone2']; ?></a>
      </div>
      <div class="social-links float-right">
        <a href="<?php echo $query['social_youtube']; ?>" class="twitter" target="_blank"><i class="fa fa-youtube"></i></a>
        <a href="<?php echo $query['social_facebook']; ?>" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="<?php echo $query['social_instagram']; ?>" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
             </div>
    </div>
  </section>
  <header id="header">
    <div class="container mb-5">
        <a class="navbar-brand" href="anasayfa"><img width="150" src="img/logo.png" alt="Cem Car Sound Logo" class="img-fluid"></a>
      <nav id="nav-menu-container">
        <ul class="nav-menu topbar" id="topbar">
          <li><a href="anasayfa">Anasayfa</a></li>
          <li ><a href="hakkimizda">Hakkımızda</a></li>
          <li><a href="hizmetlerimiz">Hizmetlerimiz</a></li>
          <li><a href="urunlerimiz">Ürünlerimiz</a></li>
          <li class="menu-active"><a href="iletisim">İletişim</a></li>
                  </ul>
      </nav>
    </div>
  </header>
 
  <main id="main" class="mt-5">
 <!--FORM-->

 <div class="container mt-5 mb-5">
    <div class="row text-center justify-content-center">
        <div class="col-12 col-md-8 col-lg-7">
         <h1>İletişim</h1>
            <p class="lead">Bizimle iletişim kurabilmek için aşağıda yer alan iletişim formunu doldurabilir veya iletişim bilgilerimizden herhangi biri ile bilgi alabilirsiniz.</p>
        </div>
    </div>

    <div class="row pt-4">

        <div class="col-md-6">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3186.493355859901!2d35.32783431487138!3d36.998024979908294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15288f6b7b4f5fa7%3A0xeff8c934d6fe8f47!2sCEM+CAR+SOUND+Adana+Multimedya+Navigasyon+ve+Ses+Sistemleri+Montaj+Servis+ve+Yedek+Par%C3%A7a+Merkezi!5e0!3m2!1str!2str!4v1477313124563" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>

        <div class="col-md-6 pt-5 pt-md-0">
        <?php if(isset($_POST['submit'])){

$adsoyad = $_POST['adsoyad'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$mesaj = $_POST['mesaj'];
date_default_timezone_set('Europe/Istanbul');

$tarih = $tarih=date('Y-m-d H:i:s');;
$ip = $_SERVER['REMOTE_ADDR'];


$kayit = $db->prepare("insert into  cms_contact SET customer_name=?,email=?,phone=?,message=?,sending_date=?,ip=?");
$insert = $kayit->execute(array($adsoyad, $email, $telefon, $mesaj, $tarih, $ip));


if ($insert)
{
echo '
<div class="alert alert-success" role="alert">
Mesajınız iletilmiştir.
</div>
<meta http-equiv="refresh" content="1;URL=index.php">        
';
}
else
{
echo '
<div class="alert alert-danger" role="alert">
Mesajınız İletilemedi..
</div>
<meta http-equiv="refresh" content="1;URL=index.php">        
';
}

 } ?>
            <form method="POST">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Ad Soyad" name="adsoyad" id="name" required>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <input type="email" class="form-control" placeholder="E-Mail" name="email" id="email" required>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <input type="text" id="phone" class="form-control" placeholder="Telefon" name="telefon" id="phone" required>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <textarea class="form-control" name="mesaj" rows="6" placeholder="Mesajınız..." required></textarea>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                       
                        <input type="submit" name="submit" value="Gönder" class="btn-success">

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--FORM-->
    
  </main>

  <footer class="ftr footer-large p-5 mt-5" style="border-top: 1px solid #eee;">
    <div class="container">
        <div class="row align-items-top text-center">
            <div class="col-lg-9 text-left">
                <div class="row">
                    <div class="col-lg-5">
                        <h3><strong>Site Haritası</strong></h3>
                       
                          <nav id="nav-menu-container  nav flex-column">
                            <ul class="nav-menu  nav flex-column" id="topbar">
                              <li ><a href="anasayfa">Anasayfa</a></li>
                              <li><a href="hakkimizda">Hakkımızda</a></li>
                              <li><a href="hizmetlerimiz">Hizmetlerimiz</a></li>
                              <li><a href="urunlerimiz">Ürünlerimiz</a></li>
                              <li><a href="iletisim">İletişim</a></li>
                                      </ul>
                          </nav>
                     

                    </div>
                    <div class="col-lg-7">
                        <h3 ><strong>İletişim</strong></h3>
                        <div class="mt-5 mb-5">
                            <p>
                                <em class="fa fa-phone mr-3 mt-2"></em> 554 586 42 22 - 545 220 09 01
                            </p>
                            <p>
                                <em class="fa fa-paper-plane mr-3"></em>info@cemcarsound.com
                            </p>
                            <p>
                                <em class="fa fa-map-marker mr-3"></em> Reşatbey Mahallesi Stadyum Güney Kale Karşısı No:29
                                Güreken APT. Seyhan/Adana
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 ml-auto text-lg-left topbar" id="topbar" style="padding-top: 0px;" >
                <h3><strong >Bizi Takip Edin</strong></h3>
                <p class="lead mt-5 mb-5 social-links">

<a class="topbar-a ml-2" target="_blank" href="<?php echo $query['social_facebook']; ?>"><i class="fa fa-facebook-f fa-2x"></i></a>
<a class="topbar-a ml-2" target="_blank" href="<?php echo $query['social_youtube']; ?>"><i class="fa fa-youtube fa-2x"></i></a>
<a class="topbar-a ml-2" target="_blank" href="<?php echo $query['social_instagram']; ?>"><i class="fa fa-instagram fa-2x"></i></a>
</p>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col text-center">
                © 2020, Cem Car Sound. Tüm hakları saklıdır.
            </div>
        </div>
    </div>
</footer>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
