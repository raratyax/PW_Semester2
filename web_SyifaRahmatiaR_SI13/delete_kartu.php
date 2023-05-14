<?php 
include_once("database.php");

$db->query("DELETE FROM kartu WHERE id='$_GET[id]'");
header("location: list_kartu.php");


?>


