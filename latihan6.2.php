<?php

class perulangan{
    public function looping(){
        for ($i =15; $i > 0; $i--)
        {
            echo $i. "<br>";
        }
    }
}

$objekperulangan = new perulangan();
echo "Jenis Perulangan Lainnya "."<br>";
echo $objekperulangan-> looping()."<br>";


