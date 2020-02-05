<?php
ob_start();
session_start();
define("include", true);
include("../assets/config.php");
include("../assets/function.php");
if (!isset($_SESSION['kullanici'], $_SESSION['parola'])) {
    echo '<script language="javascript">location.href="../giris.php";</script>';
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Cem Car Sound | Ayarlar</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="../css/sweetalert2.min.css">

    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Start GA -->

    <!-- /END GA --></head>

<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>

            </form>
            <ul class="navbar-nav navbar-right">


                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">

                        <div class="d-sm-none d-lg-inline-block">Merhaba, ADMIN</div></a>
                    <div class="dropdown-menu dropdown-menu-right">

                        <a href="ayarlar.php" class="dropdown-item has-icon">
                            <i class="fas fa-cog"></i> Site Ayarları
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="cikis.php" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Çıkış
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index.php">Cem Car Sound</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.php">CCS</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">İşlemler</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fab fa-product-hunt"></i><span>Cihaz İşlemleri</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="index.php">Tüm Cihazlar</a></li>
                            <li><a class="nav-link" href="ekle.php">Cihaz Ekle</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i><span>Site Ayarları</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="https://boreas.alastyr.com:2096/" target="_blank">Mail Hizmeti</a></li>

                            <li><a class="nav-link" href="ayarlar.php">Genel Ayarlar</a></li>
                        </ul>
                    </li>
                </ul>

            </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">

                    <h1>Site Ayarları</h1>

                </div>

                <div class="section-body">


                    <div id="output-status"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">

                                <div class="card-body">
                                    <ul class="nav nav-pills flex-column">
                                        <li class="nav-item"><a href="#" class="nav-link active">Genel Ayarlar</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <?php
                            include("../islemler/ilanguncelle.php");

                            $ilangetir = $db->query("SELECT * FROM cms_settings")->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <form id="setting-form" method="POST">
                                <div class="card" id="settings-card">

                                    <div class="card-body">
                                        <div class="form-group row align-items-center">
                                            <label for="sitebaslik" class="form-control-label col-sm-3 text-md-right">Site Başlığı</label>
                                            <div class="col-sm-6 col-md-9">
                                                <input type="text" name="sitebaslik" class="form-control" id="sitebaslik" value="<?php echo  $ilangetir['site_name'];  ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="mail" class="form-control-label col-sm-3 text-md-right">Ana Mail Adresi</label>
                                            <div class="col-sm-6 col-md-9">
                                                <input type="text" name="mail" class="form-control" id="mail" value="<?php echo  $ilangetir['mail'];  ?>"required>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="telefon1" class="form-control-label col-sm-3 text-md-right">Telefon-1</label>
                                            <div class="col-sm-6 col-md-9">
                                                <input type="text" name="telefon1" class="form-control" id="telefon1" value="<?php echo  $ilangetir['phone1'];  ?>"required>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="telefon2" class="form-control-label col-sm-3 text-md-right">Telefon-2</label>
                                            <div class="col-sm-6 col-md-9">
                                                <input type="text" name="telefon2" class="form-control" id="telefon2" value="<?php echo  $ilangetir['phone2'];  ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="anahtarkelime" class="form-control-label col-sm-3 text-md-right">Anahtar Kelimeler</label>
                                            <div class="col-sm-6 col-md-9">
                                                <textarea class="form-control" name="anahtarkelime" id="anahtarkelime" required><?php echo  $ilangetir['keywords'];  ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="siteaciklama" class="form-control-label col-sm-3 text-md-right">Site Açıklama Metni</label>
                                            <div class="col-sm-6 col-md-9">
                                                <textarea class="form-control" name="siteaciklama" id="siteaciklama" required><?php echo  $ilangetir['description'];  ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="form-control-label col-sm-3 mt-3 text-md-right">Google Harita Yerleştirme</label>
                                            <div class="col-sm-6 col-md-9">
                                                <textarea class="form-control " name="google_harita_code" required><?php echo  $ilangetir['map'];  ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="form-control-label col-sm-3 mt-3 text-md-right">Google Analytics Code</label>
                                            <div class="col-sm-6 col-md-9">
                                                <textarea class="form-control " name="google_analytics_code" required><?php echo  $ilangetir['analytics'];  ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="facebook" class="form-control-label col-sm-3 text-md-right">Facebook</label>
                                            <div class="col-sm-6 col-md-9">
                                                <input type="text" name="facebook" class="form-control" id="facebook" value="<?php echo  $ilangetir['social_facebook'];  ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="instagram" class="form-control-label col-sm-3 text-md-right">Instagram</label>
                                            <div class="col-sm-6 col-md-9">
                                                <input type="text" name="instagram" class="form-control" id="instagram" value="<?php echo  $ilangetir['social_instagram'];  ?>"
                                            </div>

                                        </div>


                                    </div>     <div class="form-group row align-items-center">
                                        <label for="youtube" class="form-control-label col-sm-3 text-md-right">Youtube</label>
                                        <div class="col-sm-6 col-md-9">
                                            <input type="text" name="youtube" class="form-control" id="youtube" value="<?php echo  $ilangetir['social_youtube'];  ?>"
                                        </div>
                                    </div>
                                    </div>
                                    <div class="card-footer bg-whitesmoke text-md-right">
                                        <button class="btn btn-primary" id="save-btn">Güncelle</button>

                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2020 Cem Car Sound
            </div>
            <div class="footer-right">

            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="assets/modules/jquery.min.js"></script>
<script src="assets/modules/popper.js"></script>
<script src="assets/modules/tooltip.js"></script>
<script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="assets/modules/moment.min.js"></script>
<script src="assets/js/stisla.js"></script>

<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<script src="assets/js/custom.js"></script>
<script src="../js/sweetalert2.all.min.js"></script>
<script src="../js/sweetalert2.min.js"></script>

</body>
</html>