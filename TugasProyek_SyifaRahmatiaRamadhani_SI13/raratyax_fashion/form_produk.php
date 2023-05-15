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
            <h3>Form Produk</h3>
            <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>Input Produk</h5>
              </div>
              <div class="card-body">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <form method="POST" action="proses_produk.php">
                                <div class="form-group row">
                                                <label for="id" class="col-4 col-form-label">ID</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="id" name="id" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kode" class="col-4 col-form-label">Kode</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="kode" name="kode" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="nama" class="col-4 col-form-label">Nama</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="nama" name="nama" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="harga_jual" name="harga_jual" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="harga_beli" name="harga_beli" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="stok" class="col-4 col-form-label">Stok</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="stok" name="stok" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="min_stok" class="col-4 col-form-label">Min Stok</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="min_stok" name="min_stok" type="text" class="form-control">
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
                                                <label for="kategori_produk_id" class="col-4 col-form-label">Kategori Produk Id</label>
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <input id="kategori_produk_id" name="kategori_produk_id" type="text" class="form-control">
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
    </main>
<?php include_once('footer.php'); ?>


