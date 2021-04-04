<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }  
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter Email</label>";  
      }  
      else if(empty($_POST["username"]))  
      {  
           $error = "<label class='text-danger'>Enter Username</label>";  
      }
      else if(empty($_POST["password"]))  
      {  
           $error = "<label class='text-danger'>Enter Password</label>";  
      } 
      else if(empty($_POST["cpassword"]))  
      {  
           $error = "<label class='text-danger'>Enter Confirm Password</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Enter Gender</label>";  
      } 
      else if(empty($_POST["dob"]))  
      {  
           $error = "<label class='text-danger'>Enter Date of Birth</label>";  
      }       
      else  
      {  
           if(file_exists('../controller/data.json'))  
           {  
                $current_data = file_get_contents('../controller/data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'email'          =>     $_POST["email"],  
                     'username'     =>     $_POST["username"],
                     'password'               =>     $_POST['password'],  
                     'cpassword'          =>     $_POST["cpassword"],  
                     'gender'     =>     $_POST["gender"],
                     'dob'     =>     $_POST["dob"]   
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('../controller/data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Sign up sucessfully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  