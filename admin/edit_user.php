<?php
include "../config/koneksi.php";
$edit=mysqli_query($con, "SELECT * FROM user WHERE id_user='$_GET[id]'");
 $r=mysqli_fetch_array($edit);
 echo "<h2>Edit User</h2>
 <form method=POST action=update_user.php>
 <input type=hidden name=id value='$r[id_user]'>
 <table>
 <tr><td>Username</td> <td> : <input type=text name='username'
value='$r[id_user]'></td></tr>
 <tr><td>Password</td> <td> : <input type=text name='password'> *) </td></tr>
 <tr><td>Nama Lengkap</td> <td> : <input type=text name='nama_lengkap'
size=30 value='$r[nama_lengkap]'></td></tr>
 <tr><td>E-mail</td> <td> : <input type=text name='email' size=30
value='$r[email]'></td></tr>


 <tr><td colspan=2>*) Apabila password tidak diubah, dikosongkan saja.</td></tr>
 <tr><td colspan=2><input type=submit value=Update>
 <input type=button value=Batal onclick=self.history.back()></td></tr>
 </table>
 </form>";
?>