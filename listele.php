<?php
session_start();
require_once "config.php";
require_once "index.php";

if(!isset($_SESSION["kisiid"]))
{
    $_SESSION["kisiid"] = 0;
}



    $sql = "SELECT * FROM bagisci";

    $cevap = mysqli_query($db, $sql);
    

     ?>

<html>
<head>
    <meta charset="utf-8">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Bağışçılar</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Bağışçı Id</th>
                            <th scope="col">Adı</th>
                            <th scope="col">Soyadı</th>
                            <th scope="col">Miktar</th>
                            <th scope="col">Notu</th>
                            <th scope="col">Tarih</th>
                            <th scope="col">Bağış Güncelle</th>
                            <th scope="col">Bağışımı Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($gelen = mysqli_fetch_array($cevap)){ ?>
                            <?php if($gelen['miktar'] != 0){ ?>
                                <tr>
                                    <td><?php echo $gelen['id']; ?></td>
                                    <td><?php echo $gelen['isim']; ?></td>
                                    <td><?php echo $gelen['soyisim']; ?></td>
                                    <td><?php echo $gelen['miktar']; ?></td>
                                    <td><?php echo $gelen['bagisci_not']; ?></td>
                                    <td><?php echo $gelen['tarih']; ?></td>
                                    <?php if($gelen['id'] == $_SESSION["kisiid"]){ ?>
                                        <td><a href="destek.php">Bağış Güncelle</a></td>
                                        <td><a href="bagissil.php">Bağışımı Sil</a></td>
                                    <?php } ?>
                                </tr>
                            <?php } ?>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
     </html>
