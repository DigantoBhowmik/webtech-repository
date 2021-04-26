function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(document.myform.email.value);
}

function isPassword(password)
{
    return /^(?!.* )(?=.*[^a-zA-Z0-9]).{8,}$/m.test(document.myform.password.value);
}

function isFutureDate(idate){
    var today = new Date().getTime(),
        idate = idate.split("/");

    idate = new Date(idate[2], idate[1] - 1, idate[0]).getTime();
    return (today - idate) < 0;
}

/*function checkUniUsername(username){
    $(document).ready(function(){

   $("#username").keyup(function(){

     var username = $(this).val().trim();

     if(username != ''){

        $.ajax({
           url: '../controller/checkusername.php',
           type: 'post',
           data: {username:username},
           success: function(response){

              // Show response
              $("#usernameErr").html(response);

           }
        });
     }else{
        $("#usernameErr").html("");
     }

  });

});
  
}*/

function checkName() {
  if (document.getElementById("name").value == "") {
        document.getElementById("nameErr").innerHTML = "Name can't be blank";
        document.getElementById("nameErr").style.color = "red";
        document.getElementById("name").style.borderColor = "red";
  }else{
        document.getElementById("nameErr").innerHTML = "";
        document.getElementById("name").style.borderColor = "green";
  }
  
}

function checkUsername(username) {
    if (document.getElementById("username").value == "") {
          document.getElementById("usernameErr").innerHTML = "Username can't be blank";
          document.getElementById("usernameErr").style.color = "red";
          document.getElementById("username").style.borderColor = "red";
    }else{
          var xmlhttp=new XMLHttpRequest();
          xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
              document.getElementById("usernameErr").innerHTML = "";
              document.getElementById("username").style.borderColor = "green";
              document.getElementById("ustatus").innerHTML=this.responseText;
            }
          }
          xmlhttp.open("POST","../controller/checkusername.php?username="+username,true);
          xmlhttp.send();
            }
    
  }

function checkEmail() {
   
    if (document.getElementById("email").value == "") 
    {
          document.getElementById("emailErr").innerHTML = "Email can't be blank";
          document.getElementById("emailErr").style.color = "red";
          document.getElementById("email").style.borderColor = "red";
    }
   
    else if(!isEmail(document.getElementById("email").value))
    {
        document.getElementById("emailErr").innerHTML = "Invaild mail";
        document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "red";
    }
    else
    {
        document.getElementById("emailErr").innerHTML = "";
        document.getElementById("email").style.borderColor = "green";
    }
    
  }

  function checkPassword(){
   
    if (document.getElementById("password").value == "") 
    {
          document.getElementById("passwordErr").innerHTML = "Password can't be blank";
          document.getElementById("passwordErr").style.color = "red";
          document.getElementById("password").style.borderColor = "red";
    }
    else if(!isPassword(document.getElementById("password").value))
    {
        document.getElementById("passwordErr").innerHTML = "Password must contain at least one of the special character (@,#,$,%)";
        document.getElementById("passwordErr").style.color = "red";
        document.getElementById("password").style.borderColor = "red";
    }
    else
    {
        document.getElementById("passwordErr").innerHTML = "";
        document.getElementById("password").style.borderColor = "green";
    }
    
  }

  function checkCpassword(){
   
    if (document.getElementById("cpassword").value == "") 
    {
          document.getElementById("cpasswordErr").innerHTML = "Password can't be blank";
          document.getElementById("cpasswordErr").style.color = "red";
          document.getElementById("cpassword").style.borderColor = "red";
    }
   
    else if(document.getElementById("cpassword").value != document.getElementById("password").value)
    {
        document.getElementById("cpasswordErr").innerHTML = "Password does not match";
        document.getElementById("cpasswordErr").style.color = "red";
        document.getElementById("cpassword").style.borderColor = "red";
    }
    else
    {
        document.getElementById("cpasswordErr").innerHTML = "";
        document.getElementById("cpassword").style.borderColor = "green";
    }
    
  }
  function checkDob(){
        var idate = document.getElementById("dob");
        var currentDate = new Date();
    if(document.getElementById('dob').value==""){
          document.getElementById("dobErr").innerHTML = "Date of Birth can't be blank";
          document.getElementById("dobErr").style.color = "red";
          document.getElementById("dob").style.borderColor = "red";
    }
    else if(document.getElementById("dob").value>Date()){
          document.getElementById("dobErr").innerHTML = "Invaild Date of Birth";
          document.getElementById("dobErr").style.color = "red";
          document.getElementById("dob").style.borderColor = "red";
    }
    else{
        document.getElementById("dobErr").innerHTML = "";
        document.getElementById("dob").style.borderColor = "green";
    }
  }
  function emptyPost(){
    if (document.getElementById("poststat").value == "") 
    {
          document.getElementById("poststatErr").innerHTML = "Please type something to post";
          document.getElementById("poststatErr").style.color = "red";
          document.getElementById("poststat").style.borderColor = "red";
    }else{
          document.getElementById("poststatErr").innerHTML = "";
          document.getElementById("poststat").style.borderColor = "green";
    }
  }
  function confirmDelete() {
    if (confirm("Are you sure you want to delete the user?")==true) {

    } else {
      event.preventDefault();
    }
}