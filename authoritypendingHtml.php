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
      <a class="navbar-brand" href="authorityboardHtml.php">FoodComplaintPortal.BD</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Profile</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Complaint Request<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="authoritypendingHtml.php">Pending Request</a></li>
          <li><a href="authorityresolvedHtml.php">Solved Request</a></li>
          
        </ul>
      </li>
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
</div>

<!--nain work-->
  <div class="main" >
 <center><h3 style="color:white">Pending Complaint List</h3></center>  
 
</div>

</body>
</html>
