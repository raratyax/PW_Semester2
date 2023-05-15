<?php include_once('database.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rara Fashion</title>
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
            <h3>Form Pesanan</h3>
            <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>Input Pesanan</h5>
              </div>
              <div class="card-body">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <form method="POST" action="proses_pesanan.php">
                                <div class="form-group row">
                                                <label for="id" class="col-4 col-form-label">ID</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="id" name="id" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="tanggal" name="tanggal" type="date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="alamat_pemesan" class="col-4 col-form-label">Alamat Pemesan</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="no_hp" class="col-4 col-form-label">No Hp</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="no_hp" name="no_hp" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-4 col-form-label">Email</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="email" name="email" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="deskripsi" name="deskripsi" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="produk_id" class="col-4 col-form-label">Produk Id</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="produk_id" name="produk_id" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                        
                                        </div>
                                        <div class="form-group row">
                                                <div class="offset-4 col-8">
                                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                </div>
                        </div>
                  </div>

              </div>
          </div>
        </div>
        </div>
</div>
    </main>
<?php include_once('footer.php'); ?>


