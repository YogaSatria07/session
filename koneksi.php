<?php
//untuk menghubungkan ke dalam database
$host="localhost";
$username="root";
$password="";
//untuk menghubungkan ke dalam database "akademik1"
$databasename="akademik1";
$con=@mysqli_connect($host,$username,$password,$databasename);
//kondisi jika "con" tidak berhasil ter koneksi maka outputanya atau tampilanya akan eror
if (!$con) {
 echo "Error: " . mysqli_connect_error();
 // lalu exit maka dia tidak akan mengeksekusi kodingan/program php selanjutnya
exit();
}
?>