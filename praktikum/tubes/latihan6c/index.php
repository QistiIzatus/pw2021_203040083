<?php
/*
Qisti Izatussyabanin
203040083
SHIFT kamis 08:00 - 09:00
*/
?>

<?php

// menghubungkan dengan file php lainnya 
    require 'php/functions.php';
    $prakpw_novel_203040083 = query("SELECT * FROM prakpw_novel_203040083");

// melakukan query
if(isset($_POST['cari'])) {
    $prakpw_novel_203040083 = cari($_POST['keyword']);
}

?>

<!Doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!-- css style -->
        <link rel="stylesheet" href="css/style2.css">
        <title>NOVEL_ID</title>
        <style>
        .table {
            width:100px;
            padding: 10px;
            font-family: arial;
            text-align: center;
        }
        th {
            background-color: black;
            color: white;
        }
        img {
            max-width: 150px;
        }
    </style>

    </head>
<body>
<div class="btn-detail-novel">
            <a class="btn btn btn-info btn-sm" href="./php/login.php">Masuk Ke Halaman Admin</a>
</div>
    <form class="search" action="" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="keyword" autofocus class="keyword">
            <button type="submit" class="btn btn-info" name="cari" class="tombol-cari">Cari !</button>

        </div>
    </form>

    <div class="container">
    <table cellpadding="10" cellspacing="0" border="1" class="highlight - centered brown lighten-4">
        <?php foreach($prakpw_novel_203040083 as $p) : ?>
                <tr>
                    <td>
                        <div class="id">
                            <p class="text-center"><?= $p["id"]; ?></p>
                        </div>
                    </td>
                    <td class="d-flex justify-content-between align-items-center">
                        <div class="judul">
                            <p><?= $p["judul"]; ?></p>
                        </div>
                        <div class="btn-detail-novel">
                            <a class="btn btn btn-info btn-sm" href="./php/detail.php?id=<?= $p["id"]; ?>">Lihat
                                Detail novel</a>
                        </div>
                    </td>
                </tr>
        <?php endforeach; ?>
        </table>
</div>

<script src="js/script.js"></script>
</body>
</html>