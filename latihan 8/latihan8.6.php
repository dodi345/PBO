<?php

class TKaryawan
{
//mendefinisikan data/property 
var $NamaKaryawan;
var $AlamatKaryawan;
var $NIPKaryawan;
var $StatusPernikahan;
var $Golongan;
var $GajiPokok;
var $TotalJamLembur;
var $TotalUangLembur;
var $PerJamLembur=15000;
	
	//buat accessor
	//buat setter dari data
	public function __construct($Nama,$Alamat,$NIP,$Gol,$JmLembur){
		$this->NamaKaryawan = $Nama;
		$this->AlamatKaryawan = $Alamat;
		$this->NIPKaryawan = $NIP;
		$this->Golongan = $Gol;
		$this->TotalJamLembur = $JmLembur;
		
		}
	
	public function SetNamaKaryawan($nama){
		$this->NamaKaryawan = $nama;
		}
	public function GetNamaKaryawan(){
		return $this->NamaKaryawan;
		}
	
	public function SetAlamatKaryawan($alamat){
		$this->AlamatKaryawan = $alamat;
		}
	public function GetAlamatKaryawan(){
		return $this->AlamatKaryawan;
		}
		
	public function SetNIPKaryawan($nip){
		$this->NIPKaryawan = $nip;
		}
	public function GetNIPKaryawan(){
		return $this->NIPKaryawan;
		}
	
	public function SetStatusPernikahan($status){
		$this->StatusPernikahan = $status;
		}
	public function GetStatusPernikahan(){
		return $this->StatusPernikahan;
		}
		
		public function SetGolongan($golongan){
		$this->Golongan = $golongan;
		}
	public function GetGolongan(){
		return $this->Golongan;
		}
		
	public function SetJamLembur($lembur){
		$this->TotalJamLembur = $lembur;
		}
	
	public function GetGajiPokok(){
		switch ($this->GetGolongan()){
			
			case "Ib" : $this->GajiPokok = 1250000;break;
			case "Ic" : $this->GajiPokok = 1300000;break;
			case "Id" : $this->GajiPokok = 1350000;break;
			case "IIa" : $this->GajiPokok = 2000000;break;
			case "IIb" : $this->GajiPokok = 2100000;break;
			case "IIc" : $this->GajiPokok = 2200000;break;
			case "IId" : $this->GajiPokok = 2300000;break;
			case "IIIa" : $this->GajiPokok = 2400000;break;
			case "IIIb" : $this->GajiPokok = 2500000;break;
			case "IIIc" : $this->GajiPokok = 2600000;break;
			case "IIId" : $this->GajiPokok = 2700000;break;
			case "IVa" : $this->GajiPokok = 2800000;break;
			case "IVb" : $this->GajiPokok = 2900000;break;
			case "IVc" : $this->GajiPokok = 3000000;break;
			case "IVd" : $this->GajiPokok = 3100000;break;
			}
			return $this->GajiPokok;
		}
	
	public function GetTotalJamLembur(){
		return $this->TotalJamLembur;
		}
	
	public function GetTotalUangLembur(){
		return $this->PerJamLembur * $this->GetTotalJamLembur();
		}
		
	public function TotalGajiBulanIni(){
		return $this->GetTotalUangLembur()+ $this->GetGajiPokok();
		}
}

$isi="";
//Array
$data = array();
$nama_karyawan = array();
$alamat = array();
$nip = array();
$golongan = array();
$jam_lembur = array();
echo "Masukan Jumlah Karyawan yang akan di Input : "."\n";
$jumlah_karyawan = trim(fgets(STDIN));
$jml_karyawan = (int)$jumlah_karyawan;
echo "\n";

for ($i = 0; $i < $jml_karyawan; $i++) {
    echo "Masukan Nama Karyawan ke : ". $i."\n";
    $nama_karyawan[$i] = trim(fgets(STDIN));
    echo "Masukan Alamat Karyawan ke: ". $i."\n";
    $alamat[$i] = trim(fgets(STDIN));
    echo "Masukan NIP Karyawan ke : ". $i."\n";
    $nip[$i] = trim(fgets(STDIN));
    echo "Masukan Golongan Karyawan ke: ". $i."\n";
    $golongan[$i] = trim(fgets(STDIN));
    echo "Masukan Jam Lembur Karyawan ke: ". $i."\n";
    $jam_lembur[$i] = trim(fgets(STDIN));
    $jam_lembur2[$i] = (int)$jam_lembur[$i];
    $data[$i] = new TKaryawan($nama_karyawan[$i],$alamat[$i],$nip[$i],$golongan[$i],$jam_lembur2[$i]);
}

//tampilkan data
foreach($data as $Karyawan){
	echo "Nama : ". $Karyawan->GetNamaKaryawan() . "\n";
    echo "Alamat : ". $Karyawan->GetAlamatKaryawan(). "\n";
    echo "NIP : ". $Karyawan->GetNIPKaryawan(). "\n";
	echo "Golongan : ". $Karyawan->GetGolongan(). "\n";
	echo "Total Jam Lembur : ".$Karyawan->GetTotalJamLembur()." jam"."\n";
	echo "Total Gaji Per Bulan : Rp. ".number_format($Karyawan->TotalGajiBulanIni(),2,",",".")."\n";
	echo "\n";
    echo "-------------------------------------------------- \n";

	}

?>