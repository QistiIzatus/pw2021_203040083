<?php
/*
Qisti Izatussyabani
203040083
https://github.com/QistiIzatus/pw2021_203040083
Pertemuan 4 
Mempelajari mengenai Function
*/
?>

<?php
// Date
// Untuk Menampilkan Tanggal dengan formattertentu

    //  echo date("l, d-M-Y");


//  Time 
//  UNIX Timestamp / EPOCH time
// Detik yang sudah berlalu sejak 1 januari 1970 

     //  echo time();
     // echo date("l", time()-60*60*24*100);


//  mktime
//  membuat sendiri detik
//  mktime(0,0,0,0,0,0)
//  jam,menit,detik,bulan,tanggal, tahun
echo date ("l", mktime(0,0,0,22,11,1967));

// strtotime
// echo date("l", strtotime("25 aug 1985"));
?>
<!-- STRING
strlen() untuk menghitung panjang sebuah string
strcmp() untuk membandingkan 2 buah string
explode() untuk memecah sebuah string menjadi array
htmlspecialchars untuk menjaga website kita dari hacker
UTILITY 
var_dump() untuk mencetak isi sebuah variabel, objek, array
isset() untuk mengecek apakah sebuah variabel suda dibuat apa belum, dan akan menghasilan boolean true or false
empty() untuk mengecek apakah sebuah variabel ada isi nya atau tidak
die() ketika program bertemu die makan program dibawahnya tidak akan dieksekusi
sleep() untuk memberhentikan sementara -->