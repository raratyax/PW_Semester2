<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              <h5>Form Belanja Rara</h5>
              </div>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-18 mt-4">
                      <form method ="POST" action ="">
                <div class="form-group row">
                  <label for="customer" class="col-4 col-form-label">Customer</label> 
                  <div class="col-8">
                    <input id="customer" name="customer" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-4">Pilih Produk</label> 
                  <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
                      <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                      <label for="produk_1" class="custom-control-label">KULKAS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci"> 
                      <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                  <div class="col-8">
                    <input id="jumlah" name="jumlah" type="text" class="form-control">
                  </div>
                </div> 
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>

                  <?php
                  if(isset($_POST['submit'])){
                  $customer = $_POST["customer"];
                  $produk = $_POST["produk"];
                  if($produk == "tv"){
                    $harga = 4200000; 
                  }elseif ($produk == "kulkas"){
                    $harga = 3100000;
                  }
                  else{
                    $harga = 3800000;
                  }
                  $jumlah = $_POST["jumlah"];
                  $total = $harga * $jumlah;

                  echo "</br> Customer = " .$customer;
                  echo "</br> Pilih Produk = " .$produk;
                  echo "</br> Jumlah = " .$jumlah;
                  echo "</br> Jumlah Total = " .$total;
                  }
                  ?>
		                </div>
	                </div>
                </div>
          </div>
        </div>
    </div>
</main>

<?php include_once('footer.php'); ?>
</body>
</html>