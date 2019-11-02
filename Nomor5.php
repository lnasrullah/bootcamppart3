<?php
function generate($jumlah)
{
	// masukan angka dan huruf yang hendak dibuat generate number
	$kata = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	// inisialisasi nilai awal
	$generate = '';
	$max = count($kata)-1;
	for ($j=0; $j<$jumlah; $j++)
	{
		for($i=0;$i<16;$i++)
		{
		  $generate .= (!($i % 4) && $i ? '-' : '').$kata[rand(0, $max)];

		}
	}
	// memasukan nilai generate number ke dalam array
	$generatefix = str_split($generate, 19);
	echo "<pre>";
	print_r($generatefix);
	echo "</pre>";
		
}
// hasilkan 3 buah generate number
generate(3);
?>
