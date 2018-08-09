
<?php

if(isset($_GET['id']))
{
$c_id=$_GET['id']; 
$date= date('d-m-y');
	
 include('resolvedcomplaint.php');
 
  $a= new Resolved_Complaint();
  $a->solve($c_id,$date);
}



?>


