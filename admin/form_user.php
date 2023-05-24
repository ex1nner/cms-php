<?php
echo "<h2>Tambah User</h2>
<form method=POST action=input_user.php>
<table>
<tr><td>Username</td>
<td> : <input type=text name='id_user'></td></tr>
<tr><td>Password</td>
<td> : <input type=text name='password'></td></tr>
<tr><td>Nama Lengkap</td>
<td> : <input type=text name='nama_lengkap' size=30></td></tr>
<tr><td>E-mail</td>
<td> : <input type=text name='email' size=30></td></tr>
<tr><td colspan=2><input type=submit value=Simpan>
<input type=button value=Batal onclick=self.history.back()>
</td></tr>
</table>
</form>";
?>
