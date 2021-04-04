

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <title>Community</title>
</head>
<body>
<?php include '../controller/logoutclick.php';?>
<?php include '../controller/addpost.php';?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
        
      
      <ul class="nav nav-pills nav-stacked">
        <li><a href="dashboard.php">Home</a></li>
        <li><a href="viewprofile.php">View Profile</a></li>
        <li class="active"><a href="community.php">Community</a></li>
        
      </ul><br>
      
    </div>
    <div class="col-sm-9">
    <h4>Share your post</h4>
    <form  method="post">
        
        <div class="form-group">
            <textarea class="form-control" rows="3" name="view_post" required></textarea>
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary" /><br />  

      </form>
      <br><br>
    </div>
  </div>
</div>



</body>
</html>