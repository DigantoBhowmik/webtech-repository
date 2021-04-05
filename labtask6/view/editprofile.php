

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
   <link rel="stylesheet" type="text/css" href="style.css">
    <title>Edit Profile</title>
</head>
<body>
    <?php include '../controller/logoutclick.php';?>
    <?php require_once '../controller/view.php';?>
    <?php require_once '../controller/update.php';?>
<br>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      
      <ul class="nav nav-pills nav-stacked">
        <li ><a href="dashboard.html">Home</a></li>
        <li><a href="viewprofile.html">View Profile</a></li>
        <li  class="active"><a href="editprofile.html">Edit Profile</a></li>
        
      </ul><br>
      
    </div>

    <div class="col-sm-9">
      
        
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" name = "name" type="text" value="<?php echo $name?>">
            </div>
          </div>
         
       
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" name = "username "type="text" value="<?php echo $username?>">
            </div>
          </div>
          
          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" name="submit" value="Submit">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
        
    </div>
      
      
    </div>
  </div>
</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
