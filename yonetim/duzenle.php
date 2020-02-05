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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Cem Car Sound | Cihaz Düzenleme</title>

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
    <link rel="stylesheet" href="assets/modules/select2/dist/css/select2.min.css"> <link rel="stylesheet" href="assets/modules/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">

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
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Cihaz İşlemleri</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="index.php">Tüm Cihazlar</a></li>
                            <li><a class="nav-link" href="ekle.php">Cihaz Ekle</a></li>
                        </ul>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i><span>Site Ayarları</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="https://boreas.alastyr.com:2096/" target="_blank">Mail Hizmeti</a></li>
                            <li><a class="nav-link" href="ayarlar.php">Genel Ayarlar</a></li>
                        </ul>
                    </li>
                    </li>

                </ul>
            </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Cihaz Düzenleme</h1>
                </div>
                <div class="section-body">
                    <div class="row mt-4">
                        <div class="col-12">
                            <?php
                            include("../islemler/ilanguncelle.php");
                            $id = $_GET['urun'];
                            $ilangetir = $db->query("SELECT * FROM cms_products where product_serial='$id'")->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <div class="card">

                                <div class="card-body">
                                    <form id="contact-form" class="form" enctype="multipart/form-data" method="POST">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>İlan Adı</label>
                                            <input type="text" class="form-control" placeholder="İlan Adını Girin..." name="cihazad" value="<?php echo  $ilangetir['product_name'];  ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Seri Numarası</label>
                                            <input type="text" class="form-control" placeholder="Cihaz Seri Numarasını Girin..." name="serial" value="<?php echo  $ilangetir['product_serial'];  ?>">
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Cihaz Markası</label>
                                            <input type="text" class="form-control" placeholder="Cihaz Seri Numarasını Girin..." name="cihazmarka" value="<?php echo  $ilangetir['product_brand'];  ?>">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Cihaz Tipi</label>
                                            <input type="text" class="form-control" placeholder="Cihaz Seri Numarasını Girin..." name="cihaztip" value="<?php echo  $ilangetir['product_type'];  ?>">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Uyumlu Araba</label>
                                            <input type="text" class="form-control" placeholder="Cihaz Seri Numarasını Girin..." name="uyumluaraba" value="<?php echo  $ilangetir['car_brand'];  ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Depolama</label>
                                        <select class="form-control selectric" name="depolama" id="depolama">
                                            <option value="4GB" <?php if ($ilangetir['product_storage'] == "4GB") echo 'selected' ?>>4GB</option>
                                            <option value="8GB" <?php if ($ilangetir['product_storage'] == "8GB") echo 'selected' ?>>8GB</option>
                                            <option value="16GB" <?php if ($ilangetir['product_storage'] == "16GB") echo 'selected' ?>>16GB</option>
                                            <option value="32GB" <?php if ($ilangetir['product_storage'] == "32GB") echo 'selected' ?>>32GB</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Ram</label>
                                        <select class="form-control selectric" name="ram" id="ram">
                                            <option value="1GB" <?php if ($ilangetir['product_ram'] == "1GB") echo 'selected' ?>>1GB</option>
                                            <option value="2GB" <?php if ($ilangetir['product_ram'] == "2GB") echo 'selected' ?>>2GB</option>
                                            <option value="3GB" <?php if ($ilangetir['product_ram'] == "3GB") echo 'selected' ?>>3GB</option>
                                            <option value="4GB" <?php if ($ilangetir['product_ram'] == "4GB") echo 'selected' ?>>4GB</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Ekran Çözünürlüğü</label>
                                        <select class="form-control selectric" name="cozunurluk" id="cozunurluk">
                                            <option value="1024X640" <?php if ($ilangetir['product_display'] == "1024X640") echo 'selected' ?>>1024X640</option>
                                            <option value="1280X720" <?php if ($ilangetir['product_display'] == "1280X720") echo 'selected' ?>>1280X720</option>
                                            <option value="1920X1080" <?php if ($ilangetir['product_display'] == "1920X1080") echo 'selected' ?>>1920X1080</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <label>Ekran Boyutu</label>
                                        <select class="form-control selectric" name="boyut" id="boyut">
                                            <option value='5"' <?php if ($ilangetir['product_size'] == '5"') echo 'selected' ?>>5"</option>
                                            <option value='7"' <?php if ($ilangetir['product_size'] == '7"') echo 'selected' ?>>7"</option>
                                            <option value='8"' <?php if ($ilangetir['product_size'] == '8"') echo 'selected' ?>>8"</option>
                                            <option value='9"' <?php if ($ilangetir['product_size'] == '9"') echo 'selected' ?>>9"</option>
                                            <option value='12"' <?php if ($ilangetir['product_size'] == '12"') echo 'selected' ?>>12"</option>

                                        </select>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <label>Sistem</label>
                                        <select class="form-control selectric" name="sistem" id="sistem">
                                            <option value="Windows" <?php if ($ilangetir['product_system'] == "Windows") echo 'selected' ?>>Windows</option>
                                            <option value="Android" <?php if ($ilangetir['product_system'] == "Android") echo 'selected' ?>>Android</option>


                                        </select>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <label>Garanti Süresi</label>
                                        <select class="form-control selectric" name="garanti" id="garanti">
                                            <option value="12 AY" <?php if ($ilangetir['product_warranty'] == "12 AY") echo 'selected' ?>>12 AY</option>
                                            <option value="24 AY" <?php if ($ilangetir['product_warranty'] == "24 AY") echo 'selected' ?>>24 AY</option>
                                            <option value="32 AY" <?php if ($ilangetir['product_warranty'] == "32 AY") echo 'selected' ?>>32 AY</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-3 mb-3 col-12">

                                        <div class="">
                                            <textarea name="aciklama" class="summernote-simple"><?php echo $ilangetir['product_description'];?></textarea>
                                        </div>
                                    </div>
<div class="float-right col-12">
    <button  id="submit" name="submit" type="submit" class="btn btn-primary float-right">Güncelle</button>

</div>
                                    <div class="clearfix"></div>
                                </div>
                                    </form>


                            </div>
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
<script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
<script src="assets/modules/summernote/summernote-bs4.js"></script>

<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<script src="assets/js/custom.js"></script>
<script src="../js/sweetalert2.all.min.js"></script>
<script src="../js/sweetalert2.min.js"></script>

</body>
</html>