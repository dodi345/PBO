<!DOCTYPE html>
<html>
    <h4>TOKO PEGADAIAN SYARIAH</h4>
    <h5>Jl. Keadilan No 16 </h5>
    <h5>Telp. 72353459</h5>
</html>

<?php
echo "<h4>Program Besaran Angsuran Hutang</h4>";

class Pinjaman{
    var $jumlah_pinjaman;
    var $bunga; //dalam persen %
    var $angsuran; //dalam bulan
    var $totalpinjaman;
    var $totalangsuran;

    public function totalpinjam(){
        $this->totalpinjaman = $this->jumlah_pinjaman + ($this->jumlah_pinjaman * ($this->bunga/100));
        return $this->totalpinjaman;
    }

    public function totalangsuran(){
        $this->totalangsuran = $this->totalpinjaman / $this->angsuran;
        return $this->totalangsuran;
    }
}

$peminjam1 = new Pinjaman();
$peminjam1->jumlah_pinjaman = 1_000_000; 
$peminjam1->bunga = 10;
$peminjam1->angsuran = 5;
$total = $peminjam1->totalpinjam();
$angsur = $peminjam1->totalangsuran();


echo "Jumlah Pinjaman : ".$peminjam1->jumlah_pinjaman;
echo "<br>";
echo "Total Bunga : ".$peminjam1->bunga;
echo "<br>";
echo "Total Pinjaman: $total";
echo "<br>";
echo "Lama Angsuran (bulan): ".$peminjam1->angsuran."Bulan";
echo "<br>";
echo "Besar Angsuran : Rp. $angsur";