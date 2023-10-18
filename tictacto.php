<?php

$tinggi = 5;
$bintang = 2;
for ($i = 1; $i <= $tinggi; $i++) {
    for ($j = 1; $j <= $tinggi - $i; $j++) {
        echo "&nbsp ";
    }
    for ($k = 1; $k <= $bintang; $k++) {
        echo "* ";
    }
    $bintang += 2;
    // echo "\n";/\
}
?>
