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
  <title><?php echo $query['site_name']; ?> | Ürünlerimiz</title>
    <?php echo $query['analytics']; ?>
    <meta name="keywords" content="<?php echo $query['keywords']; ?>" />
    <meta name="description" content="<?php echo $query['description']; ?>" />
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
          <li><a href="hakkimizda">Hakkımızda</a></li>
          <li><a href="hizmetlerimiz">Hizmetlerimiz</a></li>
          <li class="menu-active"><a href="urunlerimiz">Ürünlerimiz</a></li>
          <li><a href="iletisim">İletişim</a></li>
                  </ul>
      </nav>
    </div>
  </header>
 
  <main id="main" class="mt-5">
    <section id="about">
      <div class="container">
        <div class="section-header">
            <h2 class="">Ürünlerimiz</h2>

        </div>
        <?php
$listelenen = 15;
if (isset($_GET['araba']) and isset($_GET['cihaz']))
{
    $sayi = $db->query("SELECT * FROM cms_products where car_brand='".$_GET['araba']."' and product_brand='".$_GET['cihaz']."'");
    if ($sayi->rowCount() > 0)
        $sayi = $sayi->rowCount();
    $toplamsayfa     = ceil($sayi / $listelenen);
    $sayfa = isset($_GET['sayfa']) ? (int)$_GET['sayfa'] : 1;
    if ($sayfa < 1) $sayfa = 1;
    if ($sayfa > $toplamsayfa) $sayfa = $toplamsayfa;
    $limit = ($sayfa - 1) * $listelenen;
}
elseif (isset($_GET['araba']) or isset($_GET['cihaz']))
{
    $sayi = $db->query("SELECT * FROM cms_products where car_brand='".$_GET['araba']."' or product_brand='".$_GET['cihaz']."'");
    if ($sayi->rowCount() > 0)
        $sayi = $sayi->rowCount();
    $toplamsayfa     = ceil($sayi / $listelenen);
    $sayfa = isset($_GET['sayfa']) ? (int)$_GET['sayfa'] : 1;
    if ($sayfa < 1) $sayfa = 1;
    if ($sayfa > $toplamsayfa) $sayfa = $toplamsayfa;
    $limit = ($sayfa - 1) * $listelenen;
}
else
{
    $sayi = $db->query("SELECT * FROM cms_products");
    if ($sayi->rowCount() > 0)
        $sayi = $sayi->rowCount();
    $toplamsayfa     = ceil($sayi / $listelenen);
    $sayfa = isset($_GET['sayfa']) ? (int)$_GET['sayfa'] : 1;
    if ($sayfa < 1) $sayfa = 1;
    if ($sayfa > $toplamsayfa) $sayfa = $toplamsayfa;
    $limit = ($sayfa - 1) * $listelenen;
}
?>
        <div class="row">
               <div class="col-md-3">
                <div class="card card-urunler">
                    <article class="card-group-item">
                        <header class="card-header">
                            <h6 class="ck">Cihaz Marka</h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">
                                <form id="form1" method="GET">
                                    <div class="custom-control custom-radio radio-dark ">
                                        <input type="radio" class="custom-control-input" id="defaultGroupExample11" name="cihaz" value="cyclone"
                                               onchange="$('#form1').submit();" <?php if ($_GET['cihaz']=='cyclone') echo 'checked'; ?>>
                                        <label class="custom-control-label" for="defaultGroupExample11">Cyclone</label>
                                    </div>
                                    <div class="custom-control custom-radio radio-dark ">
                                        <input type="radio" class="custom-control-input" id="defaultGroupExample22" name="cihaz"
                                               value="naviin" onchange="$('#form1').submit();" <?php if ($_GET['cihaz']=='naviin') echo 'checked'; ?>>
                                        <label class="custom-control-label" for="defaultGroupExample22">Naviin</label>
                                    </div>
                                    <div class="custom-control custom-radio radio-dark ">
                                        <input type="radio" class="custom-control-input" id="defaultGroupExample33" name="cihaz"
                                               value="diger" onchange="$('#form1').submit();" <?php if ($_GET['cihaz']=='diger') echo 'checked'; ?>>
                                        <label class="custom-control-label" for="defaultGroupExample33">Diğer</label>
                                    </div>
                                    <div class="custom-control custom-radio radio-dark ">
                                        <input type="radio" class="custom-control-input" id="defaultGroupExample44" name="cihaz"
                                               value="tumcihazlar" onchange="$('#form1').submit();" <?php if ($_GET['cihaz']=='tumcihazlar') echo 'checked'; ?>>
                                        <label class="custom-control-label" for="defaultGroupExample44">Tüm Cihazlar</label>
                                    </div>

                            </div>
                        </div>
                    </article>
                    <article class="card-group-item">
                        <header class="card-header">
                            <h6 class="ck">Cihaz Uyumlu Araç</h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">

                                 <div class="custom-control custom-radio ">
                                     <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="araba" value="mercedes" onchange="$('#form1').submit();" <?php if ($_GET['araba']=='mercedes') echo 'checked'; ?>>
                                     <label class="custom-control-label" for="defaultGroupExample1">Mercedes</label>
                                 </div>
                                 <div class="custom-control custom-radio">
                                     <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="araba" value="nissan"  onchange="$('#form1').submit();" <?php if ($_GET['araba']=='nissan') echo 'checked'; ?>>
                                     <label class="custom-control-label" for="defaultGroupExample2">Nissan</label>
                                 </div>
                                 <div class="custom-control custom-radio">
                                     <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="araba" value="diger" onchange="$('#form1').submit();" <?php if ($_GET['araba']=='diger') echo 'checked'; ?>>
                                     <label class="custom-control-label" for="defaultGroupExample3">Diğer</label>
                                 </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="defaultGroupExample4" name="araba" value="tumaraclar" onchange="$('#form1').submit();" <?php if ($_GET['araba']=='tumaraclar') echo 'checked'; ?>>
                                    <label class="custom-control-label" for="defaultGroupExample4">Tüm Araçlar</label>
                                </div>

                                </form>
                            </div>
                        </div>
                    </article>

                </div>
            </div>    
            <div class="col-md-9"> 
            <div class="row">  
            <?php
                    $araba=$_GET['araba'];
                    $cihaz=$_GET['cihaz'];
