<?php 
  require '../controller/login_logic.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin login</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="../js/app.js"></script>

  </head>


  <body>
    <div class="container animated flash">
      <h1 class="text-center">Management Project</h1>
      <br>

      <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
          <h2 class="text-center">Login Form</h2>
          <br>

          <form class="" action="" method="post">
             <div class="">
               <input type="text" id="username" class="form-control" name="username" onkeyup="checkUsername()" onblur="checkUsername()" value="<?php if(isset($username)){echo $username;}  ?>" placeholder="Username">
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
              
               <br>
             <div class="">
               <input type="password" id="password" class="form-control" name="password" onkeyup="checkPassword()" onblur="checkPassword()" value="<?php if(isset($password)){echo $password;} ?>" placeholder="Password">
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
              <br>

             <div class="">
               <input type="submit" name="login" value="login" class="btn btn-success">
             </div>


          </form>
          
          <br><br/>
          <p> Don't have an account ? then please <a href="registration.php"> Register</a> </p>

        </div>

      </div>
      <br>
      
          <?php if(isset($status_inactive)){echo '<div class="alert alert-warning col-sm-4 col-sm-offset-4">'.$status_inactive.'</div>';} ?>

    </div>
  </body>
</html>
