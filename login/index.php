<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="index.css">
    <title>Index</title>
</head>
<body>
	<div id="header">
		
		<h2><?php
			if(@$_GET['UserName']==true)
			{?>
				Hi!
			<?php
				echo $_GET['UserName'];
			}
			?></h2>
		<h1 id="portal"><u>EXAM&nbsp PORTAL</u></h1>
	</div>
	<div class="menu">
		<a class="active" href="#home">Home</a>
		<a href="#">&nbsp C&nbsp</a>
		<a href="#">C++</a>
		<a href="#">Java</a>
		<a id="A" href="login.php">Login</a>|<a id="A" href="register.php">Register</a>
	</div>
</body>
</html>