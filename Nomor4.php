<?php
function hitungketentuan($nama, $beli)
{
    // perhitungan diskon ketentuan A
    If ($nama == "A" && $beli > 10)
    {

        $hargaawal = 3000 * $beli;
        // variable diskon beserta rumus perhitungannya
        $diskon = $hargaawal - ($beli * 500);
            If ($diskon > 10) {
                $totaldiskon = $beli * 500;    
            } else {
                $totaldiskon = $diskon;
            } 
        // variable kembalian total beserta rumus perhitungannya
        $bayar = $hargaawal - $totaldiskon;
        //cetak atau tampilkan data yang sudah dihitung
        echo "Memakai ketentuan A <br />";
        echo "Total Harga Barang Rp." . $hargaawal . "<br />";
        echo "Potongan Rp." . $totaldiskon . "<br />";
        echo "Total Yang Harus Di Bayar Rp." . $bayar . "<br />";
    // perhitungan tidak diskon ketentuan A
    } elseIf ($nama == "A" && $beli <= 10)
    {
        $totaldiskon = 0;
        $hargaawal = 3000 * $beli;
        $bayar = $hargaawal - $totaldiskon;
        //cetak atau tampilkan data yang sudah dihitung
        echo "Memakai ketentuan A <br />";
        echo "Total Harga Barang Rp." . $hargaawal . "<br />";
        echo "Potongan Rp." . $totaldiskon . "<br />";
        echo "Total Yang Harus Di Bayar Rp." . $bayar . "<br />";
    // perhitungan  diskon ketentuan B
    } elseIf ($nama == "B" && $beli > 5)
    {

        $hargaawal = 3500 * $beli;
        // variable diskon beserta rumus perhitungannya
        $diskon = $hargaawal * 0.5;
            If ($diskon > 5) {
                $totaldiskon = $hargaawal * 0.5;    
            } else {
                $totaldiskon = $diskon;
            } 
        // variable kembalian total beserta rumus perhitungannya
        $bayar = $hargaawal - $totaldiskon;
        //cetak atau tampilkan data yang sudah dihitung
        echo "Memakai ketentuan B <br />";
        echo "Total Harga Barang Rp." . $hargaawal . "<br />";
        echo "Potongan Rp." . $totaldiskon . "<br />";
        echo "Total Yang Harus Di Bayar Rp." . $bayar . "<br />";
    // perhitungan tidak diskon ketentuan B
    } elseIf ($nama == "B" && $beli <= 5)
    {
        $totaldiskon = 0;
        $hargaawal = 3500 * $beli;
        $bayar = $hargaawal - $totaldiskon;
        //cetak atau tampilkan data yang sudah dihitung
        echo "Memakai ketentuan B <br />";
        echo "Total Harga Barang Rp." . $hargaawal . "<br />";
        echo "Potongan Rp." . $totaldiskon . "<br />";
        echo "Total Yang Harus Di Bayar Rp." . $bayar . "<br />";
    // perhitungan  diskon ketentuan B
    } elseIf ($nama == "C" && $beli > 0)
    {

        $hargaawal = 5000 * $beli;
        // variable diskon beserta rumus perhitungannya
        $diskon = $hargaawal;
            If ($diskon > 5) {
                $totaldiskon = 0;    
            } else {
                $totaldiskon = $diskon;
            } 
        // variable kembalian total beserta rumus perhitungannya
        $bayar = $hargaawal - $totaldiskon;
        //cetak atau tampilkan data yang sudah dihitung
        echo "Memakai ketentuan C <br />";
        echo "Total Harga Barang Rp." . $hargaawal . "<br />";
        echo "Potongan Rp." . $totaldiskon . "<br />";
        echo "Total Yang Harus Di Bayar Rp." . $bayar . "<br />";
    // perhitungan tidak diskon ketentuan C
    }
}

hitungketentuan('A', 11);
?>
