<!-- dependency kode A -->
<?php
class PHPexcel{
    public function export($data){
        echo "Exporting data to excel format .. \n";
    }
}

class Report{
    // mengambil total omzet berdasarkan bulan
    public function getTotalOmzetByMonth(){
        $data = '';

        // memanggil excel
        $PHPExcel = new PHPexcel();
        $PHPExcel->export($data);

        echo "Get omzet, return exported excel path \n";
    }

    public function getPopularProduct(){
        $data = '';

        $PHPExcel = new PHPexcel();
        $PHPExcel->export($data);

        echo "Get popular product, return exported excel path \n";
    }
}

$report = new Report;
$report ->getTotalOmzetByMonth(); echo "<br>";
$report->getPopularProduct();