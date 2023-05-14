<?php 
include_once("database.php");

$db->query("UPDATE kartu SET kode='$_POST[kode]',nama='$_POST[nama]', diskon='$_POST[diskon]', iuran='$_POST[iuran]' WHERE id='$_POST[id]' ");
header("location: list_kartu.php");

?>





