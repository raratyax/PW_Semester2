<?php 
include_once("database.php");

$db->query("DELETE FROM tb_kategori_produk WHERE id='$_GET[id]'");
header("location: list_kategori.php");

?>