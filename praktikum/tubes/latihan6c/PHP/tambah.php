<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if(isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>

<h3>Tambah Data Novel</h3>
<form action="" method="post">
    <ul>
        <li>
            <label for="gambar">Gambar :</label><br>
            <input type="file" name="gambar" id="gambar required"><br><br>
        </li>
        <li>
            <label for="judul">Judul:</label><br>
            <input type="text" name="judul" id="judul"><br><br>
        </li>
        <li>
            <label for="pengarang">Pengarang:</label><br>
            <input type="pengarang" name="pengarang" id="pengarang"><br><br>
        </li>
        <li>
            <label for="sinopsis">Sinopsis :</label><br>
            <input type="sinopsis" name="sinopsis" id="sinopsis"><br><br>
        </li>
        <li>
            <label for="harga">Harga :</label><br>
            <input type="harga" name="harga" id="harga"><br><br>
        </li>
        <li>
            <label for="kategori">Kategori :</label><br>
            <input type="kategori" name="kategori" id="kategori"><br><br>
        </li>
        </div>
        <button type="submit" name="tambah" class="waves-effect waves-light brown lighten-2 btn-small">Tambah Data!</button>
        <a href="../index.php" class="waves-effect waves-light brown lighten-2 btn-small">Kembali</a>
    </div>
</form>