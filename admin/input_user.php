<?php
include "../config/koneksi.php";
//Enkripsi
 $pass=md5($_POST[password]);
mysql_query("INSERT INTO user
(id_user,password,nama_lengkap,email)
VALUES
('$_POST[id_user]','$pass','$_POST[nama_lengkap]','$_POST[email]')");
header('location:tampil_user.php');
echo "Data tersimpan";
?>
