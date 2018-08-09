
<?php 
include('config.php');
if(isset($_POST['submit']))
{
    $target="images/".basename($_FILES['image']['name']);
	$image=$_FILES['image']['name'];
	
	$title=mysqli_real_escape_string($db,$_POST['title']);
	$type=mysqli_real_escape_string($db,$_POST['type']);
	$area=mysqli_real_escape_string($db,$_POST['area']);
	$organization=mysqli_real_escape_string($db,$_POST['organization']);
	$description=mysqli_real_escape_string($db,$_POST['description']);
	
	
    session_start();
    $u_id=$_SESSION['id'];
	$date= date('d-m-y');
	

	

	
	
	include('complaint.php');
    $a= new Complaint();
	$a->makecomplaint($u_id,$title,$type,$area,$organization,$description,$image,$date);
	
	if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
{
	
	$msg="Your Complaint Has Been Succesfully Submitted! Keep Checking Notification!";
	header("location:complaintHtml.php?success=$msg");
}
	
	
}	

?>


