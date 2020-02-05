
<?php
if (!isset($_SESSION['kullanici'], $_SESSION['parola'])) {
  echo '<script language="javascript">location.href="../giris.php";</script>';
}
 if (isset($_POST['sitebaslik']))
 {
     $sitebaslik=$_POST['sitebaslik'];
     $mail=$_POST['mail'];
     $telefon1=$_POST['telefon1'];
     $telefon2=$_POST['telefon2'];
     $anahtarkelime=$_POST['anahtarkelime'];
     $siteaciklama=$_POST['siteaciklama'];
     $google_harita_code=$_POST['google_harita_code'];
     $google_analytics_code=$_POST['google_analytics_code'];
     $facebook=$_POST['facebook'];
     $youtube=$_POST['youtube'];
     $instagram=$_POST['instagram'];
     try {
         $degis = $db->prepare("UPDATE `cms_settings` SET 
  `site_name`=:sitebaslik,
  `keywords`=:anahtarkelime,
  `description`=:siteaciklama,
  `mail`=:mail,
  `phone1`=:telefon1,
  `phone2`=:telefon2,
  `map`=:google_harita_code,
  `analytics`=:google_analytics_code,
  `social_facebook`=:facebook,
  `social_youtube`=:youtube,
  `social_instagram`=:instagram");
         $degis->execute(array('sitebaslik' => $sitebaslik,'anahtarkelime' => $anahtarkelime,'siteaciklama' => $siteaciklama,'mail' => $mail,'telefon1' => $telefon1,'telefon2' => $telefon2,'google_harita_code' => $google_harita_code,'google_analytics_code' => $google_analytics_code, 'facebook' => $facebook,'youtube' => $youtube,'instagram' => $instagram));
         if ($degis)
         {
             echo "
  <div class='container'>
  <div class='row'> 
  <div class='col-md-12'> 
     <div class=\"alert alert-success alert-has-icon\">
                   
                      <div class=\"alert-body\">
                      
                        Düzenleme Başarılı
                      </div>
                    </div>
  </div>
   </div>
   </div>
  
  ";
             echo"   <meta http-equiv='refresh' content='0.85;URL=../yonetim/ayarlar.php'>  ";
         }
     }

     catch (PDOException $e)
     {
         echo"   <meta http-equiv='refresh' content='0.85;URL=index.php'>  ";

     }

 }
if(isset($_POST['cihazad']))
{
    $serial=$_GET['urun'];
    $cihazad=$_POST['cihazad'];
    $serinumara=$_POST['serial'];
    $cihazmarka=$_POST['cihazmarka'];
    $cihaztip=$_POST['cihaztip'];
    $uyumluaraba=$_POST['uyumluaraba'];
    $depolama=$_POST['depolama'];
    $ram=$_POST['ram'];
    $cozunurluk=$_POST['cozunurluk'];
    $boyut=$_POST['boyut'];
    $sistem=$_POST['sistem'];
    $garanti=$_POST['garanti'];
    $aciklama=$_POST['aciklama'];
try
{   

  $degis = $db->prepare("UPDATE `cms_products` SET 
  `product_name`=:cihazad,
  `product_serial`=:serinumara,
  `product_description`=:aciklama,
  `product_brand`=:cihazmarka,
  `product_type`=:cihaztip,
  `car_brand`=:uyumluaraba,
  `product_storage`=:depolama,
  `product_ram`=:ram,
  `product_display`=:cozunurluk,
  `product_size`=:boyut,
  `product_system`=:sistem,
  `product_warranty`=:garanti
    WHERE product_serial=:serial ");
  $degis->execute(array('serial' => $serial,'cihazad' => $cihazad,'serinumara' => $serinumara,'aciklama' => $aciklama,'cihazmarka' => $cihazmarka,'cihaztip' => $cihaztip,'uyumluaraba' => $uyumluaraba,'depolama' => $depolama,
  'ram' => $ram,'cozunurluk' => $cozunurluk,'boyut' => $boyut,'sistem' => $sistem,'garanti' => $garanti));

  echo "
  <div class='container'>
  <div class='row'> 
  <div class='col-md-12'> 
     <div class=\"alert alert-success alert-has-icon\">
                   
                      <div class=\"alert-body\">
                      
                        Düzenleme Başarılı
                      </div>
                    </div>
  </div>
   </div>
   </div>
  
  ";
echo"   <meta http-equiv='refresh' content='0.85;URL=../yonetim'>  ";
 
}
catch (PDOException $e)
{
echo"   <meta http-equiv='refresh' content='0.85;URL=index.php'>  ";

}

      
}


?>