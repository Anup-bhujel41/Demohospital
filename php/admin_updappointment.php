<?php
                    if(isset($_POST['submit'])){
                        $appoint_id=$_POST['appoint_id'];
                        $status=$_POST['status'];
                        $conn = mysqli_connect('127.0.0.1:3306','root','','hms') or die('Unable To connect');
                        $sql ="UPDATE appointment set status=$status WHERE id=$appoint_id";
                        if ($conn->query($sql) === TRUE) {
                            echo "Data saved successfully";
                            header("Location:admin_appointment.php");
                          } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                          }
                    


                    }
                    ?>
