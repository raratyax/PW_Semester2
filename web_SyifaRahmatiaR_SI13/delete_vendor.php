<?php 
include_once("database.php");

$db->query("DELETE FROM vendor WHERE id='$_GET[id]'");
header("location: list_vendor.php");


?>


