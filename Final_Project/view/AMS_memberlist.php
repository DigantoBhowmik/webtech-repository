<html>
<title>Member List</title>
<body>
	<script src="../js/validate.js"></script>
<center>
<?php
	require("../view/AMS_header2.php");
	include("../controller/memberlist_control.php");
	
?>
<fieldset>
<legend>Members</legend>
  <table align="center">
	<thead>
		<tr>
			<th>Name</th>
			<th>Username</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $i => $user): ?>
			<tr>
				<!--<a href="../view/AMS_showprofile.php?id=<?php echo $user['ID'] ?>">-->
				<td><?php echo $user['name'] ?></a></td>
				<td><?php echo $user['username'] ?></td>
				<td><button type="button" name="delete" id="delete" onclick="confirmDelete()"><a href="../controller/delete_user.php?id=<?php echo $user['ID'] ?>">Delete</a></button></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</fieldset>
<?php
    require("../view/AMS_footer.php")
?>
</center>
</body>
</html>