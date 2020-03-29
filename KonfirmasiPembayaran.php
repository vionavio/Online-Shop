<?php
session_start();
if (empty($_SESSION['emaillogin'])) {
    echo "<script>"
    . "window.alert('Access Denied'); "
    . "window.location='Home.php';"
    . "</script>";
}
?>
<html>
    <head>
        <title>Konfirmasi Pembayaran</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">

        <style type="text/css">

            header{
                background-color: red; 
                height: 130px;
                color: white;

            }
            body{
                background-color: #ffa07a;
                font-family: 'Autoradiographicrg'; 
            }
        </style>
    </head>
    <body>
    <center>
        <header><br>
            <h1><img src="ico/warning.png"> &nbsp KONFIRMASI PEMBAYARAN</h1>
        </header>
        <?php
        include 'Koneksi.php';
        $id_transaksi = $_GET['id_transaksi'];
        $metode_pembayaran = $_GET['metode_pembayaran'];
        $query = "select * from ttransaksi where id_transaksi = '$id_transaksi'";
        $result = mysqli_query($link, $query);
        $baris = mysqli_fetch_object($result);
        $tgl_transaksi = $baris->tgl_transaksi;
        $jam_transaksi = $baris->jam_transaksi;
        $batas_pembayaran = $baris->batas_pembayaran;
        $format_baru = date("d M Y H:i:s", strtotime("$batas_pembayaran"));
        ?>
        <h3>Silakan lakukan pembayaran sebelum <?= $format_baru ?> pada ATM <?= $metode_pembayaran ?> terdekat</h3>
        <a href="Home.php">Kembali ke halaman utama</a>
    </center>

    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
