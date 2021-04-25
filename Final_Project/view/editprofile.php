<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
   <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <title>Edit Profile</title>
    <script src="../js/app.js"></script>
</head>
<body>
    <?php include '../controller/header.php';?>
    <?php require_once '../controller/view.php';?>
    <?php require_once '../controller/update.php';?>
    
<br>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      
      <ul class="nav nav-pills nav-stacked">
        <li ><a href="dashboard.php">Home</a></li>
        <li><a href="viewprofile.php">View Profile</a></li>
        <li  class="active"><a href="editprofile.php">Edit Profile</a></li>
       
        
      </ul><br>
      
    </div>

    <div class="col-sm-9">
      
        
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form" method="POST" name="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" name = "name" type="text" id= "name" onkeyup="checkName()" onblur="checkName()" value="<?php echo $name?>">
              <span id="nameErr"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name = "email" type="text" value="<?php echo $email?>" id= "email" onkeyup="checkEmail()" onblur="checkEmail()">
              <span id="emailErr"></span>
            </div>
          </div>
         
       
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" name = "username"type="text" value="<?php echo $username?>" id= "username" onkeyup="checkUsername()" onblur="checkUsername()">
              <span id="usernameErr"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-lg-8">
              <input class="form-control" name = "gender" type="text" value="<?php echo $gender?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Date of birth:</label>
            <div class="col-lg-8">
              <input class="form-control" name = "dob" type="text" value="<?php echo $dob?>">
              <?php if(isset($msg)){?>
		    <tr>
		      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
		    </tr>
    	   <?php } ?>
            </div>
            
          </div>
          
         
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" name="submit" value="Submit">
              <span></span>
             
        
    </div>
      
      
    </div>
  </div>
</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<script>
    $(document).ready(function(){
        $('#username').keyup(function(){
            var name = $(this).val();
            $.ajax({
                url: "../controller/check.php",
                method:"POST",
                data:{my_name:name},
                dataType:"text",
                success:function(html)
                {
                    $('#usernameErr').html(html);
                }
            });
        });
    });
</script>