<?php 
  require '../controller/register_logic.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User Registration</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="../js/app.js"></script> 
    <script src="../js/jquery.js"></script>

  </head>

  <body>
    <div class="container">
      <h1>User Registration Form</h1>

     
      <hr>
      <div class="row">
        <div class="col-md-12">
          <form class="form-horizontal" action="" method="post"  enctype="multipart/form-data">

            <!--NAME............................-->
            <div class="form-group">
              <label class="control-label col-sm-1" for="name">Name</label>
                <div class="col-sm-4">
                  <input id="name"  class="form-control" type="text" name="name" onkeyup="checkName()" onblur="checkName()" value="<?php if(isset($name)){echo $name;} ?>" placeholder="Enter your name">
                    <label id="inp1"></label>
                  </input>
                  <span id="availability"></span>
                </div>
                  <label for="" class="error">
                     <?php
                      if(isset($input_error['name']))
                      {
                        echo($input_error['name']);
                      }
                      ?>
                  </label>
            </div>



           <!--EMAIL.............................-->
            <div class="form-group">
              <label class="control-label col-sm-1" for="email">Email</label>
                <div class="col-sm-4">
                  <input id="email" class="form-control" type="text" name="email" onkeyup="checkEmail()" onblur="checkEmail()" value="<?php if(isset($email)){echo $email;} ?>" placeholder="Enter your email">
                  <label id="inp3"></label>
                </div>

                <label for="" class="error">
                   <?php
                    if(isset($input_error['email']))
                    {
                      echo($input_error['email']);
                    }
                    ?>
                </label>

                <label for="" class="error">
                   <?php
                    if(isset($email_error))
                    {
                      echo $email_error;
                    }
                    ?>
                </label>

            </div>


            <!--USERNAME.........................-->
            <div class="form-group">
              <label class="control-label col-sm-1" for="username">Username</label>
                <div class="col-sm-4">
                  <input id="username" class="form-control" type="text" name="username" onkeyup="checkUsername()" onblur="checkUsername()" value="<?php if(isset($username)){echo $username;} ?>" placeholder="Enter your username">
                  <label id="inp2"></label>
                </div>
                <label for="" class="error">
                   <?php
                    if(isset($input_error['username']))
                    {
                      echo($input_error['username']);
                    }
                    ?>
                </label>

                <label for="" class="error">
                   <?php
                    if(isset($username_error))
                    {
                      echo $username_error;
                    }
                    ?>
                </label>

                <label for="" class="error">
                   <?php
                    if(isset($username_l))
                    {
                      echo $username_l;
                    }
                    ?>
                </label>
            </div>

            <!--PASSWORD........................-->
            <div class="form-group">
              <label class="control-label col-sm-1" for="password">Password</label>
                <div class="col-sm-4">
                  <input id="password" class="form-control" type="password" name="password" onkeyup="checkPassword()" onblur="checkPassword()" value="<?php if(isset($password)){echo $password;} ?>" placeholder="Enter your password">
                  <label id="inp4"></label>
                </div>
                <label for="" class="error">
                   <?php
                    if(isset($input_error['password']))
                    {
                      echo($input_error['password']);
                    }
                    ?>
                </label>

                <label for="" class="error">
                   <?php
                    if(isset($password_l))
                    {
                      echo ($password_l);
                    }
                    ?>
                </label>
            </div>

            <!--CONFIRM PASSWORD.......................-->
            <div class="form-group">
              <label class="control-label col-sm-1" for="c_password">Confirm Password</label>
                <div class="col-sm-4">
                  <input id="c_password" class="form-control" type="password" name="c_password" onkeyup="checkCpassword()" onblur="checkCpassword()" value="<?php if(isset($c_password)){echo $c_password;} ?>" placeholder="Enter your Confirm Password">
                  <label id="inp5"></label>
                </div>
                <label for="" class="error">
                   <?php
                    if(isset($input_error['c_password']))
                    {
                      echo($input_error['c_password']);
                    }
                    ?>
                </label>

                <label for="" class="error">
                   <?php
                    if(isset($password_not_match))
                    {
                      echo 'Password not match';
                    }
                    ?>
                </label>
            </div>

            <!--PHOTO..................................-->
            <div class="form-group">
              <label class="control-label col-sm-1" for="photo">Photo</label>
                <div class="col-sm-4">
                  <input id="photo" type="file" name="photo" value="" placeholder="Enter your photo">
                </div>
            </div>


             <!--SUBMIT..................................-->
            <div class="col-sm-4 col-sm-offset-1">
              <input type="submit" name="registration" value="Registration" class="btn btn-success">
            </div>

          </form>

         </div>
      </div>

       <br>
        <p>If you have an account? then please <a href="login.php">Login</a> </p>
      <hr>

      <footer>
          <p>Copyright &copy;2015 - <?= date("Y") ?> All Rights Reserved</p>
      </footer>
    </div>
  </body>
</html>

<script>
    $(document).ready(function(){
        $('#name').blur(function(){
            var name = $(this).val();
            $.ajax({
                url: "../model/dbcon.php",
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