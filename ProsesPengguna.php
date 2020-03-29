<?php

include 'Koneksi.php';
$nama_pengguna = $_POST['nama_pengguna'];
$email = $_POST['email'];
$password = $_POST['password'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$kode_pos = $_POST['kode_pos'];

$aksipengguna2 = $_POST['aksipengguna2'];

switch ($aksipengguna2) {
    case "Sign-Up" :
        $query = "insert into tpengguna values ('','$nama_pengguna', '$email', '$password', '$no_telp', '$alamat', '$kota', '$kode_pos')";
        $result = mysqli_query($link, $query);
        if (mysqli_affected_rows($link)) {
            echo "<script>"
            . "window.alert('Sign-Up Berhasil'); "
            . "window.location='Home.php';"
            . "</script>";
        } else {
            echo "<script>"
            . "window.alert('Gagal Sign-up'); "
            . "window.location='LoginPengguna.php';"
            . "</script>";
        }
        break;
    case "EDIT" :
        session_start();
        $id_pengguna = $_SESSION['id_pengguna'];
        $query = "update tpengguna set nama_pengguna='$nama_pengguna', email='$email',password='$password', no_telp='$no_telp', alamat='$alamat', kota='$kota', kode_pos='$kode_pos' where id_pengguna='$id_pengguna'";
        $result = mysqli_query($link, $query);
        if (mysqli_affected_rows($link)) {
            echo "<script>"
            . "window.alert('Data diedit, silakan login ulang'); "
            . "window.location='ProsesLogout.php';"
            . "</script>";
        } else {
            echo "<script>"
            . "window.alert('Gagal edit data'); "
            . "window.location='Home.php';"
            . "</script>";
        }
        break;
}