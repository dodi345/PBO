<?php
class PHPexcel{
    public function export($data){
        echo "Exporting data to excel format\n";
    }
}

class Report{
    protected $phpexcel;

    public function __construct(PHPexcel $phpexcel)
    {
        $this->phpexcel = $phpexcel;
    }

    public function getTotalOmzetByMonth(){
        $data = '';
        $this->phpexcel->export($data);

        echo "Get omxet, return exported excel path \n";
    }

    public function getPopularProduct(){
        
    }
}