<html>

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
        <a href="javascript:void(0);" class="icon" id="myTopnav" onclick="myFunction()" style="color: white;">
            ☰
        </a>
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">HMS</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap mr-auto">
                <!-- <a href="#" class="navlink">Logout</a>   -->
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
                            <a class="nav-link" href="#">
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
                    <h3>Doctors</h3>
                    <hr>
                    <div class="table-responsive">
                        <!-- <table class="table caption-top"> -->

                        <!-- <tr>
            
            <th>Name</th>
            <th>Specialization</th>
            <th>Consulting Fess</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Gender</th>
            <th>Email</th>
            </tr> -->

                        <!-- php code -->
                        <?php
         
            $id=$_GET['id'];
            $conn = mysqli_connect('127.0.0.1:3306','root','','hms') or die('Unable To connect');
            $sql="SELECT * FROM `doctorinfo` where id=$id";
            $result=$conn->query($sql);

            if($result-> num_rows > 0){
            while($rows = $result->fetch_assoc())
            {
            ?>
                        <form method='post' action='docupd.php'>
                            <input type="hidden" name="id" value="<?php echo $rows['id']?>">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" value="<?php echo $rows["name"]; ?>"
                                    placeholder="Name" required>
                            </div><br>

                            <div class="form-group">
                                <input type="text" class="form-control" name="specialization"
                                    value=" <?php echo $rows["specialization"]; ?> " placeholder="Specialization"
                                    required>
                            </div><br>
                            <div class="form-group">
                                <input type="text" class="form-control" name="fees"
                                    value="<?php echo $rows["fees"]; ?> " placeholder="Consulting Fess" required>
                            </div><br>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address"
                                    value="<?php echo $rows["address"]; ?>" placeholder="Address" required>

                            </div><br>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact"
                                    value="<?php echo $rows["contact"]; ?>" placeholder="Contact" required>

                            </div><br>



                            <div class="form-group">
                                <label class="block">
                                    Gender
                                </label>
                                <div class="clip-radio radio-primary">
                                    <input type="radio" id="rg-female" name="gender" value="female"
                                        <?php if($rows["gender"] == "female"){echo "checked"; }?>>
                                    <label for="rg-female">
                                        Female
                                    </label>
                                    <input type="radio" id="rg-male" name="gender" value="male"
                                        <?php if($rows["gender"] == "male"){echo "checked"; }?>>
                                    <label for="rg-male">
                                        Male
                                    </label>
                                </div>
                                <br>

                                <div class="form-group">

                                    <input type="email" class="form-control" name="email" id="email"
                                        value="<?php echo $rows["email"]; ?>" onBlur="userAvailability()"
                                        placeholder="Email" required>
                                </div><br>
                                <button type="submit" class="btn btn-primary pull-right" id="submit" name="save">
                                    Save
                                </button>
                        </form>
                        <form method='post' action='docdel.php'>
                            <input type="hidden" name="id" value="<?php echo $rows['id']?>">
                            <button type="submit" class="btn btn-primary pull-right" id="submit" name="save">
                                Delete
                            </button>
                        </form>
                    </div>

                    <?php 
            }}
            ?>

                    <!-- </table> -->

                </div>




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