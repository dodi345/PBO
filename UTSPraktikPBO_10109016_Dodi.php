<?php
echo "Selamat Datang di Aplikasi Bangun Ruang CLI \n";
echo "Silahkan LogIn Terlebih Dahulu \n";

class BangunRuang {

    private $users = [
        'dodi89' => 'password',
    ];

    public function login($username, $password) {
        if (array_key_exists($username, $this->users) && $this->users[$username] === $password) {
            return true;
        }
        return false;
    }
}

$bangunRuang = new BangunRuang(); // Membuat instance dari kelas BangunRuang
$loggedIn = false;

while (!$loggedIn) {
    echo "Masukkan username: ";
    $username = trim(fgets(STDIN));
    echo "Masukkan password: ";
    $password = trim(fgets(STDIN));

    if ($bangunRuang->login($username, $password)) {
        echo "Login berhasil! Selamat datang, $username!\n";
        $loggedIn = true;
    } else {
        echo "Login gagal. Silakan coba lagi.\n";
    }

}

class Persegi extends BangunRuang{

    var $LuasPersegi;
    var $KelilingPersegi;

    public function __construct($sisi)
    {
        $this->LuasPersegi = $sisi;
        $this->KelilingPersegi = $sisi;
    }

    public function setLuasPersegi($sisi){
        $this->LuasPersegi = $sisi;
    }
    public function getLuasPersegi(){
        return $this->LuasPersegi;
    }
    public function setKelilingPersegi($sisi){
        $this->KelilingPersegi = $sisi;
    }
    public function getKelilingPersegi(){
        return $this->KelilingPersegi;
    }
}

echo "Selamat Datang, Anda telah berhasil login di Aplikasi Bangun Ruang \n";

echo "Silahkan Pilih Salah Satu Bangun Ruang : \n";
echo "1. Persegi \n";
echo "2. Persegi Panjang \n";
echo "3. Segitiga \n";
echo "4. Lingkaran \n";
echo "5. Belah Ketupat \n";

echo "Masukan Pilihan Anda : ";
$pilih= trim(fgets(STDIN));

// class Persegi {
//     private $sisi;

//     public function __construct($sisi) {
//         $this->sisi = $sisi;
//     }

//     public function hitungLuas() {
//         return $this->sisi * $this->sisi;
//     }

//     public function hitungKeliling() {
//         return 4 * $this->sisi;
//     }
// }

// // Membuat objek persegi dengan sisi 5
// $persegi = new Persegi(5);

// // Menghitung luas dan keliling
// $luas = $persegi->hitungLuas();
// $keliling = $persegi->hitungKeliling();

// echo "Luas persegi dengan sisi 5 adalah: $luas\n";
// echo "Keliling persegi dengan sisi 5 adalah: $keliling\n";