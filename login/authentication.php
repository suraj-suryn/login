<?php      
session_start();
if(isset($_SESSION['login_id']))
{
    if(isset($_SESSION['pageStore']))
    {
        $pageStore = $_SESSION['pageStore'];
        header("location: $pageStore");
    }
}
    include('connect.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  

    if (empty($_POST['user']) || empty($_POST['pass'])) {
        # code...
        header("location: login.php?Empty=Please fill in the blank");
    }
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from register where email = '$username' and password = '$password'";  
        $fullName = "select fullName from register where email = '$username' and password = '$password'"; 
		

        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            
            $_SESSION['login_id'] =  $fullName;
                if(isset($_SESSION['pageStore']))
                {
                    $pageStore=$_SESSION['pageStore'];
                }
                else{
				$proreslt=$row['fullName'];
                header("location: index.php?UserName=$proreslt");
                }//
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            header("location: login.php?err=Invalid username or password.");  
        }     
?>  