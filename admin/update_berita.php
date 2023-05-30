<?php
include "../config/koneksi.php";
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
// Apabila gambar tidak diganti
if (empty($lokasi_file)) {
mysqli_query($con, "UPDATE berita SET judul='$_POST[judul]',
id_kategori='$_POST[kategori]',
isi_berita='$_POST[isi_berita]'
WHERE id_berita='$_POST[id]'");
}
// Apabila gambar diganti
else{
move_uploaded_file($lokasi_file,"../admin/foto_berita/$nama_file");
mysqli_query($con, "UPDATE berita SET judul='$_POST[judul]',
id_kategori='$_POST[kategori]',
isi_berita='$_POST[isi_berita]',
gambar='$nama_file'
WHERE id_berita='$_POST[id]'");
}
header('location:tampil_berita.php');
?>