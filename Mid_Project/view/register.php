<?php include '../controller/HEADER.php';?>
<?php include '../controller/require.php';?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Registration</title>   
      </head>  
      <link rel="stylesheet" type="text/css" href="../CSS/register.css">
      <body>  
           <br />
            
           <div class="container" style="width:500px;">  
                <h3 align="">Sign Up</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                        echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Name:</label>  
                     <input type="text" name="name" class="form-control" /><br><hr>  
                     <label>Email:</label>  
                     <input type="text" name="email" class="form-control" /><br><hr>
                     <label>User Name:</label>  
                     <input type="text" name="username" class="form-control" /><br><hr>
                     <label>Password:</label>  
                     <input type="password" name="password" class="form-control" /><br><hr>  
                     <label>Confirm Password:</label>  
                     <input type="password" name="cpassword" class="form-control" /><br><hr>    
                     <label>Gender:</label>  
                     
                        <input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="other">Other
                        <br><hr>
                     <label>Date of birth: </label>  
                     <input type="date" name="dob">
                     <br><hr>
                     <input type="submit" name="submit" value="Sign up" class="btn btn-info" /><br />  
                     <div class="container signin">
                        <p>Already have an account? <a href="login.php">Sign in</a>.</p>
                     </div>                    
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
                <?php include '../controller/footer.php';?>
           </div>  
           <br />  
      </body>  
 </html>