<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php 
include_once('database.php');
$data = $db->query("SELECT * FROM kartu WHERE id='$_GET[id]'");
$kartu = $data->fetch();
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
                <h5>Input Kartu</h5>
              </div>
              <div class="card-body">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <form method="POST" action="update_kartu.php">
                                    <div class="form-group row">
                                        <label for="kode" class="col-4 col-form-label">Kode</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="kode" name="kode" type="text" class="form-control" value="<?= $kartu['kode'] ?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="nama" name="nama" type="text" class="form-control" value="<?= $kartu['nama'] ?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="diskon" class="col-4 col-form-label">Diskon</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="diskon" name="diskon" type="text" class="form-control" value="<?= $kartu['diskon'] ?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kontak" class="col-4 col-form-label">Iuran</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="iuran" name="iuran" type="text" class="form-control" value="<?= $kartu['iuran'] ?>">
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


