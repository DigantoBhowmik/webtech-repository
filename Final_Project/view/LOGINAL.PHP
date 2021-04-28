
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<title>Welcome</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<script>

 function validateform(){  
      var Username=document.myform.Username.value;  
      var Password=document.myform.Password.value; 


      if (Username==null || Username==""){  
        alert("Name can't be blank");  
        return false;  
      }
            else if(Password.length<8){  
        alert("Password must be at least 8 characters long.");  
        return false;  
      }

}



    function checkUserName() {
      if (document.getElementById("Username").value == "") {
          document.getElementById("UsernameErr").innerHTML = "User Name can't be blank";
          document.getElementById("UsernameErr").style.color = "red";
          document.getElementById("Username").style.borderColor = "red";
      }else{
          document.getElementById("UsernameErr").innerHTML = "";
        document.getElementById("Username").style.borderColor = "black";
      }
      
        }



    function checkPassword() {
      if (document.getElementById("Password").value == "") {
          document.getElementById("PasswordErr").innerHTML = "Password can't be blank";
          document.getElementById("PasswordErr").style.color = "red";
          document.getElementById("Password").style.borderColor = "red";
      }else{
          document.getElementById("PasswordErr").innerHTML = "";
        document.getElementById("Password").style.borderColor = "black";
      }
      
        }

</script>

<?php include '../Controller/CSS.php';?>

</head>
<body>


<?php include '../Controller/HEADERAL.php';?>

<section>
  
  <article>

<?php include '../controller/LOGINPHP.php';?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name = "myform" method="POST"  onsubmit="validateform()"  >
	<table align="center">
		
		<tr>
			<th colspan="2"><h2>Login</h2></th>
		</tr>
		<?php if(isset($msg)){?>
		    <tr>
		      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
		    </tr>
    	<?php } ?>
		<tr>
			<td>Username</td>
			<td><input type="text" name="Username" id ="Username" onkeyup="checkUserName()" onblur="checkUserName()"   ></td>
			 <td><span id="UsernameErr"></span></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="Password" id ="Password" onkeyup="checkPassword()" onblur="checkPassword()"  ></td>
			<td><span id="PasswordErr"></span></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><input type="submit" class="btn btn-success" name="login" value="login"></td>
		</tr>
	</table>
	
</form>

  </article>
</section>

<?php include '../controller/FOOTER.php';?>

</body>
</html>