<?php
include "../config/koneksi.php";
if (empty($_POST[password])) {
 mysql_query("UPDATE users SET username = '$_POST[id_user]',
 nama_lengkap = '$_POST[nama_lengkap]',
 email = '$_POST[email]',

 WHERE username = '$_POST[id]'");
 }
 // Apabila password diubah
 else{
 $pass=md5($_POST[password]);
 mysql_query("UPDATE users SET username = '$_POST[username]',
 password = '$pass',
 nama_lengkap = '$_POST[nama_lengkap]',
 email = '$_POST[email]',

 WHERE username = '$_POST[id]'");
 }
 header('location:tampil_user.php');
?>
