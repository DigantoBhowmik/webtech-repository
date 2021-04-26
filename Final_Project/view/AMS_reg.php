<?php
    require("../view/AMS_header.php");
    require("../controller/reg_control.php")
?>
<!DOCTYPE HTML>  
<html>
<head>
  <title>Registration</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../js/validate.js"></script>
  <script src="../js/checkUserName.js"></script>
<fieldset>
    <legend>Registration</legend>
<form name="myform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<?php   
  if(isset($error))  
  {  
    echo $error;  
  }  
?>
<table align="center" >  
<tr><td><span class="error">* required field</span></td></tr>
<tr>
  <td>Name</td>
  <td>:</td> 
  <td><input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()"></td>
  <td><span class="error" id="nameErr">* <?php echo $nameErr;?></span></td>
</tr>
  <tr>
  <td>E-mail</td>
  <td>:</td>
  <td><input type="email" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()"></td>
  <td><span class="error" id="emailErr">* <?php echo $emailErr;?></span></td>
</tr>
<tr>
  <td>User Name</td>
  <td>:</td>
  <td><input type="text" name="username" id="username" onkeyup="checkUsername(this.value)" onblur="checkUsername()"></td>
  <td><span class="error" id="usernameErr">* <?php echo $usernameErr;?></span><div class="" style="color: blue;" id='status'></div></td>
  </tr>
<tr>
  <td>New Password</td>
  <td>:</td>
  <td><input type="Password" name="password" id="password" onkeyup="checkPassword()" onblur="checkPassword()"></td>
  <td><span class="error" id="passwordErr">* <?php echo $passwordErr;?></span></td>
</tr>
<tr>
  <td>Confirm Password</td>
  <td>:</td>
  <td><input type="Password" name="cpassword" id="cpassword" onkeyup="checkCpassword()" onblur="checkCpassword()"></td>
  <td><span class="error" id="cpasswordErr">* <?php echo $cpasswordErr;?></span></td>
</tr>
<tr>
  <td>Gender</td>
  <td>:</td>
  <td><input type="radio" name="gender" id="female" value="female">Female
  <input type="radio" name="gender" id="male" value="male">Male
  <input type="radio" name="gender" id="other" value="other">Other</td>
  <td><span class="error" id="genderErr">* <?php echo $genderErr;?></span></td>
</tr>
<tr>
  <td>Date of Birth</td>
  <td>:</td>
  <td><input type="date" name="dob" id="dob" onkeyup="checkDob()" onblur="checkDob()" placeholder="DD-MM-YYYY" ></td>
  <td><span class="error" id="dobErr">* <?php echo $dobErr;?></span></td>
</tr>
<tr>
  <td align="right" colspan="6"><input type="submit" name="submit" value="Submit"></td>
</tr>
    <?php  
        if(isset($message))  
          {  
            echo $message;  
          }  
    ?> 
</table>
</fieldset>
</form>
</body>
</html>

<?php
echo "<tr><td><h2>Your Input:</h2></td></tr>";
echo "<tr><td> $name </td></tr>";
echo "<br>";
echo "<tr><td> $email </td></tr>";
echo "<br>";
echo "<tr><td> $username </td></tr>";
echo "<br>";
echo "<tr><td> $password </td></tr>";
echo "<br>";
echo "<tr><td> $gender </td></tr>";
echo "<br>";
echo "<tr><td> $dob </td></tr>";
echo "<br>";
?> 

<?php
    require("../view/AMS_footer.php")
?>
