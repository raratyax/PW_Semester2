<?php 
include_once("database.php");
$db->query("UPDATE tb_kategori_produk SET id='$_POST[id]',nama='$_POST[nama]' WHERE id='$_POST[id]' ");
header("location: list_kategori.php")
?>




