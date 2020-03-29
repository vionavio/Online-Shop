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
        <title>Tentang Kami</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <style type="text/css">
            html,body{
                
                background-color: #fffacd;
            
                margin:0;padding:0;height:100%;font:13px Arial;
            }
            #body{
                padding-bottom:40px;
                padding-left:10px;
                min-height:400px; 
                background-color: #ffc0cb;
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
                height:100px;
                line-height:10px;
                background:#eee;
                color:#777;
                bottom: 0px;
                width: 100%;
                text-align:center;
                position: absolute;
            }
            .r{
                font-family: 'comfortaa';
                font-size: 12px;
                text-align: justify;
                color:#d2691e;
            }
            .n{
                color:#8b4513;
                text-align: center;
            }
            .e{
                color: #777;
                width: 200px;
                font-size: 11px;
                padding-right: 10px;
                padding-left: 10px;
            }
        </style>
    </head>
    <body style="overflow-x: hidden;">
    <center>
        <div id="c">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header" >
                        <a class="navbar-brand" href="home.php">IndoShop</a>
                    </div>

                    <ul class="nav navbar-nav">
                        <li>
                            <a href="home.php">Home</a>
                        </li>
                        <li class="active">
                            <a href="tentangkami.php">Tentang Kami</a>
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
                            <a href="#"><span class="glyphicon glyphicon-user"></span>Daftar</a>
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
                        <img height="55px" src="image/logo1.PNG" style="margin-bottom: 20px; margin-top: 0px;"> &nbsp &nbsp
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="cari" style="width: 1000px; height: 40px; border-radius: 8px;">
                        <button class="btn btn-default " type="submit"><span  class="glyphicon glyphicon-search" style="width:40px; height: 25px;"></span></button>
                    </form>
                </nav>
            </div>
        </center>

        <table style="text-align: justify; max-width: 1200px;">
            <tr class="n">
                <td > IndoShop Shopping di Seluruh Indonesia</td>
            </tr>
            <tr class="r">
                <td>
                     &nbsp;&nbsp;&nbsp;&nbsp; IndoShop merupakan online shopping terbesar di Indonesia yang dibut oleh sekelompok mahasiswa Jurusan Teknik Informatika Fakultas Teknik Industri UPN "Veteran" Yogyakarta yaitu Aldi Dwiky, Maryati, Monica A, guna memudahkan dalam hal jual beli yang bisa diakses dimanapun, kapanpun dan oleh siapun. Nikmati kemudahanya dengan gratis. Online Shop ini segera akan merambah ke pasar Internasional.
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp; IndoShop menyediakan sarana yang tepat untuk mendukung para penjual kami dalam berjualan di IndoShop. Daftarkan produk dan mulailah berjualan hanya dalam 30 detik saja! Tingkatkan popularitas produk jualanmu dengan ikut serta dalam kampanye dan promosi kami. Gunakan IndoShop Seller Centre untuk mengorganisir produk, melacak pengiriman, mengatur pesanan, dan mengukur performa toko. Sebarkan informasi produkmu di media sosial, seperti Facebook, Twitter, dan Instagram. Bangun reputasi toko dengan mengumpulkan rating dan review positif dari para pembelimu. IndoShop sepenuhnya gratis tanpa komisi atau biaya pengunduhan. Bergabunglah sekarang dan mulailah berjualan!
                </td>
            </tr>
            
           
        </table>
    </center>

    <footer>
        <br><br>
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
                    <td>Periksa Nilai Anda dan Hubungi</td>
                    <td></td>
                    <td>Tanpa Biaya Pendaftaran atau</td>
                </tr>
                <tr class="e">
                    <td>atau Uang Kembali</td>
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
