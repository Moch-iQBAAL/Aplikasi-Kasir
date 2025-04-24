<?php

if(isset($_POST['nama_produk'])){
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = mysqli_query($conn, "INSERT INTO produk (nama_produk, harga, stok)
     VALUES ('$nama', '$harga', '$stok')");

    if($query){
        echo "<script>alert('Data Berhasil Disimpan'); window.location = '?page=produk';</script>";
    }else{
        echo "<script>alert('Data Gagal Disimpan'); window.location = '?page=produk';</script>";
    }    



}

?>

<div class="container-fluid px-4">
                        <h1 class="mt-4">Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                         
                    <a href="?page=produk" class="btn btn-success">   KEMBALI</a>
                    <hr>

                    <form action="" method="POST">
                        <table class="table table-dark table-striped">
                            <tr">
                                <td width="200px">Nama Produk  </td>
                                <td width="1000px">
                                    <input type="text" name="nama_produk" class="form-control" required>
                                </td>
                            </tr>

                            <tr>
                                <td>Harga </td>
                                <td>
                                    <input type="number" step="0" name="harga" class="form-control" required>
                                </td>
                            </tr>

                            <tr>
                                <td>Stok  </td>
                                <td>
                                    <input type="number" step="0" name="stok" class="form-control" required>
                                </td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                       
                    </div>
               