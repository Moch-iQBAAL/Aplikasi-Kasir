<?php

 $id = $_GET['id'];
 $query = mysqli_query($conn, "SELECT * FROM penjualan LEFT JOIN pelanggan ON pelanggan.id_pelanggan = penjualan.id_pelanggan WHERE id_penjualan='$id'");
 $data = mysqli_fetch_array($query);


?>

<div class="container-fluid px-4">
                        <h1 class="mt-4">Detail Pembelian</h1>
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

                                 <?php echo $data['nama_pelanggan']; ?>

                                </td>
                            </tr>

                            <?php 
                                $pro = mysqli_query($conn, "SELECT * FROM detal_penjualan LEFT JOIN produk on produk.id_produk = detal_penjualan.id_produk WHERE id_penjualan = $id");
                                while($produk = mysqli_fetch_array($pro)){
                                    ?>
                            <tr>
                                <td> <?php echo $produk['nama_produk']; ?> </td>
                                <td> Harga Satuan <?php echo $produk ['harga'] ?></td>
                                <td> Jumlah <?php echo $produk ['jumlah_produk'] ?></td>
                                <td> Sub Total <?php echo $produk ['sub_total'] ?></td>
                            </tr>                        
                            <?php
                                }
                                ?>
                                  
                            <tr>
                                <td>Total </td>
                                <td>
                                    <?php echo $data['totalHarga'] ?>
                                </td>
                            </tr>
                        </table>
                    </form>
                       
                    </div>
               