
<?php
include('config.php');

if(isset($_GET['id']))
{
$id=$_GET['id'];
 include('complaint.php');
  $a= new Complaint();
 $get=$a->details($id);
 
  $userId=$get[1];
  $title=$get[2];
  $type=$get[3];
  $area=$get[4];
  $organization=$get[5];
  $description=$get[6];
  $attachment="<img height='400' alt='no' widht='400' src='images/" .$get[7]."'/>";
  $date=$get[8];
  
  
  include('user.php');
  $a= new User();
 $get1=$a->user_details($userId);
  
  $username=$get1[1];
  $email=$get1[2];
  $mobile=$get1[4];
  $city=$get1[5];
  $gender=$get1[6];
}


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
  <style>
  
  #bar ul{ margin-right:5px; list-style-type:none; margin:0 auto; padding:0;overflow:hidden; background-color:#062A4E;position:absolute; width:150px;height:100%;}
#bar li{  border-bottom:1px solid white; margin:5px;}
#bar li:last-child {
    border-bottom: none;
}
#bar li a{display:block; color:#BAD6F2; text-decoration:none; text-align:center;padding:6px 5px;}

#bar li a:hover{ background-color:#2C3E50;}
#bar  .active{background-color:#2C3E50;}
</style>
  
<body style="background-color:#2C3E50;">

<nav class="navbar navbar-inverse" style="background-color:#062A4E; ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FoodComplaintPortal.BD</a>
    </div>
    <ul class="nav navbar-nav">
    </ul>
   <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
  
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
   </li>
    </ul>
  </div>
</nav>


<center><h3 style="color:green;">Complaint Details</h3></center>

</br>
<div style="padding-left:300px; color:#BAD6F2;">
<h3>ComplaintID:<?php echo $id;?></h3>
</br>
<div style="float:left;">
<b style="color:red;">Complainant Information</b>
</br>
<table class="table">
<tr>
<td><b>Complainant User ID:</b></td>
<td><?php echo $userId;?></td>
</tr>
<tr>
<td><b>Complainant User Name:</b></td>
<td><?php echo $username;?></td>
</tr>
<tr>
<td><b>Complainant User Email:</b></td>
<td><?php echo $email;?></td>
</tr>
<tr>
<td><b>Complainant Mobile Number:</b></td>
<td><?php echo $mobile;?></td>
</tr>

</table>




</div>
<div style="float:left;">
<table class="table">
<b style="color:red;">Complaint Information</b>
</br>
<tr>
<td><b>Complaint Title:</b></td>
<td><?php echo $title;?></td>
</tr>
<tr>
<td><b>Complaint Type: </b></td>
<td><?php echo $type;?></td>
</tr>
<tr>
<td><b>Complaint Description:</b></td>
<td><?php echo $description;?></td>
</tr>
<tr>
<td><b>Attached File:</b></td>
<td><?php echo $attachment;?></td>
</tr>

</table>
</div>

</div>


</body>
</html>
