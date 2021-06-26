<?php
$name=$_POST['name'];
$specialization=$_POST['specialization'];
$fees=$_POST['fees'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];

if(!empty($name) || !empty($specialization) || !empty($fees) || !empty($address) || !empty($contact) || !empty($gender) || !empty($email) || !empty($password))
{
    $conn = mysqli_connect('127.0.0.1:3306','root','','hms') or die('Unable To connect');
    $sql ="INSERT INTO `doctorinfo`(`name`, `specialization`, `fees`, `address`, `contact`, `gender`, `email`, `password`) VALUES ('$name','$specialization','$fees','$address','$contact','$gender','$email','$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location:managedoctor.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}else{
    echo "All Field required";
    die();
}

?>