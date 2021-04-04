<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="../controller/loginDB.php" method="post">
     	<h2>LOGIN</h2>
     	
     	<label>User Name</label>
     	<input type="text" name="Username" placeholder="User Name"><br>

     	<label>User Name</label>
     	<input type="password" name="Password" placeholder="Password"><br>

     	<input type="submit" name="login" value="login" >
     </form>
</body>
</html>