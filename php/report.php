<?php
$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$gender=$_POST['gender'];
$doc_name=$_POST['doc_name'];
$diagnosis=$_POST['diagnosis'];
$bp=$_POST['bp'];
$bg=$_POST['bg'];
$medication=$_POST['medication'];
$date=$_POST['date'];
$revisit_date=$_POST['revisit_date'];

if(!empty($user_name) || !empty($user_email) || !empty($doc_name) || !empty($diagnosis) || !empty($gender) || !empty($date) || !empty($time) || !empty($bp) || !empty($bg) || !empty($revisit_date))
{
    $conn = mysqli_connect('127.0.0.1:3306','root','','hms') or die('Unable To connect');
    $sql ="INSERT INTO `report`(p_name, p_mail, p_gender, doc_name, diagnosis, blood_pressure, blood_group, medication, date, revisit_date) VALUES ('$user_name','$user_email','$gender','$doc_name','$diagnosis','$bp','$bg','$medication','$date','$revisit_date')";
    if ($conn->query($sql) === TRUE) {
        echo " successfully inserted";
        header("Location:../html/doctordashboard.html");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}else{
    echo "All Field required";
    die();
}

?>