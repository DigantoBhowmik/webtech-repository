<?php
    
if (isset($_SESSION['uname'])) {
    require_once '../model/model.php';
    $data = showUser($_SESSION['id']);

    $id = $data["ID"];
    $name = $data["name"];
    $email = $data["email"];
    $username = $data["username"];
    $gender = $data["gender"];
    $dob = $data["dob"];
}
else{
    header("location:../view/AMS_login.php");
}
?>