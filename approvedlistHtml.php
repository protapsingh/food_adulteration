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
      <li><a href="makeauthorityHtml.php">Make a New Authority</a></li>
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

<li ><a href="moderatorHtml.php">Complaint Request</a></li>
<li class="active"><a href="approvedlisthtml.php">Approved Complaint</a></li>
<li><a href="resolvedlisthtml.php">Solved Complaint</a></li>
<li ><a href="userlistHtml.php">User List</a></li>
<li><a href="authoritylistHtml.php">Authority List</a></li>
</ul>
</div>

<!--nain work-->
  <div class="main" style="color:#BAD6F2; padding-left:180px;">
 <h3 style="color:white; padding-left: 350px;">Approved Complaint List</h3>  
 </br>
 
 <div>
<?php
  include('approvecomplaint.php');
  $a= new Approve_Complaint();
  $a->show();
  

?> 
 </div>
 
</div>

</body>
</html>
