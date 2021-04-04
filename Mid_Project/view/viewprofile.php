

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
<?php include '../controller/logoutclick.php';?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
        
      
      <ul class="nav nav-pills nav-stacked">
        <li><a href="dashboard.php">Home</a></li>
        <li class="active"><a href="viewprofile.php">View Profile</a></li>
        <li><a href="community.php">Community</a></li>
        
      </ul><br>
      
    </div>

    <?php include '../controller/view.php'?>
  </div>
</div>



</body>
</html>