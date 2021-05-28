<?php


require '../functions.php';
$prakpw_novel_203040083 = cari($_GET['keyword']);

?>

<table cellpadding="10" cellspacing="0" border="1" class="highlight - centered brown lighten-4">
        <?php foreach($prakpw_novel_203040083 as $p) : ?>
                <tr>
                    <td>
                        <div class="id">
                            <p class="text-center"><?= $p["id"]; ?></p>
                        </div>
                    </td>
                    <td class="d-flex justify-content-between align-items-center">
                        <div class="judul">
                            <p><?= $p["judul"]; ?></p>
                        </div>
                        <div class="btn-detail-novel">
                            <a class="btn btn btn-info btn-sm" href="./php/detail.php?id=<?= $p["id"]; ?>">Lihat
                                Detail novel</a>
                        </div>
                    </td>
                </tr>
        <?php endforeach; ?>
        </table>