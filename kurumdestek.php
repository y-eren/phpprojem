<?php
session_start();
require_once "config.php";
include_once "index.php";




if(!isset($_SESSION["kisiid"])){
    header("Location: girisyap.php");
    
}

else {
    $sql = "SELECT * FROM kurumlar WHERE kid=".$_GET["id"];
    $id1 = $_SESSION["kisiid"];
    $sql2 = "SELECT * FROM bagisci WHERE id=$id1";
$cevap = mysqli_query($db, $sql);
$cevap2 = mysqli_query($db, $sql2);


 $gelen= mysqli_fetch_array($cevap);
 
   

     if(isset($_POST["isim"]) && isset($_POST["miktar"])&& isset($_POST["soyisim"]))
     {
        // bagisci arrayi
        $gelen2 = mysqli_fetch_array($cevap2);
      
        
       
        $miktargirilen = $_POST["miktar"];
        $kurummiktar = $gelen["miktar"];
        $bagiscimiktar= $gelen2["miktar"];
      

        $kurummiktar += $miktargirilen;
            
            if($_POST["isim"] == $gelen2["isim"] && $_POST["soyisim"] == $gelen2["soyisim"])
            {
             
                $bagiscimiktar += $miktargirilen;
            
                $update2sql = "UPDATE bagisci SET miktar='$bagiscimiktar' WHERE id=$id1";
                if (mysqli_query($db, $update2sql) ) {
                    
                    header("Location: kurumlar.php");
                  
                } 
                $update1Sql = "UPDATE kurumlar SET miktar='$kurummiktar' WHERE kid={$_GET['id']}";
            mysqli_query($db, $update1Sql);
      
            }
            
            $updateSql = "UPDATE kurumlar SET miktar='$kurummiktar' WHERE kid={$_GET['id']}";
            mysqli_query($db, $updateSql);
            
                header("Location: kurumlar.php");
          
  

}

}
    
    


?>


<html>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Kuruma Bağış Yap</h2>
                <form method="POST" action="kurumdestek.php?id=<?php echo $_GET['id']; ?>">
                    <div class="mb-3">
                        <label for="isim" class="form-label">Bağışçı İsmi:</label>
                        <input type="text" name="isim" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="soyisim" class="form-label">Bağışçı Soyismi:</label>
                        <input type="text" name="soyisim" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="miktar" class="form-label">Bağış Miktarı:</label>
                        <input type="text" name="miktar" class="form-control">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kuruma Bağış Yap</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>
