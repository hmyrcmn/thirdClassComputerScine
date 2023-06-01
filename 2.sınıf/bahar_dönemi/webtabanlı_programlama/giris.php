<?php

$uname = $_POST["uname"];
$upass = $_POST["upass"];

$old_db = file_get_contents("db.txt");
$old_db_decoded = json_decode($old_db,true);

$flag=false;
for($i=0;$i<count($old_db_decoded);$i++){
    if($old_db_decoded[$i]["uname"]==$uname && $old_db_decoded[$i]["upass"]==$upass){
        echo "giriş başarılı <br>";
        $flag=true;
        break;
    }
    
}
if(!$flag){
    //$i==count($old_db_decoded)
    echo "kullanıcı adı veya şifre hatalı <br>";
}




?>