if ($cihaz=='tumcihazlar') $cihaz=null;
                    if ($araba=='tumaraclar') $araba=null;
                    if (isset($araba) and isset($cihaz))
                    {
                    $say = 1; foreach($db->query("SELECT * FROM cms_products where car_brand='".$_GET['araba']."' and product_brand='".$_GET['cihaz']."' order by id asc LIMIT $limit,$listelenen") as $bbb){
                        ?>
              
                    <div class="col-md-3 mt-3 mb-3 col-sm-6">
                        <div class="product-grid9">
                            <div class="product-image9">
                                <a href=" <?php echo $bbb['seflink'].'-'.$bbb['product_serial'];?>">
                                <img class="pic-1" src="<?php echo $bbb['product_picture1']; ?>">
                                    <img class="pic-2" src="<?php echo $bbb['product_picture2']; ?>">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content ">
                            <h3 class="price"><a href="<?php echo $bbb['seflink']; ?>"><?php echo $bbb['product_name']; ?></a></h3>
                                <a class="add-to-cart" href="<?php echo $bbb['seflink']; ?>">Ürünü Görüntüle</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }}
                    elseif (isset($araba) or isset($cihaz))
                    {
                    $say = 1; foreach($db->query("select * from cms_products where car_brand='".$_GET['araba']."' or product_brand='".$_GET['cihaz']."' order by id asc LIMIT $limit,$listelenen") as $bbb){
                    ?>
                        <div class="col-md-3 mt-3 mb-3 col-sm-6">
                            <div class="product-grid9">
                                <div class="product-image9">
                                    <a href=" <?php echo $bbb['seflink'].'-'.$bbb['product_serial'];?>">
                                        <img class="pic-1" src="<?php echo $bbb['product_picture1']; ?>">
                                        <img class="pic-2" src="<?php echo $bbb['product_picture2']; ?>">
                                    </a>
                                    <a href="#" class="fa fa-search product-full-view"></a>
                                </div>
                                <div class="product-content">
                                    <h3 class="price"><a href="<?php echo $bbb['seflink']; ?>"><?php echo $bbb['product_name']; ?></a></h3>
                                    <a class="add-to-cart" href="<?php echo $bbb['seflink']; ?>">Ürünü Görüntüle</a>
                                </div>
                            </div>
                        </div>
                        <?php  }}
                    else
                    {
                    $say = 1; foreach($db->query("select * from cms_products order by id asc LIMIT $limit,$listelenen") as $bbb){
                        ?>
                        <div class="col-md-3 mt-3 mb-3 col-sm-6">
                            <div class="product-grid9">
                                <div class="product-image9">
                                    <a href=" <?php echo $bbb['seflink'].'-'.$bbb['product_serial'];?>">
                                        <img class="pic-1" src="<?php echo $bbb['product_picture1']; ?>">
                                        <img class="pic-2" src="<?php echo $bbb['product_picture2']; ?>">
                                    </a>
                                    <a href="#" class="fa fa-search product-full-view"></a>
                                </div>
                                <div class="product-content">
                                    <h3 class="price"><a href="<?php echo $bbb['seflink']; ?>"><?php echo $bbb['product_name']; ?></a></h3>
                                    <a class="add-to-cart" href="<?php echo $bbb['seflink']; ?>">Ürünü Görüntüle</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    } }
                    ?>
            </div>
          
        </div>
                </div>
                <nav aria-label="Page navigation example mt-5 mb-5">
                <ul class="pagination pg-blue justify-content-center">
                    <?php
                    for ($s = 1; $s <= $toplamsayfa; $s++) {
                        if ($sayfa == $s) { // eğer bulunduğumuz sayfa ise link yapma.
                            echo '<li class="page-item active"><a class="page-link"href="?sirala=' . $_GET['sirala'] . '&sayfa=' . $s . '">' . $s . '</a></li>';
                        } else {
                            echo '<li class="page-item"><a class="page-link"href="?sirala=' . $_GET['sirala'] . '&sayfa=' . $s . '">' . $s . '</a></li> ';
                        }
                    }
                    ?>
                </ul>
            </nav>   
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
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
