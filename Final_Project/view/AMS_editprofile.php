<?php
    require("../view/AMS_header2.php");
    require("../controller/edit_control.php");
    require("../controller/view_control.php");
?>
<!DOCTYPE HTML>  
<html>
<head>
  <title>Edit Profile</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
  <script src="../js/validate.js"></script>
<fieldset>
    <legend>Edit Profile</legend>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
  <td><input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()" value="<?php echo $name?>"></td>
  <td><span class="error" id="nameErr">* <?php echo $nameErr;?></span></td>
</tr>
  <tr>
  <td>E-mail</td>
  <td>:</td>
  <td><input type="email" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()" value="<?php echo $email?>"></td>
  <td><span class="error" id="emailErr">* <?php echo $emailErr;?></span></td>
</tr>
<tr>
  <td>User Name</td>
  <td>:</td>
  <td><input type="text" name="username" id="username" onkeyup="checkUsername()" onblur="checkUsername()" value="<?php echo $username?>"></td>
  <td><span class="error" id="usernameErr">* <?php echo $usernameErr;?></span></td>
  </tr>
<tr>
  <td>Gender</td>
  <td>:</td>
  <td><input type="radio" name="gender" value="female"<?php if("female" == $gender){echo "checked";} ?>>Female
  <input type="radio" name="gender" value="male"<?php if("male" == $gender){echo "checked";} ?>>Male
  <input type="radio" name="gender" value="other"<?php if("other" == $gender){echo "checked";} ?>>Other</td>
  <td><span class="error" id="genderErr">* <?php echo $genderErr;?></span></td>
</tr>
<tr>
  <td>Date of Birth</td>
  <td>:</td>
  <td><input type="date" name="dob" id="dob" onkeyup="checkDob()" onblur="checkDob()" value="<?php echo $dob?>" placeholder="DD-MM-YYYY" ></td>
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
    require("../view/AMS_footer.php")
?>
