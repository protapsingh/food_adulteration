<?php 

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
	$password=$_POST['password'];
	include('user.php');
    $a= new User();
	$a->verifyUser($email,$password);
}	

?>