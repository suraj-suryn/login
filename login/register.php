<?php
include("register_db.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rlform.css">
	<link rel = "stylesheet" type = "text/css" href = "common.css">
    <title>Register</title>
</head>
<body>
<div id="header"><h1 id="portal"><u>EXAM&nbsp PORTAL</u></h1></div>
<div id="body">
	<div id="image">
		<img src="https://webline.org.in/exam/img//design200/background.png" width="100%" height="100%">
	</div>
    <div class="rlform">
        <div class="rlform rlform-wrapper">
            <div class="rlform-box">
                <div class="rlform-box-inner">
                    <form action="register_db.php" method="post" onSubmit="return validPassword()">
                        <p>Let's create your account</p>
                        <div class="rlform-group">
                            <?php 
                                if (@$_GET['Empty']==true) 
                                {?>
                                 <?php   echo $_GET['Empty']?>
                                <?php }
                            ?>
                        </div>
                        <div class="rlform-group">
                        <label for="fullName">Full Name</label>
                            <input type="text" name="fullName" class="rlform-input" id="fullName" required>            
                        </div>
                        <div class="rlform-group">
                            <label for="email"> Email</label>
                            <input type="email" name="email" class="rlform-input" id="email" required>            
                        </div>
						<div class="rlform-group">
                            <label for="mobileN"> Mobile number</label> 
							<input type="number" maxlength="10" name="mobile" class="rlform-input" id="number" required>           
                        </div>
                        <div class="rlform-group">
                            <label for="password">Password</label>
                            <input type="password" name="newPassword" value="" class="rlform-input" id="newPass" required>
                        </div>
                        <div class="rlform-group">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" name="conformPassword" value="" class="rlform-input" id="conformPass" required>
                        </div>
                        <button class="rlform-btn" name="signUp">Sign Up</button>
                        <br><br><div class="text-foot">Already have an account? <a href="login.php">Login</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	
</div>
    <script>
        function validPassword()
        {
            if(newPassword.value!=conformPassword.value)
            {
                conformPass.setCustomValidity("Password do not match.");
            }
        }
    </script>
</body>

</html>