<?php
include "navbar.php";

    if(isset($_SESSION['kadi']))
    {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="barcodeadd.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="container contact">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="./assets/plusicon.png" alt="image" width="100" height="100" />
                    <h2>Ürün Ekle</h2>
                    <h4>Ürün bilgilerinizi giriniz.</h4>
                </div>
            </div>
            <div class="col-md-9">
            <form method="post" action="urunekle-do.php">
                <div class="contact-form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="urunbarkod">Ürün Barkodu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="urunbarkod" placeholder="Ürün Barkodu"
                                name="urunbarkod" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="urunadi">Ürün Adı</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="urunadi" placeholder="Ürün Adı" name="urunadi" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="alisfiyati">Alış Fiyatı</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="alisfiyati" placeholder="Alış Fiyatı"
                                name="alisfiyati" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="satisfiyati">Satış Fiyatı</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="satisfiyati" placeholder="Satış Fiyatı"
                                name="satisfiyati" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="adet">Ürün Adeti</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="adet" placeholder="Adet" name="adet" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default" name="ekle">Ürün Ekle</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

</body>

</html>
<?php
}
?>