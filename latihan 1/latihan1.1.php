<?php
class Mobil {
    var $jumlahroda = 4;
    var $warna = "Merah";
    var $bahanbakar = "Pertamax Turbo";
    var $harga = 120_000_000;
    var $merk = 'A';

    //deklarasi method
    public function statusHarga()
    {
        if ($this ->harga > 500_000_000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }
}
$objekTesla = new Mobil;
$objekSupra = new Mobil;
$objekAudi = new Mobil;
$objekBMW = new Mobil;

echo "Status Harga : " . $objekSupra->statusHarga();
?>