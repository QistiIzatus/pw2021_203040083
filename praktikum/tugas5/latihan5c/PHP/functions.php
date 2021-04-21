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


<?php
//fungsi untuk menambahkan data didalam dtabase
function tambah($data)
{
    $conn = koneksi();

    $judul = htmlspecialchars($data['gambar']);
    $gambar = htmlspecialchars($data['judul']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $sinopsis = htmlspecialchars($data['sinopsis']);
    $harga = htmlspecialchars($data['harga']);
    $kategori = htmlspecialchars($data['kategori']);

    $query = "INSERT INTO prakpw_novel_203040083
                    VALUES
                        ('', '$gambar', '$judul', '$pengarang', '$sinopsis', '$harga', '$kategori')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//fungsi menghapus data berdasarkan id
function hapus($id)
{
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM prakpw_novel_203040083 WHERE id = $id");

        return mysqli_affected_rows($conn);
}
?>