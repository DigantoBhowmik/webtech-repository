<?php require_once '../controller/registration.php'?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
<br />
            
            <div class="container" style="width:500px;">  
                 <h3 align="">Sign Up</h3><br />                 
                 <form method="POST" enctype="multipart/form-data">  
                      
                     
                      <br />  
                      <label>Name:</label>  
                      <input type="text" name="name" class="form-control" />
                      <span class="error"> <?php echo $nameErr;?></span><br><hr>  
                      <label>Email:</label>  
                      <input type="text" name="email" class="form-control" />
                      <span class="error"> <?php echo $emailErr;?></span><br><hr>
                      <label>User Name:</label>  
                      <input type="text" name="username" class="form-control" />
                      <span class="error"> <?php echo $usernameErr;?></span><br><hr>
                      <label>Password:</label>  
                      <input type="password" name="password" class="form-control" />
                      <span class="error"> <?php echo $passwordErr;?></span><br><hr>  
                      <label>Confirm Password:</label>  
                      <input type="password" name="cpassword" class="form-control" />
                      <span class="error"> <?php echo $cpasswordErr;?></span><br><hr>    
                      <label>Gender:</label>  
                      
                         <input type="radio" name="gender" value="female">Female
                         <input type="radio" name="gender" value="male">Male
                         <input type="radio" name="gender" value="other">Other
                         <span class="error"> <?php echo $genderErr;?></span><br><hr>
                      <label>Date of birth: </label>  
                      <input type="date" name="dob">
                      <span class="error"> <?php echo $dobErr;?></span><br><hr>
                      <input type="submit" name="submit" value="Sign up" class="btn btn-info" /><br />  
                      
                         <p>Already have an account? <a href="login.php">Sign in</a>.</p>
                      </div>                    
                       
                 </form>  
                 
            </div>  
            <br />  
   

 <?php
    echo $error;
    echo "<br>";
    echo $message;
    echo "<br>";
?>
</body>
</html>