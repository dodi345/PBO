<?php
class Employee {
    public $nama;
    public $masa_kerja;

    public function __construct($nama, $masa_kerja) {
        $this->nama = $nama;
        $this->masa_kerja = $masa_kerja;
    }

    public function hitungGaji() {
        return 100_000_000; 
    }
}

class Programmer {
    public $employee;

    public function __construct($nama, $masa_kerja) {
        $this->employee = new Employee($nama, $masa_kerja);
    }

    public function hitungGaji() {
        if ($this->employee->masa_kerja <= 1) {
            return $this->employee->hitungGaji();
        } elseif ($this->employee->masa_kerja <= 10) {
            $bonus = 0.01 * $this->employee->masa_kerja;
        } else {
            $bonus = 0.02 * $this->employee->masa_kerja;
        }
        return $this->employee->hitungGaji() + $bonus;
    }
}

class Direktur {
    public $employee;

    public function __construct($nama, $masa_kerja) {
        $this->employee = new Employee($nama, $masa_kerja);
    }

    public function hitungGaji() {
        $bonus = 0.5 * $this->employee->masa_kerja;
        $tunjangan = 0.1 * $this->employee->masa_kerja;
        return $this->employee->hitungGaji() + $bonus + $tunjangan;
    }
}

class PegawaiMingguan {
    public $employee;
    public $harga_barang;
    public $stock_terjual;

    public function __construct($nama, $masa_kerja, $harga_barang, $stock_terjual) {
        $this->employee = new Employee($nama, $masa_kerja);
        $this->harga_barang = $harga_barang;
        $this->stock_terjual = $stock_terjual;
    }

    public function hitungGaji() {
        if ($this->stock_terjual >= 0.7 * $this->harga_barang) {
            $gaji_tambahan = 0.1 * $this->harga_barang;
        } else {
            $gaji_tambahan = 0.03 * $this->harga_barang;
        }
        return $this->employee->hitungGaji() + $gaji_tambahan;
    }
}

// Contoh penggunaan:
$programmer = new Programmer("John", 20);
$direktur = new Direktur("Alice", 15);
$pegawaiMingguan = new PegawaiMingguan("Bob", 2, 50000, 40);

echo "Gaji Programmer: " . $programmer->hitungGaji() . "\n";
echo "Gaji Direktur: " . $direktur->hitungGaji() . "\n";
echo "Gaji Pegawai Mingguan: " . $pegawaiMingguan->hitungGaji() . "\n";
