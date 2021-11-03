<?php
//outputan tampilan pada user dalam website
echo "<center><h2>User</h2>
<form method=POST action=form_user.php>
<input type=submit value='Tambah User'>
</form>
<table>
<tr><th>No</th><th>Username</th><th>NamaLengkap</th><th>Email</th><th>Aksi</th></tr>";
//menginclude koneksi.php
include "koneksi.php";
//untuk menampilkan seluruh data user berdasarkan id_user
$sql="select * from users order by id_user";
$tampil = mysqli_query($con,$sql);
if (mysqli_num_rows($tampil) > 0) {
$no=1;
//perulangan while memungkinkan untuk menampilakn seluruh data dalam database 
while ($r = mysqli_fetch_array($tampil))
{
echo "<tr><td>$no</td><td>$r[id_user]</td>
<td>$r[nama]</td>
<td>$r[email]</td>
<td><a href='hapus_user.php?id=$r[id_user]'>Hapus</a></td>
</tr></center>";
 $no++;
}
echo "</table>";
} else {
 echo "0 results";
 }
 mysqli_close($con);
?>
