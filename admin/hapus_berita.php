<?php
include "../config/koneksi.php";
mysql_query("DELETE FROM berita WHERE id_berita='$_GET[id]'");
header('location:tampil_berita.php');
?>