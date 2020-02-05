<?php
define("include", true);
include("../assets/config.php");
if(isset($_GET['durumdegis']))
{
    $id=$_GET['durumdegis'];
    $anlik=$_GET['anlik'];
    if($anlik=='aktif')
    {
        $degis = $db->prepare("UPDATE cms_products SET status='pasif' WHERE product_serial = ?");
        $degis->execute(array($id));

    }
   if ($anlik=='pasif')
    {
        $degis = $db->prepare("UPDATE cms_products SET status='aktif' WHERE product_serial = ?");
        $degis->execute(array($id));

    }


    if($degis)
    {
        echo"   <meta http-equiv='refresh' content='0;URL=../yonetim'>  ";
    }
}
?>