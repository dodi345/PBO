<?php

use perulangan as GlobalPerulangan;

class perulangan{
    public function loop(){
        $array = array('Subang','Bandung','Jakarta','Surabaya','Yogyakarta','Papua');
            foreach ($array as $key){
                echo $key."<br/>";
            }
    }
}

$objekperulangan = new GlobalPerulangan();
echo "Nama-nama Kota di Pulau Jawa : "."<br/>";
echo $objekperulangan->loop()."<br>";