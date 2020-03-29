<?php
session_start();
if (empty($_SESSION['user'])) {
    echo "<script>"
    . "window.alert('Access Denied'); "
    . "window.location='Administrator.php';"
    . "</script>";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Barang</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

        <style type="text/css">
            .a{
                padding-right: 500;
                padding-left: 500;
            }
            table{
                background-color: #FAFAD2;
                font-family: 'comfortaa';
                color: #8b4513;
                border-radius: 20px 20px 20px 20px;}
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
    <center>
        <?php
        if (isset($_POST['aksibarang1'])) {
            $aksibarang1 = $_POST['aksibarang1'];
        } else {
            $aksibarang1 = "EDIT";
        }

        if ($aksibarang1 == "TAMBAH") {
            $nama_barang = "";
            $harga_barang = "";
            $gambar_barang = "";
            $deskripsi_barang = "";
            $stok_barang = "";
        } else {
            include 'Koneksi.php';
            $id_barang = $_GET['id_barang'];
            $query = "select * from tbarang where id_barang='$id_barang'";
            $result = mysqli_query($link, $query);
            $baris = mysqli_fetch_object($result);
            $nama_barang = $baris->nama_barang;
            $harga_barang = $baris->harga_barang;
            $gambar_barang = $baris->gambar_barang;
            $deskripsi_barang = $baris->deskripsi_barang;
            $stok_barang = $baris->stok_barang;
        }
        ?>
        <header> <br> 
            <h2><img src="ico/carts.png" > &nbsp FORM <?= $aksibarang1 ?> BARANG</h2>
        </header>
        <br><br>

        <form method="post" action="ProsesBarang.php">
            <div class="a">
                <table class="table table-bordered table-hover">
                    <input name="id_barang" type="hidden" value="<?= $id_barang ?>">
                    <tr>
                        <td>Nama Barang</td>
                        <td> : </td>
                        <td >
                            <input style="width: 250px" name="nama_barang" type="text" value="<?= $nama_barang ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Kategori Barang</td>
                        <td> : </td>
                        <td>
                            <select style="width: 250px" name="id_kategori" required>
                                <option disabled selected value>Pilih Kategori</option>
                                <?php
                                include 'Koneksi.php';
                                $query = "select * from tkategori order by nama_kategori asc";
                                $result = mysqli_query($link, $query);
                                while ($baris = mysqli_fetch_object($result)) {
                                    $id_kategori = $baris->id_kategori;
                                    $nama_kategori = $baris->nama_kategori;
                                    ?>
                                    <option value="<?= $id_kategori ?>"><?= $nama_kategori ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Harga Barang</td>
                        <td> : </td>
                        <td>
                            <input style="width: 250px" name="harga_barang" type="number" value="<?= $harga_barang ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Gambar Barang</td>
                        <td> : </td>
                        <td>
                            <input type="file" name="gambar_barang" style="margin-bottom: 7px;" accept="image/*" value="<?= $gambar_barang ?>">
                        </td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td>Deskripsi Barang</td>
                        <td> : </td>
                        <td>
                            <textarea style="width: 250px" name="deskripsi_barang" required rows="4"><?= $deskripsi_barang ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Stok Barang</td>
                        <td> : </td>
                        <td>
                            <input style="width: 250px" name="stok_barang" type="number" value="<?= $stok_barang ?>" required>
                        </td>
                    </tr>
                </table>
            </div> <br>
            <input class="btn btn-primary" class="glyphicon glyphicon-edit" type="submit" name="aksibarang2" value="<?= $aksibarang1 ?>">
        </form>
    </center>

    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
