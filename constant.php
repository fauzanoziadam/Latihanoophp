<?php

// define ('NAMA', 'Fauzan Oziadam');
// echo NAMA;

// echo "<br>";

// const UMUR = 21;
// echo UMUR;

// class Coba{
// 	const NAMA = 'Ozi';
// }
// echo Coba::NAMA;


//echo __File__;




// function coba(){
// 	return __FUNCTION__;
// }
//  echo coba();
 

 class coba{
 	public $kelas = __CLASS__;
 }

$obj = new Coba;
echo $obj->kelas;




?>