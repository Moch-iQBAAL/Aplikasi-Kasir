      
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Pelanggan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Pelanggan</li>
                        </ol>
                         
                    <a href="?page=pelanggan_tambah" class="btn btn-success"> [+] TAMBAH DATA</a>
                    <hr>

                        <table class="table table-border">
                            <tr>
                                <th>Nama Pelanggan</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Aksi</th>
                            </tr>


                            <?php

                            $query = mysqli_query($conn, "SELECT * FROM pelanggan");
                            while($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td> <?php echo $data['nama_pelanggan']; ?></td>
                                    <td> <?php echo $data['alamat']; ?></td>
                                    <td> <?php echo $data['no_tlpn']; ?></td>
                                    <td>
                                        <a href="?page=pelanggan_ubah&&id=<?php echo $data['id_pelanggan']; ?> " class="btn btn-primary "> Ubah</a>
                                        <a href="?page=pelanggan_hapus&&id=<?php echo $data['id_pelanggan']; ?> " class="btn btn-danger " onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');"> Hapus</a>
                                    </td>
                                </tr>

                                <?php
                            }
                            ?>

                     
                        </table>
                    </div>
               