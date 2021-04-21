<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$novel = query("SELECT * FROM prakpw_novel_203040083");

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
            color: black;
        }
        img {
            max-width: 150px;
        }
    </style>
    </head>
<body>
<div class="container">
<div class="add">
        <a href="tambah.php">Tambah Data</a>
</div>
    <table cellpadding="10" cellspacing="0" border="1" class="highlight - centered brown lighten-4">
    <tr>
        <th>No</th>
        <th>Opsi</th>
        <th>Gambar</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Sinopsis</th>
        <th>Harga</th>
        <th>Kategori</th>
    </tr>
            <?php $i = 1; ?>
            <?php foreach ($novel as $p) : ?> 
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href=""><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $p['gambar']; ?>" alt=""></td>
                <td><?= $p['judul']; ?></td>
                <td><?= $p['pengarang']; ?></td>
                <td><?= $p['sinopsis']; ?></td>
                <td><?= $p['harga']; ?></td>
                <td><?= $p['kategori']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
</div>
</body>
</table>
</html>