<?php
$id=$_POST['id'];

if(!empty($id))
{
    $conn = mysqli_connect('127.0.0.1:3306','root','','hms') or die('Unable To connect');
    $sql ="DELETE FROM patientinfo WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "New record deleted successfully";
        header("Location:../index.html");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}else{
    echo "All Field required";
    die();
}

?>