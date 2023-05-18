
<?php
require_once "config.php";
require_once "index.php";

$sql = "SELECT * FROM kurumlar";
$cevap = mysqli_query($db, $sql);
?>

<html>
<head>
    <meta charset="utf-8">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Çalıştığımız Kurumlara Bağış Yapın</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Kurum</th>
                            <th scope="col">Kurum Adı</th>
                            <th scope="col">Miktar</th>
                            <th scope="col">Destek Ol!</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($gelen = mysqli_fetch_array($cevap)){ ?>
                            <tr>
                                <td><?php echo $gelen['kid']; ?></td>
                                <td><?php echo $gelen['kisim']; ?></td>
                                <td><?php echo $gelen['miktar']; ?></td>
                                <td><a href="kurumdestek.php?id=<?php echo $gelen['kid']; ?>">Destek</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
