<?php
$name=$_POST['name'];
$city=$_POST['city'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];

if(!empty($name) || !empty($city) || !empty($address) || !empty($contact) || !empty($gender) || !empty($email) || !empty($password))
{
    $conn = mysqli_connect('127.0.0.1:3306','root','','hms') or die('Unable To connect');
    $sql ="INSERT INTO patientinfo(`name`, `address`, `city`, `contact`, `gender`, `email`, `password`) VALUES ('$name','$city','$address','$contact','$gender','$email','$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location:../html/patientlogin.html");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}else{
    echo "All Field required";
    die();
}

?>