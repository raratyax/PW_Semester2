<?php 
include_once("database.php");

$db->query("DELETE FROM tb_produk WHERE id='$_GET[id]'");
header("location: list_produk.php");

?>


