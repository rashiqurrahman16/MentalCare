<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include("../include/header.php");
    include("../include/connection.php");

    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left: -20px;">
                    <?php
                    include("sidenav.php");

                    ?>

                </div>
                <div class="col-md-10">
                    <h5 class="text-center">Edit Doctor</h5>

                    <?php

                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        $query = "SELECT * FROM doctors WHERE id='$id'";
                        $res = mysqli_query($connect, $query);

                        $row = mysqli_fetch_array($res);
                    }

                    ?>
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="text-center">Doctors Details</h5>

                            <h5>ID : <?php echo $row['id']; ?></h5>
                            <h5>Firstname : <?php echo $row['firstname']; ?></h5>
                            <h5>Surname : <?php echo $row['surname']; ?></h5>
                            <h5>Username : <?php echo $row['username']; ?></h5>
                            <h5>Email : <?php echo $row['email']; ?></h5>
                            <h5>Phone : <?php echo $row['phone']; ?></h5>
                            <h5>Gender : <?php echo $row['gender']; ?></h5>
                            <h5>Data Registered : <?php echo $row['data_reg']; ?></h5>
                            <h5>Salary : <?php echo $row['salary']; ?></h5>
                        </div>
                        <div class="col-md-4">
                            <h5 class="text-center">Update Salary</h5>

                            <form method="POST">
                                <label>Enter Doctor's Salary</label>
                                <input type="number" name="salary" class="form-control" autocomplete="off"
                                    placeholder="Enter Doctor's Salary" value="<?php echo $row['salary'] ?>">
                            </form>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>


</body>

</html>