<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "got_character_book1";
$connect = mysqli_connect($host, $user, $pass, $db);
if (mysqli_connect_error())
{
    echo "Koneksi gagal"
}
else{
    echo "Koneksi berhasil"
}
?>