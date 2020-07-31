<?php

session_start();

//if session exit, user neither need to signin nor nedd to signup

//Register
if(isset($_POST['signUp']))
{
    if(empty($_POST['fullName']) || empty($_POST['email']) || empty($_POST['newPassword'])|| empty($_POST['mobile']) ){
        
        header("location: register.php?Empty=Please fill up all the required field.");
        // echo "Please fill up all the required field.";
     }
     else
     {
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $password = $_POST['newPassword'];
		// $confpass = $_POST['conformPassword'];
		$mobile = $_POST['mobile'];
        // $hash = password_hash($password, PASSWORD_DEFAULT);
       
        include('config.php');
            //check connection
        if($conn->connect_error)
        {
            echo "connection failed:".$conn->connect_error;
        }
        $sql = "SELECT email from register where email='".$email."'";
        $rs = $conn->query($sql);
        if ($rs->num_rows > 0)
        {
            echo "Username already registered.";
        }
        else
        {
            $sql = "INSERT into register(fullName, email, password, mobile) values('$fullName','$email','$password','$mobile')";
            echo "Registration Sucsess ";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
        }
        $conn->close();
		
     }
}

?>