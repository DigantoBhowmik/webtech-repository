<?php
  require_once'../model/dbcon.php';
  session_start();

  if (isset($_POST['registration'])) {
    $nameErr = $emailErr = $usernameErr = $passwordErr = $cpasswordErr = '';

    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $c_password=$_POST['c_password'];

    $photo = explode('.',$_FILES['photo']['name']);
    $photo = end($photo);

    $photo_name = $username.'.'.$photo;

    $input_error = array();



    if(empty($name)){
      $input_error['name'] = "The name field is required";
      
    }

    if(empty($email)){
      $input_error['email'] = "The email field is required";
    }
    if(empty($username)){
      $input_error['username'] = "The username field is required";
    }
    if(empty($password)){
      $input_error['password'] = "The password field is required";
    }
    if(empty($c_password)){
      $input_error['c_password'] = "The confirm password field is required";
    }
    if(count($input_error)==0){
          $email_check = mysqli_query($linnk,"SELECT * FROM `users` WHERE `email`='$email';");
          if(mysqli_num_rows($email_check)==0)
          {
              $username_check = mysqli_query($linnk,"SELECT * FROM `users` WHERE `username`='$username';");
              {
                if(mysqli_num_rows($username_check)==0){

                  if(strlen($username) > 7){

                    if(strlen($password)>7){

                       if($password == $c_password){
                        //  $password = md5($password);

                         $query="INSERT INTO `users`(`name`, `email`, `username`, `password`, `photo`, `status`) VALUES ('$name','$email','$username','$password','$photo_name','inactive')";
                            $result = mysqli_query($linnk,$query);

                            if($result){

                              $_SESSION['data_insert_success'] = "Data Insert Success!";
                               move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$photo_name);
                               header('location:registration.php');

                            }
                            else {
                              $_SESSION['data_insert_error'] = "Data Insert Error!";
                            }
                       }
                       else {
                         $password_not_match = "Password not match";
                       }

                    }
                    else {
                      $password_l = "Password more than 8 characters";
                    }
                  }
                  else {
                    $username_l = "Username more than 8 characters";
                  }

                }
                else
                {
                    $username_error = "This username already exists";
                }
              }
          }
          else{
            $email_error = "This email address already exists";
          }
        }
  }
 ?>