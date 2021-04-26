<?php
include ('../model/db_op.php');
require_once '../model/model.php';
$username=$rows=$result=$response="";
if(isset($_POST['username'])){

   $username = $_POST['username'];

   if(!empty($_POST['username'])){
   $query = "SELECT * from user_info WHERE username='$username'";

   $result = mysqli_query($connection,$query);

   $rows = mysqli_num_rows($result);

   if($rows==1){
   	$response= "username already exists";
   }
   else{
   	$response= "username available";
   }
}
}
echo $response;
?>