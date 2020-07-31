<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login system</title>  
    <!-- // insert style.css file inside index.html   -->
    <link rel = "stylesheet" type = "text/css" href = "login.css">
	<link rel = "stylesheet" type = "text/css" href = "common.css">
</head>
<body >
<div class="bg">
<h1 id="portal" align="centre"><u>EXAM&nbsp PORTAL</u></h1>
<div id = "frm">  
        <h1 align="centre"><u>Login</u></h1>  
        <span id="UpErr">
		<?php
			if(@$_GET['err']==true)
			{
				echo $_GET['err'];
			}
			?>
		</span>
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <!-- <label> UserName: </label>   -->
                <input placeholder="Username" type = "email" id ="user" name  = "user" class="inputbox" required><span id="UErr"></span>
                  
            </p>  
            <p>  
                <!-- <label> Password: </label>   -->
                <input placeholder="Password" type = "password" id ="pass" name  = "pass" class="inputbox" required> <span id="PErr"></span>
            </p>  
            <p>     
                <input type =  "submit" id = "btn" placeholder=" Login " value="Login" />
                <div class="register"><a href="register.php">Create new account</a></div>
            </p>  
        </form>  
    </div> 
</div>	
</body>
</html>