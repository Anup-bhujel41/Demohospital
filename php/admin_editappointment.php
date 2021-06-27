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
    <title>Edit Appointment</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-dark bg-primary fixed-top flex-md-nowrap p-0 shadow">
        <a href="javascript:void(0);" class="icon" id="myTopnav" onclick="myFunction()" style="color: white;">
            ☰
        </a>
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">HMS</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap mr-auto">
                <!-- <a href="../html/doctorlogin.html" class="navlink">Logout</a>   -->
            </li>
        </ul>
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
                            <a class="nav-link active" href="admindashboard.php">
                                <svg class="bi bi-chevron-right" width="24" height="24" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" />
                                </svg>
                                Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="managedoctor.php">
                                <svg class="bi bi-chevron-right" width="24" height="24" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" />
                                </svg>
                                Doctor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="managepatient.php">
                                <svg class="bi bi-chevron-right" width="24" height="24" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" />
                                </svg>
                                Patient</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ad_medicalhis.php">
                                <svg class="bi bi-chevron-right" width="24" height="24" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" />
                                </svg>
                                Medical history</a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- Main -->

            <main role="main" class="col-md-12 ml-sm-auto px-4 container">
                <div class="admin-main">
                    <h3>Edit Appointment</h3>
                    <hr>
                    <form method="post" action="admin_updappointment.php">
                        <input type="hidden" name="appoint_id" value=<?php echo $_GET['id']?>>
                        <?php
            $conn = mysqli_connect('127.0.0.1:3306','root','','hms') or die('Unable To connect');
           
            $sql="SELECT * FROM appointment where id=".$_GET['id'];
            $result=$conn->query($sql);
            // echo $result;

            if($result->num_rows > 0){
            while($rows = $result->fetch_assoc())
            {
                $active_status=$rows['status'];
            }}
            ?>
                        <select name='status'>
                            <option value=0 <?php echo ($active_status==0) ? "selected":''?>>Pending</option>
                            <option value=1 <?php echo ($active_status==1) ? "selected":''?>>Approved</option>
                            <option value=2 <?php echo ($active_status==2) ? "selected":''?>>Rejected</option>
                        </select>
                        <button type="submit" name="submit">Submit</button>
                    </form>


                </div>

            </main>
        </div>
    </div>

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