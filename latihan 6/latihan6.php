
<!-- COUNTED LOOP -->
<!-- LATIHAN 6.1 -->
<?php
echo "LATIHAN 6.1";
class perulangan1{
    public function looping(){
        for ($x =1; $x <= 10; $x++)
        {
            echo $x. "<br>";
        }
    }
}

echo "<br>";

// LATIHAN 6.2
echo "LATIHAN 6.2";
echo "<br>";
class perulangan2{
    public function looping(){
        for ($x =5; $x <= 21; $x++)
        {
            echo $x. "<br>";
        }
    }
}

$objekperulangan = new perulangan2();
echo $objekperulangan -> looping();

// LATIHAN 6.3
echo "LATHAN 6.3";
echo "<br>";
class perulangan3{
    public function looping(){
        for ($i =15; $i > 0; $i--)
        {
            echo $i. "<br>";
        }
    }
}

$objekperulangan = new perulangan3();
echo "Jenis Perulangan Lainnya "."<br>";
echo $objekperulangan-> looping()."<br>";

// LATIHAN 6.4
echo "LATHAN 6.4";
echo "<br>";
class perulangan4{
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

$objekperulangan = new perulangan4();
echo "Jenis Pengulangan 1 "."<br>";
echo $objekperulangan ->looping1()."<br>";
echo "Jenis Pengulangan 2 "."<br>";
echo $objekperulangan ->looping2()."<br>";

// LATIHAN 6.5
echo "LATHAN 6.5";
echo "<br>";
class perulangan5{
    public function loop(){
        $array = array('Subang','Bandung','Jakarta','Surabaya','Yogyakarta','Papua');
            foreach ($array as $key){
                echo $key."<br/>";
            }
    }
}

$objekperulangan = new perulangan5();
echo "Nama-nama Kota di Pulau Jawa : "."<br/>";
echo $objekperulangan->loop()."<br>";

// LATIHAN 6.6
echo "LATHAN 6.6";
echo "<br>";
$i = 0;
while($i<101)
{
    echo$i;
    echo "<br>";
    $i = $i +10;
}
echo "<br>";
$a =1;
while($a<11)
{
    $b =1;
    while($b < 11)
    {
        echo $b.",";
        $b++;
    }
    $a++;
    echo "<br>";
}
echo "<br>";
$c =1;
while($c < 11)
{
    if ($c ==11){
        $a++;
        continue;
    }
    echo $c;
    $c++;
}



// LATIHAN 6.7
echo "LATHAN 6.7";
echo "<br>";
class perulangan6{
    public function loop()
    {
        $i =  0;
        do{
            $i++;
            echo $i . '<br />';
        }
        while ($i <= 9);
    }
}

$objekperulangan = new perulangan6();
echo $objekperulangan-> loop()."<br>";


// LATIHAN 6.8
echo "LATHAN 6.8";
echo "<br>";
for ($i = 1; $i < 5; $i++){
    for ($j = $i; $j <= 5; $j++){
        echo "&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo '<br>';
}


// LATIHAN 6.9
echo "LATHAN 6.9";
echo "<br>";
for ($a =1; $a<11; $a++)
{
    for ($b =1; $b<11; $b++)
    {
        echo $b.",";
    }
    echo "<br>";
}



// LATIHAN 6.10
echo "LATHAN 6.10";
echo "<br>";
class Bintang
{
  var $bintang;

  public function setTinggiBintang($bintang)
  {
    $this->bintang = $bintang;
  }

  public function getTinggiBintang()
  {
    return $this->bintang;
  }

  public function cetakSegitigaSamaKaki()
  {
    for ($i = 0; $i <= $this->bintang; $i++) {
      for ($j = $this->bintang; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
      }
      for ($k = 1; $k < $i; $k++) {
        echo "**";
      }
      echo "<br>";
    }
  }


  public function cetakSegitigaKanan()
  {
    for ($i = 0; $i < $this->bintang; $i++) {
      for ($j = 0; $j < $i; $j++) {
        echo "*";
      }
      echo "<br>";
    }

    for ($i = $this->bintang - 1; $i >= 1; $i--) {
      for ($j = 1; $j <= $i; $j++) {
        echo "*";
      }
      echo "<br>";
    }
  }

  public function cetakSegitigaKiri()
  {
    for ($i = 0; $i < $this->bintang; $i++) {
      for ($j = $this->bintang; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
      }
      for ($k = 1; $k <= $i; $k++) {
        echo "*";
      }
      echo "<br>";
    }

    for ($i = $this->bintang - 1; $i >= 1; $i--) {
      for ($j = $this->bintang; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
      }
      for ($k = 1; $k <= $i; $k++) {
        echo "*";
      }
      echo "<br>";
    }
  }
}

$segitiga1 = new Bintang();
$segitiga1->setTinggiBintang(6);
echo "<br>Segitiga Kiri:<br>";
$segitiga1->cetakSegitigaSamaKaki();



$segitiga2 = new Bintang();
$segitiga2->setTinggiBintang(6);
echo "Segitiga Kanan:<br>";
$segitiga2->cetakSegitigaKanan();


$segitiga3 = new Bintang();
$segitiga3->setTinggiBintang(6);
echo "<br>Segitiga Kiri:<br>";
$segitiga3->cetakSegitigaKiri();

