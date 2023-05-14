<?php 
include_once("database.php");

$db->query("DELETE FROM pembelian WHERE id='$_GET[id]'");
header("location: list_pembelian.php");


?>


