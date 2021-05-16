<?php
/*
Qisti Izatussyabani
203040083
github.com/QistiIzatus/pw2021_203040083
Pertemuan 7 
Materi pertemuan 7 ini menjelaskan tentang Metode GET AND POST
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <?php if( isset($_POST["submit"]) > 0 ) : ?>
    <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>

    <form action="latihan4.php" method="post">
        Masukan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>
</html>