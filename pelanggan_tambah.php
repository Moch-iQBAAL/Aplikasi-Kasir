<?php

if(isset($_POST['nama_pelanggan'])){
    $nama = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $no_tlpn = $_POST['no_tlpn'];

    $query = mysqli_query($conn, "INSERT INTO pelanggan (nama_pelanggan, alamat, no_tlpn) 
    VALUES ('$nama', '$alamat', '$no_tlpn')");

    if($query){
        echo "<script>alert('Data Berhasil Disimpan'); window.location = '?page=pelanggan';</script>";
    }else{
        echo "<script>alert('Data Gagal Disimpan'); window.location = '?page=pelanggan';</script>";
    }
}

?>

<div class="container-fluid px-4">
                        <h1 class="mt-4">Pelanggan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Pelanggan</li>
                        </ol>
                         
                    <a href="?page=pelanggan" class="btn btn-success">   KEMBALI</a>
                    <hr>

                    <form action="" method="POST">
                        <table class="table table-dark table-striped">
                            <tr">
                                <td width="200px">Nama Pelanggan  </td>
                                <td width="1000px">
                                    <input type="text" name="nama_pelanggan" class="form-control" required>
                                </td>
                            </tr>

                            <tr>
                                <td>Alamat </td>
                                <td>
                                    <textarea name="alamat" class="form-control" rows="5"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td>No Telepon  </td>
                                <td>
                                    <input type="number" step="0" name="no_tlpn" class="form-control" required>
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
               