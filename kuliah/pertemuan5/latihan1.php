<?php
/*
Qisti Izatussyabani
203040083
https://github.com/QistiIzatus/pw2021_203040083
Pertemuan 5 (lima )
*/
?>

<?php
// array
// variabel yang dapat memiliki banyak nilai 
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan anatara key dan value
// key-nya adalah index, yang dimulai dari 0 

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "rabu");
// cara baru
$bulan = ["januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
//echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1]

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);




?>