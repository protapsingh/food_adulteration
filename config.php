<?php
$db=mysqli_connect("localhost","root","","food_complaint");
if($db===false)
{
	die("Error: Could not connect. " .mysqli_connect_error());
}	
?>