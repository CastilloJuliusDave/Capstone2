<?php
	include 'core/init.php';

		if (isset($_REQUEST['submit_login'])) {
		extract($_REQUEST);
		$login = $user->check_login($employeeID, $password);
		if ($login) {
			//if register success
			header("location:home.php");
		}else{
			//failed register
			header("location:index.php?msg=Login Failed PLease try again.");
		}
	}

	if (isset($_SESSION['id'])) {
		if ($_SESSION['type'] == 1) {
			header("location:home.php");
		}
		
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Dashboard HTML Template</title>
		<meta charset="utf-8">
		<meta content="ie=edge" http-equiv="x-ua-compatible">
		<meta content="template language" name="keywords">
		<meta content="Tamerlan Soziev" name="author">
		<meta content="Admin dashboard html template" name="description">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<link href="favicon.png" rel="shortcut icon">
		<link href="apple-touch-icon.png" rel="apple-touch-icon">
		
		<script src="assets/js/sweetalert.min.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
		<link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
		<link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
		<link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
		<link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
		<link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
		<link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
		<link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
		<link href="assets/css/main.css" rel="stylesheet">

	</head>

	<body class="auth-wrapper">
		<div class="all-wrapper menu-side with-pattern">
			<div class="auth-box-w">
				<h4 class="auth-header">
				Login Form
				</h4>
				<form action="" method="post" name="login">
					<div class="form-group">
						<label for="">User Name or Email</label><input class="form-control" name="employeeID" required placeholder="Enter your username" type="text">
						<div class="pre-icon os-icon os-icon-user-male-circle"></div>
					</div>
					<div class="form-group">
						<label for="">Password</label><input class="form-control" name="password" required placeholder="Enter your password" type="password">
						<div class="pre-icon os-icon os-icon-fingerprint"></div>
					</div>
					<div class="buttons-w">
						<input class="btn btn-primary" type="submit" name="submit_login" value="Login">
					</div>
				</form>
			</div>
		</div>
	</body>


<!-- 	<script>
swal("Account Logged IN!", "Redirecting to Home Page!", "success");
swal("Incorrect Employee or Password!", "Please try again!", "error");
</script> -->


</html>
