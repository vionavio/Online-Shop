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
        <title>Metode Pembayaran</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <style type="text/css">
            form{
                padding-right: 550px;
                padding-left: 550px;
            }
            table{ 
                box-shadow: 5px 5px;
                background-color: #afeeee;
                border-radius: 5px;
                padding-top: 30px;
                padding-right: 20px;
                padding-left: 20px;
            }

            header{
                background-color: #00ced1; 
                height: 130px;
                color: white;
                font-family: 'comfortaa';}
            body{
                background-color: #e0ffff;
            }
        </style>
    </head>
    <body>
        <div>
            <center> 
                <header> <br> 
                    <h2><img src="ico/payment-method.png">  &nbsp  Pilih Metode Pembayaran</img></h2> 
                </header><br><br>
                <form method="post" action="">
                    <table class="table table-hover">
                        <tr align="center">
                            <td>
                                <input type="radio" name="metodepembayaran" value="BNI"required>
                            </td>
                            <td>
                                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/27/BankNegaraIndonesia46-logo.svg/1200px-BankNegaraIndonesia46-logo.svg.png" style="width: 200px;height: 70px;">
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <input type="radio" name="metodepembayaran" value="BRI" required>
                            </td>
                            <td>
                                <img src="http://www.pancabudi.ac.id/unpab/image/news/lowongan-kerja-bank-rakyat-indonesia-bri_98.jpg" style="width: 200px;height: 70px;">
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <input type="radio" name="metodepembayaran" value="BCA" required>
                            </td>
                            <td>
                                <img src="https://image.cermati.com/v1437625816/personal-loan/prqgexb7jckj9pcmuabz.jpg" style="width: 200px;height: 70px;">
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <input type="radio" name="metodepembayaran" value="MANDIRI" required>
                            </td>
                            <td>
                                <img src="http://indowarta.com/wp-content/uploads/2017/05/logo.jpg" style="width: 200px;height: 70px;">
                            </td>
                        </tr>
                        <tr align="center">
                            <td >
                                <input type="radio" name="metodepembayaran" value="CIMB" required>
                            </td>
                            <td>
                                <img src="http://www.livetradingnews.com/wp-content/uploads/2017/05/cimb-bank-logo-vector.jpg" style="width: 200px;height: 70px;">
                            </td>
                        </tr>
                        <tr align="center">
                            <td></td>
                            <td>
                                <input name="btnok" type="submit" value="OK" class="btn btn-warning">
                            </td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>

        <?php
        if (isset($_POST['btnok'])) {
            include 'Koneksi.php';
            $id_barang = $_GET['id_barang'];
            $jmlbarang = $_GET['jmlbarang'];
            $metode_pembayaran = $_POST['metodepembayaran'];
            $id_transaksi = $_GET['id_transaksi'];
            $query = "select stok_barang from tbarang where id_barang='$id_barang'";
            $result = mysqli_query($link, $query);
            $baris = mysqli_fetch_object($result);
            $stok_barang = $baris->stok_barang;

            $stok_baru = $stok_barang - $jmlbarang;
            $queryupdate = "update tbarang set stok_barang='$stok_baru' where id_barang='$id_barang'";
            $resultupdate = mysqli_query($link, $queryupdate);
            header("refresh:0;url='KonfirmasiPembayaran.php?id_transaksi=$id_transaksi&metode_pembayaran=$metode_pembayaran'");
        }
        ?>

        <script type="text/javascript" src="jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>

