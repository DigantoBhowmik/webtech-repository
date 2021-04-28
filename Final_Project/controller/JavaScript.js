		function validateform(){  
			var name=document.myform.name.value;  
			var password=document.myform.password.value;  
			var age=document.myform.age.value;  
			  
			if (name==null || name==""){  
			  alert("Name can't be blank");  
			  return false;  
			}

	       if (username==null || username==""){  
			  alert("User Name can't be blank");  
			  return false;  
			}
			else if(password.length<8){  
			  alert("Password must be at least 8 characters long.");  
			  return false;  
			} 


	       if (email==null || email==""){  
			  alert("Email Name can't be blank");  
			  return false;  
			}
	       if (dob==null || dob==""){  
			  alert("Date of Birth can't be blank");  
			  return false;  
			}

           if (gender==null || gender==""){  
			  alert("gender can't be blank");  
			  return false;  
			}

           if (institution==null || institution==""){  
			  alert("institution can't be blank");  
			  return false;  
			}			

           if (company==null || company==""){  
			  alert("company can't be blank");  
			  return false;  
			}

           if (blood==null || blood==""){  
			  alert("blood can't be blank");  
			  return false;  
			}




			else if (age==null || age==""){  
			  alert("Age can't be blank");  
			  return false;   
			} 
		}

		function checkEmpty() {
		  	if (document.myform.name.value = "") {
		  		alert("Name can't be blank");
		        return false;  
		  	}
		  }  
		function checkName() {
			if (document.getElementById("name").value == "") {
			  	document.getElementById("nameErr").innerHTML = "Name can't be blank";
			  	document.getElementById("nameErr").style.color = "red";
			  	document.getElementById("name").style.borderColor = "red";
			}else{
			  	document.getElementById("nameErr").innerHTML = "";
				document.getElementById("name").style.borderColor = "black";
			}
			
        }

		function checkUserName() {
			if (document.getElementById("username").value == "") {
			  	document.getElementById("unameErr").innerHTML = "User Name can't be blank";
			  	document.getElementById("unameErr").style.color = "red";
			  	document.getElementById("username").style.borderColor = "red";
			}else{
			  	document.getElementById("unameErr").innerHTML = "";
				document.getElementById("username").style.borderColor = "black";
			}
			
        }





        function checkPass(){
        	if (document.getElementById("password").value == "") {
			  	document.getElementById("passErr").innerHTML = "Password can't be blank";
			  	document.getElementById("passErr").style.color = "red";
			  	document.getElementById("password").style.borderColor = "red";
			}else if(document.getElementById("password").value.length<6){
			  	document.getElementById("password").style.borderColor = "red";
			  	document.getElementById("passErr").style.color = "red";
				document.getElementById("passErr").innerHTML = "Password must be at least 6 characters long.";
			}
			else{
				document.getElementById("passErr").innerHTML = "";
			  	document.getElementById("passErr").style.color = "red";
				document.getElementById("password").style.borderColor = "black";
			}
        }



		function checkEmail() {
			if (document.getElementById("email").value == "") {
			  	document.getElementById("emailErr").innerHTML = "email can't be blank";
			  	document.getElementById("emailErr").style.color = "red";
			  	document.getElementById("email").style.borderColor = "red";
			}else{
			  	document.getElementById("emailErr").innerHTML = "";
				document.getElementById("email").style.borderColor = "black";
			}
			
        }


		function checkDOB() {
			if (document.getElementById("dob").value == "") {
			  	document.getElementById("dobErr").innerHTML = "Date of Birth can't be blank";
			  	document.getElementById("dobErr").style.color = "red";
			  	document.getElementById("dob").style.borderColor = "red";
			}else{
			  	document.getElementById("dobErr").innerHTML = "";
				document.getElementById("dob").style.borderColor = "black";
			}
			
        }



		function checkGender() {
			if (document.getElementById("gender").value == "") {
			  	document.getElementById("genderErr").innerHTML = "Gender can't be blank";
			  	document.getElementById("genderErr").style.color = "red";
			  	document.getElementById("gender").style.borderColor = "red";
			}else{
			  	document.getElementById("genderErr").innerHTML = "";
				document.getElementById("gender").style.borderColor = "black";
			}
		
		function checkInstitution() {
			if (document.getElementById("institution").value == "") {
			  	document.getElementById("institutionErr").innerHTML = "Gender can't be blank";
			  	document.getElementById("institutionErr").style.color = "red";
			  	document.getElementById("institution").style.borderColor = "red";
			}else{
			  	document.getElementById("institutionErr").innerHTML = "";
				document.getElementById("institution").style.borderColor = "black";
			}

		function checkCompany() {
			if (document.getElementById("company").value == "") {
			  	document.getElementById("companyErr").innerHTML = "Gender can't be blank";
			  	document.getElementById("companyErr").style.color = "red";
			  	document.getElementById("company").style.borderColor = "red";
			}else{
			  	document.getElementById("companyErr").innerHTML = "";
				document.getElementById("company").style.borderColor = "black";
			}

		function checkCompany() {
			if (document.getElementById("blood").value == "") {
			  	document.getElementById("bloodErr").innerHTML = "blood can't be blank";
			  	document.getElementById("bloodErr").style.color = "red";
			  	document.getElementById("blood").style.borderColor = "red";
			}else{
			  	document.getElementById("bloodErr").innerHTML = "";
				document.getElementById("blood").style.borderColor = "black";
			}







        function checkAge(){
        	if (document.getElementById("age").value == "") {
			  	document.getElementById("ageErr").innerHTML = "age can't be blank";
			  	document.getElementById("ageErr").style.color = "red";
			  	document.getElementById("age").style.borderColor = "red";
			}else if(document.getElementById("age").value < 10){
			  	document.getElementById("ageErr").style.color = "red";
			  	document.getElementById("age").style.borderColor = "red";
				document.getElementById("ageErr").innerHTML = "age is less";
			}
			else{
			  	document.getElementById("ageErr").style.color = "red";
				document.getElementById("ageErr").innerHTML = "age is ok";
				document.getElementById("age").style.borderColor = "black";
			}
        }