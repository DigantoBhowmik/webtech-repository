  
<?php 

require_once 'db_connect.php';

function addUser($data){
	$conn = db_conn();
    $selectQuery = "INSERT into user (Name,  Email, Username, Password, Gender, DOB)
VALUES (:name,:email, :username, :password, :gender, :dob)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':username' => $data['username'],
        	':password' => $data['password'],
            ':gender' => $data['gender'],
            ':dob' => $data['dob'],
        	
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

function updateData($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE user set Name = ?, Email = ?, Username = ?, Gender = ?, DOB = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['username'], $data['gender'], $data['dob'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}