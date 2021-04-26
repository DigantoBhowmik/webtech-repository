<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="../js/validate.js"></script>
	<script src="../js/checkUserName.js"></script>
<?php
    require("../view/AMS_header.php");
    require("../controller/login_session.php");
?>
<fieldset>
	<legend>Login</legend>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<table align="center">
		<tr>
			<!--<th colspan="2"><h2>Login</h2></th>-->
		</tr>
		<?php if(isset($msg)){?>
		    <tr>
		      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
		    </tr>
    	<?php } ?>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" id="username" onkeyup="checkUsername()" onblur="checkUsername()"></td>
			<td><span id="usernameErr"></span>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
		</tr>
	</table>
	
</form>
</fieldset>

<?php
    require("../view/AMS_footer.php")
?>