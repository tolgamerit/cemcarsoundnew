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
  <title><?php echo $query['site_name']; ?> | Adana da navigasyon haritası güncelleme</title>
    <?php echo $query['analytics']; ?>
    <meta name="keywords" content="<?php echo $query['keywords']; ?>" />
    <meta name="description" content="<?php echo $query['description']; ?>" />
    <link href="img/favicon.ico" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
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
          <li class="menu-active"><a href="hizmetlerimiz">Hizmetlerimiz</a></li>
          <li><a href="urunlerimiz">Ürünlerimiz</a></li>
          <li><a href="iletisim">İletişim</a></li>
                  </ul>
      </nav>
    </div>
  </header>
 
  <main id="main" class="mt-5">
    <div class="container mt-5 mb-5">
        <div class="row mt-5">
            <div class="col-md-3 rounded">
                <div class="list-group topbar " id="topbar">
                    <h3>Hizmetlerimiz</h3>
                    <a href="hizmetlerimiz" class="list-group-item list-group-item-action ">Adana da oto ses sistemi montajı</a>
                    <a href="adana-da-multimedya-montaji" class="list-group-item list-group-item-action">Adana da multimedya montajı</a>
                    <a href="adana-da-navigasyon-montaji-ve-tamiri" class="list-group-item list-group-item-action">Adana da navigasyon montajı ve tamiri</a>
                    <a href="adana-da-navigasyon-haritasi-guncelleme" class="list-group-item list-group-item-action active">Adana da navigasyon haritası güncelleme</a>
                   </div>
            </div>
            <div class="col-md-9 text-left">
    
                    <h2 class="mb-5">Adana da navigasyon haritası güncelleme
                    </h2>
    <div class="row">
        <div class="col-md-7 ">
            <p >Cem Car Sound ailesi olarak her marka navigasyon haritalarınızı konusunda deneyimli ve uzman kadromuz ile güncelleme yapmaktayız. İgo, İgo Primo, Sygic, Tomtom, Garmin, Don't Panic ve daha bir çok yazılımı güncel ve  lisanslı olarak temin etmekteyiz. Aracınınızın navigasyon güncellemesi geldiğinde lütfen önce bize danışın. Düşük masraflarla da güncel hale gelebilir.</p>
        </div>
        <div class="col-md-5">
            <img class="img-fluid wow fadeInRight" src="img/front4.jpg" alt="">
    
        </div>
    </div>
    
            </div>
    
        </div>
    </div>
   
    
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
                              <li ><a href="anasayda">Anasayfa</a></li>
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
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
