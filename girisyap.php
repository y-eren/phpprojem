<?php
session_start();

require_once "config.php";
require_once "index.php";


if (isset($_POST["email"]))
{
    $formemail = $_POST["email"];
    $formsifre = $_POST["password"];

   

    


    $q = mysqli_query($db, "SELECT * FROM `bagisci` WHERE `email`='$formemail' AND `sifre`='$formsifre'");
    $num = mysqli_num_rows($q);

  
     if($num ==1)
    {
        $user = mysqli_fetch_assoc($q);
        $_SESSION["kisiid"] = $user["id"];
       

        ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                <h2>Hoşgeldiniz <?php echo $user["isim"] . " " . $user["soyisim"]; ?></h2>
                <a href="anasayfa.php" class="btn btn-primary">Ana Sayfaya Dön</a>
                </div>

            </div>
        </div>
        <?php
        
 
    }
    else{
        echo "Böyle bir kullanıcı bulunamadı! Şifrenizi kontrol ediniz.";
        exit;
    }




}
else{


?>
<html>
<head>
<meta http-equiv='Content-Type' charset="UTF-8" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Giriş Yap</h1>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="girisyap.php" method="POST">
    <div class="mb-3">
    <label for="email" class="form-label">E-posta:</label>  
    <input type="email" name="email" class="form-control"><br>

    </div>
    <div class="mb-3">
    <label for="password" class="form-label">Şifre:</label>
     <input type="password" name="password" class="form-control"><br>
    </div>
   <div class="text-center">
   <button type="submit" class="btn btn-primary">Giriş Yap!</button>
        </div>
        <form>
    
            </div>
        </div>
        </div>
    


    
</body>
</html>

<?php
}
?>