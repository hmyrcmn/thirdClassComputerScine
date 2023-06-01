<?php

$users = file_get_contents("db.txt");
echo $users;
?>

<form action="kayit.php" method="POST">
kullanıcı adı: <input type="text" name="uname"><br>
şifre: <input type="password" name="upass"><br>
<button type="submit">Kayıt Ol</button>
</form>


<hr>

<form action="giris.php" method="POST">
kullanıcı adı: <input type="text" name="uname"><br>
şifre: <input type="password" name="upass"><br>
<button type="submit">Giriş Yap</button>
</form>