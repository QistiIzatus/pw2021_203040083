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
// melakukan query
$prakpw_novel_203040083 = query("SELECT * FROM prakpw_novel_203040083")
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
            background-color: red;
            color: white;
        }
        img {
            max-width: 150px;
        }
    </style>
    </head>
<body>
<div class="container">
    <table cellpadding="10" cellspacing="0" border="1" class="highlight - centered brown lighten-4">
            <?php foreach ($prakpw_novel_203040083 as $p) : ?> 
            <p class="judul">
            <a href="php/detail.php?id=<?= $p['id'] ?>">
            <?= $p["judul"] ?>
            </a>
            </p>
        <?php endforeach; ?>
</div>
</body>
</table>
</html>