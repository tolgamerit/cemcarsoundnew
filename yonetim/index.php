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
    <title>Cem Car Sound | Yönetim</title>

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
                    <h1>Cihazlar</h1>
                </div>
                <div class="section-body">
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Tüm Cihazlar</h4>
                                </div>
                                <div class="card-body mb-3">

                                    <div class="table">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>Cihaz</th>
                                                <th>Kategori</th>
                                                <th>Uyumlu Araç</th>
                                                <th>Cihaz Seri Numarası</th>
                                                <th>Yayın Durumu</th>
                                            </tr>
                                            <?php
                                            $listelenen = 15;
                                            $sayi = $db->query('select count(*) from cms_products')->fetchColumn();
                                            $toplamsayfa     = ceil($sayi / $listelenen);
                                            $sayfa = isset($_GET['sayfa']) ? (int)$_GET['sayfa'] : 1;
                                            if ($sayfa < 1) $sayfa = 1;
                                            if ($sayfa > $toplamsayfa) $sayfa = $toplamsayfa;
                                            $limit = ($sayfa - 1) * $listelenen;


                                            foreach ($db->query("select product_name,product_brand,car_brand,product_serial,status,seflink FROM cms_products LIMIT $limit, $listelenen") as $gelen) {
                                                ?>
                                             <tr>
                                              <td><?php echo $gelen[0]; ?>
   <div class="table-links">
                                                        <a target="_blank" href="/<?php echo $gelen[5].'-'.$gelen[3] ?>">Görüntüle</a>
                                                        <div class="bullet"></div>
                                                        <a href="duzenle.php?urun=<?php echo $gelen[3];?>">Düzenle</a>
                                                        <div class="bullet"></div>
       <a onclick="Swal.fire({
               title: 'Emin Misiniz?',
               text: 'İşlem Geri Alınamayacak!',
               type: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               cancelButtonText: 'İptal',
               confirmButtonText: 'Evet, Sil!'
               }).then((result) => {
               if (result.value) {
               Swal.fire(
               {
               title: 'Silindi!',
               text:  'İlan Başarıyla Silindi.',
               type: 'success',
               confirmButtonColor: '#3085d6',
               confirmButtonText: 'Kapat'
               }
               ).then(function() {
               window.location = '../islemler/sil.php?sil=<?php echo $gelen[3]; ?>';
               });
               }
               })" href="#" rel="tooltip" class="text-danger sweet-3" data-toggle="confirmation">Sil</a>
                                                    </div>


</td>
                                                 <td><?php echo $gelen[1]; ?> </td>
                                                 <td><?php echo $gelen[2]; ?> </td>
                                                 <td><?php echo $gelen[3]; ?> </td>

<?php
                                                 if ($gelen[4]=='aktif')
                                                {
                                                    ?>

                                                    <td> <div class="badge badge-success">Aktif</div>
                                                        <a onclick=" Swal.fire({
                                                                title: 'Öne Çıkan İlan Durumunu Değiştirmek İstediğinize Emin Misiniz?',

                                                                type: 'question',
                                                                showCancelButton: true,
                                                                confirmButtonColor: '#3085d6',
                                                                cancelButtonColor: '#d33',
                                                                cancelButtonText: 'İptal',
                                                                confirmButtonText: 'Evet, Değiştir!'
                                                                }).then((result) => {

                                                                if (result.value) {

                                                                Swal.fire(
                                                                {
                                                                title: 'Değiştirildi!',
                                                                text:  'Öne Çıkan İlan Durumu Başarıyla Değiştirildi.',
                                                                type: 'success',
                                                                confirmButtonColor: '#3085d6',
                                                                confirmButtonText: 'Kapat'

                                                                }


                                                                ).then(function() {
                                                                window.location = '../islemler/cihazdurum.php?durumdegis=<?php echo $gelen[3];  ?>&<?php echo 'anlik=' . $gelen[4]; ?>';
                                                                });

                                                                }
                                                                })" title="Değiştir" rel="tooltip" class="sweet-3 text-dark" data-toggle="confirmation"><i class="ml-2 fa-2x fas fa-exchange-alt"></i></a>

                                                    </td>
<?php
                                                 }
                                                else
                                                {
                                                    ?>
                                                    <td> <div class="badge badge-danger">Pasif</div>
                                                        <a onclick=" Swal.fire({
                                                                title: 'Öne Çıkan İlan Durumunu Değiştirmek İstediğinize Emin Misiniz?',

                                                                type: 'question',
                                                                showCancelButton: true,
                                                                confirmButtonColor: '#3085d6',
                                                                cancelButtonColor: '#d33',
                                                                cancelButtonText: 'İptal',
                                                                confirmButtonText: 'Evet, Değiştir!'
                                                                }).then((result) => {

                                                                if (result.value) {

                                                                Swal.fire(
                                                                {
                                                                title: 'Değiştirildi!',
                                                                text:  'Öne Çıkan İlan Durumu Başarıyla Değiştirildi.',
                                                                type: 'success',
                                                                confirmButtonColor: '#3085d6',
                                                                confirmButtonText: 'Kapat'

                                                                }


                                                                ).then(function() {
                                                                window.location = '../islemler/cihazdurum.php?durumdegis=<?php echo $gelen[3];  ?>&<?php echo 'anlik=' . $gelen[4]; ?>';
                                                                });

                                                                }
                                                                })" title="Değiştir" rel="tooltip" class="sweet-3 text-dark" data-toggle="confirmation"><i class="ml-2 fa-2x fas fa-exchange-alt"></i></a>
                                                    </td>
                                                 <?php
                                                }
?>
                                             </tr>
                                                <?php
                                            }
                                           ?>

                                        </table>
                                    </div>
                                    <div class="float-left">


                                        <nav>
                                            <ul class="pagination">


                                                <?php
                                                for ($s = 1; $s <= $toplamsayfa; $s++) {
                                                    if ($sayfa == $s) { // eğer bulunduğumuz sayfa ise link yapma.
                                                        echo '<li class="page-item active"><a class="page-link"href="?sayfa=' . $s . '">' . $s . '</a></li>';
                                                    } else {
                                                        echo '<li class="page-item"><a class="page-link"href="?sayfa=' . $s . '">' . $s . '</a></li> ';
                                                    }
                                                }
                                                ?>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>
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

<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<script src="assets/js/custom.js"></script>
<script src="../js/sweetalert2.all.min.js"></script>
<script src="../js/sweetalert2.min.js"></script>

</body>
</html>