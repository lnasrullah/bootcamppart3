<?php 
include 'conn.php';
  $id  	= $_POST['id'];
  $tittle  	= $_POST['tittle'];
  $image  	= $_POST['image'];
  $deskripsi    = $_POST['deskripsi'];
  $create_time    = $_POST['create_time'];
  $user_id    = $_POST['user_id'];

  	
  $querytambah = mysqli_query($koneksi, "INSERT INTO news(id, tittle, image, deskripsi, create_time, user_id) VALUES ('$id','$tittle','$image', '$deskripsi', '$create_time', '$user_id')") or die(mysqli_error());
  if($querytambah) {
    header('location:../../index.php');
   } else{
    echo "Upss Something wrong..";
   }

 ?>