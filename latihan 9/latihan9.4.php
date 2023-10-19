<?php
class komputer{
    private $jenis_processor = "Intel Core I7-4790 3.6Ghz";
    protected $jenis_RAM = "DDR 4";
    public $jenis_VGA = "PCI Exspress";

    public function tampilkan_processor(){
        return $this->jenis_processor;
    }
    public function tampilkan_jenis_processor(){
        return $this->jenis_processor;
    }
    private function tampilkan_ram(){
        return $this->jenis_RAM;
    }
    protected function tampilkan_vga(){
        return $this->jenis_VGA;
    }
    public function tampilkan_vga2(){
        return $this->jenis_VGA;
    }
}

class laptop extends komputer{
    // public function display_processor(){
    //     return $this->jenis_processor;
    // }
    public function display_processor2(){
        return $this->tampilkan_processor();
    }
    public function display_ram(){
        return $this->jenis_RAM;
    }
    // public function display_ram2(){
    //     return $this->tampilkan_ram();
    // }
    public function display_vga(){
        return $this->tampilkan_vga2();
    }
    // private function display_processorkomputer(){
    //     return $this->jenis_processor;
    // }
}

$komputer = new komputer();
$laptop = new laptop();

echo "Baris 48 : ".$komputer->tampilkan_processor()."<br>";
// echo "Baris 49 : ".$laptop->display_processor()."<br>";
echo "Baris 50 : ".$laptop->display_processor2()."<br>";
echo "Baris 51 : ".$laptop->tampilkan_jenis_processor()."<br>";
echo "Baris 52 : ".$laptop->display_ram()."<br>";
echo "Baris 53 : ".$laptop->display_vga()."<br>";
// echo "Baris 54 : ".$laptop->display_processorkomputer()."<br>";