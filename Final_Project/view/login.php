<?php
    require_once '../controller/login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

<div class="container-xxl">

    <form class="row g-3"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    
    <span class="border border-primary rounded-sm shadow p-2 mb-3 bg-black rounded mt-5 pt-5" >
    
        <div class="col-md-6 offset-md-3">
        <label for="uname" class="form-label">Username</label>
        <input type="text" class="form-control shadow p-2 mb-3 bg-black rounded" name="uname">
        
        </div>
        <div class="col-md-6 offset-md-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control shadow p-2 mb-3 bg-black rounded" name="password">
        
        <?php if(isset($msg)){?>
		    <tr>
		      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
		    </tr>
    	<?php } ?>
        </div>
            
            <div class="col-md-6 offset-md-5">
            <input type="submit" name="submit" value="Login" class="btn btn-primary shadow p-2 mb-5 bg-black rounded">
            <a href="register.php" class="btn btn-primary shadow p-2 mb-5 bg-black rounded">Sign Up</a>
            </div>
        </div>
        </span>
    </form>
    
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>