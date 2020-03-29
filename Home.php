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
        <title>Halaman Depan</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

        <style>
            html,body{
                height: 100%;
                font-family: "comfortaa";
            }
            .induk{
                width: 1400px;

            }
            .wrap{
                min-height: 100%;
            }
            .kartu-block{
                margin-top: 10px;
                display: inline-block;
                border-color: black;
                width: 200px;
                height: 180px;
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
        </style>
    </head>
    <body background="image/3.jpg" style="overflow-x: hidden;">

        <div class="wrap">
            <div id="c">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header" >
                            <a class="navbar-brand" href="home.php">IndoShop</a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="home.php">Home</a>
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

                <table >
                    <tr> 
                        <td  style="padding-left:30px; "  >  
                            <img src="image/1.3.PNG">  
                        </td>
                        <td rowspan="3">
                            <div style="padding-left: 30px;" >
                                <div class="container">

                                    <div id="myCarousel" class="carousel slide " data-ride="carousel" style="height: 300px; width: 900px;">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>    
                                            <li data-target="#myCarousel" data-slide-to="3"></li>
                                            <li data-target="#myCarousel" data-slide-to="4"></li>
                                            <li data-target="#myCarousel" data-slide-to="5"></li>
                                            <li data-target="#myCarousel" data-slide-to="6"></li>
                                        </ol>

                                        <!-- deklarasi carousel -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img src="image/6.jpg" alt="sepatu" style="height: 100%; width: 100%;">
                                                <div class="carousel-caption">
                                                    <h3>Sepatu Terkini</h3>
                                                    <p>Sepatu Awet dan Tahan Lama</p>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <img src="image/5.jpg" style="height: 100%; width: 100%;">
                                                <div class="carousel-caption">
                                                    <h3>Shopping</h3>
                                                    <p>Toko Online Terlaris</p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="image/se.jpg" style="height: 100%; width: 100%;">
                                                <div class="carousel-caption">
                                                    <h3>Sepatu Remaja</h3>
                                                    <p>Termurah Terhemat Banyak Modelnya</p>
                                                </div>
                                            </div> 
                                            <div class="item">
                                                <img src="image/7.jpg" style="height: 100%; width: 100%;">
                                                <div class="carousel-caption">
                                                    <h3>Hadiah</h3>
                                                    <p>Belanja dan Menangkan Hadiah</p>
                                                </div>
                                            </div> 
                                            <div class="item">
                                                <img src="image/8.jpg" style="height: 100%; width: 100%;  ">
                                                <div class="carousel-caption">
                                                    <h3>Gratis Ongkos Kirim</h3>
                                                    <p>Kapanpun Dimanapun</p>
                                                </div>
                                            </div> 
                                            <div class="item">
                                                <img src="image/9.jpg" style="height: 100%; width: 100%;  ">
                                                <div class="carousel-caption">
                                                    <h3>BRUTAL</h3>
                                                    <p>Hadiah Gadget</p>
                                                </div>
                                            </div> 
                                            <div class="item">
                                                <img src="image/10.jpg" style="height: 100%; width: 100%;  ">
                                                <div class="carousel-caption">
                                                    <h3>Voucher</h3>
                                                    <p>Dapatkan Voucher Gratis!!!!</p>
                                                </div>
                                            </div> 
                                        </div>

                                        <!-- membuat panah next dan previous -->
                                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left:30px"> 
                            <img src="image/1.2.PNG">             
                        </td>
                        <td></td>
                    </tr>

                </table>
                <h3 style="color:white;">KATEGORI</h3>
                <?php
                include 'Koneksi.php';
                $query = "select * from tkategori order by nama_kategori asc";
                $result = mysqli_query($link, $query);
                ?>
                <div class="container-fluid">
                    <?php
                    while ($baris = mysqli_fetch_object($result)) {
                        $id_kategori = $baris->id_kategori;
                        $nama_kategori = $baris->nama_kategori;
                        $gambar_kategori = $baris->gambar_kategori;
                        ?>
                        <div class="kartu-block" >
                            <a style="text-decoration: none; color: black;" href="KategoriBarang.php?id_kategori=<?= $id_kategori ?>">
                                <img alt="<?= $nama_kategori ?>" style="margin-bottom: 10px; width: 180px; height: 150px;" src="image/<?= $gambar_kategori ?>">
                                <?= $nama_kategori ?>
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

        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
