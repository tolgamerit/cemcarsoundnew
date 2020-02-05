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
  <title><?php echo $query['site_name']; ?></title>
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
          <li class="menu-active"><a href="anasayfa">Anasayfa</a></li>
          <li><a href="hakkimizda">Hakkımızda</a></li>
          <li><a href="hizmetlerimiz">Hizmetlerimiz</a></li>
          <li><a href="urunlerimiz">Ürünlerimiz</a></li>
          <li><a href="iletisim">İletişim</a></li>
                  </ul>
      </nav>
    </div>
  </header>
 <section id="intro">
    <div class="intro-content mt-5">
      <h2 class="font-size:25px;">Adana Multimedya Navigasyon ve Ses Sistemleri Montaj Servis ve Yedek Parça Merkezi</h3>
      <div>
             <a href="iletisim.html" class="btn-projects scrollto">İletişim</a>
      </div>
    </div>
    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" class="lazy" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item"  class="lazy" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" class="lazy" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" class="lazy" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" class="lazy" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>
  </section>
  <main id="main">
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
                    <div class="col-lg-12 content">
            <h2 class="text-center">Hakkımızda</h2>
            <h3>
              Cem Car Sound ailesi olarak 1986 yılından bu yana oto ses ve görüntü sistemleri üzerine Adana'da siz değerli müşterilerimize hizmet vermekteyiz. Hizmet kalitesi ve güvenilirliğimizi üst seviyeleri taşıyabilmek için çağımızın gereksinimi olan yeniden yapılanmaya adım atmış bulunmaktayız. Bu doğrultuda müşteri talep ve beklentileri bizim için önem taşımaktadır. Yeni veya eski olsun aracınız bizim için çok önemlidir.Konusunda uzman güleryüzlü ekibimizle sizleri bekliyoruz. Oto teyp, DVD, Navigasyon, Kamera ve Oto Ses Sistemleri tamir, satış ve montaj hizmetini en iyi şekilde vermekteyiz. Türkiye'nin kurumsal firmaları ile bayii olarak çalışarak güncel ve kaliteli ürün tedariği yapmaktayız. Hizmet verdiğimiz gerek satış gerek montaj işlerinde garantimizin sonuna kadar arkasında olup memnuniyetsizlik olması durumunda yasal olan tüketici haklarına uymaktayız Hedefimiz müşteri kitlemizi koruyarak ve yeniliklere ayak uydurup müşteri beklentilerini en üst seviyede karşılamaktır.
            </h3>
                     </div>
        </div>
      </div>
    </section><!-- #about -->
  
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2  class="text-center">Çalıştığımız Markalar</h2>
      </div>
        <div class="owl-carousel clients-carousel">
          <img class="lazy" src="img/markalar/convex.png">
          <img class="lazy" src="img/markalar/cyclone.png">
          <img class="lazy" src="img/markalar/focal.jpg">
          <img class="lazy" src="img/markalar/hertz.jpg">
          <img class="lazy" src="img/markalar/jbl.jpg">
          <img class="lazy" src="img/markalar/kenwood.JPG">
          <img class="lazy" src="img/markalar/magus.jpg">
          <img class="lazy" src="img/markalar/massive.jpg">
          <img class="lazy" src="img/markalar/n.png">
          <img class="lazy" src="img/markalar/naviin.png">
          <img class="lazy" src="img/markalar/navitech.png">
          <img class="lazy" src="img/markalar/necvox.png">
          <img class="lazy" src="img/markalar/pioneer.jpg">
          <img class="lazy" src="img/markalar/sony.jpg">
          <img class="lazy" src="img/markalar/tomtom.jpg">
        </div>
      </div>
    </section>
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2  class="text-center">Hizmetlerimiz</h2>
        </div>
        <div class="row">
<div class="col-lg-1 col-md-1 col-sm-1"></div>
          <div class="col-lg-5 col-md-5 col-sm-5" id="topbar1">
          <div class="contact-info">
                                      
                                      <a target="_blank" href="hizmetlerimiz">
            <div class="card wow fadeInLeft border-0">
              <div class="view overlay">
                <img class="card-img-top"
                  src="img/front1.jpg" class="lazy" alt="Card image cap">
                
              </div>
                      <div class="card-body">
                <h4 class="card-title text-center">Multimedya Montajı</h4>
              </div>   
