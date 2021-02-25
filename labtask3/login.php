<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    $nameErr = $passErr = " ";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["name"]))
        {
            $nameErr = "Name is required";
        }

    }
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="name">Username:</label>
    <input type="text"  name="name" >
    <span class="error"><?php echo $nameErr;?></span>
    <br><br>
    <label for="password">Password:</label>
    <input type="password" name="password" pattern="^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{8,}">
    <br>
    <hr>
    <label>
      <input type="checkbox"  name="remember"> Remember me
    </label>
    <br>
    <button type="submit">Login</button>
    <a href="" >Forgot Password</a>
</form>
</body>
</html>