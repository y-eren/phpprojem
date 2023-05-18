<?php

$dbhost  = "localhost"; 
$dbuser = "root";
$dbpass = "";
$dbname = "proje";

$db = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
mysqli_set_charset($db, "utf8");
// if(mysqli_connect_errno())
// {
//     echo "Baglanti hatasi";
//     exit();
// }







