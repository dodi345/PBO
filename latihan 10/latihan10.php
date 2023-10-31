<?php
class kendaraan{
    private $merk, $jumlahRoda, $harga, $warna, $bahanBakar;


    public function __construct ($Merk, $Jumlahroda, $Harga, $Warna, $BahanBakar){
        $this->merk = $Merk;
        $this->jumlahRoda = $Jumlahroda;
        $this->harga = $Harga;
        $this->warna = $Warna;
        $this->bahanBakar = $BahanBakar;
    
    }
    public function setMerek($Merk){
        $this->merk=$Merk;
    }
}

