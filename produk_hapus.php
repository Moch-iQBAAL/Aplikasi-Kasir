<?php

$id = $_GET["id"];

$query = mysqli_query($conn, "DELETE FROM produk WHERE id_produk='$id'");
if($query){
    echo "<script>alert('Data Berhasil Dihapus'); window.location = '?page=produk';</script>";
}else{
    echo "<script>alert('Data Gagal Dihapus'); window.location = '?page=produk';</script>";
}

?>