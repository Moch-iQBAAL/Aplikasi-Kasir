<?php

if(isset($_POST['id_pelanggan'])){
    $id_pelanggan = $_POST['id_pelanggan'];
    $produk = $_POST['produk'];
    $total = 0;
    $tanggal = date('Y-m-d');

    $query = mysqli_query($conn, "INSERT INTO penjualan(tanggal_penjualan, id_pelanggan)
    VALUES ('$tanggal', '$id_pelanggan')");
    
    $idTerakhir = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM penjualan ORDER BY id_penjualan DESC "));
    $id_penjualan = $idTerakhir['id_penjualan'];

    foreach($produk as $key=>$val){
        $pr = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '$key'"));

        if($val > 0) {
            $sub = $val * $pr['harga'];
            $total += $sub;
            $query = mysqli_query($conn, "INSERT INTO detal_penjualan(id_penjualan,id_produk,jumlah_produk,sub_total) 
        VALUES ('$id_penjualan','$key','$val','$sub')");
        
            $updateProduk = mysqli_query($conn, "UPDATE produk set stok=stok-$val WHERE id_produk='$key'");
        }

    }

    $query = mysqli_query($conn, "UPDATE penjualan SET totalHarga = '$total' WHERE id_penjualan = '$id_penjualan'");
    if($query){
        echo "<script>alert('Data Berhasil Disimpan'); window.location.href='?page=pembelian';</script>";
    }else{
        echo "<script>alert('Data Gagal Disimpan'); window.location.href='?page=pembelian';</script>";
    }
}

?>

<div class="container-fluid px-4">
                        <h1 class="mt-4">Pembelian</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Pembelian</li>
                        </ol>
                         
                    <a href="?page=pembelian" class="btn btn-success">   KEMBALI</a>
                    <hr>

                    <form action="" method="POST">
                        <table class="table table-dark table-striped">
                            <tr">
                                <td width="210px">Nama Pelanggan  </td>
                                <td width="1000px">

                                <select name="id_pelanggan" id="id_pelanggan" class="form-control form-select">
                                    <?php
                                    $pel = mysqli_query($conn, "SELECT * FROM pelanggan");
                                    while($pelanggan = mysqli_fetch_array($pel)){
                                        ?>
                                        <option value="<?php echo $pelanggan['id_pelanggan']; ?>"> <?php echo $pelanggan['nama_pelanggan']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>

                                </td>
                            </tr>

                            <?php 
                                $pro = mysqli_query($conn, "SELECT * FROM produk");
                                while($produk = mysqli_fetch_array($pro)){
                                    ?>
                            <tr>
                                <td> <?php echo $produk['nama_produk'] . ' (Stock : ' . $produk['stok'] . ')'; ?> </td>
                                <td>
                                    <input type="number" max="<?php echo $produk['stok']; ?>" step="0" 
                                    value="0" name="produk [<?php echo $produk['id_produk']; ?>]" class="form-control " required>
                                </td>
                            </tr>                        
                            <?php
                                }
                                ?>
                                  
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
               