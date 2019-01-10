<?php 	

Class OrangTua{
	public $nama = 'Adityani';
	public $jeniskelamin = 'Perempuan';

	public function setData($nm ='Andi', $jk ='Laki-laki'){
		$this->nama = $nm;
		$this->jeniskelamin = $jk;
	}

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
$anak->setData('Tyas','Perempuan');
echo $anak->biodata();
echo $anak->makan();
