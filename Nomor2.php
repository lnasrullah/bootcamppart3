<?php
function hitungKembalian($beli, $bayar)
{
    // inisialisasi variable terkait
    $kembalian50 = 0;
    $kembalian20 = 0;
    $kembalian10 = 0;
    $kembalian5 = 0;
    $kembalian2 = 0;
    $kembalian1 = 0;
    $kembalian05 = 0;
    $cashback = 0;
    if($beli > 200000) 
    {
        // perhitungan variable cashback
        $cashback = $beli * 0.1;
    }
    // perhitungan variable total harga
    $totalbeli = $beli - $cashback;
    // perhitungan variable kembalian (sisa)
    $sisa = $bayar - $totalbeli;
    if($sisa >= 50000){
    for($x = 0; $sisa >= 50000; $x++)
        {
            $kembalian50++;
            $sisa= $sisa - 50000;
        }
    echo $kembalian50 . " x 50000<br>";
    }
    if($sisa >= 20000){
    for($y = 0; $sisa >=20000; $y++)
        {
            $kembalian20++;
            $sisa = $sisa - 20000;
        }
        echo $kembalian20 . " x 20000<br>";
    }

    if($sisa >= 10000){
        for($z = 0; $sisa >=10000; $z++)
            {
                $kembalian10++;
                $sisa = $sisa - 10000;
            }
            echo $kembalian10 . " x 10000<br>";
        }

    if($sisa >= 5000){
    	for($c = 0; $sisa >=5000; $c++)
	        {
	            $kembalian5++;
	            $sisa = $sisa - 5000;
	        }
        	echo $kembalian5 . " x 5000<br>";
    	}
    
    if($sisa >= 2000){
        for($c = 0; $sisa >=2000; $c++)
            {
                $kembalian2++;
                $sisa = $sisa - 2000;
            }
            echo $kembalian2 . " x 2000<br>";
        }

    if($sisa >= 1000){
        for($c = 0; $sisa >=1000; $c++)
            {
                $kembalian1++;
                $sisa = $sisa - 1000;
            }
            echo $kembalian1 . " x 1000<br>";
        }

    if($sisa >= 500){
        for($c = 0; $sisa >=500; $c++)
            {
                $kembalian05++;
                $sisa = $sisa - 500;
            }
            echo $kembalian05 . " x 500<br>";
        }

    if($sisa < 500){
        echo $sisa . " disumbangkan.<br>";
        }
}
// inisialisasi nilai harga pembelian dan jumlah nominal pembayaran
hitungKembalian(110500, 200000);
?>
