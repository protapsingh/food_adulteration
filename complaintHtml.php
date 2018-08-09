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
   
      
      
	   <li class="active"><a href="complaintHtml.php">Make Complaint</a></li>
	   <li><a href="notificationHtml.php">Complaint Notification</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
     
    </ul>
  </div>
</nav>


<div class="container">
<center >

<h3></h3>
<h3 Style="color:white;"> Make A Complaint Here</h3>

<div>
<?php
if(isset($_GET['success']))
{
$msg=$_GET['success'];
echo "<h3 style='color:red;'>$msg</h3>";
}
?>
</div>

  <form class="form-inline" action="makecomplaint.php" method="post" enctype="multipart/form-data">
    <div class="form-group" style="color:#BAD6F2;">
      <table >
  
  <tr>
<td style="padding:10px;"><div class="form-group">
      <label for="title" style="width:150px;"><b>Complaint Title</b></label>
      <input type="text" class="form-control"  placeholder="Provide a suitable title" name="title"
      style="width: 300px; background-color:#2C3E50; color:#BAD6F2;" required>
    </div></td>

     <td style="padding:10px;"><div class="form-group"> 
      <label for="type" style="width:150px;"><b>Complaint Type</b></label>
    <select name="type" class="form-control" style="width: 300px; background-color:#2C3E50; color:#BAD6F2;" required>
    <option value="" selected>Select One</option>
    <option value="Fruit&Vegitable">Fruit& Vegitable</option>
    <option value="Rice,Fish&Meat">Rice,Fish& Meat</option>
    <option value="Fast Food" >Fast Food</option>
    <option value="Soft Drinks" >Soft Drinks</option>
    </select>
    </div>
  </td>

    
  </tr>


  <tr>
<td style="padding:10px;"><div class="form-group"> 
      <label for="type" style="width:150px;"><b>Selected Area</b></label>
    <select name="area" class="form-control" style="width: 300px; background-color:#2C3E50; color:#BAD6F2;" required>
    <option value="" selected>Selec one</option>
    <option value="Azimpur" >Azimpur</option>
    <option value="Badda" >Badda</option>
    <option value="Banani" >Banani</option>
    <option value="Cantonment" >Cantonment</option>
    <option value="Center Badda" >Center Badda</option>
    <option value="Dhanmondi-32">Dhanmondi-32</option>
    <option value="Dhanmondi-27">Dhanmondi-27</option>
    <option value="Dhanmondi-15">Dhanmondi-15</option>
    <option value="Dhanmondi-08">Dhanmondi-08</option>
    <option value="Farmgate" >Farmgate</option>
    <option value="Banani" >Gazipur</option>
    <option value="Gulshan -1" >Gulshan-1</option>
    <option value="Gulshan -2" >Gulshan-2</option>
    <option value="Gulshan -3" >Gulshan-3</option>
    <option value="jattrabari">Jattrabari</option>
    <option value="Mohammadpur">Mohamadpur</option>
    <option value="Motijhel" >Motijhel</option>
    <option value="Mirpur-1" >Mirpur-1</option>
    <option value="Mirpur-08" >Mirpur-08</option>
    <option value="Mirpur-10" >Mirpur-10</option>
    <option value="Lalmatia">Lalmatia</option>
    <option value="Mohakhali">Mohakhali</option>
    <option value="Narayangong" >Narayangong</option>
    <option value="Nayapaltan" >Nayapaltan</option>
    <option value="Rampura" >Rampura</option>
    <option value="Rajarbug" >Rajarbug</option>
    <option value="Savar" >Savar</option>
    <option value="Shahbag" >Shahbag</option>
    <option value="Tejgaon" >Tejgaon</option>
    <option value="Banani" >Uttara</option>

    </select>
    </div>
  </td>

<td style="padding:10px;"><div class="form-group">
      <label for="title" style="width:150px;"><b>Organization Name
      (Optional)</b></label>
      <input type="text" class="form-control"  placeholder="XYZ" name="organization"
      style="width: 300px; background-color:#2C3E50; color:#BAD6F2;">
    </div></td> 
  </tr>

<tr>


<td style="padding:10px;"><div class="form-group">
      <label for="description" style="width:150px;"><b> Description</b></label>
     <textarea style="width: 300px; background-color:#2C3E50; color:#BAD6F2;" name="description"> </textarea>
    </div></td>


	<td  style="padding:10px;">
        <label for="file" style="width:150px;"><b> Select Attachment</b></label>
      <div class="form-group"><input type="file" name="image"></div></td>
	
      </tr>
    
  


    
    <tr> <td colspan="2" style="padding-top:50px;"><center><button type="submit" name="submit" style="width:100px;
	background-color:#062A4E; color:white;" class="btn btn-default"><b>Make It</b></button></center></td></tr>
  </table>
  </form>
</center>
  
</div>

</body>
</html>
