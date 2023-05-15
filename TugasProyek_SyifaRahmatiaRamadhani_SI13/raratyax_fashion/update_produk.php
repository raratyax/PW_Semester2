<?php 
include_once("database.php");
$db->query("UPDATE tb_produk SET id='$_POST[id]',kode='$_POST[kode]',
nama='$_POST[nama]',harga_jual='$_POST[harga_jual]',harga_beli='$_POST[harga_beli]',stok='$_POST[stok]',min_stok='$_POST[min_stok]',deskripsi='$_POST[deskripsi]',kategori_produk_id='$_POST[kategori_produk_id]' WHERE id='$_POST[id]' ");
header("location: list_produk.php")
?>





