<?php
$Data = [
    ['kartu' => true, 'belanja' => 200000],
    ['kartu' => true, 'belanja' => 570000],
    ['kartu' => false, 'belanja' => 120000],
    ['kartu' => false, 'belanja' => 90000],
];

for ($i = 1; $i <= count($Data); $i++) {
    $item = $Data[$i - 1];
    $totalBayar = $item['belanja'];

    if ($item['kartu']) {
        switch (true) {
            case ($item['belanja'] > 100000):
                $diskon = 15000;
                break;

            case ($item['belanja'] > 500000):
                $diskon = 50000;
                break;


            default:
                $diskon = 0;
                break;
        }

        $totalBayar -= $diskon;
    } else {
        switch (true){
            case ($item['belanja']> 100000):
                $diskon = 5000;
                break;

            default:
            $diskon = 0;
            break;
        }
        
    }

    echo "Transaksi ke-" . $i . "<br>";
    echo "Kartu Member: " . ($item['kartu'] ? 'Ya' : 'Tidak') . "<br>";
    echo "Total Belanja: Rp " . number_format($item['belanja'], 0, ",", ".") . "<br>";
    echo "Diskon: Rp " . number_format($diskon, 0, ",", ".") . "<br>";
    echo "Total Bayar: Rp " . number_format($totalBayar, 0, ",", ".") . "<br>";
    echo "<br>";
}