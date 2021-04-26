<?php
require '../model/model.php';
$nameErr = $emailErr = $dobErr = $genderErr = $usernameErr = $passwordErr = $cpasswordErr =   "";
$name = $email = $dob = $gender = $username = $password = $cpassword = "";
$message = '';  
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else { 
    if (str_word_count($_POST["name"])>=2){
      $name = test_input($_POST["name"]);
      if (!preg_match("/^[a-zA-Z-' _]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
  }
    else{
    $nameErr = "Type atleast two words";
  }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["username"])) {
    $usernameErr = "User Name is required";
  } else { 
    if (str_word_count($_POST["username"]) ==1 && strlen($_POST["username"])>=2) {
      $username = test_input($_POST["username"]);
      if (!preg_match("/^[a-z0-9.-_]/i",$username)) {
        $usernameErr = "Only alpha numeric characters, period, dash or
underscore allowed";
      }
      }
    else {
    $usernameErr = "Type atleast two characters without any space";
  }
  }
    
   if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  }else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["dob"])) {
    $dobErr = "Date of birth is required";
  } else {
    $dob = test_input($_POST["dob"]);
  }

  if(isset($_POST['submit'])  && isset($_SESSION['uname']) && !empty($_POST["name"])&& !empty($_POST["email"])&& !empty($_POST["username"])&& !empty($_POST["gender"])&& !empty($_POST["dob"])){
      $data['name'] = $_POST['name'];
      $data['email'] = $_POST['email'];
      $data['username'] = $_POST['username'];
      $data['gender'] = $_POST['gender'];
      $data['dob'] = $_POST['dob'];
    
    if (updateUser($_SESSION['id'], $data)) {

        echo 'Successfully updated!!'; 
    }
   else {
      echo 'Access Denied';
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