<?php
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