<!-- LATIHAN 8.1 -->
<?php
// class Fruit{
//     public $name;
//     public $color;

//     function __construct($name, $color){
//         $this->name = $name;
//         $this->color = $color;

//     }
//     function get_name(){
//         return $this->name;
//     }
//     function get_color(){
//         return $this->color;
//     }

// }
// $apple = new Fruit("Apple", "Red");
// echo $apple->get_name();
// echo "<br>";
// echo  $apple->get_color();

// // LATIHAN 8.2 CONSTRUCTOR
// class segitiga{
//     public $tinggi;
//     public $lebar;

//     function __construct($tinggi, $lebar)
//     {
//         $this->tinggi=$tinggi;
//         $this->lebar=$lebar;
//     }

//     function Luas(){
//         $Luas=$this->tinggi * $this->lebar/2;
//         echo "Tinggi Segitiga = " .$this->tinggi."<br>";
//         echo "Lebar Segitiga = " .$this->lebar."<br>";
//     }
// }
// $segitiga = new segitiga(200, 500);
// $segitiga ->Luas();

// LATIHAN  8.3 FOPEN
echo "Siapa nama Kamu : ";
$input_nama = fopen("php://stdin","r");
$nama = trim(fgets($input_nama));

echo "Hello $nama, apa Kabar? \n";

echo "Dari mana Anda Berasal : ";
$asal = trim(fgets(STDIN));
echo "Ohh, dari $asal ya \n";