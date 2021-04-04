
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Registration</title>   
      </head>  
      <body>  
           <br />  
           
               <div class="container" style="width:500px;">  
                    <h3 align="">Registration</h3><br />                 
                    <form action="../controller/insertData.php" method="POST" enctype="multipart/form-data">
                        
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
                         <input type="submit"  name = "createUser" value="Append" class="btn btn-info" /><br />                      
                          
                          
                    </form>  
               </div>
            
           <br />  
      </body>  
 </html>