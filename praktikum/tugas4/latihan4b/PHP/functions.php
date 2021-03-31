<?php
/*
Qisti Izatussyabani
203040083
SHIFT kamis 08:00 - 09:00
*/
?>

<?php 
// function melakukan connect ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "prakpw_novel_203040083");

    return $conn;
}
// function untuk melakukan query dan memasukkannya ke dalam ARRAY
function query($sqL)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sqL);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $rows;
    };
    return $rows;
}
?>