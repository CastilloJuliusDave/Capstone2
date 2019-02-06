<?php
	if (isset($_REQUEST['submit_login'])) {
		extract($_REQUEST);
		$login = $user->check_login($emailoruser,$password);
		if ($login) {
			//if register success
			header("location:home.php");
		}else{
			//failed register
			echo"Incorrect email or password";
		}
	}
/*
	if (isset($_SESSION['id'])) {
		header("location:ad.php");
	}else{
		header("location:asdasd.php");
	}*/

?>


<div class="col-lg-4 p-1">
	<div class="card login_card m-2 text-white">
		<div class="card-header login_card-header">
			<h3>Sign In</h3>
		</div>
		<div class="card-body">
			<form action="" method="post" name="login">
			    <div class="form-group">
					<label for="username">User Name or Email</label>
					<input class="form-control" type="text" name="emailoruser" required="">
			    </div>
			    <div class="w-100"><br></div>
			    <div class="form-group">
					<label for="password">Password</label>
					<input class="form-control" type="password" name="password" required="">
			    </div>
			    <div class="w-100"><br></div>
				<div class="form-group">
					<input class="btn btn-primary float-right" onclick="return(submitlogin())" type="submit" name="submit_login" value="Login">
				</div>
			</form>
		</div>
		<div class="card-footer">
			<div class="d-flex justify-content-center links login_links">
				<a href="#">Forgot your password?</a>
			</div>
		</div>
	</div>
</div>