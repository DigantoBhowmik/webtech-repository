<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <title>View Profile</title>
</head>
<body>
<?php include '../controller/header.php';?>
<?php require_once '../controller/view.php';?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
        
      
      <ul class="nav nav-pills nav-stacked">
        <li><a href="dashboard.php">Home</a></li>
        <li class="active"><a href="viewprofile.php">View Profile</a></li>
        <li><a href="editprofile.php">Edit Profile</a></li>
        
        
      </ul><br>
      
    </div>
    <div class="col-sm-9">
    <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form">
          <div>
            <h3>Name: <?php echo $name ?></h3>
            </div>
            <hr>

            <div>
            <h3>Email: <?php echo $email ?></h3>
            </div>
            <hr>

            <div>
            <h3>Username: <?php echo $username ?></h3>
            </div>
            <hr>
            
            <div>
            <h3>Gender: <?php echo $gender ?></h3>
            </div>
            <hr>

            <div>
            <h3>Date of birth: <?php echo $dob ?></h3>
            </div>
            
    </div>  
  </div>
</div>