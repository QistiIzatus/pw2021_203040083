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
    };

    return $rows;
}

//fungsi untuk menambahkan data didalam dtabase
function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $judul = htmlspecialchars($data['judul']);
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


function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $gambar = htmlspecialchars($data['gambar']);
    $judul = htmlspecialchars($data['judul']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $sinopsis = htmlspecialchars($data['sinopsis']);
    $harga = htmlspecialchars($data['harga']);
    $kategori = htmlspecialchars($data['kategori']);

    $query = "UPDATE prakpw_novel_203040083
                SET
                gambar = '$gambar',
                judul = '$judul',
                pengarang = '$pengarang',
                sinopsis = '$sinopsis',
                harga = '$harga',
                kategori = '$kategori',
                WHERE id = '$id'
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>