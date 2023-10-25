<?php
class Guru {
    var $nama_nama = array("de", "ce", "ve", "re");
    var $nama_guru;
    var $NIK;
    var $jabatan;
    var $alamat;
}

class Murid{
    var $nama_siswa;
    var $NIS;
    var $kelas;
    var $alamat;
}

class kurikulum{
    var $tahun_akademik;
    var $sks_matkul;
}

class mobil{
    var $jumlahroda=4;
    var $warna="Merah";
    var $bahan_bakar="Pertamax Turbo";
    var $harga=120_000_000;
    var $merk='A';

    public function statusharga() 
    {
      if ($this->harga > 50_000_000) $status = 'Mahal';
      else $status = 'Murah';
      return $status;
    }
}


class Buku{

}

$objekTesla = new Mobil;
$objekAudi = new Mobil;
$objekBMW = new Mobil;
