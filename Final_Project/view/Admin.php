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

<?php include '../controller/Adminphp.php';?>

</header>

<section>
    <nav>
       <h2>Account</h2>
    <ul>
       <li><a href="DASHBOARD.php">Dashboard</a></li>
      <li><a href="COMMUNITY.php">Community</a></li>
      <li><a href="VIEWPROFILE.php">View Profile</a></li>
      <li><a href="UPDATEPROFILE.php">Update</a></li>
      <li><a href="../controller/LOGOUTPHP.php">Logout</a></li>
    </ul>
  </nav>
  <article>

<h3>The XMLHttpRequest Object</h3>

<form action=""> 
  <select name="customers" onchange="showCustomer(this.value)">
    <option value="">Select a customer:</option>
    <option value="Salman">Salman Dhrubo</option>
    <option value="Showvik ">Showvik Salman</option>
    <option value="OP">One Plus</option>
  </select>
</form>
<br>
<div id="txtHint">Customer info will be listed here...</div>

<script>
function showCustomer(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "Adminphp.php?q="+str, true);
  xhttp.send();
}
</script>




  </article>
</section>

<?php include '../controller/FOOTER.php';?>

</body>
</html>