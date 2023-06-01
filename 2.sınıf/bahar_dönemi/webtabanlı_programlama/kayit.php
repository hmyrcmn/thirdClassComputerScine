<?php

$uname = $_POST["uname"];
$upass = $_POST["upass"];

$newuser = array("uname" => $uname, "upass" => $upass);
// print_r($newuser);

// echo $nu_json;
// $f = fopen("db.txt", "w");
// fwrite($f, "test");
// fclose($f);

$old_db = file_get_contents("db.txt");
$old_db_decoded = json_decode($old_db);

$old_db_decoded[] = $newuser; //array'e ekleme
$new_db_json = json_encode($old_db_decoded);

file_put_contents("db.txt",  $new_db_json);

// $a = array(2,3,4, "k" => "v");
// print_r($a);

?>