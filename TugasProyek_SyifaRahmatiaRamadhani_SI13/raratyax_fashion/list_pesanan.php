<?php 
    include_once('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raratyax Fashion</title>
    <link rel="icon" href="images/logora.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
</head>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <h3><a class="nav-link" href="dashboard1.php" style="color: #48f542">Data Pesanan</a></h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h5>List Pesanan</h5></div>
                            <div class="card-body">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col" width="130px">Tanggal</th>
                                            <th scope="col" width="150px">Nama Pemesan</th>
                                            <th scope="col">Alamat Pemesan</th>
                                            <th scope="col">No Hp</th>
                                            <th scope="col">Email</th>
                                            <th scope="col" width="150px">Jumlah Pesanan</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col" width="100px">Produk ID</th>
                                            <th scope="col" width="200px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        $data = $db->query("SELECT * FROM tb_pesanan");
                                        foreach ($data as $d):
                                        ?>
                                    <tr>           
                                        <td><?= $d['id']?></td>            
                                        <td><?= $d['tanggal']?></td>                 
                                        <td><?= $d['nama_pemesan']?></td>
                                        <td><?= $d['alamat_pemesan']?></td>
                                        <td><?= $d['no_hp']?></td>
                                        <td><?= $d['email']?></td>
                                        <td><?= $d['jumlah_pesanan']?></td>
                                        <td><?= $d['deskripsi']?></td>
                                        <td><?= $d['produk_id']?></td>
                                        <td>
                                            <a href="delete_pesanan.php?id=<?= $d['id']; ?>" class="btn btn-success">HAPUS</a>
                                            <a href="form_update_pesanan.php?id=<?= $d['id']; ?>"class="btn btn-success">EDIT</a>
                                        </td>
                                    </tr>
                                        <?php 
                                        endforeach;
                                        ?>                       
                                    </tbody>
                                </table>
                                <a href="form_pesanan.php" class="btn btn-success mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include_once('footer.php'); ?>


