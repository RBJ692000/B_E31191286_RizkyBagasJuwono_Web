<?php 
class Laptop
{
	// buat properties dan method (soal 2 dan 3)
	public $pemilik;
	public $merek;

	// buat method (soal no 4)
	public function hidupkan_laptop(){
		$keterangan = "Hidupkan Laptop ".$this->merek." punya ".$this->pemilik;
		return $keterangan;
	}

	// buat method (soal no 3)
	public function matikan_laptop(){
		$keterangan = "Matikan Laptop ".$this->merek." punya ".$this->pemilik;
		return $keterangan;
	}

	// buat method (soal no 6)
	public function restart_laptop(){
		$keterangan1 = "Hidupkan Laptop ".$this->merek." punya ".$this->pemilik;
		$keterangan2 = "Matikan Laptop ".$this->merek." punya ".$this->pemilik;
		return $keterangan1.". ".$keterangan2;
	}

}
 // membuat 3 objek (soal 7)
$rizky= new Laptop();
$budi= new Laptop();
$imam= new Laptop();

// set value objek faiz
$rizky -> pemilik ='A';
$rizky -> merek ='Asus';

// set value objek faiz
$budi -> pemilik ='B';
$budi -> merek ='Acer';

// set value objek faiz
$imam -> pemilik ='C';
$imam -> merek ='Lenovo';

// memanggil dan eksekusi method 
echo $rizky -> hidupkan_laptop()."<br>";
echo $budi -> matikan_laptop()."<br>";
echo $imam -> restart_laptop()."<br>";

?>