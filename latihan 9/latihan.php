<?php
class UangTabungan {

    private $saldo;


    public function __construct($saldo) {
        $this->saldo = $saldo;
    }


    public function getSaldo() {
        return $this->saldo;
    }


    public function setorTunai($jumlah) {
        $this->saldo += $jumlah;
    }


    public function tarikTunai($jumlah) {
        if ($this->saldo >= $jumlah) {
            $this->saldo -= $jumlah;
        } else {
            echo "Saldo tidak cukup\n";
        }
    }
}


class Siswa1 extends UangTabungan {
 
    protected $nama;


    public function __construct($nama, $saldo) {
        parent::__construct($saldo); 
        $this->nama = $nama;
    }

 
    public function infoSiswa() {
        echo "Nama: " . $this->nama . "\n";
        echo "Saldo: Rp" . parent::getSaldo() . "\n"; 
    }
}


class Siswa2 extends UangTabungan {
 
    protected $nama;


    public function __construct($nama, $saldo) {
        parent::__construct($saldo); 
        $this->nama = $nama;
    }

 
    public function infoSiswa() {
        echo "Nama: " . $this->nama . "\n";
        echo "Saldo: Rp" . parent::getSaldo() . "\n"; 
    }
}

class Siswa3 extends UangTabungan {
  
    protected $nama;

 
    public function __construct($nama, $saldo) {
        parent::__construct($saldo); 
        $this->nama = $nama;
    }


    public function infoSiswa() {
        echo "Nama: " . $this->nama . "\n";
        echo "Saldo: Rp" . parent::getSaldo() . "\n"; 
    }
}


$siswa = array();
$siswa[1] = new Siswa1("Rani", 0);
$siswa[2] = new Siswa2("Budi",0);
$siswa[3] = new Siswa3("Andi", 0);

echo "Informasi awal:\n";
for ($i = 1; $i <= 3; $i++) {
    echo "Siswa " . $i . "\n";
    $siswa[$i]->infoSiswa();
}


echo "\nMenu pilihan operasi tabungan sekolah:\n";
echo "1. Setor tunai\n";
echo "2. Tarik tunai\n";
echo "3. Keluar\n";


$pilihan = 0;


while ($pilihan != 3) {

    echo "\nMasukkan pilihan operasi: ";
    $pilihan = (int) fgets(STDIN);


    switch ($pilihan) {
        case 1: 
            echo "Masukkan nomor siswa (1-3): ";
            $nomor = (int) fgets(STDIN);


            echo "Masukkan jumlah uang yang akan disetor: ";
            $jumlah = (int) fgets(STDIN);


            $siswa[$nomor]->setorTunai($jumlah);


            echo "Informasi saldo siswa " . $nomor . " setelah setor tunai:\n";
            $siswa[$nomor]->infoSiswa();
            break;
        case 2:
            echo "Masukkan nomor siswa (1-3): ";
            $nomor = (int) fgets(STDIN);

            // Membaca input jumlah uang yang akan ditarik
            echo "Masukkan jumlah uang yang akan ditarik: ";
            $jumlah = (int) fgets(STDIN);

            // Memanggil method tarikTunai pada objek siswa yang dipilih
            $siswa[$nomor]->tarikTunai($jumlah);

            // Menampilkan informasi saldo siswa yang telah ditarik
            echo "Informasi saldo siswa " . $nomor . " setelah tarik tunai:\n";
            $siswa[$nomor]->infoSiswa();
            break;
        case 3: // Jika pilihan 3, maka keluar dari program
            echo "Terima kasih telah menggunakan program tabungan sekolah\n";
            break;
        default: // Jika pilihan tidak valid, maka tampilkan pesan error
            echo "Pilihan tidak valid, silakan masukkan angka 1-3\n";
    }
}