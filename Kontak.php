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
        <title>Kontak</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <style>
            body{
                background-color: #fffacd;
            }
            .k{
                font-family: 'comfortaa';
                text-align: center;
            }
            .induk{
                width: 1000px;
                /*background-color: red*/
            }
            
            a{
                text-decoration: none;
                color: black;
            }
            #nama{
                margin-top: 10px;
                font-size: 30px;
            }
            #harga{
                margin-left: 10px;
                text-align: center;
                color: red;
                font-size: 24px;
            }
            #b{
                background-color: orangered;
                height: 90px;
            }
            #c{
                background-color: orangered;
                height: 90px;
            }
            footer{
                height: 100px;
                line-height:10px;
                background:#eee;
                color:#777;
                bottom: 0px;
                position: absolute;
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
            .o{
                padding-right: 10px;
                padding-left: 10px;
                text-align: center;
                font-family: 'comfortaa';
            }
        </style>
    <body>
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
                        <li class="active">
                            <a href="Kontak.php">Kontak</a>
                        </li> 
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li style="<?= $tandalogin ?>">
                            <a href="LoginPengguna.php"><span class="glyphicon glyphicon-user"></span>Login</a>
                        </li>
                        <li style="<?= $tandalogin ?>">
                            <a href="FormPengguna.php"><span class="glyphicon glyphicon-user"></span> Daftar</a>
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
                    <img height="55px" src="image/logo1.PNG" style="margin-bottom: 20px; margin-top: 0px; "> &nbsp &nbsp
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="cari" style="width: 1000px; height: 40px; border-radius: 8px;">
                    <button class="btn btn-default " type="submit"><span  class="glyphicon glyphicon-search" style="width:40px; height: 25px;"></span></button>
                </form>
            </nav>
        </div>
    </center>

    <center>
        <table >
            <tr class="k"><td ><img src="ico/3.png"></td>
                <td ><img src="ico/2.png"></td>
                <td ><img src="ico/4.png"></td>
                <td ><img src="ico/5.png"></td>
                <td ><img src="ico/1.png"></td>
                <td ><img src="ico/6.png"></td>
                <td></td>
            </tr>

            <?php
            include 'Koneksi.php';
            $query = "select * from tkontak";
            $result = mysqli_query($link, $query);
            while ($baris = mysqli_fetch_object($result)) {
                $id_kontak = $baris->id_kontak;
                $alamat_kontak = $baris->alamat_kontak;
                $instagram = $baris->instagram;
                $facebook = $baris->facebook;
                $twitter = $baris->twitter;
                $email_kontak = $baris->email_kontak;
                $no_telp_kontak = $baris->no_telp_kontak;
                ?>
                <tr >
                    <td class="o"><?= $alamat_kontak ?></td>
                    <td class="o"><?= $instagram ?></td>
                    <td class="o"><?= $facebook ?></td>
                    <td class="o"><?= $twitter ?></td>
                    <td class="o"><?= $email_kontak ?></td>
                    <td class="o"><?= $no_telp_kontak ?></td>
                </tr>
                <?php
            }
            ?>

        </table>
    </center>
   <footer>
            <br>
            <br>
            <center>	
                <table >
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
                        <td >Dapatkan Barang Pesananmu </td>
                        <td></td>
                        <td>Periksa Nilai Anda dan Hubungi </td>
                        <td></td>
                        <td>Tanpa Biaya Pendaftaran atau </td>
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
</body>
</html>