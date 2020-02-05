<?php
date_default_timezone_set('Europe/Istanbul');
 if
 (!defined("include"))
 {
     //basit yönlendirme güvenlik önlemi :)
      echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
       exit();
     }


     else
     {
          try {
               $db = new PDO("mysql:host=localhost;dbname=adananav_cemcarnew;charset=utf8", "adananav_cemcarnew", '$aQ415987aQ$');

          } catch ( PDOException $e ){
               print $e->getMessage();
          }
          $query = $db->query("SELECT * FROM cms_settings")->fetch(PDO::FETCH_ASSOC);

               
     }

?>
