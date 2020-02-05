<?php
ob_start();
session_start();
define("include",true);
if(isset($_SESSION['kullanici'] , $_SESSION['parola']))
{
    echo '<script language="javascript">location.href="yonetim/index.php";</script>';
}
include("assets/config.php");
include("assets/function.php");
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Cem Car Sound | Yönetim Giriş</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">


    <link rel="stylesheet" href="yonetim/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="yonetim/assets/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="yonetim/assets/modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="yonetim/assets/css/style.css">
    <link rel="stylesheet" href="yonetim/assets/css/components.css">
</head>

<body>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="img/logo.png" alt="logo" width="300">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header"><h4>Yönetim Paneli Giriş</h4></div>

                        <div class="card-body">
                            <?php
                            //Giriş işlemleri modülü
                            include("islemler/giris.php");
                            ?>
                            <form class="form" role="form" autocomplete="off" id="formLogin" method="POST">
                                <div class="form-group">
                                    <label for="kullanici">Kullanıcı Adı</label>
                                    <input id="kullanici" type="text" class="form-control" name="kullanici" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Kullanıcı Adını Girin
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="parola" class="control-label">Parola</label>

                                    </div>
                                    <input id="parola" type="password" class="form-control" name="parola" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        Parolayı Girin
                                    </div>
                                </div>



                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Giriş
                                    </button>
                                </div>
                            </form>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<script src="yonetim/assets/modules/jquery.min.js"></script>
<script src="yonetim/assets/modules/popper.js"></script>
<script src="yonetim/assets/modules/tooltip.js"></script>
<script src="yonetim/assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="yonetim/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="yonetim/assets/modules/moment.min.js"></script>
<script src="yonetim/assets/js/stisla.js"></script>

<script src="yonetim/assets/js/scripts.js"></script>
<script src="yonetim/assets/js/custom.js"></script>
</body>
</html>