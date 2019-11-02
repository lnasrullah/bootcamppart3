<?php

function cetak_gambar($n)
{
for($i=1;$i<=$n;$i++)

        {

            if($i % 2 == 0)
                {echo "* = * = *<br>";}
            else
                {echo "* * = * *<br>";}
        }
}
//cetak lambang jika ganjil * = * = *
//cetak lambang jika genap * * = * *
cetak_gambar(5);

?>
