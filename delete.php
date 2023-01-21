<?php
include 'lib/library.php';
$catatan = $_GET['id_catatan'];

$sql = "DELETE FROM catatan WHERE id_catatan = $catatan";

$mysqli->query($sql) or die($mysqli->error);

header ('location: index.php?page=catatan_perjalanan')
?>