$(document).ready(function() {
	// body...
	var username = "";

	$("#username").keyup(function(){
		username = $("#username").val();
		checkUserName(username);

	});
	function checkUserName(username){
		$.ajax({
			method:'POST',
			url:'../controller/checkusername.php',
			data:'username='+username,
			success:function(data){
				$('#status').html(data);
			}

		})
	}
});