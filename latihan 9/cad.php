<!-- <?php
class Tabungan
{
    private $saldo;

    public function __construct($saldoAwal)
    {
        $this->saldo = $saldoAwal;
    }

    public function cekSaldo()
    {
        return $this->saldo;
    }

    public function setorTunai($jumlah)
    {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            return true;
        } else {
            return false;
        }
    }

    public function tarikTunai($jumlah)
    {
        if ($jumlah > 0 && $jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
            return true;
        } else {
            return false;
        }
    }
}

$siswa1 = new Tabungan(100000);
$siswa2 = new Tabungan(150000);
$siswa3 = new Tabungan(75000);

echo "Selamat datang di Program Tabungan Sekolah\n";

while (true) {
    echo "Pilih Siswa (1, 2, 3) atau ketik 'exit' untuk keluar: ";
    $pilihan = trim(fgets(STDIN));

    if ($pilihan === 'exit') {
        break;
    } elseif (in_array($pilihan, ['1', '2', '3'])) {
        $siswa = ($pilihan === '1') ? $siswa1 : (($pilihan === '2') ? $siswa2 : $siswa3);

        echo "Saldo Siswa " . $pilihan . ": " . $siswa->cekSaldo() . " Rupiah\n";

        echo "Masukkan jumlah setoran atau penarikan: ";
        $jumlah = (int)trim(fgets(STDIN));

        if ($jumlah > 0) {
            echo "Pilih aksi (setor/tarik): ";
            $aksi = trim(fgets(STDIN));

            if ($aksi === 'setor') {
                if ($siswa->setorTunai($jumlah)) {
                    echo "Setor tunai berhasil. Saldo sekarang: " . $siswa->cekSaldo() . " Rupiah\n";
                } else {
                    echo "Jumlah setoran harus lebih dari 0 Rupiah.\n";
                }
            } elseif ($aksi === 'tarik') {
                if ($siswa->tarikTunai($jumlah)) {
                    echo "Tarik tunai berhasil. Saldo sekarang: " . $siswa->cekSaldo() . " Rupiah\n";
                } else {
                    echo "Saldo tidak mencukupi atau jumlah penarikan harus lebih dari 0 Rupiah.\n";
                }
            } else {
                echo "Aksi tidak valid. Gunakan 'setor' atau 'tarik'.\n";
            }
        } else {
            echo "Jumlah harus lebih dari 0 Rupiah.\n";
        }
    } else {
        echo "Siswa tidak ditemukan.\n";
    }
}

echo "Terima kasih telah menggunakan Program Tabungan Sekolah.\n";
?> -->