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

</head>
<body style="background-color:#2C3E50;">

<nav class="navbar navbar-inverse" style="background-color:#062A4E; ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="moderatorHtml.php">FoodComplaintPortal.BD</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="makeauthorityHtml.php">Make a New Authority</a></li>
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


<div id="bar">
<ul>

<li><a href="requestlistHtml.php">Complaint Request</a></li>
<li><a href="approvedlisthtml.php">Approved Complaint</a></li>
<li><a href="resolvedlisthtml.php">Solved Complaint</a></li>
<li class="active"><a href="userlistHtml.php">User List</a></li>
<li><a href="authoritylistHtml.php">Authority List</a></li>
</ul>
</div>

<!--nain work-->
  <div class="main" style="color:#BAD6F2; padding-left:250px;">
 <h3 style="color:white; padding-left: 250px;">Make a New Authority Here!</h3>  
 
</div>

<div class="form" style="color:#BAD6F2; padding-left:300px;">
  
  <form action="makeauthority.php" method="post">

     <div class="form-group">
    <label for="User Name">Authority Name:</label>
    <input type="text" class="form-control" style=" width: 600px; background-color:#2C3E50; color:white"name="username" required>
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" style=" width: 600px; background-color:#2C3E50; color:white"name="email" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" style=" width: 600px; background-color:#2C3E50; color:white" name="password" required>
  

  
<div class="form-group">
    <label for="mobile">Mobile:</label>
    <input type="tel" class="form-control" style=" width: 600px; background-color:#2C3E50; color:white"name="mobile" required>
  </div>
  
  
      <div class="form-group">
    <label for="City">City:</label>
    <select name="city" class="form-control" style=" width: 600px; background-color:#2C3E50; color:white" required>
    <option value="" selected>Select One</option>
    <option value="Dhaka">DHAKA</option>
    <option value="Chittagong">CHITTAGONG</option>
    <option value="Comilla">COMILLA</option>
    <option value="Mymensingh" >MYMENSINGH</option>
    </select>
  </div>
  

<div class="form-group">
    <label for="Gender">Gender:</label>
    <select name="gender" class="form-control" style=" width: 600px; background-color:#2C3E50; color:white" required>
    <option value="" selected>Select One</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Law Enforcing Agency">Others</option>
    </select>
  </div>
  
<div class="form-group">
    <label for="AuthorityType">Authority Type:</label>
    <select name="authoritytype" class="form-control" style=" width: 600px; background-color:#2C3E50; color:white" required>
    <option value="" selected>Select One</option>
    <option value="Fruit&Vegitable">Fruit& Vegitable</option>
    <option value="Rice,Fish&Meat">Rice,Fish& Meat</option>
    <option value="Fast Food" >Fast Food</option>
    <option value="Soft Drinks" >Soft Drinks</option>
    </select>
  </div>
  
  
 <div style="padding-left: 250px;"> 
  <button type="submit" class="btn btn-default" name="submit" style="width:100px; background-color:#062A4E;; color:White;">Done</button>
 </div>
  

  




</form>
</div>

</body>
</html>
