<?php
include "baglan.php";
$flag1=1;

if(isset($_POST['kayıt'])){
    echo "kayıta basıldı";
$sql1="INSERT INTO uye(kadi,ksifre)values('".$_POST["kadi"]."','".$_POST["pass"]."')";
$kayit=mysqli_query($baglan,$sql1);
echo'<script>alert("Kayıt basarili giris yapiniz");</script>
<meta http-equiv="refresh" content=" 0.5; index.php">';

}


$sql2= "SELECT * FROM uye";
$uye=mysqli_query($baglan,$sql2);
if(isset($_POST['giris'])){
if ($uye->num_rows>0) {
    while ($uye2 =$uye->fetch_assoc()) {
       if ($_POST['kadi']==$uye2["kadi"] && $_POST['pass']==$uye2["ksifre"]) {
           echo "ÇALIŞAN GİRİŞİ YAPILDI ,AKTARILIYOR...";
            $flag1=0;
           $_SESSION['kadi']=$uye2["kadi"];
           $_SESSION['ksifre']=$uye2["ksifre"];


           
           echo'<meta http-equiv="refresh" content=" 0.5; urunekle.php">';
        

       }
    }
 }
 if($flag1){

    echo'<script>alert("Şifre ve/veya Kullanıcı Adı yanlış!");</script>
			<meta http-equiv="refresh" content=" 0.5; index.php">';
 }

}

?>