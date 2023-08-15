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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js"
        integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="/style/style.css">
</head>

<body>
    <?php
    include("include/header.php")
    ?>

    <div style="margin-top: 50px"></div>

    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3 mx-1 shadow">
                    <img src="img/info.jpg" style="width: 100%">
                </div>
                <div class="col-md-4 mx-1 shadow">
                    <img src="img/patient.jpg" style="width: 100%">
                    <a href="account.php">
                        <button class="btn btn-success" style="margin-left: 40%">create an account</button>
                    </a>
                </div>
                <div class="col-md-4 mx-1 shadow">
                    <img src="img/doctor.webp" style="width: 100%">
                    <a href="">
                        <button class="btn btn-success" style="margin-left: 40%">apply</button>
                    </a>
                </div>

            </div>
        </div>
    </div>

</body>

</html>