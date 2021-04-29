<h1 class="text-primary"><i class="fa fa-user"></i> Dashboard </h1>
<ol class="breadcrumb">
   <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>

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
            <td>
                <a href="index.php?page=homepage"><i class="fa fa-dashboard"></i> Dashboard </a>
            </td>
            
        </tr>
        <tr>
            <td>
                <a href="index.php?page=user-profile"><i class="fa fa-user"></i> View Profile</a>
            </td>
            
        </tr>
        <tr>
            <td>
            <a href="index.php?page=edit-user&id=<?php echo base64_encode($user_row['id']);  ?>"><i class="fa fa-user"></i> Edit Profile</a>
            </td>
            
        </tr>
        <!-- <tr>
            <td>Change Password</td>
            
        </tr> -->
        <tr>
            <td>
                <a href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
            </td>
        </tr>

        </table>
        <!-- <a href="" class="btn btn-sm btn-primary pull-right">Edit Profile</a> -->
    </div>

    <div class="col-sm-2">
        <a href="">
            <img class="img-thumbnail" src="images/<?= $user_row['photo'] ?>" alt="">
        </a>


            <br></br>
            <?php
            if(isset($_POST['upload'])){
                $photo = explode('.',$_FILES['photo']['name']);
                $photo = end($photo);

                $photo_name = $session_user.'.'.$photo;
                $upload = mysqli_query($linnk,"UPDATE `users` SET `photo`='$photo_name' WHERE `username`= '$session_user'");
                if($upload){
                move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$photo_name);
                }
            }
            ?>

        <form class="" action="" method="post" enctype="multipart/form-data">
            <label for="photo">Profile Picture</label>
            <input type="file" name="photo" required="" id="photo">
            <br>
            <input class="btn btn-sm btn-primary" type="submit" name="upload" value="Upload" >

        </form>
    </div>

</div>
