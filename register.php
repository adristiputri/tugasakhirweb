<?php
session_start();

// koneksi ke database
$connect= mysqli_connect("localhost","root","","db_pesan");

$name = $_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$input=" INSERT INTO pemesan(name,email,phone)
        VALUES('$name','$email','$phone')";
$hasil= mysqli_query($connect,$input);

 if(!$hasil){
     echo "gagal".mysqli_error($connect);
 } else{
   header("Location:https://www.samsung.com/id/smartphones/galaxy-s10/buy/");
 }
 ?>
