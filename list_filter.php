<?php
$model = new Agama();
$rs_1 = $model->index();

?>
<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
    <li class="dropdown-header text-start">List Agama</li>
        <?php
        foreach ($rs_1 as $jenis) {
        ?>
            <a href="index.php?hal=mahasiswa_list&id=<?= $jenis['id'] ?>">
                <li class="dropdown-item"><?= $jenis['nama'] ?></li>
            </a>
        <?php
        }
        ?>
        </ul>
        