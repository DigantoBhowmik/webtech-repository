<h1 class="text-primary"><i class="fa fa-user"></i> User Profile <small>Me</small></h1>
<ol class="breadcrumb">

   <li> <a href="index.php?page=homepage"><i class="fa fa-dashboard"></i> Dashboard </a> </li>
   <li class="active"><i class="fa fa-user"></i> Profile</li>
</ol>

<?php
  $session_user = $_SESSION['user_login'];

  $user_data = mysqli_query($linnk,"SELECT * FROM `users` WHERE `username`= '$session_user'");
  $user_row  = mysqli_fetch_assoc($user_data);

 ?>

<div class="row">
  <div class="col-sm-4">
    <table class="table table-bordered">
      <tr>
        <td>User Id</td>
        <td><?= $user_row['id']; ?></td>
      </tr>
      <tr>
        <td>Name</td>
        <td><?= ucwords($user_row['name']); ?></td>
      </tr>

      <tr>
        <td>Email</td>
        <td><?= $user_row['email']; ?></td>
      </tr>

      <!-- <tr>
        <td>Username</td>
        <td><?php // ucwords($user_row['username']); ?></td>
      </tr> -->



    </table>

  </div>

  <div class="col-sm-2">
      <a href="">
        <img class="img-thumbnail" src="images/<?= $user_row['photo'] ?>" alt="">
      </a>


        <br></br>

  </div>

</div>
