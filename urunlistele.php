<?php
include "navbar.php";
if(isset($_SESSION['kadi'])){
// include "baglan.php";
// error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="urunlistele.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
    background-color: #30cfd0 !important;
}
    .cardbg {
        background-color: #fff !important;
        border-radius: 20px !important;
    }
    </style>
    <title>Document</title>
</head>

<body>
                        <?php
                        
                        $tut=$_SESSION['kadi'];
                        $sql1= "SELECT * FROM urun WHERE sahibi='$tut'";
                        $urun=mysqli_query($baglan,$sql1);
                        while($urun2=$urun->fetch_assoc()){
                        
                        ?>
                    
    <div class="container pb-5 mt-3">
        <div class="row">
            <div class="col-xl-9 col-md-8 cardbg">

                <!-- Item-->
                <div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                    <div class="media d-block d-sm-flex text-center text-sm-left">
                        <a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="./assets/urungorseli.png"
                                alt="Product"></a>
                        <div class="media-body pt-3">
                       
                            <h3 class="product-card-title font-weight-semibold border-0 pb-0"><a><?php echo $urun2['urunadi'];?></a></h3>
                            <div class="font-size-sm"><span class="text-muted mr-2">Ürün Barkodu:</span><?php echo $urun2['barkod'];?></div>
                            <div class="font-size-sm"><span class="text-muted mr-2">Alış Fiyatı:</span><?php echo $urun2['alis'];?></div>
                            <div class="font-size-sm"><span class="text-muted mr-2">Satış Fiyatı:</span><?php echo $urun2['satis'];?></div>
                            <div class="font-size-sm"><span class="text-muted mr-2">Ürün Adeti:</span><?php echo $urun2['adet'];?></div>
                        </div>
                    </div>
                    <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left"
                        style="max-width: 10rem;">
                        <br>
                        <br>
                        <br>
                        <form method="POST" action="urunduzenle.php">
                        <input type="hidden" value="<?php echo $urun2['urunid']?>" name="urunid2">
                        <button class="btn btn-outline-secondary btn-sm btn-block mb-2" type="submit" name="duzenle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-refresh-cw mr-1">
                                <polyline points="23 4 23 10 17 10"></polyline>
                                <polyline points="1 20 1 14 7 14"></polyline>
                                <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                            </svg>Ürün Düzenle</button>
                            </form>
                            <form method="POST" action="urunsil.php"> 
                            <input type="hidden" value="<?php echo $urun2['urunid']?>" name="urunid">
                        <button class="btn btn-outline-danger btn-sm btn-block mb-2" type="submit" name="sil">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-trash-2 mr-1">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path
                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                </path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>Ürün sil</button>
                            </form>
                    </div>
                </div>


            </div>
        </div>
    </div>


<?php
                        }
                    }
                    else {echo" listelenmiş ürünleri görebilmek için giriş yapınız veya ürün ekleyiniz";}
?>

</body>

</html>