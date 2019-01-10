<?php 	

Class OrangTua{
	public $nama = 'Adityani';
	public $jeniskelamin = 'Perempuan';

	public function makan(){
		return "{$this->nama} sedang makan <br>";
	} 
 }
Class AnakOrang extends OrangTua {
	public function biodata(){
		return "Nama : {$this->nama} <br>".
				"Jenis Kelamin : {$this->jeniskelamin} <br>".
				"=============================================<p>";
	}
}

$anak = new AnakOrang;
$anak->nama = "Tyas Adityani";
$anak->jeniskelamin = "Perempuan";
echo $anak->biodata();
echo $anak->makan();
