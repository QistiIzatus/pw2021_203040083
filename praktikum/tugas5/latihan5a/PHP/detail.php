<?php
/*
Qisti Izatussyabani
203040083
SHIFT kamis 08:00 - 09:00
*/
?>
<?php 
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id']) ) {
    header("Location: ../index.php");
    exit;
}
require 'functions.php';

// mengambil id dari url 
$id = $_GET['id'];

//melakukan query dengan parameter id yang diambil dari url
$prakpw_novel_203040083 = query("SELECT * FROM prakpw_novel_203040083 WHERE id = $id")[0];

?>

<!Doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!-- css style -->
        <link rel="stylesheet" href="../css/style2.css">
        <title>BOOK_ID</title>
    </head>
<body>
<script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
    <div class="gambar">
			<img src="../assets/img/<?= $prakpw_novel_203040083["gambar"]; ?>" alt="">
		</div>
		<div class="keterangan">
			<p><?= $prakpw_novel_203040083["judul"]; ?></p>
			<p><?= $prakpw_novel_203040083["pengarang"]; ?></p>
            <p><?= $prakpw_novel_203040083["sinopsis"]; ?></p>
			<p><?= $prakpw_novel_203040083["harga"]; ?></p>
			<p><?= $prakpw_novel_203040083["kategori"]; ?></p>
		</div>

		<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</table>