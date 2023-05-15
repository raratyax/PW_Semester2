<?php 
include_once("database.php");

$db->query("INSERT INTO tb_pesanan VALUES ('','$_POST[tanggal]','$_POST[nama_pemesan]','$_POST[alamat_pemesan]','$_POST[no_hp]', '$_POST[email]', '$_POST[jumlah_pesanan]', '$_POST[deskripsi]', '$_POST[produk_id]')");
header("location: list_pesanan.php");


?>