      
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                         
                    <a href="?page=produk_tambah" class="btn btn-success"> [+] TAMBAH DATA</a>
                    <hr>

                        <table class="table table-border">
                            <tr>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>


                            <?php

                            $query = mysqli_query($conn, "SELECT * FROM produk");
                            while($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td> <?php echo $data['nama_produk']; ?></td>
                                    <td> <?php echo $data['harga']; ?></td>
                                    <td> <?php echo $data['stok']; ?></td>
                                    <td>
                                        <a href="?page=produk_ubah&&id=<?php echo $data['id_produk']; ?> " class="btn btn-primary "> Ubah</a>
                                        <a href="?page=produk_hapus&&id=<?php echo $data['id_produk']; ?> " class="btn btn-danger " onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');"> Hapus</a>
                                    </td>
                                </tr>

                                <?php
                            }
                            ?>

                     
                        </table>
                    </div>
               