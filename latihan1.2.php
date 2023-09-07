<?php
class industri {
    var $gaji = 4_500_000;
    var $jumlahkaryawan = 3000;
    var $bisnis = "Produksi Sepatu";


    public function produksiPabrik()
    {
        if ($this ->jumlahkaryawan > 5200) $status = "Karyawan terlalu banyak";
        else $status = "kekurangan Karyawan";
        return $status;
    }
}
$objekTaekwang = new industri;
$objekYoume = new industri;
$objekSuai = new industri;
$objekHandsome = new industri;

echo "Jenis Pabrik : " . $objekYoume->produksiPabrik();
