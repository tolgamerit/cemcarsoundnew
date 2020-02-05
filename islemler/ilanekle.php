<?php
if (!isset($_SESSION['kullanici'], $_SESSION['parola'])) {
    echo '<script language="javascript">location.href="../giris.php";</script>';
}
if(isset($_POST['cihazad'])) {
    $cihazad = $_POST['cihazad'];
    $serinumara = $_POST['serial'];
    $cihazmarka = $_POST['cihazmarka'];
    $cihaztip = $_POST['cihaztip'];
    $uyumluaraba = $_POST['uyumluaraba'];
    $depolama = $_POST['depolama'];
    $ram = $_POST['ram'];
    $cozunurluk = $_POST['cozunurluk'];
    $boyut = $_POST['boyut'];
    $sistem = $_POST['sistem'];
    $garanti = $_POST['garanti'];
    $aciklama = $_POST['aciklama'];
    $seflink = seo($cihazad);
    $keywords = $_POST['description'];
    $description = $_POST['description'];

    try {
        $a = 0;
        while ($_FILES["upload"]["tmp_name"][$a] != NULL) {
            $kaynak = $_FILES["upload"]["tmp_name"][$a];
            $dosyaadi = $_FILES["upload"]["name"][$a];
            $dosyatipi = $_FILES["upload"]["type"][$a];
            $dboyut = $_FILES["upload"]["size"][$a];
            //hedef uzantısı sunucuya göre farklıık gösteriyor
            $hedef = "../upload/pictures/";
            $uzanti = substr($dosyaadi, -4);
            $yeniad = substr(md5(uniqid(rand())), 0, 10);
            $yeniresimadi[$a] = $yeniad . $uzanti;
            $yukle = move_uploaded_file($kaynak, $hedef . '/' . $yeniresimadi[$a]);
            $resim[$a] = "upload/pictures/" . $yeniresimadi[$a];
            $a++;

        }


        $kayit = $db->prepare("insert into cms_products SET  `product_name`=?, `keywords`=?, `description`=?, `product_picture1`=?, `product_picture2`=?, `product_description`=?,
     `seflink`=?, `product_brand`=?, `car_brand`=?, `product_type`=?, `product_storage`=?, `product_ram`=?, `product_display`=?, `product_size`=?,
     `product_system`=?, `product_serial`=?, `product_warranty`=?,`status`=?");
        $ck = $kayit->execute(array($cihazad, $keywords, $description, $resim[0], $resim[1], $aciklama, $seflink, $cihazmarka, $uyumluaraba, $cihaztip, $depolama, $ram, $cozunurluk, $boyut, $sistem, $serinumara,
            $garanti, 'aktif'));

        if ($ck) {
            ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-has-icon">

                            <div class="alert-body">

                                İlan Eklendi
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            echo "   <meta http-equiv='refresh' content='0.85;URL=index.php'>  ";

        } else {
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-has-icon">

                            <div class="alert-body">

                                İlan Eklemede Hata Oluştu
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            //echo"   <meta http-equiv='refresh' content='0.85;URL=ekle.php'>  ";

        }


    } catch (PDOException $e) {
        echo "   <meta http-equiv='refresh' content='0.85;URL=home.php'>  ";

    }
}
?>