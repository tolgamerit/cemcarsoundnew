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

    <title>Cem Car Sound | Cihaz Ekleme</title>



    <!-- General CSS Files -->

    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/modules/dropzonejs/dropzone.css">



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

                    <h1>Cihaz Ekleme</h1>

                </div>

                <div class="section-body">

                    <div class="row mt-4">

                        <div class="col-12">

                            <?php

                            include("../islemler/ilanekle.php");

                       ?>

                            <div class="card">



                                <div class="card-body">

                                    <form id="contact-form" class="form" enctype="multipart/form-data" method="POST">

                                        <div class="row">

                                            <div class="col-6">

                                                <div class="form-group">

                                                    <label>İlan Adı</label>

                                                    <input type="text" class="form-control" placeholder="İlan Adını Girin..." name="cihazad" >

                                                </div>

                                            </div>

                                            <div class="col-6">

                                                <div class="form-group">

                                                    <label>Seri Numarası</label>

                                                    <input type="text" class="form-control" placeholder="Cihaz Seri Numarasını Girin..." name="serial" >

                                                </div>

                                            </div>



                                            <div class="col-4">

                                                <div class="form-group">

                                                    <label>Cihaz Markası</label>

                                                    <input type="text" class="form-control" placeholder="Cihaz Markasını Girin..." name="cihazmarka">

                                                </div>

                                            </div>

                                            <div class="col-4">

                                                <div class="form-group">

                                                    <label>Cihaz Tipi</label>

                                                    <input type="text" class="form-control" placeholder="Cihaz Tipini Girin..." name="cihaztip" >

                                                </div>

                                            </div>

                                            <div class="col-4">

                                                <div class="form-group">

                                                    <label>Uyumlu Araba</label>

                                                    <input type="text" class="form-control" placeholder="Uyumlu Arabayı Girin..." name="uyumluaraba">

                                                </div>

                                            </div>



                                            <div class="col-md-4">

                                                <label>Depolama</label>

                                                <select class="form-control selectric" name="depolama" id="depolama">

                                                    <option value="4GB" >4GB</option>

                                                    <option value="8GB" >8GB</option>

                                                    <option value="16GB" >16GB</option>

                                                    <option value="32GB" >32GB</option>

                                                </select>

                                            </div>

                                            <div class="col-md-4">

                                                <label>Ram</label>

                                                <select class="form-control selectric" name="ram" id="ram">

                                                    <option value="1GB">1GB</option>

                                                    <option value="2GB" >2GB</option>

                                                    <option value="3GB" >3GB</option>

                                                    <option value="4GB" >4GB</option>

                                                </select>

                                            </div>

                                            <div class="col-md-4">

                                                <label>Ekran Çözünürlüğü</label>

                                                <select class="form-control selectric" name="cozunurluk" id="cozunurluk">

                                                    <option value="1024X640" >1024X640</option>

                                                    <option value="1280X720">1280X720</option>

                                                    <option value="1920X1080" >1920X1080</option>

                                                </select>

                                            </div>

                                            <div class="col-md-4 mt-3">

                                                <label>Ekran Boyutu</label>

                                                <select class="form-control selectric" name="boyut" id="boyut">

                                                    <option value='5"'>5"</option>

                                                    <option value='7"' >7"</option>

                                                    <option value='8"'>8"</option>

                                                    <option value='9"' >9"</option>

                                                    <option value='12"' >12"</option>



                                                </select>

                                            </div>

                                            <div class="col-md-4 mt-3">

                                                <label>Sistem</label>

                                                <select class="form-control selectric" name="sistem" id="sistem">

                                                    <option value="Windows" >Windows</option>

                                                    <option value="Android">Android</option>





                                                </select>

                                            </div>

                                            <div class="col-md-4 mt-3">

                                                <label>Garanti Süresi</label>

                                                <select class="form-control selectric" name="garanti" id="garanti">

                                                    <option value="12 AY" >12 AY</option>

                                                    <option value="24 AY" >24 AY</option>

                                                    <option value="32 AY" >32 AY</option>

                                                </select>

                                            </div>

                                            <div class="form-group mt-3 mb-3 col-12">

                                                <label>Meta Description</label>



                                                <div class="">

                                                    <textarea name="description" class="summernote-simple "></textarea>

                                                </div>

                                            </div>

                                            <div class="form-group mt-1 mb-3 col-12">


                                            <label>İçerik Açıklaması</label>

                                                <div class="">

                                                    <textarea name="aciklama" class="summernote-simple"></textarea>

                                                </div>

                                            </div>

                                            <div class="form-group mt-3 mb-3 col-12 ">

                                                <div class="custom-file">

                                                    <input type="file" class="custom-file-input" name="upload[]" id="customFile" multiple="multiple"  required>

                                                    <label class="custom-file-label" for="customFile">Ürün Resimleri(Max 2 Adet)</label>

                                                </div>

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

<script src="assets/modules/dropzonejs/min/dropzone.min.js"></script>



<!-- Page Specific JS File -->

<script src="assets/js/page/components-multiple-upload.js"></script>

<!-- Template JS File -->

<script src="assets/js/scripts.js"></script>

<script src="assets/js/custom.js"></script>

<script src="../js/sweetalert2.all.min.js"></script>

<script src="../js/sweetalert2.min.js"></script>



</body>

</html>