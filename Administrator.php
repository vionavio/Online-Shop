<html>
    <head>
        <title>Halaman Administrator</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

        <style type="text/css">
            body{
                color: #b22222;
                font-family: cursive;
            }
            h2{
                color: red;
            }
            .a1{background-color: #FF8d00;

                width: 360px;
                height: 260px;
                box-shadow: 7px 7px;
                border-radius: 5px;
                padding-top: 30px;
                padding-right: 20px;
                padding-left: 20px;
            }
        </style>
    </head>
    <body background="image/3.jpg">
    <center>
        <br>
        <br>
        <br>
        <br>

        <div class="container">
            <h2>Login Admin</h2>
            <img src="ico/admin.png" class="img-circle">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="a1">
                        <form method="post" action="ProsesLoginAdministrator.php">
                            <div class="form-group">
                                <label>User</label>
                                <input class="form-control"  name="user" type="text" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" name="pass" type="password" placeholder="Password" required>
                            </div> <br>
                            <input class="btn btn-danger" name="btnlogin" type="submit" value="Login"><br> <br>
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
