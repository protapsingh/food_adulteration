<?php


class Complaint
{
  private $title;
  private $type;
  private $area;
  private $organization;
  private $description;
  private $attachfile;
  private $c_date;
  
  
  
	
  public function Complaint ()
  
  {
	  
	  
  }
  
  public function makecomplaint($u_id,$title,$type,$area,$organization,$description,$image,$date)
  
  {
	  include('config.php');
	  
	$query="insert into complaint(userID,title,type,area,organization,description,attachment,date) 
	values('$u_id','$title','$type','$area','$organization','$description','$image','$date')";
	mysqli_query($db,$query);
	
	
	//$msg="Your Complaint Has Been Succesfully Submitted!";
	//header("location:complaintHtml.php?success=$msg");
	
	
  }
  
  
  public function show_complaint()
	 {
		 	  include('config.php');
	
        
		$query= mysqli_query($db,"select * from  complaint");
        
		
		
		
		echo "<table class='table'><tr style='color:green;'><td><b>ComplaintID</b></td><td><b>UserID</b></td><td><b>Title</b></td><td><b>Type</b>
		</td><td><b>Area</b></td><td><b>Organization</b></td><td><b>Description</b></td><td>
		<b>AttachmentFile</b></td><td><b>Date</b></td></tr>";
		
		while( $get=mysqli_fetch_array($query,MYSQLI_NUM))
      {
		 $image="<img height='50' alt='no' widht='50' src='images/" .$get[7]."'/>";
		  
		echo "<tr><td>".$get[0]."</td>";  
        echo "<td>".$get[1]."</td>";
        echo "<td>".$get[2]."</td>";
		echo "<td>".$get[3]."</td>";
		echo "<td>".$get[4]."</td>";
		echo "<td>".$get[5]."</td>";
		echo "<td>".$get[6]."</td>";
		echo "<td>".$image."</td>";
		echo "<td>".$get[8]."</td>";
        echo "<td class='btn btn-info'><a href='details.php?id=".$get[0]."'>Details</a></td>";
		
        echo "<td class='btn btn-success'><a href='approve.php?id=".$get[0]."'><b>Approve<b></a></td>";
        echo "<td class='btn btn-danger'><a onclick=\"return confirm('Delete this Complaint?')\"  href='delete.php?id=".$get[0]."'>
		<b>Decline</b></a></td><tr>";
       }
		
		echo"</table>";
		
		
		
		
	 }
	 
	 public function delete_complaint($id)
	 {
		 include('config.php');
		$query1=mysqli_query($db,"delete from complaint where C_ID='$id'");
         if($query1)
         {
		  session_start();
		  $u_id= $_SESSION['id'];
		  $query2=mysqli_query($db,"select * from user where ID='$u_id'");
		  $get=mysqli_fetch_array($query2,MYSQLI_NUM);
		  $utype=$get[7];
		  
		  
		  $msg="One Complaint Has Been Succesfully Deleted!";
		  if($utype=='moderator')
		  {
          header("location:moderatorHtml.php?success=$msg");
		  }
		  else
		  {
			   header("location:authorityboardHtml.php?success=$msg");
			  
		  }
         } 
  		
	 }
  
   public function details($id)
	 {
		 include('config.php');
		$query=mysqli_query($db,"select * from complaint where C_ID='$id'");
		
		$get=mysqli_fetch_array($query,MYSQLI_NUM);
		return $get;
         
  		
	 }
}
?>