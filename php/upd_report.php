<?php
$id=$_POST['id'];
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
    $sql ="UPDATE report SET p_name='$user_name',p_mail='$user_email',p_gender='$gender',doc_name='$doc_name',diagnosis='$diagnosis',blood_pressure='$bp',blood_group='$bg',medication='$medication',date='$date',revisit_date='$revisit_date' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo " successfully inserted";
        header("Location:medical_history.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}else{
    echo "All Field required";
    die();
}

?>