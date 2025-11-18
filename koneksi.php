<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "db_Login";
$connect = mysqli_connect($host, $user, $pass, $db);
if (!$connect)
     {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>
