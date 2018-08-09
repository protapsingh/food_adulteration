<?php

Class Approve_Complaint
{
	private $C_ID;
	Private $date;
	
	public function Approve_Complaint()
	{
		
	}
	
	public function approve($C_ID,$date)
	
	{
		include('config.php');
		$query=mysqli_query($db,"select * from approved_complaint where C_ID='$C_ID'");
		$rows = mysqli_num_rows($query);
		if($rows>=1)
		{
			$msg="This Complaint Already Approved";
			header("location:moderatorHtml.php?success=$msg");
		}
		else
		{
		 $query1=mysqli_query($db,"insert into approved_complaint values('','$C_ID','$date')");
		 $message="Your submitted complaint has been approved! ";
		 
		 $query= mysqli_query($db,"select * from complaint where C_ID ='$C_ID'");
         $get=mysqli_fetch_array($query,MYSQLI_NUM);
         $u_id=$get[1];
		 $query2=mysqli_query($db,"insert into notification values('','$u_id','$C_ID','$message','$date')");
		 $msg="Complaint Has Been Approved";
		 header("location:moderatorHtml.php?success=$msg");
		
		}
		
	}
	
	public function show()
	{
		
		 	  include('config.php');
	
        
		$query= mysqli_query($db,"select * from  approved_complaint");
		
		
		
		echo "<table class='table'><tr style='color:green;'><td><b>ComplaintID</b></td><td><b>UserID</b></td><td><b>Title</b></td><td><b>Type</b>
		</td><td><b>Area</b></td><td><b>Organization</b></td><td><b>Description</b></td><td>
		<b>AttachmentFile</b></td><td><b>Date</b></td></tr>";
		
		while( $get1=mysqli_fetch_array($query,MYSQLI_NUM))
      {
		  $id=$get1[1];
		  
		  
		  $query1= mysqli_query($db,"select * from  complaint where C_ID='$id'");
		  while( $get=mysqli_fetch_array($query1,MYSQLI_NUM))
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
	  
		echo"</table>";
		
		
	}
	
	
	public function show_by_category($complaint_type)
	{
		
		 	  include('config.php');
	
        
		$query= mysqli_query($db,"select * from  approved_complaint");
		
		
		
		echo "<table class='table'><tr style='color:green;'><td><b>ComplaintID</b></td><td><b>UserID</b></td><td><b>Title</b></td><td><b>Type</b>
		</td><td><b>Area</b></td><td><b>Organization</b></td><td><b>Description</b></td><td>
		<b>AttachmentFile</b></td><td><b>Date</b></td></tr>";
		
		while( $get1=mysqli_fetch_array($query,MYSQLI_NUM))
      {
		  $id=$get1[1];
		  $a_id=$get1[0];
		  $query1= mysqli_query($db,"select * from  complaint where C_ID='$id' and type='$complaint_type'");
		  while( $get=mysqli_fetch_array($query1,MYSQLI_NUM))
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
        echo "<td class='btn btn-success'><a href='solve.php?id=".$get1[0]."'><b>Mark as Solved<b></a></td>";
      
       }
	  }
	  
		echo"</table>";
		
		
	}
	
	
	
	
}

?>