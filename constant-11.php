<?php 

// define('NAMA', 'Tyas Adityani');
// echo NAMA;

// echo "<br>";

// const UMUR = 16;
// echo UMUR;


// class coba {
// 	const NAMA = 'Tyas';
// }
// echo coba::NAMA;


// echo __FILE__;


// function coba(){
// 	return __FUNCTION__;
// }
// echo coba();


class Coba {
	public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;





 ?>