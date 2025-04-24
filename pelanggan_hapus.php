<?php

$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM pelanggan WHERE id_pelanggan='$id'");
if($query){
    echo "<script>alert('Data Berhasil Dihapus'); window.location = '?page=pelanggan';</script>";
}else{
    echo "<script>alert('Data Gagal Dihapus'); window.location = '?page=pelanggan';</script>";
}

?>