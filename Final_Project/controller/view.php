<?php
    
    require_once '../model/model.php';
    $data = showData($_SESSION['id']);

    $id = $data["ID"];
    $name = $data["Name"];
    $email = $data["Email"];
    $username = $data["Username"];
    $gender = $data["Gender"];
    $dob = $data["DOB"];

?>