<?php

session_start();
session_destroy();
echo "<script>"
 . "window.alert('Anda Logout'); "
 . "window.location='Home.php';"
 . "</script>";
