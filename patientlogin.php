<?php
session_start();

include("include/connection.php");

if (isset($_POST['login'])) {

	$uname = $_POST['uname'];
	$pass = $_POST['pass'];


	

	if (empty($uname)) {
		echo "<script>alert('Enter Username')</script>";
	} elseif (empty($pass)) {
		echo "<script>alert('Enter Password')</script>";
	} else{
		$query = "SELECT * FROM patient WHERE username='$uname' AND password='$pass'";
		$res = mysqli_query($connect, $query);

		if (mysqli_num_rows($res)==1) {
			echo "<script>alert('done')</script>";
			$_SESSION['patient'] = $uname;

			header("Location:patient/index.php");
		} else {
			echo "<script>alert('Invalid Acocunt')</script>";
		}
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Patient Login Page</title>
</head>
<body style="background-image: url(img/back.jfif); background-repeat: no-repeat;background-size: cover;">
	<?php
	include("include/header.php");

	?>

	<div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 my-5 jumbotron">
					<h5 class="text-center">Patient Login</h5>

					<form method="post">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="pass" class="form-control" autocomplete="off">
							</div>

							<input type="submit" name="login" class="btn btn-success" value="Login">
							<p>I dont have an account<a href="account.php">">Click Here...</a></p>
						</form>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
</body>
</html>