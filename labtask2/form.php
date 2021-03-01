<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
    <?php
        $nameErr = $emailErr = $dateofbathErr = $genderErr = $degreeErr = $bloodgroupErr = "";
        $name = $email = $dateofbath = $gender = $degree = $bloodgroup  = "";

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(empty($_POST["name"]))
            {
                $nameErr = "Name is required";
            }
            else if(str_word_count($_POST["name"]<2))
            {
                $nameErr = "At least 2 character";
            }
            else 
            {
                $name = test_input($_POST["name"]);
            } 
            if(empty($_POST["email"]))
            {
                $emailErr = "Email is required";
            }
            else 
            {
                $email = test_input($_POST["email"]);
                
                if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                $emailErr = "Invalid email format";
                }

            } 
            if(empty($_POST["date"]))
            {
                $emailErr = "Date is required";
            }
            else 
            {
                $dateofbath = test_input($_POST["date"]);
            } 
            if (empty($_POST["gender"])) 
            {
                $genderErr = "Gender is required";
            }
            else 
            {
                $gender = test_input($_POST["gender"]);
              
            }
        }
        
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
    ?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Date of birth: <input type="date" name="website">
  <span class="error"><?php echo $dateofbathErr;?></span>
  <br><br>
  
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dateofbath;
echo "<br>";
echo $gender

?>


</body>
</html>