<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
<?php
    $err1=$err2="";
     if($_SERVER["REQUEST_METHOD"] == "POST")
     {
         if($_POST["cpassword"]==$_POST["npassword"])
         {
            $err1="Current Password and New password same";
         }
         if($_POST["npassword"]!=$_POST["rpassword"])
         {
            $err2="New Password and Retype password is not same";
         }
     }
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="cpassword">Current Password:</label>
    <input type="password" name="cpassword">
    <br><br>
    <label for="npassword">New Password:</label>
    <input type="password" name="npassword">
    <span class="error"><?php echo $err1;?></span>
    <br><br>
    <label for="rpassword">Retype New Password:</label>
    <input type="password" name="rpassword">
    <span class="error"><?php echo $err2;?></span>
    <br><hr>
    <button type="submit">Submit</button>
</form>
</body>
</html>