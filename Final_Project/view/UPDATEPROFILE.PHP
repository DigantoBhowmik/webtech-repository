
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<title>Viewprofile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include '../Controller/CSS2.php';?>
</head>


<script> 

 function validateform(){  
      var name=document.myform.name.value;  
      var Password=document.myform.Password.value; 
      var Username=document.myform.Username.value;  


      if (name==null || name==""){  
        alert("Name can't be blank");  
        return false;  
      }
      else if(password.length<8){  
        alert("Password must be at least 8 characters long.");  
        return false;  
      }

      if (Username==null || Username==""){  
        alert("Name can't be blank");  
        return false;  
      } 

    }


    function checkName() {
      if (document.getElementById("name").value == "") {
          document.getElementById("nameErr").innerHTML = "Name can't be blank";
          document.getElementById("nameErr").style.color = "red";
          document.getElementById("name").style.borderColor = "red";
      }else{
          document.getElementById("nameErr").innerHTML = "";
        document.getElementById("name").style.borderColor = "black";
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



</script>


<body>
<header>
<?php     require_once '../controller/DASHBOARDPHP.php'; ?>

<?php 

require_once '../Controller/UPDATEPROFILEPHP.PHP';
require_once '../Controller/VIEWPROFILEPHP.PHP';


 ?>

</header>

<?php require_once '../controller/VIEWPROFILEPHP.php';?>
<section>
    <nav>
       <h2>Account</h2>
    <ul>
      <li><a href="COMMUNITY.php">Community</a></li>
      <li><a href="DASHBOARDal.php">Dashboard</a></li>
      <li><a href="CHANGEPICTURE.php">Change Profile Picture</a></li>
      <li><a href="Login.php">Logout</a></li>
    </ul>
  </nav>
  <article>

 <form method="POST" name = "myform" method="POST"  onsubmit="validateform()"  >
  <label for="name">Name:</label><br>
  <input value="<?php echo  $name ?>" type="text" id="name" name="name" onkeyup="checkName()" onblur="checkName()" >
  <span id="nameErr"></span><br>
  <label for="Password">Password:</label><br>
  <input value="<?php echo $password ?>" type="text" id="Password" name="Password"  onkeyup="checkPassword()" onblur="checkPassword()" >
  <span id="PasswordErr"></span><br>
  <label for="Username">User Name:</label><br>
  <input value="<?php echo  $username?>" type="text" id="Username" name="Username" onkeyup="checkUserName()" onblur="checkUserName()" >
  <span id="UsernameErr"></span><br><br>
  
  <input type="submit" class="btn btn-success" name = "submit" value="submit">
       <?php if(isset($msg)){?>
        <tr>
          <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
        </tr>
         <?php } ?>

</form>


  </article>
</section>

 

<?php include '../controller/FOOTER.php';?>

</body>
</html>


