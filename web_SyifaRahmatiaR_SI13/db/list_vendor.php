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
                        <div class="card-header"><h5>List Vendor</h5></div>
                            <div class="card-body">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nomor</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Kota</th>
                                            <th scope="col">Kontak</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data = $db->query("SELECT * FROM vendor"); 
                                        foreach ($data as $d) :
                                        ?>
                                    <tr> 
                                        <td><?= $d['id'];?></td>
                                        <td><?= $d['nomor'];?></td>
                                        <td><?= $d['nama'];?></td>
                                        <td><?= $d['kota'];?></td>
                                        <td><?= $d['kontak'];?></td>
                                        <td>
                                            <a href="delete_vendor.php?id=<?= $d['id'];?>" class="btn btn-success">Hapus</a>
                                            <a href="form_update_vendor.php?id=<?= $d['id'];?>" class="btn btn-success">Edit</a>
                                        </td>                                       
                                    </tr>
                                        <?php 
                                        endforeach;
                                        ?>                       
                                    </tbody>
                                </table>
                                <a href="form_vendor.php" class="btn btn-success mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include_once('footer.php'); ?>


