<html>
<body>
<?php 
$d=500;
if($d== 500){
	echo 'have a nice weekend';

	}
else{
	echo 'wait till weekend';
}
echo'<br/><br /><br />';
$number =2;
switch ($number) {
	case '1':
		echo'the value is one';
				break;
		case '2':
			echo 'now the value is two';
			break;
		case '3':	
			echo 'the value now is three';
			break;
	   default:
		echo ' please enter a number between 1 and 3';
		break;
}
$cars =array("bmw","mclaren","volvo","jeep","A380");
echo'<br/><br/>';

echo $cars['0'];
echo'<br/><br/>';
$i=1;
while($i<=10)
  {
  echo "The number is " . $i . "<br />";
  $i++;
  }

?>
</body>
</html>
