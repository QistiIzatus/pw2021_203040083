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

function registrasi($data)
{
        $conn = koneksi();
        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);

        //cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                alert('username sudah digunakan');
                </script>";
            return false;
        }

        // enkripsi password 
        $password = password_hash($password, PASSWORD_DEFAULT);

        //tambah user baru
        $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
        mysqli_query($conn, $query_tambah);

        return mysqli_affected_rows($conn);
}


function cari($keyword) {
    $conn = koneksi();

    $query = "SELECT * FROM prakpw_novel_203040083 WHERE judul LIKE '%$keyword%' ";
    $result = mysqli_query($conn, $query);
    
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };

    return $rows;
}

?>