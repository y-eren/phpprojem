<?php

require_once "config.php";
include_once "index.php";


if(isset($_POST["isim"]))
{
    $formisim = $_POST["isim"];
    $formsoyisim = $_POST["soyisim"];
    $formsifre = $_POST["sifre"];
    $formemail = $_POST["email"];


    $uzunluk = strlen($formsifre);
    $sql = "SELECT email FROM bagisci";
    $cevap = mysqli_query($db, $sql);

    if($uzunluk < 6 || $uzunluk > 15)
    {
        echo "Sifreniz 6 ile 15 harf arasında olmalıdır.";
        exit();
    }

    while($gelen = mysqli_fetch_array($cevap)){
        
        if($gelen["email"] == $formemail)
        {
            ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <div class="text-center" style="font-size: 25px; color: blue; font-style: italic;">
                Bu e-posta zaten kayıtlı
            </div>
            <br>
  
            <p class="text-center" style="font-size: 25px; color: blue; font-style: italic;">
                Tekrardan kayıt sayfasına dönün
            </p>
            <div class="text-center">
                <a href="kayitol.php" class="btn btn-primary">Kayıt ol sayfasına dön</a>
            </div>
        </div>
    </div>
</div>


            <?php
            exit();
        }
    }
    mysqli_query($db, "INSERT INTO bagisci(`isim`, `soyisim`, `email`, `sifre`) VALUES ('".$formisim."', '".$formsoyisim."', '".$formemail."', '".$formsifre."')");
   
   

    
    ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h2>Kaydınız Başarılı bir şekilde oluşturuldu</h2>
                <a href="anasayfa.php" class="btn btn-primary">Ana Sayfaya Dön</a>
                <br>
                <br>
                <br>
                <a href="girisyap.php" class="btn btn-primary">Giriş Yap</a>
            </div>
        </div>
    </div>
    <?php



}

else
{

?>

<html>
<head>
    <meta http-equiv='Content-Type' charset="UTF-8" />
</head>
<body>
    <div class="container">
        <h1 class="text-center">Kayıt Ol</h1>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="kayitol.php" method="POST">
                    <div class="mb-3">
                        <label for="isim" class="form-label">İsim:</label>
                        <input type="text" name="isim" class="form-control"><br>
                    </div>
                    <div class="mb-3">
                        <label for="soyisim" class="form-label">Soyisim:</label>
                        <input type="text" name="soyisim" class="form-control"><br>
                    </div>
                    <div class="mb-3">
                        <label for="sifre" class="form-label">Şifre:</label>
                        <input type="password" name="sifre" class="form-control"><br>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-posta:</label>
                        <input type="email" name="email" class="form-control"><br>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kayıt Ol!</button>
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