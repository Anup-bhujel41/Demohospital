<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('127.0.0.1:3306','root','','hms') or die('Unable To connect');
        $result = mysqli_query($con, "SELECT * FROM patientinfo WHERE name='".$_POST["username"]."' and password = '". $_POST["password"]."'");
        $row  = mysqli_num_rows($result);
        if($row==1){
            $_SESSION['patient_username'] = $_POST["username"];
            // Redirect user to index.php
            print("redirecting");
            header("Location: ../html/patientdashoard.html");
        }else {
            $message = "Invalid Username or Password!";
            header("Location: ../html/patientlogin.html");
           
        }
    }
    echo $message;
    
?>