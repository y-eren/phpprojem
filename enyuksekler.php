<?php
require_once "config.php";
include_once "index.php";

$sql = "SELECT * FROM `bagisci` ORDER BY `miktar` DESC";

$cevap = mysqli_query($db, $sql);







?>

<html>
<head>
    <meta charset="utf-8">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center"> Ayın En Yüksek Bağışçıları</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">İsim</th>
                            <th scope="col">Soyisim</th>
                            <th scope="col">Miktar</th>
                            <th scope="col">Notu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($gelen=mysqli_fetch_array($cevap)){ ?>
                            <?php if($gelen['miktar'] != 0){ ?>
                                <tr>
                                    <td><?php echo $gelen['isim']; ?></td>
                                    <td><?php echo $gelen['soyisim']; ?></td>
                                    <td><?php echo $gelen['miktar']; ?></td>
                                    <td><?php echo $gelen['bagisci_not']; ?></td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
     </html>

