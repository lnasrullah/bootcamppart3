<?php


function sort_array($array) 
{

	for($baris=0;$baris<count($array);$baris++)
	{
	 for($kolom=0;$kolom<count($array[$baris]);$kolom++)
	 {
	  echo $array[$baris][$kolom]."   ";
	 }
	 echo "<br>";
	}
}
$array = [['g','h','i','j'],['a','c','b','e','d'],['g','e','f']];
// gunakan fungsi pada array $array
sort($array);
sort_array($array);
?>
