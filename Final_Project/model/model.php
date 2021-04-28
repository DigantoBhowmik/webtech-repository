  
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


/* Maizul's Model Start */

function addUser1($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `user_info`(`name`, `email`, `username`, `password`, `gender`, `dob`)  VALUES (:name, :email, :username, :password, :gender, :dob)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':username' => $data['username'],
            ':password' => $data['password'],
            ':gender' => $data['gender'],
            ':dob' => $data['dob']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function showAllUser(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `user_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showUser($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}

function searchUser1($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE username = ?";

    
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$user_name]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function updateUser($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set name = ?, email = ?, username = ?, gender = ?, dob = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'],$data['username'],$data['gender'],$data['dob'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteUser($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `user_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}


/* Maizul's Model end */

/* Salman's Model Start*/

function adduser2($data){
	$conn = db_conn();
    $selectQuery = "INSERT INTO userinfo (Name, Username ,Password, Email, DateOfBirth , Gender, Institution , Company, UserType, BloodGroup ) VALUES (:name, :username, :password,  :email, :dob, :gender, :institution, :company, :user, :blood  )";

    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
                     ':name'               =>     $data['name'],   
                     ':username'               =>     $data['username'],  
                     ':password'          =>     $data["password"], 
                     ':email'          =>     $data["email"],
                     ':dob'     =>     $data["dob"],  
                     ':gender'          =>     $data["gender"],  
                     ':institution'     =>     $data["institution"],  
                      ':company'               =>     $data['company'],  
                     ':user'          =>     $data["user"],  
                     ':blood'     =>     $data["blood"] 

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function searchUser2($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `userinfo` WHERE username = ?";

    
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$user_name]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}


function showData2($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `userinfo` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}

function updateData2($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE userinfo set Name = ?, Username = ? , Password = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['Username'], $data['Password'] , $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}




/* Salman's Model end*/

/* Farhan's Model start */

function addUser3($data){
	$conn = db_conn();
    $selectQuery = "INSERT into teacher (Name,Email,  uname, password)
VALUES (:name,:email, :uname, :password)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name'     => $data['name'],
            ':uname'     => $data['uname'],
        	':email' => $data['email'],
        	':password' => $data['password'],
        	
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function searchUser3($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `teacher` WHERE uname = ?";

    
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$user_name]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function showData3($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `teacher` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}

function updateData3($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE teacher set Name = ?, Uname = ?, Email = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['uname'], $data['email'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


/* Salman's Model end */