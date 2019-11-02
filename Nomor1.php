<?php

function pertambahan($a,$b,$c,$d)
{
   $total = $a + $b + $c +$d;
   return $total;
}

$nilai1 = 1;
$nilai2 = 2; 
$nilai3 = 3; 
$nilai4 = 4; 
$nilai5 = 5;

$pertambahan1 = pertambahan($nilai2,$nilai3,$nilai4,$nilai5);
$pertambahan2 = pertambahan($nilai1,$nilai3,$nilai4,$nilai5);
$pertambahan3 = pertambahan($nilai1,$nilai2,$nilai4,$nilai5);
$pertambahan4 = pertambahan($nilai1,$nilai2,$nilai3,$nilai5);
$pertambahan5 = pertambahan($nilai1,$nilai2,$nilai3,$nilai4);

$max = max($pertambahan1,$pertambahan2,$pertambahan3,$pertambahan4,$pertambahan5);
$min = min($pertambahan1,$pertambahan2,$pertambahan3,$pertambahan4,$pertambahan5);

echo "Maka angaka terbesar adalah " . $max . " dan terkecil " . $min;
?>
