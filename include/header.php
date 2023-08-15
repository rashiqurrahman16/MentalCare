<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Care</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    </script>
    <link rel="stylesheet" href="/style/header.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js"
        integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    </script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-info bg-info">
        <h5 class="text-white">Mental Care</h5>
        <div class="mr-auto"></div>
        <ul class="navbar-nav">
            <?php

            if (isset($_SESSION['admin'])) {

                $user = $_SESSION['admin'];
                echo '
                <list class="nav-item"><a href="" class="nav-link text-white">', $user, '</a></list>
                <list class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a></list>
               ';
            } elseif (isset($_SESSION['doctor'])) {
                $user = $_SESSION['doctor'];
                echo '
                <list class="nav-item"><a href="" class="nav-link text-white">', $user, '</a></list>
                <list class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a></list>
               ';
            } elseif (isset($_SESSION['patient'])) {
                $user = $_SESSION['patient'];
                echo '
                <list class="nav-item"><a href="" class="nav-link text-white">', $user, '</a></list>
                <list class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a></list>
               ';
            } else {
                echo '
                <list class="nav-item"><a href="index.php" class="nav-link text-white">Home</a></list>
                <list class="nav-item"><a href="adminlogin.php" class="nav-link text-white">Admin</a></list>
                <list class="nav-item"><a href="doctorlogin.php" class="nav-link text-white">Doctor</a></list>
                <list class="nav-item"><a href="patientlogin.php" class="nav-link text-white">Patient</a></list>
                ';
            }

            ?>
        </ul>
    </nav>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>