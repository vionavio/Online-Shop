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
        <title>Pengguna</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

        <style type="text/css">
            .a{
                padding-right: 150;
                padding-left: 150;
            }
            table{background-color: #FAFAD2;
                  font-family: 'comfortaa';
            }
            body{ font-family: 'comfortaa';
                 background-color: #FF6347;
            }
            header{
                background-color: red; 
                height: 100px;
                color: white;
            }
            th{
                text-align: center;
            }
            #c{
                background-color: red;
                height: 150px;
            }
        </style>
    </head>
    <body >
    <center>
        
         <center>
        <div id="c">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header" >
                        <a class="navbar-brand" href="home2.php">IndoShop</a>
                    </div>

                    <ul class="nav navbar-nav">
                        <li >
                            <a href="home2.php">Home</a>
                        </li>
                        <li >
                            <a href="KelolaBarang.php">Kelola Barang</a>
                        </li> 
                        <li >
                            <a href="Pengguna.php">Pengguna</a>
                        </li>
                         <li class="active">
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
            <header>
                <h2><img style="height:80px; width: 80px;" src="ico/money-bag.png">TRANSAKSI</h2>
        </header>
        </div>
        

       
    </center>
        
        
       
        <br>
        <div class="a">
            <div class="table-responsive">
                <table  class="table table-bordered  table-hover">
                    <th>ID Transaksi</th>
                    <th>ID Pengguna</th>
                    <th>Nama</th>
                    <th>Tanggal Transaksi</th>
                    <th>Jam Transaksi</th>
                    <th>Batas Pembayaran</th>
                    
                    <?php
                    include 'Koneksi.php';
                    $query = "select * from ttransaksi t join tpengguna p join tbarang b on t.id_pengguna=p.id_pengguna and t.id_barang=b.id_barang ";
                    $result = mysqli_query($link, $query);
                    while ($baris = mysqli_fetch_object($result)) {
                        $id_transaksi = $baris->id_transaksi;
                        $id_pengguna = $baris->id_pengguna;
                        $nama_pengguna=$baris->nama_pengguna;
                        $id_barang = $baris->id_barang;
                        $tgl_transaksi =$baris->tgl_transaksi;
                        $jam_transaksi = $baris->jam_transaksi;
                        $batas_pembayaran = $baris->batas_pembayaran;
                       
                        ?>
                        <tr>
                            <td align="center"><?= $id_transaksi ?></td>
                            <td align="center" ><?= $id_pengguna ?></td>
                            <td><?= $nama_pengguna ?></td>
                            <td align="center"><?= $tgl_transaksi ?></td>
                             <td align="center"><?= $jam_transaksi ?></td>
                            <td align="center"><?= $batas_pembayaran ?></td>
                           
                            
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div> 
        </div><br>
        
    </center>

    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
