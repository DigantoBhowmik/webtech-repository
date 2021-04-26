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

  if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
    
    $password = test_input($_POST["password"]);
    $cpassword = test_input($_POST["cpassword"]);
    if (strlen($_POST["password"]) < '8') {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
      }
    elseif(!preg_match("/^(?!.* )(?=.*[^a-zA-Z0-9]).{8,}$/m", $password)) {
          $passwordErr="Password should include at least one special character(@,#,$,%)";
        }
  } 
else {
   $passwordErr = "Please enter password   ";
}
  if (isset($_POST['submit'])){
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

      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      }
      else if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      }
      else if (empty($_POST["username"])) {
        $usernameErr = "User Name is required";
      }
      else if (empty($_POST['password'])){
        $passwordErr = "Password is required";
      }
      else if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      }
      else if (empty($_POST["dob"])) {
        $dobErr = "Date of birth is required";
      }
      else{
        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];
        $data['gender'] = $_POST['gender'];
        $data['dob'] = $_POST['dob'];
    

        if (addUser1($data)) {
          echo 'Successfully added!!';
        }
      }
    }
    else {
          echo 'You are not allowed to access this page.';
      }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>