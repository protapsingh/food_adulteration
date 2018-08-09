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


<div class="container">
<div class="marquee" style="padding:5px; color:red; font-size:16px;">
<div>
<marquee >Welcome to Food Adulteration Complaint Portal! Make a Complaint Against Food Aulteration Here!</marquee>
</div>
</div>
  
   <div class="item"style="Height:500px;; width:100%;">
     <img src="picture/1.jpg" alt="Logo" style=" Height:480px;width:100%;"/>
    </div>
	
  <div style="color:#BAD6F2;">
  <h3 style="color:green;">Strategic Plan of Food Adulteration Protal ( FCP)</h3>
  <p>Strategic Plan of FCP has been developed that determines what the organization intends to be
  in the future and how it will get there. Strategic Plan of FCP includes vision, mission, objectives,
  necessary priorities, procedures, and operations to achieve the Plan. It also includes 
  measureable goals which are realistic and attainable. Strategic Plan assumes that certain
  aspects of the future can be created orinfluenced by the organization. Strategic Plan is an ongoing process. 
  </p>
  </br>
  <p><b style="color:green;">Strategic Objective 1:</b></p>
  <p>To generate awareness among the consumers who represents vulnerable food  about 
  their internationally recognized rights and responsibilities as consumers.</p>
  </br>
  <p><b style="color:green;">Strategic Objective 2:</b></p>
  <p>Encourage consumer organizations, media and other interested groups, to undertake education and 
  information programmes, including on the Climate Change / Environmental impacts of consumption
  patterns and on the possible implications, including benefits and costs, of changes in consumption in each year, 
  particularly for the benefit of low-income consumer groups both in rural and urban slum areas.</p>
  </div>
</div>

</body>
</html>
