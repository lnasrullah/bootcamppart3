<?php 
include 'conn.php';
  $id  	= $_POST['id'];
  $name  	= $_POST['name'];
  $email  	= $_POST['email'];
  $role    = $_POST['role'];

  	
  $querytambah = mysqli_query($koneksi, "INSERT INTO user(id, name, email, role) VALUES ('$id','$name','$email', '$role')") or die(mysqli_error());
  if($querytambah) {
    header('location:../../index.php');
   } else{
    echo "Upss Something wrong..";
   }

 ?>