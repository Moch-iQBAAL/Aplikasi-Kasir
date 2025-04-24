<?php

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM penjualan WHERE id_penjualan='$id'");
$query2 = mysqli_query($conn, "DELETE FROM detal_penjualan WHERE id_penjualan='$id'");

if($query && $query2){
    echo "<script>alert('Data Berhasil Dihapus'); window.location = '?page=pembelian';</script>";
}else{
    echo "<script>alert('Data Gagal Dihapus'); window.location = '?page=pembelian';</script>";
}

?>