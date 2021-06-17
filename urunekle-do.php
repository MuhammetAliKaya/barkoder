<?php
include "baglan.php";
if(isset($_SESSION['kadi'])){
if(isset($_POST['ekle'])){
    echo "ekleye basıldı";
$sql1="INSERT INTO urun(barkod,urunadi,alis,satis,adet,sahibi)values('".$_POST["urunbarkod"]."','".$_POST["urunadi"]."','".$_POST["alisfiyati"]."','".$_POST["satisfiyati"]."','".$_POST["adet"]."','".$_SESSION["kadi"]."')";
$kayit=mysqli_query($baglan,$sql1);


echo'<script>alert("urun eklendi!");</script>
<meta http-equiv="refresh" content=" 0.5; urunlistele.php">';
}
}
?>