<?php 
include_once("database.php");
$db->query("UPDATE tb_pesanan SET id='$_POST[id]',tanggal='$_POST[tanggal]',nama_pemesan='$_POST[nama_pemesan]',alamat_pemesan='$_POST[alamat_pemesan]',no_hp='$_POST[no_hp]',email='$_POST[email]',jumlah_pesanan='$_POST[jumlah_pesanan]',deskripsi='$_POST[deskripsi]',produk_id='$_POST[produk_id]' WHERE id='$_POST[id]' ");
header("location: list_pesanan.php")
?>





