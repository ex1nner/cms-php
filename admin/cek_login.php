<?php
include "../config/koneksi.php";
$pass=md5($_POST['password']);
$login=mysqli_query($con, "SELECT * FROM user
WHERE id_user='$_POST[id_user]' AND password='$pass'");
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);
// Apabila username dan password ditemukan (valid)
if ($ketemu > 0){
session_start(); // Untuk memulai session
// Daftarkan session ke server
// session_register('namauser');
// session_register('passuser');
// isi dari variabel session
$_SESSION['namauser']=$r['id_user'];
$_SESSION['passuser']=$r['password'];
header('location:form_berita.php'); // Buka hal input berita
}
else{
echo("Login gagal! username & password tidak benar<BR>");
echo("<A HREF=form_login.php>Ulangi Lagi</A>");
}
?>
