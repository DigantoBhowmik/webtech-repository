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
      <li><a href="VIEWPROFILE.php">View Profile</a></li>
      <li><a href="UPDATEPROFILE.php">Update</a></li>
      <li><a href="DASHBOARD.php">Dashboard</a></li>
      <li><a href="../controller/LOGOUTPHP.php">Logout</a></li>
    </ul>
  </nav>
  <article>

<!DOCTYPE html>
<html>
<head>


  <title>Live search</title>
  <script> 

  function ajax()
  {

  var name = document.getElementById('name').value;


  var xhttp = new XMLHttpRequest();


  xhttp.open('POST', '../Controller/searchphp.php', true);

  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  xhttp.send('name='+name);

  xhttp.onreadystatechange = function()
  {
    if(this.readyState == 4 && this.status == 200)
    {

      document.getElementById('result').innerHTML = this.responseText;
    }
  }
   }



  </script>


  <h3>Search User</h3>
  <input type="text" name="name" id="name" onkeyup="ajax()">

  <div id="result"></div>




  </article>
</section>

<?php include '../controller/FOOTER.php';?>

</body>
</html>