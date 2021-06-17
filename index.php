<?php
include "baglan.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link rel="stylesheet" href="login.css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>

   <div class="sidenav">
      <div class="login-main-text">
         <h2>Barkoder<br> Giriş Sayfası</h2>
         <p>Giriş yap veya üye ol!.</p>
      </div>
   </div>
   <div class="main">
      <div class="col-md-6 col-sm-12">
         <div class="login-form">
            <form method="post" action="giris_kayıt.php">
               <div class="form-group">
                  <label>Kullanıcı Adı</label>
                  <input name="kadi" type="text" class="form-control" placeholder="Kullanıcı Adı" required>
               </div>
               <div class="form-group">
                  <label>Şifre</label>
                  <input name="pass" type="password" class="form-control" placeholder="Şifre" required>
               </div>
               <button name="giris" type="submit" class="btn btn-black">Giriş Yap</button>
               <button name="kayıt" type="submit" class="btn btn-secondary">Kaydol</button>
            </form>
         </div>
      </div>
   </div>

</body>

</html>