<?php

class Calculator {
    private $bil1, $bil2;

    public function __construct($val1, $val2) {
        $this->bil1 = $val1;
        $this->bil2 = $val2;
    }

    public function penjumlahan() {
        return $this->bil1 + $this->bil2;
    }

    public function pengurangan() {
        return $this->bil1 - $this->bil2;
    }

    public function perkalian() {
        return $this->bil1 * $this->bil2;
    }

    public function pembagian() {
        if ($this->bil2 == 0) {
            return "Pembagian oleh nol tidak valid.";
        }
        return $this->bil1 / $this->bil2;
    }

    public function modulus() {
        if ($this->bil2 == 0) {
            return "Modulus oleh nol tidak valid.";
        }
        return $this->bil1 % $this->bil2;
    }

}

$calc1 = new Calculator(3, 4);
echo "<p>Hasil Penjumlahan dari 3 + 4 = " . $calc1->penjumlahan() . "</p>";

$calc2 = new Calculator(15, 12);
echo "<p>Hasil Pengurangan dari 15 - 12 = " . $calc2->pengurangan() . "</p>";

$calc3 = new Calculator(20, 2);
echo "<p>Hasil Perkalian dari 20 * 2 = " . $calc3->perkalian() . "</p>";

$calc4 = new Calculator(20, 2);
echo "<p>Hasil Pembagian dari 20 / 2 = " . $calc4->pembagian() . "</p>";

$calc5 = new Calculator(100, 48);
echo "<p>Hasil Modulus dari 100 % 48 = " . $calc5->modulus() . "</p>";

