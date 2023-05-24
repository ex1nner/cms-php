<?php
session_start();
include "../config/koneksi.php";
include "../config/fungsi_indotgl.php";
echo "<h2>Berita</h2>
<form method=POST action=form_berita.php>
<input type=submit value='Tambah Berita'>
</form>
<table>
<tr><th>no</th><th>judul</th><th>tgl. posting</th>
<th>aksi</th></th></tr>";
$tampil=mysql_query("SELECT * FROM berita
WHERE id_user='$_SESSION[namauser]'
ORDER BY id_berita DESC");
$no=1;
while ($r=mysql_fetch_array($tampil)){
$tgl_posting=tgl_indo($r[tanggal]);
echo "<tr><td>$no</td>
<td>$r[judul]</td>
<td>$tgl_posting</td>
<td><a href=edit_berita.php?id = $r[id_berita]>
Edit</a> |
<a href=hapus_berita.php?id = $r[id_berita]>
Hapus</a></td></tr>";
$no++;
}
echo "</table>";
?>
