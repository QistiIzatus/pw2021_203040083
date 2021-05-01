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
// SUPERGLOBALS
// variable global milik php
// merupakan Array Associative
// $_GET
// var_dump($_GET);
// bisa menambahkan melalui link URL
// jika lebih dari satu variable tambahkan & 
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>
        img {
            max-width: 150px;
        }
    </style>
</head>
<body>
<ul>
<h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
    <a href="latihan2.php?nama=<?= $mhs["nama"]?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?=  $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?> 
</ul>

</body>
</html>