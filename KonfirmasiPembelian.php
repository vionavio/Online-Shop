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
        <title>Konfirmasi Pembelian</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">

        <style type="text/css">
            .a{
                padding-right: 300;
                padding-left: 300;
            }
            table{
                background-color: #FAFAD2;
                font-family: 'comfortaa';
                border-radius: 20px 20px 20px 20px;
            }
            body{ 
                font-family: 'comfortaa';
            }
            header{
                background-color: orangered; height: 130px;
                color: white;
            }
        </style>
    </head>
    <body background="image/3.jpg">
        <?php
        include 'Koneksi.php';
        $id_pengguna = $_SESSION['id_pengguna'];
        $id_transaksi = $_GET['id_transaksi'];
        $jmlbarang = $_GET['jmlbarang'];
        $query = "select * from tpengguna p inner join ttransaksi t on p.id_pengguna = t.id_pengguna inner join tbarang b on b.id_barang = t.id_barang where t.id_transaksi = '$id_transaksi'";
        $result = mysqli_query($link, $query);
        $baris = mysqli_fetch_object($result);
        $id_barang = $baris->id_barang;
        $nama_pengguna = $baris->nama_pengguna;
        $email = $baris->email;
        $no_telp = $baris->no_telp;
        $alamat = $baris->alamat;
        $kota = $baris->kota;
        $kode_pos = $baris->kode_pos;
        $nama_barang = $baris->nama_barang;
        $harga_barang = $baris->harga_barang;
        $totalharga = $jmlbarang * $harga_barang;
        ?>
    <center>
        <header>  <br>
            <h2><img src="ico/checklist.png"> Konfirmasi Pembelian</h2> 
        </header>
        <br><br>
        <form method="get" action="MetodePembayaran.php">
            <input type="hidden" name="id_transaksi" value="<?= $id_transaksi ?>">
            <input type="hidden" name="jmlbarang" value="<?= $jmlbarang ?>">
            <input type="hidden" name="id_barang" value="<?= $id_barang ?>">
            <div class="a">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr align="center">
                            <td>Nama Pembeli</td>
                            <td> : </td>
                            <td><?= $nama_pengguna ?></td>
                        </tr>
                        <tr align="center">
                            <td>Email</td>
                            <td > : </td>
                            <td><?= $email ?></td>
                        </tr>
                        <tr align="center">
                            <td>No. Telepon</td>
                            <td> : </td>
                            <td><?= $no_telp ?></td>
                        </tr>
                        <tr align="center">
                            <td>Alamat</td>
                            <td> : </td>
                            <td><?= $alamat ?></td>
                        </tr>
                        <tr align="center">
                            <td>Kota</td>
                            <td> : </td>
                            <td><?= $kota ?></td>
                        </tr>
                        <tr align="center">
                            <td>Kode Pos</td>
                            <td> : </td>
                            <td><?= $kode_pos ?></td>
                        </tr>
                        <tr align="center">
                            <td>Nama Barang</td>
                            <td> : </td>
                            <td><?= $nama_barang ?></td>
                        </tr>
                        <tr align="center">
                            <td>Jumlah Barang</td>
                            <td> : </td>
                            <td><?= $jmlbarang ?></td>
                        </tr>
                        <tr align="center">
                            <td>Total Harga</td>
                            <td> : </td>
                            <td>Rp. <?= $totalharga ?></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">Apakah Data Sudah Benar ?</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td align="center" style="padding-right: 12px;">
                                <input class="btn btn-primary" name="btnyes" type="submit" value="YA">
                                <input class="btn btn-danger" name="btnno" type="button" value="TIDAK" onclick="window.location = 'Home.php'">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </center>

    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
