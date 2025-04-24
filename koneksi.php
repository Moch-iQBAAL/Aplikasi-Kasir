<?php

session_start();


$host = 'localhost';
$username = 'root';
$passsword = '';
$database = 'simulasi_ukk';

$conn = mysqli_connect($host, $username, $passsword, $database);
if (!$conn){
    die('Koneksi gagal cuy' . mysqli_connect_error());
}

 

return $conn;

?>