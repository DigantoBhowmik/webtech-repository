<?php
require_once '../model/model.php';
$name = $email = $username = $password = $cpassword = $gender = $dob = '';
$nameErr = $emailErr = $usernameErr = $passwordErr = $cpasswordErr = $genderErr = $dobErr = '';
$message = '';  
$error = '';
$flag = 0;
 
if($_SERVER["REQUEST_METHOD"] == "POST")  
{  
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
    $flag = 1;
  } 

      
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
    $flag = 1;
  } 
  else 
  {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
      $email="";    
      $flag = 1;
    }
  }

  if(empty($_POST["username"]))  
  {  
    $usernameErr = "User Name is required";
    $flag = 1;
  } 
  

  if (empty($_POST["password"])) 
  {
    $passwordErr = "Password is required";
    $flag = 1;
  } 
  else 
  {
    $password = test_input($_POST["password"]);
    
    if (!preg_match("/[@,#,$,%]/",$password)) 
    {
      $passwordErr = "Password must contain at least one of the special character (@, #, $,%)";
      $flag = 1;
      
    }
  }

  if (empty($_POST["cpassword"])) 
  {
    $cpasswordErr = "Password is required";
    $flag = 1;
  } 
  else 
  {
    $cpassword = test_input($_POST["cpassword"]);
    if($cpassword!=$password)
    {
      $cpasswordErr = "Password dosen't match";
      $cpassword="";
      $flag = 1;
    }
  }

  if(empty($_POST["gender"]))  
  {  
    $genderErr = "Select Gender"; 
    $flag = 1;
  }
  else 
  {
    $gender = test_input($_POST["gender"]);
    
  } 

  if(empty($_POST["dob"]))  
  {  
    $dobErr = "Enter Date of Birth";
    $flag = 1; 
  }
  else 
  {
    $dob = test_input($_POST["dob"]);
    
  }

  if($flag==0)
  {
    if (isset($_POST['submit']) ) {
      $data['name'] = $_POST['name'];
      $data['email'] = $_POST['email'];
      $data['username'] = $_POST['username'];
      $data['password'] = $_POST['password'];
      $data['gender'] = $_POST['gender'];
      $data['dob'] = $_POST['dob'];
    
      
    
      if (addUser($data)) {
        echo 'Successfully added!!';
        echo "<a href ='../view/login.php'>Login</a>";
      }
    } else {
      echo 'You are not allowed to access this page.';
    }
  }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  } 
  ?> 