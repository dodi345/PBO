<?php
// Membuat Class


class Kendaraan {
    var $merk;
    var $jumlah_roda;
    var $harga;
    var $warna;
    var $bahanbakar;
    var $tahun;
    var $hargasecond;
  

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
    function sethargasecond()
    {
        $this->hargasecond = $this->harga * 0.7;
    }
    function subsidi()
    {
        if ($this->bahanbakar == "Pertamax"){
            return "Tidak dapat dapat subsidi";
        }
        else{
            return "Dapat Subsidi";
        }
    }
}

$data1 = array('Toyota Yaris','4','160_000_000','Merah','Pertamax','2014');
$data2 = array('Honda Scoopy','2','13_000_000','Putih','Premium','2005');
$data3 = array('Isuzu Panther','4','400_000_000','Hitam','Solar','1994');

for ($i = 1; $i <= 3; $i++) {
    ${"kendaraan$i"} = new Kendaraan();
    ${"kendaraan$i"}->setMerk(${"data$i"}[0]);
    ${"kendaraan$i"}->setJmlhroda(${"data$i"}[1]);
    ${"kendaraan$i"}->setHarga(${"data$i"}[2]);
    ${"kendaraan$i"}->setWarna(${"data$i"}[3]);
    ${"kendaraan$i"}->setBahanBakar(${"data$i"}[4]);
    ${"kendaraan$i"}->setTahun(${"data$i"}[5]);
}

for ($i = 1; $i <= 3; $i++) {
    echo "\$kendaraan$i<br>"
        . ${"kendaraan$i"}->getMerk() . "<br>"
        . ${"kendaraan$i"}->getJmlhroda() . "<br>"
        . ${"kendaraan$i"}->getHarga() . "<br>"
        . ${"kendaraan$i"}->getWarna() . "<br>"
        . ${"kendaraan$i"}->getBahanBakar() . "<br>" 
        . ${"kendaraan$i"}->getTahun() . "<br>"
        . ${"kendaraan$i"}->setstatusHarga() . "<br>"
        . ${"kendaraan$i"}->subsidi() . "<br>"
        . ${"kendaraan$i"}->sethargasecond() . "<br><br>";
}

