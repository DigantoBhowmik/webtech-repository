<?php

$conn = mysqli_connect("localhost","root","","finalproject");


if(isset($_POST["my_name"])) {
  $query = "SELECT * FROM user WHERE Username ='" . $_POST["my_name"] . "'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result)>0) {
      echo "<span class='status-not-available'> Username Not Available.</span>";
  }else{
      echo "<span class='status-available'> Username Available.</span>";
  }
}
?>