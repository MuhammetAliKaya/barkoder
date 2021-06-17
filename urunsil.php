<?php
include "baglan.php";
if(isset($_SESSION['kadi'])){
if(isset($_POST['sil'])){
$tut=$_POST['urunid'];
$sql1 = "DELETE FROM urun WHERE urunid=$tut";
$urunsil=mysqli_query($baglan,$sql1);

echo'<script>alert("urun silindi!");</script>
<meta http-equiv="refresh" content=" 0.5; urunlistele.php">';
}
}
?>