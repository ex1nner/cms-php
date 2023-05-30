<?php
include "../config/koneksi.php";

if (empty($_POST['password'])) {
    $id = $_POST['id'];
    $id_user = $_POST['username'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];

    $query = "UPDATE user SET id_user = '$id_user', nama_lengkap = '$nama_lengkap', email = '$email' WHERE id_user = '$id'";
    $result = $con->query($query);

    if (!$result) {
        die("Error in query: " . $con->error);
    }
} else {
    $id = $_POST['id'];
    $id_user = $_POST['username'];
    $password = md5($_POST['password']);
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];

    $query = "UPDATE user SET id_user = '$id_user', password = '$password', nama_lengkap = '$nama_lengkap', email = '$email' WHERE id_user = '$id'";
    $result = $con->query($query);

    if (!$result) {
        die("Error in query: " . $con->error);
    }
}

header('location: tampil_user.php');
?>