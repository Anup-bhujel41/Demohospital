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
    <title>Welcome Admin</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-dark bg-primary fixed-top flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">HMS</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap mr-auto">
                <a href="../php/adminlogout.php" class="navlink">Logout</a>
            </li>
        </ul>
        <!-- Navbar content -->
    </nav>
    <!-- container -->
    <div class="conatiner">

        <div class="row">

            <!-- sidebar -->

            <div class="col-md-2 bg-light d-none d-md-block sidebar">
                <div class="left-sidebar">

                    <ul class="nav flex-column sidebar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="../php/admindashboard.php">
                                <svg class="bi bi-chevron-right" width="24" height="24" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" />
                                </svg>
                                Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="managedoctor.php">
                                <svg class="bi bi-chevron-right" width="24" height="24" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" />
                                </svg>
                                Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="managepatient.php">
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
                                Medical History</a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Main -->

            <main role="main" class="col-md-12 ml-sm-auto px-4 container">
                <div class="admin-main">
                    <h3>Admin Dashboard</h3>
                    <hr>


                    <!-- Main Body -->
                    <div class="row container mb-3">
                        <div class="card" style="width: 40%; margin-right: 30px;">
                            <img src="#" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="managedoctor.php" class="btn btn-primary">Manage Doctor</a>
                                <!-- <a href="#" class="btn btn-primary">Read More</a> -->
                            </div>
                        </div>

                        <div class="card" style="width: 40%;">
                            <img src="@" class="card-img-top" alt="...">
                            <div class="card-body">


                                <a href="managepatient.php" class="btn btn-primary">Manage Patient</a>
                            </div>
                        </div>
                    </div>
                    <div class="row container">
                        <div class="card" style="width: 40%; margin-right: 30px;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">


                                <a href="admin_appointment.php" class="btn btn-primary">Manage Appointments</a>
                            </div>
                        </div>

                        <div class="card" style="width: 40%;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">

                                <a href="ad_medicalhis.php" class="btn btn-primary">Medical History</a>
                            </div>
                        </div>
                    </div>
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
</body>

</html>