<?php
session_start();
if (empty($_SESSION['emaillogin'])) {
    $nama_pengguna = "";
    $email = "";
    $password = "";
    $no_telp = "";
    $alamat = "";
    $kota = "";
    $kode_pos = "";
    $disableemail = "";
    $aksipengguna1 = "Sign-Up";
} else {
    $id_pengguna = $_SESSION['id_pengguna'];
    include 'Koneksi.php';
    $query = "select * from tpengguna where id_pengguna = '$id_pengguna'";
    $result = mysqli_query($link, $query);
    $baris = mysqli_fetch_object($result);
    $nama_pengguna = $baris->nama_pengguna;
    $email = $baris->email;
    $password = $baris->password;
    $no_telp = $baris->no_telp;
    $alamat = $baris->alamat;
    $kota = $baris->kota;
    $kode_pos = $baris->kode_pos;
    $disableemail = "readonly";
    $aksipengguna1 = "EDIT";
}
?>
<html>
    <head>
        <title>Form Pengguna</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

    </head>
    <style type="text/css">
        body{
            font-family: system-ui;  color: #00008b;
        }
        .a1{background-color: #87CEEB;


            width: 370px;
            height: 430px;
            box-shadow: 7px 7px;
            border-radius: 5px;

            padding-top: 30px;
            padding-right: 20px;
            padding-left: 20px;
        }
        H2{
            font-family: "comfortaa";
            color: #0000cd;
        }
    </style>
    <body background="image/1.1.jpg">
    <center>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <h2>  &nbsp Form <?= $aksipengguna1 ?> Pengguna</h2>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="a1">
                        <form method="post" action="ProsesPengguna.php">
                            <table>
                                <tr>
                                <div class="form-group">
                                    <td>Nama Lengkap</td>
                                    <td> : </td>
                                    <td>
                                        <input class="form-control" type="text" name="nama_pengguna" value="<?= $nama_pengguna ?>" required>
                                    </td>
                                </div>
                                </tr>
                                <tr>
                                <div class="form-group">
                                    <td>Email</td>
                                    <td> : </td>
                                    <td>
                                        <input class="form-control" type="email" name="email" value="<?= $email ?>" required <?= $disableemail ?>>
                                    </td>
                                </div>
                                </tr>
                                <tr>
                                <div class="form-group">
                                    <td>Password</td>
                                    <td> : </td>
                                    <td>
                                        <input class="form-control" type="password" name="password" value="<?= $password ?>" required>
                                    </td>
                                </div>
                                </tr>
                                <tr>
                                <div class="form-group">
                                    <td>No. Telepon</td>
                                    <td> : </td>
                                    <td>
                                        <input class="form-control" type="number" name="no_telp" value="<?= $no_telp ?>" required>
                                    </td>
                                </div>
                                </tr>
                                <tr>
                                <div class="form-group">
                                    <td>Alamat</td>
                                    <td> : </td>
                                    <td>
                                        <textarea class="form-control" name="alamat" required><?= $alamat ?></textarea>
                                    </td>
                                </div>
                                </tr>
                                <tr>
                                <div class="form-group">
                                    <td>Kota</td>
                                    <td> : </td>
                                    <td>
                                        <input class="form-control" type="text" name="kota" value="<?= $kota ?>" required>
                                    </td>
                                </div>
                                </tr>
                                <tr>
                                <div class="form-group">
                                    <td>Kode Pos</td>
                                    <td> : </td>
                                    <td>
                                        <input class="form-control" type="number" name="kode_pos" value="<?= $kode_pos ?>" required>
                                    </td>
                                </div>
                                </tr>
                            </table> <br>
                            <div class="form-group">
                                <input class="btn btn-success" name="aksipengguna2" type="submit" value="<?= $aksipengguna1 ?>"> 
                                <input class="btn btn-danger" name="btnbatal" type="button" value="BATAL" onclick="window.location.href = 'Home.php'">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </center>

    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
