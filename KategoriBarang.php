<?php
session_start();
$tandalogin = "display: none;";
$tandaemail = "display: none;";
if (empty($_SESSION['emaillogin'])) {
    $tandalogin = ""; //tombol login ada
    $tandaemail = "display: none;"; //tombol logout dan email ilang
} else {
    $tandalogin = "display: none;";
    $tandaemail = "";
}
?>
<html>
    <head>
        <title>Kategori Barang</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

        <style>
            html,body{
                height: 100%;
                background-color: #FFE4C4;
            }
            .induk{
                width: 100%;
            }
            .wrap{
                min-height: 100%;
            }
            .kartu-block{
                margin-top: 10px;
                display: inline-block;
                border-color: black;
                vertical-align: top;
                width: 200px;
                height: 300px;
            }
            #b{

                background-color: orangered;
                height: 90px;

            }
            #c{
                background-color: orangered;height: 90px;
            }
            footer{
                height:100px;
                line-height:10px;
                background:#eee;
                color:#777;
                bottom: 0px;
                width: 100%;
                text-align:center;
            }
            .e{
                color: #777;
                width: 200px;
                font-size: 11px;
                padding-right: 10px;
                padding-left: 10px;
            }
            h2{ 
                color: #F4A460;
            }   

        </style>
    </head>
    <body   >
        <div class="wrap">
            <div id="c">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header" >
                            <a class="navbar-brand" href="home.php">IndoShop</a>
                        </div>

                        <ul class="nav navbar-nav">
                            <li>
                                <a href="Home.php">Home</a>
                            </li>
                            <li>
                                <a href="TentangKami.php">Tentang Kami</a>
                            </li> 
                            <li>
                                <a href="Kontak.php">Kontak</a>
                            </li> 
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li style="<?= $tandalogin ?>">
                                <a href="LoginPengguna.php"><span class="glyphicon glyphicon-user"></span>Login</a>
                            </li>
                            <li style="<?= $tandalogin ?>">
                                <a href="FormPengguna.php"><span class="glyphicon glyphicon-user"></span>Daftar</a>
                            </li>
                            <li style="margin-top: 15px; margin-left: 10px; <?= $tandaemail ?>"> 
                                <?= $_SESSION['emaillogin'] ?>
                            </li>
                            <li>   
                                <a href="ProsesLogout.php" style="margin-left: 30px; <?= $tandaemail ?>">Logout</a>
                            </li>
                            <li style="<?= $tandaemail ?>"> 
                                <a href="FormPengguna.php">Kelola Akun</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <center>
                <div id="b" class="form-group">
                    <nav class="navbar navbar-light bg-light justify-content-between">
                        <form class="form-inline" method="post" action="HasilPencarian.php">
                            <img height="55px" src="image/logo1.PNG" style="margin-bottom: 20px; margin-top: 0px "> &nbsp &nbsp
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="cari" style="width: 1000px; height: 40px; border-radius: 8px;">
                            <button class="btn btn-default " type="submit"><span  class="glyphicon glyphicon-search" style="width:40px; height: 25px;"></span></button>
                        </form>
                    </nav>
                </div>

                <?php
                include 'Koneksi.php';
                $id_kategori = $_GET['id_kategori'];
                $query = "select * from tkategori where id_kategori='$id_kategori'";
                $result = mysqli_query($link, $query);
                $bariskat = mysqli_fetch_object($result);
                $nama_kategori = $bariskat->nama_kategori;
                ?>
                <h2 align="center">Kategori <?= $nama_kategori ?></h2>
                <?php
                $query = "select * from tbarang b inner join tkategori k on b.id_kategori = k.id_kategori where b.id_kategori = '$id_kategori'";
                $result = mysqli_query($link, $query);
                ?>
                <div class="induk">
                    <?php
                    while ($baris = mysqli_fetch_object($result)) {
                        $id_barang = $baris->id_barang;
                        $nama_barang = $baris->nama_barang;
                        $harga_barang = $baris->harga_barang;
                        $gambar_barang = $baris->gambar_barang;
                        ?>
                        <div class="kartu-block">
                            <a href="DetilBarang.php?id_barang=<?= $id_barang ?>">
                                <img alt="<?= $nama_barang ?>" style="margin-bottom: 10px; width: 180px; height: 150px;" src="image/<?= $gambar_barang ?>">
                                <p id="nama"><?= $nama_barang ?></p>
                                <p id="harga">Rp. <?= $harga_barang ?></p>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </center>
        </div>

        <footer>
            <br>
            <br>
            <center>	
                <table>
                    <tr>
                        <td rowspan="3">
                            <img src="image/4.1.PNG">
                        </td>
                        <td colspan="2">Garansi IndoShop</td>
                        <td rowspan="3">
                            <img src="image/4.2.PNG">
                        </td>
                        <td colspan="2">Penjual Terpercaya</td>
                        <td rowspan="3">
                            <img src="image/4.3.PNG">
                        </td>
                        <td colspan="2">Gratis Untuk Semua</td>
                    </tr>
                    <tr class="e">
                        <td>Dapatkan Barang Pesananmu </td>
                        <td></td>
                        <td>Periksa Nilai Anda dan Hubungi</td>
                        <td></td>
                        <td>Tanpa Biaya Pendaftaran atau</td>
                    </tr>
                    <tr class="e"><td>atau Uang Kembali</td>
                        <td></td>
                        <td>Mereka Jika Ada Pertanyaan</td>
                        <td></td>
                        <td>Komisili Nikmati IndShop Gratis</td>
                    </tr>
                </table>
            </center>
        </footer>

        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
