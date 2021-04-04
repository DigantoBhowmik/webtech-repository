<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <title>Dashboard</title>
</head>
<body>
<?php include '../controller/logoutclick.php';?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="dashboard.php">Home</a></li>
        <li><a href="viewprofile.php">View Profile</a></li>
        <li><a href="community.php">Community</a></li>
        
      </ul><br>
      
    </div>

    <div class="col-sm-9">
      <h4><small>RECENT POSTS</small></h4>
      <hr>
      
      <h2>Post title</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by Someone, Mar 14, 2021.</h5>
      <h5><span class="label label-success">Lorem</span></h5><br>
      <?php include '../controller/viewpost.php'?>
      <hr>

      <h4>Leave a Comment:</h4>
      <form role="form">
        <div class="form-group">
          <textarea class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br><br>
      
     
      
      
    </div>
  </div>
</div>



</body>
</html>