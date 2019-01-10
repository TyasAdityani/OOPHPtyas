<?php 	

Class Orang {
	public $nama = 'Adityani';
	public $jeniskelamin;

	public function makan()
	{
		return $this->nama.' sedang makan <br>';
	} 
 }

 $saya = new Orang;
 $saya->nama = 'Tyas';
 echo $saya->makan();

 $saya->nama = 'Rara';
 echo $saya->makan();
