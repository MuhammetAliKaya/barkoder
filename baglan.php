<?php
session_start();
$vt_sunucu="localhost";
$vt_kullanici="285446";
$vt_sifre="123456";
$vt_adi="285446";
$baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);


if ($baglan -> connect_errno)
{
    echo("Bir hata meydana geldi!");
    exit;
}


//echo ("Bağlantı sağlandı!");


?>