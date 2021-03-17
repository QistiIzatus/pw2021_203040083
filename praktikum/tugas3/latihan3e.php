<?php
/*
Qisti Izatussyabani
203040083
SHIFT Kamis 08:00 - 09:00
*/
?>
<?php 
$buku = [
    [
        "nama" => "Danur",
        "gambar" => "01.jpg",
        "pengarang" => "Risa Saraswati",
        "sinopsis" => "Buku ini menceritakan tentang persahabatan Risa dan kelima sahabatnya yang berbeda dimensi lain.",
        "harga" => 66000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Ayat Ayat Cinta",
        "gambar" => "2.png",
        "pengarang" => "Habiburrahman El Shirazy",
        "sinopsis" => "mengisahkan tentang seorang pemuda indonesia yang bernama Fahri, berasal dari keluarga sederhana dan sedang berkuliah S2 di universitas Al-Azhar mesir.",
        "harga" => 56000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Teman Berjuang",
        "gambar" => "003.jpg",
        "pengarang" => "Indra Sugiarto",
        "sinopsis" => "Novel untuk Para pejuang yang berjuang menggapai tujuan dan membutuhkan dukungan dalam langkah menggapainya, buku ini tepat dijadikan teman berjuangmu..",
        "harga" => 84000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Tumbuh Dari Luka",
        "gambar" => "4.jpg",
        "pengarang" => "Indra Sugiarto",
        "sinopsis" => "Novel ini untuk para pejuang yang ingin memilih tumbuh atas hancur dari luka ",
        "harga" => 99000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Laskar Pelangi",
        "gambar" => "5.jpg",
        "pengarang" => "Andrea Hirata",
        "sinopsis" => "Novel Laskar Pelangi bercerita tentang kehidupan anak-anak di Belitong. Laskar pelangi yang ditulis oleh Andrea Hirata dimulai dengan kisah miris dunia pendidikan di Indonesia dimana sebuah sekolah yang kekurangan murid hendak ditutup. Sekolah tersebut adalah SD Muhammadiyah di Gentong Belitung Timur.",
        "harga" => 89000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Sang Pemimpi",
        "gambar" => "06.jpg",
        "pengarang" => "Andrea Hirata",
        "sinopsis" => "Buku Kedua Andrea Hirata ini bercerita tentang masa SMA tiga orang pemuda, yaitu Ikal, Arai dan Jimbron. Mereka bertiga adalah remaja yang berasal dari Belitong dan melanjutkan sekolah di Manggar, SMA Negeri pertama di Manggar. Untuk mencukupi kebutuhan sekolahnya Arai, Ikal dan Jimbron bekerja paruh waktu sebagai kuli di pasar ikan.",
        "harga" => 63200,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Perahu Kerta",
        "gambar" => "07.jpg",
        "pengarang" => "Dee Lestari",
        "sinopsis" => "Perahu Kertas mengisahkan pasang surut hubungan dua anak manusia, yaitu Kugy dan Keenan. Kisah bermula ketika mereka berdua kuliah di Bandung. Kugy, yang bercita‑cita ingin menjadi penulis dongeng, kuliah di Fakultas Sastra. Ia punya kebiasaaan unik, yaitu suka membuat perahu kertas yang kemudian dilarungkannya di sungai.",
        "harga" => 60000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Sabtu Bersama Bapak",
        "gambar" => "8.jpg",
        "pengarang" => "Aditya Mulya",
        "sinopsis"=> "Berawal dari keluarga kecil seorang ayah bernama Gunawan Garnida yang divonis sakit. Ia sadar, masih panjang perjalanan hidup kedua anaknya, yang kala itu masih kecil, dan masih butuh pemdampingan serta nasihat-nasihat serta nilai-nilai kehidupan dari seorang ayah.",
        "harga" => 45000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Dilan 1991",
        "gambar" => "9.jpg",
        "pengarang" => "Pidi baiq",
        "sinopsis"=> "Novel Dilan ini menceritakan sebuah kisah seorang perempuan yang bernama Milea. Milea merupakan seorang murid yang baru saja pindah dari Jakarta. Ketika Milea pergi menuju sekolahnya, dia bertemu dengan teman yang kebetulan satu sekolahan dengannya. temannya itu adalah seorang yang suka meramal.",
        "harga" => 79000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Milea: Suara dari Dilan",
        "gambar" => "10.jpg",
        "pengarang" => "Pidi baiq",
        "sinopsis" => "Novel ini menceritakan pengenalan singkat Dilan waktu dia masih kecil, kira-kira waktu masih berumur 5 tahun, pernag ingin menjadi macan walaupun itu tidak mungkin. Dia pernah menamai sepedanya dengan nama mobil. Dia juga pernah sholat menggunakan mukena.",
        "harga" => 99000,
        "kategori" => "Novel"
    ],
]
?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>BOOK_ID</title>
    </head>
    <body>
        <div class="container mt-5 mb-5 text-center">
        <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Gambar</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Sinopsis</th>
            <th scope="col">Harga</th>
            <th scope="col">Kategori</th>
            </tr>
        </thead>
    <tbody>
        <?php foreach($buku as $n => $b) : ?>
        <tr>
            <td><?= $n+1; ?></td>
            <td><?= $b["nama"]; ?></td>
            <td>
                <img src="img/<?= $b["gambar"]; ?>">
            </td>
            <td><?= $b["pengarang"]; ?></td>
            <td><?= $b["sinopsis"]; ?></td>
            <td><?= $b["harga"]; ?></td>
            <td><?= $b["kategori"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </div>
    </body>
</table>
</html>