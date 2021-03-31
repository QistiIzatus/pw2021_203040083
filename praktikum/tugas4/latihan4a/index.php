<?php
/*
Qisti Izatussyabanin
203040083
SHIFT kamis 08:00 - 09:00
*/
?>

<?php

// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "");
// Memilih Database
mysqli_select_db($conn, "novel");
// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM prakpw_novel_203040083");

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
        <title>BOOK_ID</title>
        <style>
        .table {
            width: 100%;
            padding: 10px;
            text-align: center;
        }
        img {
            max-width: 150px;
        }
        </style>
    </head>
<body>
<script type="text/javascript" src="js/materialize.min.js"></script>
<div class="container">
    <table cellpadding="10" cellspacing="0" border="1" class="highlight - centered brown lighten-4">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Gambar</th>
            <th>Pengarang</th>
            <th>Sinopsis</th>
            <th>Harga</th>
            <th>Kategori</th>
        </tr>
            <?php $i = 1 ?>
            <?php while($row = mysqli_fetch_assoc($result)) : ?> 
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["judul"]; ?></td>
            <td><img src="assets/img/<?= $row["gambar"]; ?>"></td>
            <td><?= $row["pengarang"]; ?></td>
            <td><?= $row["sinopsis"]; ?></td>
            <td><?= $row["harga"]; ?></td>
            <td><?= $row["kategori"];?> </td>
        </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
</div>
</body>
</table>
</html>