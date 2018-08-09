<?php 
include('config.php');
if(isset($_POST['submit']))
{
    $username=mysqli_real_escape_string($db,$_POST['username']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	$mobile=mysqli_real_escape_string($db,$_POST['mobile']);
	$city=mysqli_real_escape_string($db,$_POST['city']);
	$gender=mysqli_real_escape_string($db,$_POST['gender']);
	$authoritytype=mysqli_real_escape_string($db,$_POST['authoritytype']);
	
	$usertype="authority";
	
	include('user.php');
 $a= new User();
	$a->SignUp($username,$email,$password,$mobile,$city,$gender,$usertype,$authoritytype);
}	

?>