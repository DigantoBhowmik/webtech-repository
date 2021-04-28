<?php include '../controller/COMMUNITYPHP.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<title>COMMUNITY</title>
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
          <li><a href="Dashboardal.php">Dashboard</a></li>
      <li><a href="member.php">Add Member</a></li>
      <li><a href="job.php">See JOB post</a></li>
      <li><a href="Scholarship.php">Scholarship post</a></li>
      <li><a href="admin.php">Contact with admin</a></li>
      <li><a href="Login.php">Logout</a></li>
  </nav>
  <article>

<img src="download.jpg" alt="Aiub" width="600" height="200">
    <h1>Welcome to AIUB Alumni Community </h1><br><br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<label for="posts">Write here :</label>
<textarea id="posts" name="posts" rows="4" cols="50">
    </textarea>
    <span class="error">* <?php echo $postErr;?></span>


  <br><br>
  <input type="submit" value="Post">
</form>


  </article>
</section>


<?php include '../controller/FOOTER.php';?>

</body>
</html>