<?php
include "../config/koneksi.php";
$edit=mysql_query("SELECT * FROM berita
WHERE id_berita='$_GET[id]'");
$r=mysql_fetch_array($edit);
echo "<h2>Edit Berita</h2>
<form method=POST action=update_berita.php
enctype='multipart/form-data'>
<input type=hidden name=id value=$r[id_berita]>
<table>
<tr><td>Judul</td>
<td> : <input type=text name=judul size=60 value='$r[judul]'>
</td></tr>
<tr><td>Kategori</td>
<td> : <select name=kategori>";
$tampil=mysql_query("SELECT * FROM kategori
ORDER BY nama_kategori");
while($w=mysql_fetch_array($tampil))
{
if ($r[id_kategori]==$w[id_kategori]){
echo "<option value=$w[id_kategori] selected>
$w[nama_kategori]</option>";
}
else{
echo "<option value=$w[id_kategori]>
$w[nama_kategori]</option>";
}
}
echo "</select></td></tr>
<tr><td>Isi Berita</td>
<td> : <textarea name=isi_berita cols=80 rows=18>
$r[isi_berita]</textarea></td></tr>
<tr><td>Gambar</td>
<td> : <img src='foto_berita/$r[gambar]'></td></tr>
<tr><td>Ganti Gambar</td>
<td> : <input type=file name=fupload size=40> *)</td></tr>
<tr><td colspan=2>*) Apabila gambar tidak diubah,
dikosongkan saja.</td></tr>
<tr><td colspan=2><input type=submit value=Update>
<input type=button value=Batal onclick=self.history.back()>
</td></tr>
</table>
</form>";
?>