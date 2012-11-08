<?php 
include('connet.html.php');
$sql =select * from accounts;
$result = PDO->query($sql);
?>
