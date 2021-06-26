<?php
$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$doc_name=$_POST['doc_name'];
$description=$_POST['description'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$time=$_POST['time'];

if(!empty($user_name) || !empty($user_email) || !empty($doc_name) || !empty($description) || !empty($gender) || !empty($date) || !empty($time))
{
    $conn = mysqli_connect('127.0.0.1:3306','root','','hms') or die('Unable To connect');
    $sql ="INSERT INTO `appointment`(p_name, p_mail, p_gender, doc_name, description, date, time, status) VALUES ('$user_name','$user_email','$gender','$doc_name','$description','$date','$time',0)";
    if ($conn->query($sql) === TRUE) {
        echo " successfully inserted";
        header("Location:p_appoint.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}else{
    echo "All Field required";
    die();
}

?>