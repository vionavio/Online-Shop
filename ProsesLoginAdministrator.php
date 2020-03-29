<?php

include 'Koneksi.php';
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];
$query = "select * from tadmin where user = '$user' and pass = '$pass'";
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) > 0) {
    $_SESSION['user'] = $user;
    echo "<script>"
    . "window.alert('Anda Login Sebagai Administrator'); "
    . "window.location='Home2.php';"
    . "</script>";
} else {
    echo "<script>"
    . "window.alert('Access Denied'); "
    . "window.location='Home.php';"
    . "</script>";
}

