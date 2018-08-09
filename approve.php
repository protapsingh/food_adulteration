<?php

if(isset($_GET['id']))
{
$c_id=$_GET['id']; 
$date= date('d-m-y');

	
 include('approvecomplaint.php');
 
  $a= new Approve_Complaint();
  $a->approve($c_id,$date);
}



?>