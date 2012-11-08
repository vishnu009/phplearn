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
		function writeName($fname){
			echo $fname  ;
		}
	echo add();
	echo '<hr/><br/>';
	echo dispalay();
	echo '<hr/><br/>';
	echo 'my Name is  <br/>';
	echo writeName("vishnu");
	?>

</body>
</html>