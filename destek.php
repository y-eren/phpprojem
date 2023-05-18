<?php
session_start();
require_once "config.php";
include_once "index.php";

if(!isset($_SESSION["kisiid"]))
{
    header("Location: girisyap.php");
    exit();
}




$sql = "SELECT * FROM bagisci WHERE id=".$_SESSION["kisiid"];
$cevap = mysqli_query($db, $sql);


 $gelen= mysqli_fetch_array($cevap);
   

     if(isset($_POST["bagisci_not"]) && isset($_POST["miktar"]))
     {
        $id = $_SESSION["kisiid"];
        $isim = $_POST["isim"];
        $soyisim = $_POST["soyisim"];
        $miktar = $_POST["miktar"];
        $not = $_POST["bagisci_not"];
        $tarih = date("Y-m-d");

        if($gelen['miktar'] != 0)
        {
            $miktar += $gelen['miktar'];
        }
        if ($gelen["bagisci_not"] != "") {
            $not = $gelen["bagisci_not"] . $not;
        }
      
        $updateSql = "UPDATE bagisci SET isim='$isim', soyisim='$soyisim', miktar='$miktar', bagisci_not='$not', tarih='$tarih' WHERE id=$id";
        
        if (mysqli_query($db, $updateSql)) {
            
            header("Location: listele.php");
            exit();
        } else {
            echo "Hata: " . mysqli_error($db);
        }


    }

    
    


?>


<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Destek Yap</h2>
                <form method="POST" action="destek.php">
                    <div class="mb-3">
                        <label for="isim" class="form-label">Bağışçı İsmi:</label>
                        <input type="text" name="isim" class="form-control" value="<?php echo $gelen['isim'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="soyisim" class="form-label">Bağışçı Soyismi:</label>
                        <input type="text" name="soyisim" class="form-control" value="<?php echo $gelen['soyisim'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="miktar" class="form-label">Bağış Miktarı:</label>
                        <input type="text" name="miktar" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="bagisci_not" class="form-label">Bağışçı Notu:</label>
                        <textarea name="bagisci_not" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Bağış Yap</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>