<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<title>Viewprofile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include '../Controller/CSS2.php';?>
</head>
<body>


<header>
<?php     require_once '../controller/DASHBOARDPHP.php'; ?>

</header>

<section>
<?php require_once '../controller/VIEWPROFILEPHP.php';?>

    <nav>
       <h2>Account</h2>
    <ul>
      <li><a href="COMMUNITY.php">Community</a></li>
      <li><a href="DASHBOARDal.php">Dashboard</a></li>
      <li><a href="CHANGEPICTURE.php">Change Profile Picture</a></li>
      <li><a href="Loginal.php">Logout</a></li>
    </ul>
  </nav>
  <article>
    <div class="col-sm-9">
      <h1>Profile Information</h1>
      <p>Name           :   <?php echo $name ?></p><hr>
      <p>ID             :   <?php echo $id ?></p><hr>
      <p>Username          :   <?php echo $username ?></p><hr>
      <p>Password          :   <?php echo $password ?></p><hr>
    </div> 

  </article>
</section>

<?php include '../controller/FOOTER.php';?>

</body>
</html>