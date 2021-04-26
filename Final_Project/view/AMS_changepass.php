<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 
<?php
  require("../view/AMS_header2.php");
  include("../controller/changepass_control.php");
?>


<fieldset>
  <legend>Change Password</legend>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<table align="center" >  
<tr><td><span class="error">* required field</span></td></tr>
<tr> 
  <td>Current Password</td>
  <td>:</td>
  <td><input type="password" name="opassword"></td>
  <td><span class="error">* <?php echo $opasswordErr;?></span></td>
</tr>
<tr> 
  <td>New Password</td>
  <td>:</td>
  <td><input type="Password" name="password"></td>
  <td><span class="error">* <?php echo $passwordErr;?></span></td>
</tr>
<tr>
  <td>Retype New Password</td>
  <td>:</td>
  <td><input type="Password" name="cpassword"></td>
  <td><span class="error">* <?php echo $cpasswordErr;?></span></td>
</tr>
<tr>
  <td align="right" colspan="4"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</fieldset>
</body>
</html>
<?php
    require("../view/AMS_footer.php")
?>