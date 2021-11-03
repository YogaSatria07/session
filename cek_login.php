<?php
//menginclude koneksi.php
include "koneksi.php";
//mengambil data id_user dari method post
$id_user = $_POST['id_user'];
//dalam pasword terdapat fuction md5 yg digunakan untuk mengengkripsikan inputan pasword 
$pass=md5($_POST['paswd']);
//untuk menampilkan seluruh data user berdasarkan id_user dan password
$sql="SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'";
$login=mysqli_query($con,$sql);
$ketemu=mysqli_num_rows($login);
$r= mysqli_fetch_array($login);
if ($ketemu > 0){
//memulai session
 session_start();
//inisialisasi variable session
 $_SESSION['iduser'] = $r['id_user']; 
 $_SESSION['passuser'] = $r['password'];
 //output jika username dan pasword benar
echo"<center>USER BERHASIL LOGIN<br>";
//mengakses variable seassion
echo "id user =",$_SESSION['iduser'],"<br>";
echo "password=",$_SESSION['passuser'],"<br>";
echo "<a href=logout.php><b>LOGOUT</b></a></center>";
}
else{
    //output jika username dan pasword salah
echo "<center>Login gagal! username & password tidak benar<br>";
echo "<a href=form_login.php><b>ULANGILAGI</b></a></center>";
}
mysqli_close($con);
?>