<!Doctype html>
<meta charset="utf8">
<head>
<title>PHP form actions </title>
<style type="text/css">
body{
	display: inline-block;
}
</style>
</head>
<body>
	


<?php
$user ="vishnu";
$pass="computer";
try{
	$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
	echo 'connected to the database test';
   }
   catch(PDOExeption $e){
   	$output='could not connected to the fucking database';
   	include'output.html.php';
   	exit();

   }

?>


</body>
</html>


