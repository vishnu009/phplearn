<!DOCTYPE html>
<head>
<title>functions</title>
</head>
<body>
	<?php
		function add(){
			$a= 100;
			$b=200;
			return($a+$b);
		}
		function dispalay(){
			$a='abc ';
			return($a);
		}
	echo add();
	echo '<hr/><br/>';
	echo dispalay();
	?>

</body>
</html>