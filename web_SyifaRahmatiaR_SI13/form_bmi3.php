<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php
require_once 'class_bmi.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>Form Data Pasien Rara</h5>
              </div>
              <div class="card-body">
        
                  <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12 mt-4">
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                        </div>
                        <input id="nama" name="nama" placeholder="Masukan Nama Lengkap" type="text" required="required" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="col-4 col-form-label">Umur</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-birthday-cake"></i>
                            </div>
                        </div>
                        <input id="umur" name="umur" placeholder="Masukan Umur" type="text" class="form-control" required="required">
                        <div class="input-group-append">
                            <div class="input-group-text">tahun</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="laki-laki" required="required">
                        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="perempuan" required="required">
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="berat badan" class="col-4 col-form-label">Berat Badan</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-tachometer"></i>
                            </div>
                        </div>
                        <input id="bb" name="bb" placeholder="Masukan Berat Badan" type="text" class="form-control" required="required">
                        <div class="input-group-append">
                            <div class="input-group-text">Kg</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tinggi badan" class="col-4 col-form-label">Tinggi Badan</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-text-height"></i>
                            </div>
                        </div>
                        <input id="tb" name="tb" placeholder="Masukan Tinggi Badan" type="text" class="form-control" required="required">
                        <div class="input-group-append">
                            <div class="input-group-text">Cm</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <hr>
        <table class="table table-bordered">
            <tr class="table-secondary text-center">
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Hasil BMI</th>
                <th>Keterangan</th>
            </tr>
            <?php
            if (isset($_POST['submit'])) {
                $nama = $_POST['nama'];
                $umur = $_POST['umur'];
                $jenis_kelamin = $_POST['jk'];
                $berat_badan = $_POST['bb'];
                $tinggi_badan = $_POST['tb'];
                $bmi = new BMI($nama, $umur, $jenis_kelamin, $berat_badan, $tinggi_badan);
                $bmi->hitung_bmi();
                $bmi->keterangan();
            ?>
                <tr>
                    <td><?php echo $bmi->nama; ?></td>
                    <td><?php echo $bmi->umur; ?></td>
                    <td><?php echo $bmi->jenis_kelamin; ?></td>
                    <td><?php echo $bmi->berat_badan; ?></td>
                    <td><?php echo $bmi->tinggi_badan; ?></td>
                    <td><?php echo $bmi->hasil_bmi; ?></td>
                    <td><?php echo $bmi->keterangan; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    </main>
<?php include_once('footer.php'); ?>