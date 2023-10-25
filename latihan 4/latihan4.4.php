<?php
// cara pertama
// membuat array yang berisi nama buah-buahan
$buah = array('semangka','jeruk','apel','anggur');
// menampilkan data array dengan nomor urut 2
echo $buah[2]."<br>";

$buah['semangka'] = "isinya merah"."<br>";
$buah['jeruk'] = "rasanya manis"."<br>";
$buah['apel'] = "warnanya merah"."<br>";
$buah['anggur'] = "harganya mahal"."<br>";

echo $buah['jeruk'];

// cara kedua
// penamaan isi array variabel buah
$buah = array(
    'semangka' => "isinya merah",
    'jeruk' => "rasanya manis",
    'apel' => "warnanya merah",
    'anggur' => "harganya mahal",
);
echo "<br>";
echo $buah['jeruk'];

// perulangan PHP array
$buah = array('semangka','jeruk','apel','anggur');
// menghitung untuk menghitung isi array
for($x=0;$x<count($buah);$x++){
    echo $buah[$x]."<br>";
}
// array multidimensi
// array dual dimensi

$matrik = array();
$matrik = [
    [2,3,4],
    [7,5,0],
    [4,3,8],
];
echo "<br>";
echo $matrik[1][0];