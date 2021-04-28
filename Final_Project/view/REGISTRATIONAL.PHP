<?php require_once '../controller/REGISTRATIONPHP.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<script src="../Controller/jquery.js"></script>


<title>Registration</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include '../Controller/CSS.php';?>

 <script>
   
    function validateform(){  
      var name=document.myform.name.value;  
      var username=document.myform.username.value; 


      if (name==null || name==""){  
        alert("Name can't be blank");  
        return false;  
      }
         if (username==null || username==""){  
        alert("User Name can't be blank");  
        return false;  
      }
      else if(password.length<8){  
        alert("Password must be at least 8 characters long.");  
        return false;  
      } 
         if (email==null || email==""){  
        alert("Email Name can't be blank");  
        return false;  
      }

         if (dob==null || dob==""){  
        alert("Date of Birth can't be blank");  
        return false;  
      }
           if (institution==null || institution==""){  
        alert("institution can't be blank");  
        return false;  
      }

           if (company==null || company==""){  
        alert("company can't be blank");  
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


    function checkUserName() {
      if (document.getElementById("username").value == "") {
          document.getElementById("usernameErr").innerHTML = "User Name can't be blank";
          document.getElementById("usernameErr").style.color = "red";
          document.getElementById("username").style.borderColor = "red";
      }else{
          document.getElementById("usernameErr").innerHTML = "";
        document.getElementById("username").style.borderColor = "black";
      }
      
        }

        function checkPass(){
          if (document.getElementById("password").value == "") {
          document.getElementById("passErr").innerHTML = "Password can't be blank";
          document.getElementById("passErr").style.color = "red";
          document.getElementById("password").style.borderColor = "red";
      }else if(document.getElementById("password").value.length<6){
          document.getElementById("password").style.borderColor = "red";
          document.getElementById("passErr").style.color = "red";
        document.getElementById("passErr").innerHTML = "Password must be at least 8 characters long.";
      }
      else{
        document.getElementById("passErr").innerHTML = "";
          document.getElementById("passErr").style.color = "red";
        document.getElementById("password").style.borderColor = "black";
      }
        }

      function checkEmail() {
      if (document.getElementById("email").value == "") {
          document.getElementById("emailErr").innerHTML = "email can't be blank";
          document.getElementById("emailErr").style.color = "red";
          document.getElementById("email").style.borderColor = "red";
      }else{
          document.getElementById("emailErr").innerHTML = "";
        document.getElementById("email").style.borderColor = "black";
      }
      
        }

    function checkDOB() {
      if (document.getElementById("dob").value == "") {
          document.getElementById("dobErr").innerHTML = "Date of Birth can't be blank";
          document.getElementById("dobErr").style.color = "red";
          document.getElementById("dob").style.borderColor = "red";
      }else{
          document.getElementById("dobErr").innerHTML = "";
        document.getElementById("dob").style.borderColor = "black";
      }
      
        }

    
    function checkInstitution() {
      if (document.getElementById("institution").value == "") {
          document.getElementById("institutionErr").innerHTML = "Gender can't be blank";
          document.getElementById("institutionErr").style.color = "red";
          document.getElementById("institution").style.borderColor = "red";
      }else{
          document.getElementById("institutionErr").innerHTML = "";
        document.getElementById("institution").style.borderColor = "black";
      }
}


    function checkCompany() {
      if (document.getElementById("company").value == "") {
          document.getElementById("companyErr").innerHTML = "Gender can't be blank";
          document.getElementById("companyErr").style.color = "red";
          document.getElementById("company").style.borderColor = "red";
      }else{
          document.getElementById("companyErr").innerHTML = "";
        document.getElementById("company").style.borderColor = "black";
      }
}

    function checkBlood() {
      if (document.getElementById("blood").value == "") {
          document.getElementById("bloodErr").innerHTML = "blood can't be blank";
          document.getElementById("bloodErr").style.color = "red";
          document.getElementById("blood").style.borderColor = "red";
      }else{
          document.getElementById("bloodErr").innerHTML = "";
        document.getElementById("blood").style.borderColor = "black";
      }}



 </script>
 
</head>
<body>


<?php include '../Controller/HEADERAL.php';?>
<section>
  
  <article>
    <h1>Registration</h1>
<p><span class="error" style="color:Tomato;" >* required field</span></p>

<form name = "myform" method="POST"  onsubmit="validateform()" > 
  
  Name: <input type="text" name="name" id ="name" onkeyup="checkName()" onblur="checkName()" >
  <span id="nameErr"></span>
    <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  Username: <input type="text" name="username" id ="username" onkeyup="checkUserName()" onblur="checkUserName()" >
  <span style="color:blue" id="availability"></span>
  <span id="usernameErr"></span>
  <span class="error">* <?php echo $unameErr;?></span>

  <br><br>

  Password: <input type="text" name="password" id="password" onkeyup="checkPass()" onblur="checkPass()">
  <span class="error">* <?php echo $passErr;?></span>
    <span id="passErr"></span>  
  <br><br>

  E-mail: <input type="text" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()">
  <span class="error">* <?php echo $emailErr;?></span>
     <span id="emailErr"></span>  
  <br><br>

  Date of Birth :
  <input type="date" name="dob" placeholder="DD-MM-YYYY" id="dob" onkeyup="checkDOB()" onblur="checkDOB()">  
  <span class="error">* <?php echo $dobErr;?></span>
  <span id="dobErr"></span> 
  <br><br>

  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <span id="passErr"></span> 
  <br><br>

  Institution: <input type="text" name="institution" id="institution" onkeyup="checkInstitution()" onblur="checkInstitution()">
  <span class="error">* <?php echo $institutionErr;?></span>
    <span id="institutionErr"></span>
  <br><br>

  Company: <input type="text" name="company"  id="company" onkeyup="checkCompany()" onblur="checkCompany()">
  <span class="error">* <?php echo $companyErr;?></span>
  <span id="companyErr"></span> 
  <br><br>

  Choose User:
  <input type="checkbox" name="user" value="student">Student</input>
  <input type="checkbox" name="user" value="faculty">Faculty</input>
  <input type="checkbox" name="user" value="alumni">Alumni</input>
  <span class="error">*<?php echo $userErr;?></span>
    <span id="passErr"></span>   
  <br><br>
  Blood Group:
  <select id="blood" name="blood" onkeyup="checkBlood()" onblur="checkBlood()">
    <option value=""></option>
    <option value="ab+">AB+</option>
    <option value="a+">A+</option>
    <option value="b+">B+</option>
    <option value="o+">O+</option>
    <option value="ab-">AB-</option>
    <option value="a-">A-</option>
    <option value="b-">B-</option>
    <option value="o-">O-</option>
  </select>
  <span class="error">*<?php echo $bloodErr;?></span>
      <span id="bloodErr"></span> 
  <br><br>
  <input type="submit"  class="btn btn-primary" name = "submit" value="Signup">

  </article>
</section>



<?php include '../controller/FOOTER.php';?>

</body>
</html>

<script>
    $(document).ready(function(){
        $('#username').keyup(function(){
            var name = $(this).val();
            $.ajax({
                url: "../Controller/checkAL.php",
                method:"POST",
                data:{my_name:name},
                dataType:"text",
                success:function(html)
                {
                    $('#availability').html(html);
                }
            });
        });
    });
</script>