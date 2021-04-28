<?php
require_once '../Model/model.php';

 $message = '';  
 $error = ''; 
$nameErr = $unameErr = $passErr = $emailErr = $dobErr = $genderErr = $institutionErr = $companyErr = $userErr = $bloodErr = "";
$name = $username = $password = $email = $dob = $gender = $institution = $company = $user = $blood = "";
$flag = 0;


if($_SERVER["REQUEST_METHOD"] == "POST")  {


  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
     $flag = 1;
  } else { 
    if (str_word_count($_POST["name"])>=2){
      $name = test_input($_POST["name"]);
      if (!preg_match("/^[a-zA-Z-' _]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
         $flag = 1;
      }
  }
    else{
    $nameErr = "Type atleast two words";
     $flag = 1;
  }
  }



     if (empty($_POST["username"])) {
    $unameErr = "username is required";
     $flag = 1;
   }else {
    $username = test_input($_POST["username"]);
  }


   if (empty($_POST["password"])) {
    $passErr = "pass is required";
     $flag = 1;
  } else {
    $password = test_input($_POST["password"]);
  }

  
   if (empty($_POST["email"])) {
    $emailErr = "Email is required";
     $flag = 1;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
       $flag = 1;
    }
  }
    
 if (empty($_POST["dob"])) {
    $dobErr = "Date of birth is required";
     $flag = 1;
  } else {
    $dob = test_input($_POST["dob"]);
  }

if (empty($_POST["institution"])) {
    $institutionErr = "Institution name is required";
     $flag = 1;
  } else {
    $institution = test_input($_POST["institution"]);
  }


if (empty($_POST["company"])) {
    $companyErr = "Company name is required";
     $flag = 1;
  } else {
    $company = test_input($_POST["company"]);
  }


if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
     $flag = 1;
  } else {
    $gender = test_input($_POST["gender"]);
  }

 if (empty($_POST["user"])) {
    $userErr = "user Group is required";
     $flag = 1;
  } else {
    $user = test_input($_POST["user"]);
  }

 if (empty($_POST["blood"])) {
    $bloodErr = "Blood Group is required";
     $flag = 1;
  } else {
    $blood = test_input($_POST["blood"]);
  }


  if($flag==0)
  {

  if (isset($_POST['submit'])) {
                       $data['name' ]              =    $_POST['name'];  
                      $data[ 'username' ]              =    $_POST['username'];  
                      $data[ 'password' ]         =    $_POST["password"];
                     $data[  'email' ]         =    $_POST["email"];
                      $data[ 'dob'   ]  =    $_POST["dob"];  
                      $data[ 'gender']          =   $_POST["gender"];  
                      $data[ 'institution']     =   $_POST["institution"];  
                      $data[  'company' ]              =    $_POST['company'];  
                      $data[ 'user' ]         =   $_POST["user"];  
                       $data['blood' ]    =    $_POST["blood"] ;



    if (adduser2($data)) {
      echo "Successfully added!!";
          echo "<a href ='../view/loginal.php'>Login</a>";
    }
  }
   else {
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