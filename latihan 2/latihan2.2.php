<?php
class Buku{
    var $kode_buku="12A";
    var $judul_buku="Raksasa dan Timun Mas";
    var $pengarang="CDAAPTNIA";
    var $genre="Dongeng Fiksi";
    var $penerbit="Gramedia";
    var $tahun=1999;

    public function alur() 
    {
      if ($this->tahun < 2000) $status = 'Cerita Lama';
      else $status = 'Cerita Modern';
      return $status;
    }
}

$objekButoIjo = new Buku;

echo "Kode buku : " .$objekButoIjo->kode_buku;
echo "\n";
echo "Judul Buku : " .$objekButoIjo->judul_buku;
echo "\n";
echo "Pengarang Buku : " .$objekButoIjo->pengarang;
echo "\n";
echo "Penerbit : " .$objekButoIjo->penerbit;
echo "\n";
echo "Tahun Terbit : " .$objekButoIjo->alur();



class Aktor{
    var $no_identitas=321327987492;
    var $nama="Billie elish";
    var $asal="Nganjuk";
    var $profesi="Penyanyi";
    var $pengalaman="10 Tahun";
    var $penghasilan=2_000_000_000;
}

