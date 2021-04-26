<?php
$passwordErr = $opasswordErr = $cpasswordErr = "";
$password = $opassword = $cpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"]) && !($_POST["password"] == $_POST["opassword"])) {
    
    $password = test_input($_POST["password"]);
    $cpassword = test_input($_POST["cpassword"]);
    if (strlen($_POST["password"]) < 8) {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    }
    else if (!preg_match("/^(?!.* )(?=.*[^a-zA-Z0-9]).{8,}$/m", $password)) {
      $passwordErr="Password should include at least one special character(@,#,$,%)";
    }
}
elseif(!empty($_POST["password"]) && ($_POST["password"] == $_POST["opassword"])) {
    $cpasswordErr = "Please Check You've Entered a correct Password";
} 
else {
     $passwordErr = "Please enter password   ";
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>