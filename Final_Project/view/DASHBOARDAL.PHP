<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<title>Dashboard</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include '../Controller/CSS2.php';?>
</head>
<body>


<header>



<?php include '../controller/DASHBOARDPHP.php';?>



</header>

<section>
    <nav>
       <h2>Account</h2>
    <ul>
      <li><a href="COMMUNITY.php">Community</a></li>
      <li><a href="VIEWPROFILEal.php">View Profile</a></li>
      <li><a href="UPDATEPROFILE.php">Update</a></li>
      <li><a href="search.php">Search</a></li>
      <li><a href="../controller/LOGOUTPHP.php">Logout</a></li>
    </ul>
  </nav>
  <article>

<?php 




if (isset($_SESSION['uname'])) {
  echo "<h1> Welcome ".$_SESSION['uname']."</h2>";


}
else{
    $msg="error";
    header("location:loginal.php");
    // echo "<script>location.href='login.php'</script>";
  }

 ?>
  </article>
</section>

<?php include '../controller/FOOTER.php';?>

</body>
</html>