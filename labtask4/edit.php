
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Edit Profile</title>   
      </head>  
      <body>  
      <a href="dashboard.php">Dashboard</a>
<a href="viewprofile.php">viewprofile</a>
<a href="edit.php">Edit Profile</a>
<a href="changephoto.php">Change Profile Picture</a>
<a href="changepassword.php">Change Password</a>
<a href="logout.php">Log out</a><br><hr>
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Edit Profile</h3><br />                 
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
                     <input type="submit" name="submit" value="Append" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
      </body>  
 </html>