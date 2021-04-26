<?php
require 'functions.php';

$id = $_GET['id'];
$p = query("SELECT * FROM prakpw_novel_203040083 WHERE id= $id")[0];

if(isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal diubah!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>

<h3>Ubah Data Novel</h3>
<form action="" method="post">
    <ul>
        <input type="hidden" name="id" id="id" value="<?= $p['id']; ?>">
        <li>
            <label for="gambar">Gambar :</label><br>
            <input type="text" name="gambar" id="gambar" required value="<?= $p['gambar'];?>"><br><br>
        </li>
        <li>
            <label for="judul">Judul:</label><br>
            <input type="text" name="judul" id="judul"required value="<?= $p['judul'];?>"><br><br>
        </li>
        <li>
            <label for="pengarang">Pengarang:</label><br>
            <input type="pengarang" name="pengarang" id="pengarang"required value="<?= $p['pengarang'];?>"><br><br>
        </li>
        <li>
            <label for="sinopsis">Sinopsis :</label><br>
            <input type="sinopsis" name="sinopsis" id="sinopsis"required value="<?= $p['sinopsis'];?>"><br><br>
        </li>
        <li>
            <label for="harga">Harga :</label><br>
            <input type="harga" name="harga" id="harga"required value="<?= $p['harga'];?>"><br><br>
        </li>
        <li>
            <label for="kategori">Kategori :</label><br>
            <input type="kategori" name="kategori" id="kategori"required value="<?= $p['kategori'];?>"><br><br>
        </li>
        </div>
        <button type="submit" name="ubah" class="waves-effect waves-light brown lighten-2 btn-small">Ubah Data!</button>
        <a href="../index.php" class="waves-effect waves-light brown lighten-2 btn-small">Kembali</a>
    </div>
