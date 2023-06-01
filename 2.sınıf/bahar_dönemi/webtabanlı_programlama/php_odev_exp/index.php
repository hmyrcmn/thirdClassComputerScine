<?php

include_once "settings.php";





?>
<!doctype html>
<html>
    <head>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        
    <div class="container">

        <div class="row">

            <div class="col-3">
                <img height=128 width=128 src="https://depo.btu.edu.tr/dosyalar/btu/Dosyalar/%c4%b0NG%20LOGO.jpg">
            </div>

            <div class="col-6 d-flex justify-content-center">
                BTU BM Sayfasına Hoşgeldiniz
            </div>
            
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item">Giriş Yap</li>
                    <li class="list-group-item">Kayıt Ol</li>
                </ul>
            </div>

        </div>

        <div class="row">



            <div class="col-lg-10 col-sm-6">


                <table class="table">

                <thead>
                    <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Adı ve Soyadı</th>
                    <th scope="col">Öğrenciyi Sil</th>
                    </tr>
                </thead>
                <tbody>

                                <?php
                                    
                                    $ogrenciler_query = mysqli_query($db_con, "SELECT * FROM ogrenciler ORDER BY -id");

                                    while($ogrenci = mysqli_fetch_assoc($ogrenciler_query))
                                    {
                                        echo "<tr>";
                                        echo '<th scope="row">'.$ogrenci["id"].'</th>';
                                        echo '<td>' . $ogrenci["isim"] . " " . $ogrenci["soyisim"] .'</td>';
                                        echo '<td>' . " <a class='btn btn-danger' href='ogrencisil.php?id={$ogrenci["id"]}'>SİL</a>" .'</td>';
                                        echo "</tr>";
                                    }
                                ?>
                </tbody>
                </table>

            </div>

            
            <div class="col-lg-2 col-sm-6">

                <h1>Admin Paneli</h1>
                <a href="ogrenciekle.php">Öğrenci Eklemesi Yap</a>

            </div>




        </div>
    </div>

    </body>
</html>
