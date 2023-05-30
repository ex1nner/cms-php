<?php
echo "<h2>User</h2>
<form method=POST action=form_admin.php>
 <input type=submit value='Tambah User'>
 </form>
<table>
 <tr><th>No</th><th>Username</th><th>Nama
Lengkap</th><th>Email</th><th>Aksi</th></tr>";
 include "../config/koneksi.php";
$tampil=mysqli_query($con, "SELECT * FROM user ORDER BY id_user");
 $no=1;
 while ($r=mysqli_fetch_array($tampil)){
 echo "<tr><td>$no</td>
 <td>$r[id_user]</td>
 <td>$r[nama_lengkap]</td>
 <td><a href=mailto:$r[email]>$r[email]</a></td>
 <td><a href=edit_user.php?id=$r[id_user]>Edit</a> |
 <a href=hapus_user.php?id=$r[id_user]>Hapus</a>
 </td></tr>";
 $no++;
 }
 echo "</table><br><br>";
 echo "<button><a href=logout_login.php>Logout</a></button>";
?>
