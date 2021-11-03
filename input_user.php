<?php
//menginclude koneksi.php
include "koneksi.php";
//mengambil data id_user dari method post
$id_user = $_POST['id_user'];
//mengambil data nama dari method post
 $nama = $_POST['nama'];
 //mengambil data email dari method post
 $email = $_POST['email'];
 //dalam pasword terdapat fuction md5 yg digunakan untuk mengengkripsikan inputan pasword 
$pass = md5($_POST['password']);
//simpen kedalam query pada user
$sql = "INSERT INTO users(id_user,password, nama, email) 
VALUES ('$id_user', '$pass', '$nama','$email')";
$query=mysqli_query($con, $sql);
mysqli_close($con);
//Fungsi untuk mengarahkan ke lokasi tampil.user
header('location:tampil_user.php');
?>