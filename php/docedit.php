<?php
$id=$_POST['id'];
$name=$_POST['name'];
$specialization=$_POST['specialization'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$fees=$_POST['fees'];


if(!empty($name) || !empty($specialization) || !empty($address) || !empty($contact) || !empty($gender) || !empty($email) || !empty($fees) )
{
    $conn = mysqli_connect('127.0.0.1:3306','root','','hms') or die('Unable To connect');
    $sql ="UPDATE doctorinfo set name='$name', address='$address', specialization='$specialization', contact=$contact,gender='$gender', email='$email',fees='$fees' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Data saved successfully";
        header("Location:doctorprofile.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}else{
    echo "All Field required";
    die();
}

?>