<?php
// POLYMORPHISM
abstract class Hewan{
    abstract public function Makan();
    abstract public function Bergerak();
    abstract public function Beranak();
}

class Burung extends Hewan{
    public function Makan()
    {
        return "Burung makan biji-bijian <br>";
    }

    public function Bergerak()
    {
        return "Burung bergerak dengan berjalan, terbang dan melompat <br>";
    }

    public function Beranak()
    {
        return "Burung berkembang biak dengan bertelur <br>";
    }
}

class Kambing extends Hewan{
    public function Makan()
    {
        return "Kambing makan rumput<br>";
    }

    public function Bergerak()
    {
        return "Kambing bergerak dengan berjalan dan berlari <br>";
    }

    public function Beranak()
    {
        return "Kambing bereproduksi dengan vivipar <br>";
    }
}

$burung = new Burung;
$kambing = new Kambing;

echo "<br>Perilaku Burung : <br/><br>";
echo $burung->Makan();
echo $burung->Bergerak();
echo $burung->Beranak();

echo "<br>";
echo "<br>Perilaku Kambing : <br/><br>";
echo $kambing->Makan();
echo $kambing->Bergerak();
echo $kambing->Beranak();