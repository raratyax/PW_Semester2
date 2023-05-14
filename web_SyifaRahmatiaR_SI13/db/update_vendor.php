<?php 
include_once("database.php");

$db->query("UPDATE vendor SET nomor='$_POST[nomor]',nama='$_POST[nama]', kota='$_POST[kota]', kontak='$_POST[kontak]' WHERE id='$_POST[id]' ");
header("location: list_vendor.php");

?>





