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

<nav class="navbar navbar-inverse" style="background-color:#062A4E;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="startpage.php">FoodComplaintPortal.BD</a>
    </div>
    <ul class="nav navbar-nav">
     
      
      <li><a href="#"> About Us</a></li>
     <li><a href="#">Terms& Policies</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="signupHtml.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="loginhtml.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


  <!--main work for from-->
  
<div class="main" style="color:#BAD6F2; padding-left:300px;">
  <h3 style="padding-left:180px;">Become A Register User</h3>
  <form method ="post" action="registration.php">

     <div class="form-group">
    <label for="User Name">User Name:</label>
    <input type="text" class="form-control" style=" width: 600px; background-color:#2C3E50; color:white"name="username" required>
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" style=" width: 600px; background-color:#2C3E50; color:white"name="email" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" style=" width: 600px; background-color:#2C3E50; color:white" name="password" required>
  </div>
   <div class="form-group">
    <label for="Mobile Number">Mobile Number:</label>
    <input type="tel" class="form-control" style=" width: 600px; background-color:#2C3E50; color:white"name="mobile" required>
  </div>

  <div class="form-group">
    <label for="City">Your Living Area:</label>
     <select name="city" class="form-control" style="width: 600px; background-color:#2C3E50; color:#BAD6F2;" required>
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
	 <option value="Other" >Other</option>

    </select>
  </div>


<div class="form-group">
    <label for="Gender">Gender:</label>
    <select name="gender" class="form-control" style=" width: 600px; background-color:#2C3E50; color:white" required>
    <option value="" selected>Select One</option>
    <option value="Male">MALE</option>
    <option value="Female">FEMALE</option>
    <option value="Other" >OTHER</option>
    </select>
  </div>
  
  
 <div style="padding-left: 250px;"> 
  <button type="submit" class="btn btn-default" name="submit" style="width:100px; background-color:#062A4E;; color:White;">SignUp</button>
 </div>
 <center>Already a Member??<a href="loginhtml.php" style="text-decoration: none;"><b>LogIn Here!</b></a></center>



</form>
</div>

</body>
</html>
