<?php


include_once "settings.php";

$id = $_GET["id"];

$q = mysqli_query($db_con,"DELETE FROM ogrenciler WHERE id=".$id."");

echo mysqli_affected_rows($db_con)." satır bu işlemden etkilendi.<br>";

echo "<h2>$id nolu öğrenci sistemden silinmiştir.</h2><br>";

echo "<a href='index.php'>Ana Sayfa</a>";