<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php 
include_once('database.php');
$data = $db->query("SELECT * FROM vendor WHERE id='$_GET[id]'");
$vendor = $data->fetch();
?>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <input type="hidden" name="id" value="<?=$_GET['id']?>">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>Input Vendor</h5>
              </div>
              <div class="card-body">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <form method="POST" action="update_vendor.php">
                                    <div class="form-group row">
                                        <label for="nomor" class="col-4 col-form-label">Nomor</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="nomor" name="nomor" type="text" class="form-control" value="<?= $vendor['nomor'] ?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="nama" name="nama" type="text" class="form-control" value="<?= $vendor['nama'] ?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kota" class="col-4 col-form-label">Kota</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="kota" name="kota" type="text" class="form-control" value="<?= $vendor['kota'] ?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kontak" class="col-4 col-form-label">Kontak</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="kontak" name="kontak" type="text" class="form-control" value="<?= $vendor['kontak'] ?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <input type="hidden" name="id" value="<?=$_GET['id']?>">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
<?php include_once('footer.php'); ?>


