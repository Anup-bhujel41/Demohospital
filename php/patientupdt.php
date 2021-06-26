<?php
$id=$_POST['pid'];
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
    $sql ="UPDATE patientinfo set name='$name', address='$address', city='$city', contact=$contact,gender='$gender', email='$email', password='$password' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location:patientprofile.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}else{
    echo "All Field required";
    die();
}

?>