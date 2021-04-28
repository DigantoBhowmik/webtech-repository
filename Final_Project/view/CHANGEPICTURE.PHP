<!DOCTYPE html>
<html lang="en">
<head>
<title>CHANGEPICTURE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include '../Controller/CSS2.php';?>
</head>
<body>


<header>
<?php 


session_start();

if (isset($_SESSION['uname'])) {
  echo "<a> logged in as ".$_SESSION['uname']."</a>";


}
else{
    $msg="error";
    header("location:login.php");
    // echo "<script>location.href='login.php'</script>";
  }

 ?>

  <a href="login.php">logout</a> 


</header>

<section>
    <nav>
       <h2>Account</h2>
    <ul>
      <li><a href="Dashboard.php">Dashboard</a></li>
      <li><a href="Viewprofile.php">View Profile</a></li>
      <li><a href="COMMUNITY.php">Community</a></li>
      <li><a href="CHANGEPICTURE.php">Change Profile Picture</a></li>
      <li><a href="Login.php">Logout</a></li>
    </ul>
  </nav>
  <article>

<form action="propic upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
  </article>
</section>

<?php include '../controller/FOOTER.php';?>

</body>
</html>