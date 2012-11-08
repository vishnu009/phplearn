<?php
if(isset($_POST)){
	$fname =$_POST['fname'];
	$lname =$_POST['lname'];
echo " welcome $fname. Hope you enjoy PHP ";
}
else{
	echo ' please enter the form via form.php';
}

?>