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

$mahasiswa = ["Yaqub Qamar Ad-din Dibiazah", "Khalid Kashmiri", "Khidr
Karawita", "Ismail Ahmad Dabanawi", "Usman Abdel Jalil Shisha", "Muhammad
Sumbul"];


// sort //
sort($mahasiswa);

foreach($mahasiswa as $p){
    echo $p ."<br>";
}

echo "<br>";

// arsort //
sort($mahasiswa);

foreach($mahasiswa as $p){
    echo $p ."<br>";
}

// push //
array_push($mahasiswa, "Udin");

echo "<br>";

foreach($mahasiswa as $p){
    echo $p ."<br>";
}

// unshift //
array_unshift($mahasiswa, "Nidu");

echo "<br>";

foreach($mahasiswa as $p){
    echo $p ."<br>";
}

?>

            </div>
          </div>
        </div>
    </div>
</main>

<?php include_once('footer.php'); ?>