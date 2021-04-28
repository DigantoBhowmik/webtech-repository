<?php
require '../model/logged.php';
require '../model/model.php'; 
//require 'model.php';

if (isset($_SESSION['uname'])) {
require_once '../model/model.php';
$data = showData3($_SESSION['ID']);

$id = $data["ID"];
$name = $data["name"];
$email = $data["email"];
$uname = $data["uname"];
}
else{
header("location:../view/loginview.php");
}


$name = $email = $uname = $password = $cpassword = $gender = $dateofbirth = $message = $error= "";

$nameErr = $emailErr = $dateofbirthErr = $genderErr = $unameErr = $passwordErr = $cpasswordErr =   "";

  
 
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
    if (empty($_POST["name"])) 
    {
      $nameErr = "Name is required";
    }
    else 
    { $name = $_POST["name"];

     if (strlen($_POST["name"])<2) 
      {
      $nameErr = "Name should not be less than 2 characters";
      }
      else if (!preg_match("/^[a-zA-Z-'. ]*$/",$name)) 
      {
        $nameErr = "Only letter and white spaces are allowed";
      }
    }

    if(empty($_POST["email"]))
    {
      $emailErr = "Email is required";
    }
    else
    {
      $email = $_POST["email"];
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
      {
      $emailErr = "Invalid email format";
      }
    }

    if (empty($_POST["uname"])) 
    {
      $unameErr = "User Name is required";
    }
    else 
    { $uname = $_POST["uname"];

     if (strlen($_POST["uname"])<2) 
      {
      $unameErr = "User Name should not be less than 2 characters";
      }
    }


  //require 'model.php';

  if(isset($_POST['submit']) && isset($_SESSION['uname']))
  {
    if (empty($_POST["name"])) 
        {
          $nameErr = "Name is required";
        }
        if (empty($_POST["uname"])) 
        {
          $unameErr = "User Name is required";
        }
        if (empty($_POST["email"])) 
        {
          $emailErr = "Email is required";
        }
        else{
$data['name'] = $_POST['name'];
$data['email'] = $_POST['email'];
$data['uname'] = $_POST['uname'];
//$data['gender'] = $_POST['gender'];
//$data['dateofbirth'] = $_POST['dateofbirth'];
if (updateData3($_SESSION['ID'], $data)) {

 echo 'Successfully updated!!';
}
else {
echo 'Access Denied';
}
}

}
}






?>
