<html>
    <head>
        <title>Login Pengguna</title> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

        <style type="text/css">
            body{
                color: #008080;
                font-family: cursive;
            }
            .a1{
                background-color: #87CEEB;
                width: 300px;
                height: 250px;
                box-shadow: 7px 7px;
                border-radius: 5px;
                padding-top: 30px;
                padding-right: 20px;
                padding-left: 20px;
            }
        </style>
    </head>
    <body background="image/1.1.jpg">
    <center>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <h2>Login Pengguna</h2>
            <img src="ico/user.png" class="img-circle">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="a1">
                        <form method="post" action="ProsesLoginPengguna.php">
                            <div class="form-group">
                                <label>Email</label>
                                <input  class="form-control" name="emaillogin" type="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input  class="form-control" name="passlogin" type="password" placeholder="Password"> 
                            </div>
                            <input class="btn btn-primary" name="btnlogin" type="submit" value="Login" required> <br>
                        </form>
                        <p>
                            Belum punya akun ?
                            <a href="FormPengguna.php" style="text-decoration: none;">Daftar Sekarang</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </center>

    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
