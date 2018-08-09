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
<body style="background-color:#2C3E50;">

<nav class="navbar navbar-inverse" style="background-color:#062A4E; ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="startpage.php">FoodComplaintPortal.BD</a>
    </div>
    <ul class="nav navbar-nav">
    
      
      <li><a href="#"> About Us</a></li>
	   <li><a href="#">Terms& Policies</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signupHtml.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li class="active"><a href="loginhtml.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>



<!--Main work-->
  <div class="main" style="color:#BAD6F2; padding-left:350px;">
   <div style=" ">
 <?php
  if(isset($_GET['success']))
   {
    $msg=$_GET['success'];
   echo "<h3 style='color:red;'>$msg</h3>";
   }
  ?>
 </div>
    <h3 style="padding-left: 240px;">Login Here</h3>
  <form method ="post" action="login.php">

     
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" style=" width: 600px; background-color:#2C3E50  ; color:white"name="email" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" style=" width: 600px; background-color:#2C3E50; color:white" required>
  </div>
  <div class="checkbox">
    <label><input type="checkbox" name="check"> Remember me</label>
  </div>

  <div style="padding-left: 250px;"><button type="submit" name="submit" style="width:100px; background-color:#062A4E; color:white" class="btn btn-default">LogIn</button></div>
  <center><a href="signupHtml.php" style="text-decoration: none;"><b>New User SignUp Here!</b></a></center>
</form>
</div>
  


</body>
</html>
