<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/dashboardcss.css">
    <link rel="stylesheet" href="../css/appointment.css">
    <title>Medical Report Form</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-dark bg-primary fixed-top flex-md-nowrap p-0 shadow">
        <a href="javascript:void(0);" class="icon" id="myTopnav" onclick="myFunction()" style="color: white;">
            ☰
        </a>
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">HMS</a>
        <!-- <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap mr-auto">
                <a href="../html/patientlogin.html" class="navlink">Logout</a>  
            </li>
        </ul> -->
        <!-- Navbar content -->
    </nav>
    <!-- container -->
    <div class="conatiner">
        <div class="row">
            <!-- sidebar -->
            <div class="bg-light sidebar resp-block" id="resp-block">
                <div class="left-sidebar">
                    <ul class="nav flex-column sidebar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="../html/doctordashboard.html">
                                <svg class="bi bi-chevron-right" width="24" height="24" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" />
                                </svg>
                                Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manageappointment.php">
                                <svg class="bi bi-chevron-right" width="24" height="24" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" />
                                </svg>
                                Appointment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doc_patview.php">
                                <svg class="bi bi-chevron-right" width="24" height="24" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" />
                                </svg>
                                Patient</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="medical_history.php">
                                <svg class="bi bi-chevron-right" width="24" height="24" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" />
                                </svg>
                                Medical History</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Main -->

            <main role="main" class="col-md-12 ml-sm-auto px-4 container">
                <div class="admin-main">


                    <div id="container">
                        <!--This is a division tag for body container-->
                        <div id="body_header">
                            <!--This is a division tag for body header-->
                            <h1>Medical Report Form</h1>


                        </div>
                        <form action="upd_report.php" method="post">

                            <fieldset>
                                <input type="hidden" name="id" value=<?php echo $_GET['id']?>>
                                <?php
                                $id=$_GET['id'];
                                $conn = mysqli_connect('127.0.0.1:3306','root','','hms') or die('Unable To connect');
                                // $doc_name=$_SESSION['doctor_username'];
                                $sql="SELECT * FROM report WHERE id='$id'";
                                $result=$conn->query($sql);

                                if($result-> num_rows > 0){
                                while($rows = $result->fetch_assoc())
                                {
                                ?>
                                <input type="hidden" name="id" value="<?php echo $rows['id']?>">
                                <legend><span class="number">1</span>Patient basic details</legend>
                                <label for="name"> Name*:</label>
                                <input type="text" id="name" name="user_name" placeholder="name" required
                                    pattern="[a-zA-Z0-9]+" value="<?php echo $rows['p_name']?>">

                                <label for="mail">Email*:</label>
                                <input type="text" id="mail" name="user_email" placeholder="abc@xyz.com" required
                                    value="<?php echo $rows['p_mail']?>">

                                <label for="Gender">Gender</label>
                                <div class="appoint-gender">
                                    <input type="radio" id="rg-female" name="gender" value="female"
                                        <?php if($rows["p_gender"] == "female"){echo "checked"; }?>>
                                    <label for="rg-female">
                                        Female
                                    </label>
                                    <input type="radio" id="rg-male" name="gender" value="male"
                                        <?php if($rows["p_gender"] == "male"){echo "checked"; }?>>
                                    <label for="rg-male">
                                        Male
                                    </label>

                                    <br>
                                    <br>
                                    <br>

                                    <legend>
                                        <span class="number">2</span>Diagnosis
                                    </legend>
                                    <label for="Diagnosis">
                                        Diagnoised by*:
                                    </label>
                                    <input type="text" id="mail" name="doc_name" value="<?php echo $rows['doc_name']?>"
                                        required>

                                    <label for="appointment_description">
                                        Diagnosis:
                                    </label>
                                    <input type="text" id="describe" name="diagnosis"
                                        value="<?php echo $rows['diagnosis']?>">

                                    <label for="BP">
                                        Blood Pressure*:
                                    </label>
                                    <input type="int" name="bp" value="<?php echo $rows['blood_pressure']?>"
                                        required></input>
                                    <br>
                                    <br>

                                    <label for="Blood-Group">
                                        Blood-Group*:
                                    </label>
                                    <input type="text" name="bg" value="<?php echo $rows['blood_group']?>"
                                        required></input>
                                    <br>


                                    <label for="Medication">
                                        Medication*:
                                    </label>
                                    <input type="text" name="medication" value="<?php echo $rows['medication']?>"
                                        required></input>
                                    <br>



                                    <label for="date">
                                        Date*:
                                    </label>
                                    <input type="date" name="date" value="<?php echo $rows['date']?>" required></input>
                                    <br>
                                    <label for=" Revisit-Date">
                                        Revisit-Date*:
                                    </label>
                                    <input type="date" name="revisit_date" value="<?php echo $rows['revisit_date']?>"
                                        required></input>
                                    <br>



                                    <?php
                                }}
                                ?>






                            </fieldset>
                            <button type="submit">Update Medical report</button>
                        </form>


                    </div>
            </main>
        </div>
    </div>
    <script type="text/javascript" src="https://github.com/rubyeffect/easy_fill/tree/master/lib/easy_fill-0.0.1.min.js">
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    <script>
    function myFunction() {
        var x = document.getElementById("resp-block");
        if (x.className === "col-md-12 ml-sm-auto px-md-4 container myBlock") {
            x.style.display = "none";
            x.className = "col-md-12 ml-sm-auto px-md-4 container";
        } else {
            x.style.display = "block";
            x.className = "col-md-12 ml-sm-auto px-md-4 container myBlock";
        }
    }
    </script>
</body>

</html>