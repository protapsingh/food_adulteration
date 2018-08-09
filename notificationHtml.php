<?php
include('useraccess.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#2C3E50">

<nav class="navbar navbar-inverse" style="background-color:#062A4E; ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="userhome.php">Home</a>
    </div>
    <ul class="nav navbar-nav">
   
     
	   <li><a href="complainthtml.php">Make Complaint</a></li>
	   <li><a href="notificationHtml.php">Complaint Notification</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
     
    </ul>
  </div>
</nav>


<div class="container" style="color:#BAD6F2;">
  <center><h2 style="color:red;">Notifications</h2></center>
  </br>
  </br>
  <div style="padding-left:100px; font-size:18px;">
  <?php
     include('config.php');
	 $id=$_SESSION['id'];
	 $query=mysqli_query($db,"select * from notification where userID='$id'");
	 $rows = mysqli_num_rows($query);
		if($rows>=1)
		{
		   while($get=mysqli_fetch_array($query,MYSQLI_NUM))
		   {
			   $c_id=$get[2];
			   $msg=$get[3];
			   $date=$get[4];
			   $query1=mysqli_query($db,"select * from complaint where C_ID='$c_id'");
			   $get1=mysqli_fetch_array($query1,MYSQLI_NUM);
			   
			   $title=$get1[2];
			   $type=$get1[3];
			   echo"<b style='color:orange;'>1 New Notification:</b> ".$msg;
			   echo"</br>";
			   echo"<b style='color:green;'>Complaint Title: </b>".$title."<b style='color:green;'> Complaint Type:</b> ".$type;
			   echo"</br>";
			   Echo "<b style='color:red;'>Date</b> ".$date;
			   echo"</br>";
			   echo"</br>";
		   }
		   
		   
		}
		
		else
		   {
			   echo "<p style='color:green;'>You do not have any notifiaction or you yet not submit any complaint! </p>";
		   }
  ?>
  </div>
</div>

</body>
</html>
