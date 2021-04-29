<?php
   require_once'../model/dbcon.php';
   session_start();
   if(isset($_SESSION['user_login'])){
     header('location:index.php');
   }

   if(isset($_POST['login'])){
     $username=$_POST['username'];
     $password=$_POST['password'];

     $input_error = array();

     if(empty($name)){
       $input_error['username'] = "The username field is required";
       
     }

     if(empty($password)){
      $input_error['password'] = "The password field is required";
    }

     $username_check = mysqli_query($linnk,"SELECT * FROM `users` WHERE `username`='$username'");
       if(mysqli_num_rows($username_check) > 0){
             $row = mysqli_fetch_assoc($username_check);
             if($row['password']==$password){
               if($row['status']=='inactive'){
                 $_SESSION['user_login'] = $username;
                 header('location:index.php?page=homepage');
               }else{
                 $status_inactive = "Your status inactive";
               }
             }
             else {
               $wrong_password = "This password not found";
             }

       }else {
         $username_not_found = "This username not found";
       }

   }
 ?>