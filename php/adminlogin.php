<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('127.0.0.1:3306','root','','hms') or die('Unable To connect');
        $result = mysqli_query($con, "SELECT * FROM adminlogin WHERE username='".$_POST["username"]."' and password = '". $_POST["password"]."'");
        $row  = mysqli_num_rows($result);
        if($row==1){
            $_SESSION['username'] = $_POST["username"];
            // Redirect user to index.php
            print("redirecting");
            header("Location:../php/admindashboard.php");
        }else {
            $message = "Invalid Username or Password!";
            header("Location:../html/adminlogin.html");
              
        }
    }
    echo $message;
    
?>