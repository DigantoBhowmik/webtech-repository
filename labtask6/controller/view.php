<?php
    
    require_once '../model/model.php';
    $data = showData($_SESSION['id']);

    $id = $data["ID"];
    $name = $data["Name"];
    $username = $data["Username"];
?>