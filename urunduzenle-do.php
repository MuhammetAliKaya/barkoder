<?php
include "baglan.php";
if(isset($_SESSION['kadi'])){
echo $_POST['urunid3'];
if(isset($_POST['gonder'])){
$tut=$_POST['urunid3'];

$tut1=$_POST['urunbarkod'];
$tut2=$_POST['urunadi'];
$tut3=$_POST['alisfiyati'];
$tut4=$_POST['satisfiyati'];
$tut5=$_POST['adet'];

$sql1 = "UPDATE urun SET barkod ='$tut1',urunadi ='$tut2',alis ='$tut3',satis ='$tut4',adet ='$tut5'  WHERE urunid =$tut";
$sonuc=mysqli_query($baglan,$sql1);
echo'<script>alert("urun duzenlendi");</script>
<meta http-equiv="refresh" content=" 0.5; urunlistele.php">';
}
}

?>