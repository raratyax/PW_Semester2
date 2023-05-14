<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('database.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h5>List Pembelian</h5></div>
                            <div class="card-body">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Nomor</th>
                                            <th scope="col">Produk_id</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Vendor_id</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data = $db->query("SELECT * FROM pembelian"); 
                                        foreach ($data as $d) :
                                        ?>
                                    <tr> 
                                        <td><?= $d['id'];?></td>
                                        <td><?= $d['tanggal'];?></td>
                                        <td><?= $d['nomor'];?></td>
                                        <td><?= $d['produk_id'];?></td>
                                        <td><?= $d['jumlah'];?></td>
                                        <td><?= $d['harga'];?></td>
                                        <td><?= $d['vendor_id'];?></td>
                                        <td>
                                        <a href="delete_pembelian.php?id=<?= $d['id'];?>" class="btn btn-success">Hapus</a>
                                        <a href="form_update_pembelian.php?id=<?= $d['id'];?>" class="btn btn-success">Edit</a>
                                        </td>                                       
                                    </tr>
                                        <?php 
                                        endforeach;
                                        ?>                       
                                    </tbody>
                                </table>
                                <a href="form_pembelian.php" class="btn btn-success mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include_once('footer.php'); ?>


