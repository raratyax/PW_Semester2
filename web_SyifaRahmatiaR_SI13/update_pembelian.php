<?php 
include_once("database.php");

$db->query("UPDATE pembelian SET tanggal='$_POST[tanggal]',nomor='$_POST[nomor]', produk_id='$_POST[produk_id]', jumlah='$_POST[jumlah]', harga='$_POST[harga]', vendor_id='$_POST[vendor_id]' WHERE id='$_POST[id]' ");
header("location: list_pembelian.php");

?>





