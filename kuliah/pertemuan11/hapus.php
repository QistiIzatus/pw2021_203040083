<?php
require 'functions.php';

//mengambil id dari url

$id = $_GET['id'];

if( hapus($_POST) > 0) {
    if( hapus($id) > 0 ) {
        echo "script>
            alret('data berhasil dihapus!');
            document.location.href = 'index.php';
            </script>";
    } else {
        echo "data gagal ditambahkan!";
    }
}
?>