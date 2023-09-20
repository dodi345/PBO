<?php
$nilai = array('55', '76', '65', '95', '59', '65', '70', '66', '62', '85');
?>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; $i < count($nilai); $i++) { ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td>Mahasiswa <?= $i + 1 ?></td>
                <td><?= $nilai[$i] ?></td>
                <td>
                    <?php
                    if ($nilai[$i] % 2 == 0) {
                        echo 'Nilai Angka Genap';
                    } else {
                        echo 'Nilai Angka Ganjil';
                    }
                    ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
