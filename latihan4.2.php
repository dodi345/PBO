<?php
// Membuat Class
class Kendaraan {
    var $merk;
    var $jumlah_roda;
    var $harga;
    var $warna;
    var $bahanbakar;
    var $tahun;

    function setMerek($x) {
        $this->merk = $x;
    }

    function setHarga($x) {
        $this->harga = $x;
    }

    function setJmlhroda($x) {
        $this->jumlah_roda = $x;
    }

    function setWarna($x) {
        $this->warna = $x;
    }

    function setBahanBakar($x) {
        $this->bahanbakar = $x;
    }

    function setTahun($x) {
        $this->tahun = $x;
    }
}

$kendaraan1 = new Kendaraan();
$kendaraan1->setMerek('Toyota Yaris');
$kendaraan1->setJmlhroda(4);
$kendaraan1->setHarga(160000000);
$kendaraan1->setWarna("Merah");
$kendaraan1->setBahanBakar("Premium");
$kendaraan1->setTahun(2005);

echo $kendaraan1->merk . "<br>";
echo $kendaraan1->jumlah_roda . "<br>";
echo $kendaraan1->harga . "<br>";
echo $kendaraan1->warna . "<br>";
echo $kendaraan1->bahanbakar . "<br>";
echo $kendaraan1->tahun . "<br>";
echo "<br>";

$kendaraan2 = new Kendaraan();
$kendaraan2->setMerek('Honda Scoopy');
$kendaraan2->setJmlhroda(2);
$kendaraan2->setHarga(13000000);
$kendaraan2->setWarna("Putih");
$kendaraan2->setBahanBakar("Premium");
$kendaraan2->setTahun(2004);

echo $kendaraan2->merk . "<br>";
echo $kendaraan2->jumlah_roda . "<br>";
echo $kendaraan2->harga . "<br>";
echo $kendaraan2->warna . "<br>";
echo $kendaraan2->bahanbakar . "<br>";
echo $kendaraan2->tahun . "<br>";
echo "<br>";

$kendaraan3 = new Kendaraan();
$kendaraan3->setMerek('Isuzu Panther');
$kendaraan3->setJmlhroda(4);
$kendaraan3->setHarga(170000000);
$kendaraan3->setWarna("Hitam");
$kendaraan3->setBahanBakar("Solar");
$kendaraan3->setTahun(2003);

echo $kendaraan3->merk . "<br>";
echo $kendaraan3->jumlah_roda . "<br>";
echo $kendaraan3->harga . "<br>";
echo $kendaraan3->warna . "<br>";
echo $kendaraan3->bahanbakar . "<br>";
echo $kendaraan3->tahun . "<br>";
?>
