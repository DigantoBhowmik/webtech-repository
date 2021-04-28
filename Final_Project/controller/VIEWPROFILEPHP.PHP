<?php

    require_once '../model/model.php';
    $data = showData2($_SESSION['id']);
    $id = $data["ID"];
    $name = $data["Name"];
    $username = $data["Username"];
    $password = $data["Password"];
?>