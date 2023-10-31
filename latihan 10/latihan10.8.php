<!-- LATIHAN SINGLETON -->
<?php
final class Kendaraan{
    private $Merk, $JumlahRoda, $Harga, $Warna, $BhnBakar;
    /**@var self */

    private static $instance;
    /**@var mixed */

    public $kendaraan;

    public static function getInstance(){
        if (!(self::$instance instanceof self)){
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __construct(){
        
     }
     private function __clone()
     {
        
     }
}
$kendaraan1 = Kendaraan::getInstance();
$kendaraan2 = Kendaraan::getInstance();
$kendaraan3 = Kendaraan::getInstance();
$kendaraan4 = Kendaraan::getInstance();
$kendaraan1->kendaraan = ["Yamaha",2,100_000_000,"Merah","Premium"];
$kendaraan2->kendaraan = ["Toyota",4,160_000_000,"Merah","Premium"];
$kendaraan3->kendaraan = ["Honda Scoopy",2,130_000_000,"Putih","Premium"];
$kendaraan4->kendaraan = ["Isuzu Panther",4,170_000_000,"Merah","Solar"];

print_r($kendaraan1->kendaraan);
echo "<br>";

print_r($kendaraan2->kendaraan);
echo "<br>";

print_r($kendaraan3->kendaraan);
echo "<br>";

print_r($kendaraan4->kendaraan);
echo "<br>";