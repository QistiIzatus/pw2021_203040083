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
    mysqli_select_db($conn, "novel");

    return $conn;
}
// function untuk melakukan query dan memasukkannya ke dalam ARRAY
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>