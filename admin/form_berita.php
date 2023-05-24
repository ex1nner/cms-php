<?php
session_start();
include "../config/koneksi.php";
// Apabila variabel session masih kosong (user belum login)
if (empty($_SESSION[namauser]) AND
empty($_SESSION[passuser])){
echo "<center>Untuk mengisikan berita, Anda harus login <br>";
echo "<a href=form_login.php><b>LOGIN</b></a></center>";
}
// Apabila user sudah login dengan benar terbentuklah session
else{
echo "<h2>Tambah Berita</h2>
<form method=POST action=input_berita.php
enctype='multipart/form-data'>
<table>
<tr><td>Judul</td>
<td> : <input type=text name=judul size=60></td></tr>
<tr><td>Kategori</td> <td> :
<select name=kategori>
<option value=0 selected>- Pilih Kategori -</option>";
$tampil=mysql_query("SELECT * FROM kategori
ORDER BY nama_kategori");
while($r=mysql_fetch_array($tampil)){
echo "<option value=$r[id_kategori]>
$r[nama_kategori]</option>";
}
echo "</select></td></tr>
<tr><td>Isi Berita</td>
<td> : <textarea name=isi_berita cols=80 rows=18></textarea>
</td></tr>
<tr><td>Gambar</td>
<td> : <input type=file name=fupload size=40></td></tr>
<tr><td colspan=2><input type=submit value=Simpan>
<input type=button value=Batal onclick=self.history.back()>
</td></tr>
</table>
</form>";
}
?>