<?php
ob_start();
session_start();
define("include", true);
include("assets/config.php");
include("assets/function.php");
$serial = $_GET['serial'];
$query1 = $db->prepare("SELECT * FROM cms_products WHERE product_serial = :serial");
$query1->execute(array(":serial" => $serial));
if ($query1->rowCount()) {
foreach ($query1 as $cek) {
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
  <title><?php echo $query['site_name']; ?> | <?php echo $cek['product_name']; ?> </title>
    <?php echo $query['analytics']; ?>
    <meta name="keywords" content="<?php echo $query['keywords']; ?>" />
    <meta name="description" content="<?php echo $query['description']; ?>" />
    <link href="img/favicon.ico" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/flickity.css" media="screen">
  <link rel="stylesheet" href="css/photoswipe.css">
  <link rel="stylesheet" href="css/default-skin/default-skin.css">
  <script src="js/photoswipe.min.js"></script>
  <script src="js/photoswipe-ui-default.min.js"></script>
 
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
          <li><a href="hakkimizda">Hakkımızda</a></li>
          <li><a href="hizmetlerimiz">Hizmetlerimiz</a></li>
          <li class="menu-active"><a href="urunlerimiz">Ürünlerimiz</a></li>
          <li><a href="iletisim">İletişim</a></li>
                  </ul>
      </nav>
    </div>
  </header>
 
  <main id="main" class="mt-5">
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Kapat (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Paylaş"></button>
                    <button class="pswp__button pswp__button--fs" title="Tam Ekran"></button>
                    <button class="pswp__button pswp__button--zoom" title="Yakınlaştır/Uzaklaştır"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <section id="about">
      <div class="container">
          
               <div class="row">
            <h3 class="p-3"> <strong><?php echo $cek['product_name']; ?></strong> </h3>
        </div>
      <div class="row">
         
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="carousel mb-3 my-gallery" data-flickity='{ "autoPlay": true }'>
                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a class="" href="<?php echo $cek['product_picture1']; ?>" itemprop="contentUrl" data-size="1920x1080">
                            <img class="rounded" src="<?php echo $cek['product_picture1']; ?>" />
                        </a>
                    </figure> <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a class="" href="<?php echo $cek['product_picture2']; ?>" itemprop="contentUrl" data-size="1920x1080">
                            <img class="rounded" src="<?php echo $cek['product_picture2']; ?>" />
                        </a>
                    </figure>
                </div>
                <div id="topbar">
                <div class="row p-3 contact-info" >
                    <p class="h6 lead">
                    Soru ve fiyat için lütfen bizi arayın. </p><a class="" href="tel:+905452200901"><span class="fa fa-phone ml-2"></span> +90 546 568 12 37</a>
                </div>
            </div>
            </div>
          
            <div class="col-lg-6 col-md-6 col-sm-6">
                <p class="text-center h3">Teknik Özellikler</p>
                        <div class="row">
                           <div class="col-md-4 mb-3 mt-3">
                               <div class="card ck1">
                                   <div class="view overlay text-center">
                                       <i class=" card-img-top fa fa-hdd-o fa-4x"></i>
                
                                   </div>
                                   <div class="card-body">
                                       <h6 class="card-title text-center">DEPOLAMA</h6>
                                       <p class="card-text text-center"><?php echo $cek['product_storage']; ?></p>
                                   </div>
                               </div>
                           </div>
                            <div class="col-md-4 mb-3 mt-3">
                                <div class="card ck1">
                                    <div class="view overlay text-center">
                                        <i class=" card-img-top fa fa-cog fa-4x"></i>
                
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title text-center">RAM</h6>
                                        <p class="card-text text-center"><?php echo $cek['product_ram']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 mt-3">
                                <div class="card ck1">
                                    <div class="view overlay text-center">
                                        <i class=" card-img-top fa fa-shield fa-4x"></i>
                
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title text-center">GARANTİ</h6>
                                        <p class="card-text text-center"><?php echo $cek['product_warranty']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3 mt-3">
                                <div class="card ck1">
                                    <div class="view overlay text-center">
                                        <i class=" card-img-top fa fa-desktop fa-4x"></i>
                
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title text-center">ÇÖZÜNÜRLÜK</h6>
                                        <p class="card-text text-center"><?php echo $cek['product_display']; ?></p>
                                    </div>
                                </div>
                
                            </div>
                            <div class="col-md-4 mb-3 mt-3">
                                <div class="card ck1">
                                    <div class="view overlay text-center">
                
                                        <i class=" card-img-top fa fa-arrows-alt fa-4x"></i>
                
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title text-center">BOYUT</h6>
                                        <p class="card-text text-center"><?php echo $cek['product_size']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 mt-3">
                                <div class="card ck1">
                                    <div class="view overlay text-center">
                                        <i class=" card-img-top fa fa-microchip fa-4x"></i>
                
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title text-center">SİSTEM</h6>
                                        <p class="card-text text-center"><?php echo $cek['product_system']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class="row">
                    <div class="col-md-6 mb-3 mt-3">
                        <div class="card ck1">
                            <div class="view overlay text-center">
                                <i class=" card-img-top fa fa-barcode fa-4x"></i>
                
                            </div>
                            <div class="card-body">
                                <h6 class="card-title text-center">SERI NUMARA</h6>
                                <p class="card-text text-center"><?php echo $cek['product_serial']; ?></p>
                            </div>
                        </div>
                
                    </div>
                    <div class="col-md-6 mb-3 mt-3">
                        <div class="card ck1">
                            <div class="view overlay text-center">
                                <i class=" card-img-top fa fa-car fa-4x"></i>
                
                            </div>
                            <div class="card-body">
                                <h6 class="card-title text-center">UYUMLU ARABA</h6>
                                <p class="card-text text-center"><?php echo $cek['car_brand']; ?></p>
                            </div>
                        </div>
                
                    </div>
                
                </div>
                    </div>
      </div>
      <div class="row mt-5">
        <strong class="h4">Genel Özellikler</strong>
        <div class="p-5 border border-light rounded">
            <p><?php echo $cek['product_description']; ?></p>
        </div>
    </div>
         
      </div>
    </section>
    <?php }}?>
   
    
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
 
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script type="text/javascript" src="js/slick.js"></script>
<script src="js/flickity.pkgd.min.js"></script>
<script src="js/slider-urunler.js"></script>

</body>
</html>
