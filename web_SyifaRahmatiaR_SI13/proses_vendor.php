<?php 
include_once("database.php");

$db->query("INSERT INTO vendor VALUES ('','$_POST[nomor]','$_POST[nama]','$_POST[kota]','$_POST[kontak]')");
header("location: list_vendor.php");

?>



