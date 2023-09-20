<?php
// Membuat Class
class Kendaraan {
    var $merk;
    var $jumlah_roda;
    var $harga;
    var $warna;
    var $bahanbakar;
    var $tahun;
    var $sethargabaru;

    function setMerk($x) {
        $this->merk = $x;
    }
    function getMerk(){
        return $this->merk;
    }

    function setHarga($y) {
        $this->harga = $y;
    }
    function getHarga(){
        return $this->harga;
    }

    function setJmlhroda($z) {
        $this->jumlah_roda = $z;
    }
    function getJmlhroda(){
        return $this->jumlah_roda;
    }

    function setWarna($a) {
        $this->warna = $a;
    }
    function getWarna(){
        return $this->warna;
    }

    function setBahanBakar($b) {
        $this->bahanbakar = $b;
    }
    function getBahanBakar(){
        return $this->bahanBakar;
    }

    function setTahun($c) {
        $this->tahun = $c;
    }
    function getTahun(){
        return $this->tahun;
    }

    function setstatusHarga()
    {
        if ($this ->harga > 50_000_000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }
    function sethargabaru()
    {
        $this->sethargabaru = $this->harga * 0.7;
    }
}

$kendaraan1 = new Kendaraan();
$kendaraan1->setMerk('Toyota Yaris');
$kendaraan1->setJmlhroda(4);
$kendaraan1->setHarga(160_000_000);
$kendaraan1->setWarna("Merah");
$kendaraan1->setBahanBakar("Premium");
$kendaraan1->setTahun(2005);
$kendaraan1->setstatusHarga();
$kendaraan1->sethargabaru();

echo "Kendaraan : ".$kendaraan1->getmerk() . "<br>";
echo "Jumlah Roda : " .$kendaraan1->getJmlhroda() . "<br>";
echo "Harga Baru : ".$kendaraan1->getHarga() . "<br>";
echo "Warna : ".$kendaraan1->getWarna() . "<br>";
echo "Jenis Bahan Bakar".$kendaraan1->getBahanBakar() . "<br>";
echo "Keluaran Tahun : ".$kendaraan1->getTahun() . "<br>";
echo "Status Harga Kendaraan : ".$kendaraan1->setstatusHarga()."<br>";
echo "Harga Second : Rp. $kendaraan1->sethargabaru" ."<br>";
echo "<br>";



$kendaraan2 = new Kendaraan();
$kendaraan2->setMerk('Honda Scoopy');
$kendaraan2->setJmlhroda(2);
$kendaraan2->setHarga(13000000);
$kendaraan2->setWarna("Putih");
$kendaraan2->setBahanBakar("Premium");
$kendaraan2->setTahun(2004);
$kendaraan2->setstatusHarga();
$kendaraan2->sethargabaru();

echo "Kendaraan : ".$kendaraan2->getmerk() . "<br>";
echo "Jumlah Roda : " .$kendaraan2->getJmlhroda() . "<br>";
echo "Harga Baru : ".$kendaraan2->getHarga() . "<br>";
echo "Warna : ".$kendaraan2->getWarna() . "<br>";
echo "Jenis Bahan Bakar".$kendaraan2->getBahanBakar() . "<br>";
echo "Keluaran Tahun : ".$kendaraan2->getTahun() . "<br>";
echo "Status Harga Kendaraan : ".$kendaraan2->setstatusHarga()."<br>";
echo "Harga Second : Rp. $kendaraan2->sethargabaru" ."<br>";
echo "<br>";

$kendaraan3 = new Kendaraan();
$kendaraan3->setMerk('Isuzu Panther');
$kendaraan3->setJmlhroda(4);
$kendaraan3->setHarga(170000000);
$kendaraan3->setWarna("Hitam");
$kendaraan3->setBahanBakar("Solar");
$kendaraan3->setTahun(2003);
$kendaraan3->setstatusHarga();
$kendaraan3->sethargabaru();

echo "Kendaraan : ".$kendaraan3->getmerk() . "<br>";
echo "Jumlah Roda : " .$kendaraan3->getJmlhroda() . "<br>";
echo "Harga Baru : ".$kendaraan3->getHarga() . "<br>";
echo "Warna : ".$kendaraan3->getWarna() . "<br>";
echo "Jenis Bahan Bakar".$kendaraan3->getBahanBakar() . "<br>";
echo "Keluaran Tahun : ".$kendaraan3->getTahun() . "<br>";
echo "Status Harga Kendaraan : ".$kendaraan3->setstatusHarga()."<br>";
echo "Harga Second : Rp. $kendaraan3->sethargabaru" ."<br>";
echo "<br>";