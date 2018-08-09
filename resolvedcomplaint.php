<?php 

class Resolved_Complaint
{
	private $AC_ID;
	Private $date;
	
	public function Resolved_Complaint()
	{
		
	}
	
	public function solve($A_ID,$date)
	
	{
		include('config.php');
		$query=mysqli_query($db,"select * from resolved_complaint where A_ID='$A_ID'");
		$rows = mysqli_num_rows($query);
		if($rows>=1)
		{
			$msg="This Complaint Already Mark As Done!";
			header("location:authorityboardHtml.php?success=$msg");
		}
		else
		{
		$query1=mysqli_query($db,"insert into resolved_complaint values('','$A_ID','$date')");
		
		$message="Your submitted complaint has been successfully solved! Thank you for your attention! ";
		 $query= mysqli_query($db,"select * from approved_complaint where AC_ID ='$A_ID'");
         $get=mysqli_fetch_array($query,MYSQLI_NUM);
         $c_id=$get[1];
		 
		 $query3= mysqli_query($db,"select * from complaint where C_ID ='$c_id'");
         $get1=mysqli_fetch_array($query3,MYSQLI_NUM);
		 $u_id=$get1[1];
		 $query2=mysqli_query($db,"insert into notification values('','$u_id','$c_id','$message','$date')");
		  $msg="Successfully Solved!";
			header("location:authorityboardHtml.php?success=$msg");
		
		}
		
	}
	
	
	public function show()
	{
		
		 	  include('config.php');
	
        
		$query= mysqli_query($db,"select * from  resolved_complaint");
		
		
		
		echo "<table class='table'><tr style='color:green;'><td><b>ComplaintID</b></td><td><b>UserID</b></td><td><b>Title</b></td><td><b>Type</b>
		</td><td><b>Area</b></td><td><b>Organization</b></td><td><b>Description</b></td><td>
		<b>AttachmentFile</b></td><td><b>Date</b></td></tr>";
		
		while( $get2=mysqli_fetch_array($query,MYSQLI_NUM))
      {
		 
		  $id=$get2[1];
		  $query1= mysqli_query($db,"select * from  approved_complaint where AC_ID='$id'");
		  
		  while( $get1=mysqli_fetch_array($query1,MYSQLI_NUM))
      { 
        $c_id=$get1[1];
		  $query2= mysqli_query($db,"select * from  complaint where C_ID='$c_id'");
		  while( $get=mysqli_fetch_array($query2,MYSQLI_NUM))
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
		echo "<td class='btn btn-danger'><a onclick=\"return confirm('Delete this Complaint?')\"  href='delete.php?id=".$get[0]."'>
		<b>Delete Record</b></a></td><tr>";
        
      
       }
	  }
	  }
		echo"</table>";
		
		
	}
	
	
	
	
	public function show_by_category($complaint_type)
	{
		
		 	  include('config.php');
	
        
		$query= mysqli_query($db,"select * from  resolved_complaint");
		
		
		
		echo "<table class='table'><tr style='color:green;'><td><b>ComplaintID</b></td><td><b>UserID</b></td><td><b>Title</b></td><td><b>Type</b>
		</td><td><b>Area</b></td><td><b>Organization</b></td><td><b>Description</b></td><td>
		<b>AttachmentFile</b></td><td><b>Date</b></td></tr>";
		
		while( $get2=mysqli_fetch_array($query,MYSQLI_NUM))
      {
		 
		  $id=$get2[1];
		  $query1= mysqli_query($db,"select * from  approved_complaint where AC_ID='$id'");
		  
		  while( $get1=mysqli_fetch_array($query1,MYSQLI_NUM))
      { 
        $c_id=$get1[1];
		  $query2= mysqli_query($db,"select * from  complaint where C_ID='$c_id' and type='$complaint_type'");
		  while( $get=mysqli_fetch_array($query2,MYSQLI_NUM))
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
        
      
       }
	  }
	  }
		echo"</table>";
		
		
	}
	
}
?>