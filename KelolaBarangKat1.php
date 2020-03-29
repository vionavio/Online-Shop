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
        <title>Pengelolaan Barang</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

        <style type="text/css">
            .a{
                padding-right: 100;
                padding-left: 100;
            }
            table{background-color: #FAFAD2;
                  font-family: 'comfortaa';
            }
            body{ font-family: 'comfortaa';
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
            body{
                background-color: #FF6347;
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
                        <li class="active">
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
            <header> 
            <h2><img src="ico/check-mark.png">PENGELOLAAN BARANG</h2>
        </header>
        </div>
        

       
    </center>
        
        
       
        <br>
        <div class="a">
            <div class="table-responsive">
                <table  class="table table-bordered  table-hover">
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                    <?php
                    include 'Koneksi.php';
                    $query = "select * from tbarang b inner join tkategori k on b.id_kategori = k.id_kategori where nama_kategori like 'Fotografi'";
                    $result = mysqli_query($link, $query);
                    while ($baris = mysqli_fetch_object($result)) {
                        $id_barang = $baris->id_barang;
                        $nama_barang = $baris->nama_barang;
                        $nama_kategori = $baris->nama_kategori;
                        $harga_barang = $baris->harga_barang;
                        $stok_barang = $baris->stok_barang;
                        ?>
                        <tr>
                            <td><?= $nama_barang ?></td>
                            <td><?= $nama_kategori ?></td>
                            <td><?= "Rp. " . $harga_barang ?></td>
                            <td><?= $stok_barang ?></td>
                            <td>
                                <a href="FormBarang.php?id_barang=<?= $id_barang ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span>EDIT</a>
                                <a href="ProsesBarang.php?id_barang=<?= $id_barang ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span>HAPUS</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div> 
        </div><br>
        <form method="post" action="FormBarang.php">
            <input class="btn btn-success" name="aksibarang1" type="submit" value="TAMBAH">
        </form>
        <a href="ProsesLogout.php">Logout</a>
    </center>

    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
