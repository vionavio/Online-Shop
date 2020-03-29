<?php

include 'Koneksi.php';
session_start();
$emaillogin = $_POST['emaillogin'];
$passlogin = $_POST['passlogin'];
$query = "select id_pengguna,email, password from tpengguna where email = '$emaillogin' and password='$passlogin'";
$result = mysqli_query($link, $query);
$baris = mysqli_fetch_object($result);
$id_pengguna = $baris->id_pengguna;
if (mysqli_num_rows($result) > 0) {
    $_SESSION['emaillogin'] = $emaillogin;
    $_SESSION['passlogin'] = $passlogin;
    $_SESSION['id_pengguna'] = $id_pengguna;
    echo "<script>"
    . "window.alert('Login Berhasil'); "
    . "window.location='Home.php';"
    . "</script>";
} else {
    echo "<script>"
    . "window.alert('Login Gagal'); "
    . "window.location='LoginPengguna.php';"
    . "</script>";
}