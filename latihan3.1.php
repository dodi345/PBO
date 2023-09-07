<?php
class kendaraan {
    var $jumlahroda = 4;
    var $warna = "Merah";
    var $bahanbakar = "Pertamax Turbo";
    var $harga;
    var $merk;

    //deklarasi method
    public function statusHarga()
    {
        if ($this ->harga > 500_000_000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }
}
$objek_kendaraan_1 = new kendaraan();
$objek_kendaraan_1->merk="Yamaha MIO";
$objek_kendaraan_1->harga=10_000_000;

$objek_kendaraan_2 = new kendaraan();
$objek_kendaraan_2->merk="Toyota Avanza";
$objek_kendaraan_2->harga=100_000_000;

echo "Merk : ".$objek_kendaraan_2->merk;
echo "<br>";
echo "Nominal Harga : ".$objek_kendaraan_2->harga;
echo "<br>";
echo "Status Harga Kendaraan : ".$objek_kendaraan_2->statusHarga();
