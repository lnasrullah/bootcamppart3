<?php
include 'conn.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM produk WHERE id='$id'");
header('location:../../index.php?menu=produk');	

?>