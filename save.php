<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];}
if (isset($_GET['con'])) {
$con = $_GET['con'];}
$cont = rawurldecode($con);
$file = fopen($id.".txt", "w") or die("Unable to open file!");
fwrite($file, $cont);
fclose($file);
?>