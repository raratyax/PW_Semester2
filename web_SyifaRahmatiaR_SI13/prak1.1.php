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

<?php

// Variabel User //
$sapa = "Halo!";
$nama = "Rara"; # nama = "Rara"
$usia = 18;
$negara = "Indonesia";
$instansi ="STT-NF";

echo $sapa; # print(sapa)

echo "<br/>";

echo " Nama saya ".$nama."^^ usia ".$usia,", dari ".$negara," dan berkuliah di ".$instansi; 

echo "<br/>";

# nama saya Rara, usia 18, dari Indonesia

// Variael Sistem //

// Konstanta //
define("PHI",3.14);
$radius = 7;

$luas = PHI * $radius * $radius;
echo "<hr>";
echo $luas;

?>

            </div>
          </div>
        </div>
    </div>
</main>

<?php include_once('footer.php'); ?>