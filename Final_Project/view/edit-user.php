<h1 class="text-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Student <small>New</small></h1>
<ol class="breadcrumb">
    <a href="index.php?page=homepage"><i class="fa fa-dashboard"></i> Dashboard </a>
</ol>

<?php
  $id = base64_decode($_GET['id']);
  $user_data = mysqli_query($linnk,"SELECT * FROM `users` WHERE `id` = '$id'") ;
  $db_row = mysqli_fetch_assoc($user_data);
  // print_r($db_row);

  if(isset($_POST['edit-student'])){
  //  echo "<pre>";
  //  print_r($_POST);
  //  print_r($_FILES);
  $name = $_POST['name'];
  $email = $_POST['email'];
  // $username = $_POST['username'];
  // $password = $_POST['password'];
  // $class = $_POST['class'];

  $input_error = array();

  if(empty($name)){
    $input_error['name'] = "The name field is required";
    
  }

  if(empty($email)){
    $input_error['email'] = "The email field is required";
  }

 $query = "UPDATE `users` SET `name`='$name',`email`='$email' WHERE `id` = '$id'";
 $result = mysqli_query($linnk,$query);
    if($result)
    {
        header('Location:index.php?page=user-profile');
    }
  }
 ?>

<div class="row">
  <div class="col-sm-6">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Name</label>
        <input id="name" class="form-control" value="<?= $db_row['name']; ?>"  type="text" name="name" placeholder="Student Name" onkeyup="checkName()" onblur="checkName()" >
        <label id="inp1"></label>
      </div>

      <div class="form-group">
        <label for="email">User Email</label>
        <input id="email" class="form-control" value="<?= $db_row['email']; ?>" type="text" name="email" placeholder="email" onkeyup="checkEmail()" onblur="checkEmail()"   >
        <label id="inp3"></label>
      </div>

      <!-- <div class="form-group">
        <label for="username">User Name</label>
        <input class="form-control" value="<?= $db_row['username']; ?>" type="text" name="username" placeholder="username" >
      </div> -->

      <div class="form-group">
          <input type="submit" name="edit-student" value="Edit student" class="btn btn-primary pull-right">
      </div>

    </form>

  </div>

</div>
