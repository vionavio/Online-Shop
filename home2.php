<?php
session_start();
$tandalogin = "display: none;";
$tandaemail = "display: none;";
if (empty($_SESSION['user'])) {
    $tandalogin = ""; //tombol login ada
    $tandauser = "display: none;"; //tombol logout dan email ilang
} else {
    $tandalogin = "display: none;";
    $tandauser = "";
}
?>
<html>
    <head>
        <title>Beranda Admin</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <style type="text/css">
            html,body{
                
                background-color:  #FF6347;
            
                margin:0;padding:0;height:100%;font:13px Arial;
            }
            #body{
                padding-bottom:40px;
                padding-left:10px;
                min-height:400px; 
            }
           
            #c{
                background-color: red;
                height: 170px;
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
            h2{color: white;
            font-family: 'comfortaa';}
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
    <body >
    <center>
        <div id="c">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header" >
                        <a class="navbar-brand" href="home2.php">IndoShop</a>
                    </div>

                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="home2.php">Home</a>
                        </li>
                        <li >
                            <a href="KelolaBarang.php">Kelola Barang</a>
                        </li> 
                        <li>
                            <a href="Pengguna.php">Pengguna</a>
                        </li>
                         <li>
                            <a href="Transaksi.php">Transaksi</a>
                        </li>
                    </ul>
                   <ul class="nav navbar-nav navbar-right">
                            <li style="<?= $tandalogin ?>">
                                <a href="Administrator.php"><span class="glyphicon glyphicon-user"></span>Login</a>
                            </li>
                            
                            <li style="margin-top: 15px; margin-left: 10px; <?= $tandauser ?>"> 
                                <?= $_SESSION['user'] ?>
                            </li>
                            <li>   
                                <a href="ProsesLogout.php" style="margin-left: 30px; <?= $tandauser ?>">Logout</a>
                            </li>
                           
                        </ul>
                </div>
            </nav>
            <br>
            <h2>SELAMAT DATANG ADMIN!!</h2>
        </div>
        <br><br><br><br><br><br>
        <img style="height: 250px; width: 250px" src="ico/admin.png">
       
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
