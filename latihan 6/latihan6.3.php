<?php

// LATIHAN6.3
class Pengulangan{
    public function looping1(){
        for ($baris =1; $baris <= 6; $baris++)
        {
            for ($kolom=1;$kolom < $baris; $kolom++)
            {
                echo $kolom. "&nbsp;";
            }
            echo "<br>";
        }
     
    }

    public function looping2(){
        for ($baris =1; $baris <= 6; $baris++)
        {
            for ($kolom=1;$kolom < $baris; $kolom++)
            {
                echo "*". "&nbsp;";
            }
            echo "<br>";
        }
    }
}

$objekperulangan = new Pengulangan();
echo "Jenis Pengulangan 1 "."<br>";
echo $objekperulangan ->looping1()."<br>";
echo "Jenis Pengulangan 2 "."<br>";
echo $objekperulangan ->looping2()."<br>";