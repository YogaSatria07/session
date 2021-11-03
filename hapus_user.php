<?php
//menginclude koneksi.php
include "koneksi.php";
// fungsi untuk mengahpus user dengan memangil variable id_user
$sql="delete from users where id_user= '$_GET[id]'";
mysqli_query($con, $sql);
mysqli_close($con);
//Fungsi untuk mengarahkan ke lokasi tampil.user
header('location:tampil_user.php');
?>