<?php
/*
Qisti Izatussyabani
203040083
github.com/QistiIzatus/pw2021_203040083
Pertemuan 7 
Materi pertemuan 7 ini menjelaskan tentang Metode GET AND POST
*/
?>
<?php
// Variable Scope / lingkup variabel
// Varibel lokal adalah variabel yang hanya untuk function itu saja
// $x = 10;
// function tampilX() {
//     global $x; // Variabel global, mencari keluar
//     echo $x;
// }
// tampilX();

// Variabel Superglobals = variabel milik PHP yang bisa kita akses dimana pun kapanpun di halaman kita
// Macam - macam variabel Superglobals:
// $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER,  $_ENV
// Ke-7 Variabel Superglobals adalah ARRAY Associative

// $_GET
// Metode Request GET adalah metode pengiriman data melalui URL dan data tersebut bisa dotangkap oleh Variabel Superglobals $_GET
$mahasiswa = [
    [
        "nrp" => "203040083",
        "nama" => "Qisti Izatussyabani",
        "email" => "203040083@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.png"
    ],
    [
        "nama" => "Gania Rahma",
        "nrp" => "20304097",
        "email" => "Gania4321@mail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "2.png"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li> 
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
        &nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>
        &jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
        <?= $mhs["nama"]; ?></a>
	</li>
    <?php endforeach; ?>
</ul>

</body>
</html>
</body>
</html> 