</a>
</div>    
            </div>
                    </div>
          <div class="col-lg-5 col-md-5 col-sm-5" id="topbar1">
          <div class="contact-info">
                                      <a target="_blank" href="adana-da-multimedya-montaji">
            <div class="card wow fadeInRight border-0">
              <div class="view overlay">
                <img class="card-img-top"
                  src="img/front2.jpg" class="lazy" alt="Card image cap">
              
              </div>
                      <div class="card-body">
                <h4 class="card-title text-center">Oto Ses Sistemi Montajı</h4>
              </div> 
</a>
</div>      
            </div>
                    </div>
          <div class="col-lg-1 col-md-1 col-sm-1"></div>
  </div>
  <div class="row mt-5">
    <div class="col-lg-1 col-md-1 col-sm-1"></div>
    
              <div class="col-lg-5 col-md-5 col-sm-5" id="topbar1">
              <div class="contact-info">
                                      <a target="_blank" href="adana-da-navigasyon-montaji-ve-tamiri">
                <div class="card wow fadeInLeft border-0">
                  <div class="view overlay">
                    <img class="card-img-top"
                      src="img/front3.jpg" class="lazy" alt="Card image cap">
                   
                  </div>
                          <div class="card-body  ">
                    <h4 class="card-title text-center">Navigasyon Montajı ve Tamiri</h4>
                  </div>  
</a>
</div>     
                </div>
                        </div>
            <div class="col-lg-5 col-md-5 col-sm-5" id="topbar1">
              <div class="contact-info">
                                      <a target="_blank" href="adana-da-navigasyon-haritasi-guncelleme">
                <div class="card wow fadeInRight  border-0">
                  <div class="view overlay">
                    <img class="card-img-top"
                      src="img/front4.jpg" class="lazy" alt="Card image cap">
                  
                  </div>
                          <div class="card-body">
                    <h4 class="card-title text-center">Harita Güncelleme</h4>
                  </div>       
                </div>
</a>
</div>
                        </div>
              <div class="col-lg-1 col-md-1 col-sm-1"></div>
      </div>
       </div>
    </section>
    <section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2  class="text-center">Yaptığımız İşler</h2>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 pt-5 pt-sm-0 ">
                <div class="card h-100 " >
    
                    <div class="embed-responsive embed-responsive-16by9 card-img-top ">
                        <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/rIyjCXrgpeY" allowfullscreen=""></iframe>
                    </div>
                    <h4 class="card-title text-center p-3"><a>BMW X3 Android Multimedya</a></h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 pt-5 pt-sm-0 ">
                <div class="card h-100 " >
    
                    <div class="embed-responsive embed-responsive-16by9 card-img-top ">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ryOjOB01B9g" allowfullscreen=""></iframe>
                    </div>
                    <h4 class="card-title text-center p-3 cardis"><a>Toyota Corolla Navimaster</a></h4>
                </div>
            </div> <div class="col-lg-3 col-md-3 col-sm-3 pt-5 pt-sm-0 ">
                <div class="card h-100 " >
    
                    <div class="embed-responsive embed-responsive-16by9 card-img-top ">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qFFk2_F85mk" allowfullscreen=""></iframe>
    
                    </div>
                    <h4 class="card-title text-center p-3 cardis"><a>Volkswagen Jetta For-X</a></h4>
                </div>
            </div>
             <div class="col-lg-3 col-md-3 col-sm-3 pt-5 pt-sm-0 ">
                <div class="card h-100 ">
    
                    <div class="embed-responsive embed-responsive-16by9 card-img-top ">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zC-ETf6cFsA" allowfullscreen=""></iframe>
    
                    </div>
                    <h4 class="card-title text-center p-3 "><a>Peugeot Rcz Convex</a></h4>
                </div>
            </div>
        </div>
                    

                              

                                       
     
      </div>
    </section>
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
                              <li class="menu-active"><a href="anasayfa">Anasayfa</a></li>
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
