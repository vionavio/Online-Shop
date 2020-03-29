<?php

include 'Koneksi.php';
session_start();
$id_barang = $_POST['id_barang'];
$jmlbarang = $_POST['kuantitas'];
if (empty($_SESSION['emaillogin'])) {
    echo "<script>
        if (window.confirm('Silakan login terlebih dahulu')) {
            window.location = 'LoginPengguna.php';
        } 
    </script>";
    if (isset($_SESSION['id_pengguna'])) {
        $id_pengguna = $_SESSION['id_pengguna'];
    } else {
        header("refresh:0;url='DetilBarang.php?id_barang=$id_barang'");
    }
} else {
    $id_pengguna = $_SESSION['id_pengguna'];
    date_default_timezone_set("Asia/Jakarta");
    $tgl_transaksi = date("Y-m-d");
    $jam_transaksi = date("H:i:s");
    $waktu_transaksi = strtotime("+12 Hours");
    $batas_pembayaran = date("Y-m-d H:i:s", $waktu_transaksi);
    $query = "insert into ttransaksi values ('','$id_pengguna','$id_barang','$tgl_transaksi','$jam_transaksi','$batas_pembayaran')";
    $result = mysqli_query($link, $query);
    if (mysqli_affected_rows($link)) {
        $query = "select id_transaksi from ttransaksi order by id_transaksi desc limit 1";
        $result = mysqli_query($link, $query);
        $baris = mysqli_fetch_object($result);
        $id_transaksi = $baris->id_transaksi;
        header("refresh:0;url='KonfirmasiPembelian.php?id_transaksi=$id_transaksi&jmlbarang=$jmlbarang'");
    }
}




