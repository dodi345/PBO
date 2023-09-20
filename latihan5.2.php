<!-- Nested If -->
<?php
$umur = 7;
$berhitung = true;

if ($umur>6){
    if($berhitung){
        echo "Selamat anda diperbolehkan masuk kelas 1 SD";
    } else{
        echo "Anda Diperbolehkan mausk kelas 1 SD dengan catatan harus lancar menghitung!";
    }
} else{
    echo "Maaf Anda belum cukup umur untuk masuk kelas 1 SD";
}