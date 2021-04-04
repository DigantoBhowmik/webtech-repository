<?php 

require_once 'db_connect.php';

function addUser($data){
	$conn = db_conn();
    $selectQuery = "INSERT into user (Name,  Username, Password)
VALUES (:name,:username, :password)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	
        	':username' => $data['username'],
        	':password' => $data['password'],
        	
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function searchUser($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user` WHERE username = ?";

    
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$user_name]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function showData($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `user` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}
