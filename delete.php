<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
 include('complaint.php');
  $a= new Complaint();
  $a->delete_complaint($id);
}


?>