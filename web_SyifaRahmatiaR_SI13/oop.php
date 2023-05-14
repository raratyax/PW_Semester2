<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">OOP Persegi_Panjang</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Raratyax Site 2023 ^^</li>
            </ol>
<?php
class Persegi_Panjang{
    public $P;
    public $L;

    function __construct($P,$L){
        $this->P = $P;
        $this->L = $L;
    }

    function Keliling(){
        $keliling = 2 * $this->P + $this->L ;
        return $keliling;
    }

    function luas(){
        $luas = $this->P * $this->L;
        return $luas;
    }
}

$persegipanjang = new Persegi_Panjang(10,5);
echo "Soal Satu : Menentukan Keliling & Luas";
echo "<br>";
echo "Keliling Perseginya adalah = ". $keliling=$persegipanjang->keliling();
echo "<br>";
echo "Luas Perseginya adalah = ". $luas=$persegipanjang->luas();
echo "<br>";
echo "<hr>";
$persegipanjang = new Persegi_Panjang(50,5);
echo "Soal Dua : Menentukan Keliling & Luas";
echo "<br>";
echo "Keliling Perseginya adalah = ". $keliling=$persegipanjang->keliling();
echo "<br>";
echo "Luas Perseginya adalah = ". $luas=$persegipanjang->luas();
echo "<br>";
            
?>
</div>
	</div>
</div>
        </div>
    </main>
<?php include_once('footer.php'); ?>