<?php

include_once "settings.php";



$yeniogr_isim = $_POST["isim"];
$yeniogr_soyisim = $_POST["soyisim"];
$yeniogr_irtibat = $_POST["irtibat"];

// $yeniogr_isim = "'); DROP TABLE ogrenciler; --"
$q = mysqli_query($db_con, "INSERT INTO ogrenciler (isim,soyisim,irtibat) VALUES ('".$yeniogr_isim."','".$yeniogr_soyisim."','".$_POST['irtibat']."')");




// echo mysqli_error($db_con);

// echo mysqli_errno($db_con)
header("location: index.php");
?>