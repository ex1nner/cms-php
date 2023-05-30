<?php
include "../config/koneksi.php";
mysqli_query($con, "DELETE FROM user WHERE id_user='$_GET[id]'");
header('location:tampil_user.php');
?>
