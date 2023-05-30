<?php
session_start();
include "../config/koneksi.php";
include "../config/library.php";
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
// Apabila ada gambar yang diupload
if (!empty($lokasi_file)){
move_uploaded_file($lokasi_file,"../admin/foto_berita/$nama_file");
mysqli_query($con, "INSERT INTO berita(judul,
id_kategori,
isi_berita,
id_user,
jam,
tanggal,
hari,
gambar)
VALUES('$_POST[judul]',
'$_POST[kategori]',
'$_POST[isi_berita]',
'$_SESSION[namauser]',
'$jam_sekarang',
'$tgl_sekarang',
'$hari_ini',
'$nama_file')");
}
// Apabila tidak ada gambar yang diupload
else{
mysqli_query($con, "INSERT INTO berita(judul,
id_kategori,
isi_berita,
id_user,
jam,
tanggal,
hari)
VALUES('$_POST[judul]',
'$_POST[kategori]',
'$_POST[isi_berita]',
'$_SESSION[namauser]',
'$jam_sekarang',
'$tgl_sekarang',
'$hari_ini')");
}
header('location:tampil_berita.php');
?>
