<?php 
include_once("database.php");

$db->query("INSERT INTO tb_kategori_produk VALUES ('','$_POST[nama]')");
header("location: list_kategori.php");


?>