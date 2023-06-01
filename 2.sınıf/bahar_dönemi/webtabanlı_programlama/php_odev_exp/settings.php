<?php
// error_reporting(E_ALL);
// phpinfo();
$db_host = "sql105.epizy.com"; //bağlantının adresi
$db_username = "epiz_31870422";
$db_userpass = "CjNesTmHy5pW3";
$db_name = "epiz_31870422_webprog";

$db_con = mysqli_connect($db_host, $db_username, $db_userpass, $db_name);

//mysqli_select_db($db_con, $db_name);



// echo "MYSQL ERROR: ###".mysqli_error($db_con)."###";
