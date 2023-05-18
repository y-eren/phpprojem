<?php
session_start();
require_once "config.php";

if(isset($_SESSION["kisiid"])){
   session_destroy();
?>
<html>
   <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
   </head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <div class="text-center" style="font-size: 25px; color: blue; font-style: italic;">
                Çıkış Yaptınız
            </div>
            <br>
  
        
            <div class="text-center">
                <a href="anasayfa.php" class="btn btn-primary">Ana Sayfaya dön</a>
            </div>
        </div>
    </div>
</div>
</html>

<?php
   
}

?>



