<?php 
require_once("controllers/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?php titlePrefix();?>Patient Registration</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/my-login.css">
	<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon"/>

</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="assets/kenyamrslogo.png">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Patient Registration </h4>
							<form method="POST">

								<div class="form-group">
									<label for="fname">First Name</label>
									<input id="fname" type="text" class="form-control" name="fname" required autofocus>
								</div>

								<div class="form-group">
									<label for="lname">Last Name</label>
									<input id="lname" type="text" class="form-control" name="lname" required autofocus>
								</div>
							 
								<div class="form-group">
									<label for="uname">User Name</label>
									<input id="uname" type="text" class="form-control" name="uname" required autofocus>
								</div>

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" required>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>

								<div class="form-group">
									<label for="cpassword">Confirm Password</label>
									<input id="cpassword" type="password" class="form-control" name="cpassword" required data-eye>
								</div>

								<div class="form-group">
									<label>
										<input type="checkbox" name="aggree" value="1"> I agree to the Terms and Conditions
									</label>
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="margin-top20 text-center">
									Already have an account? <a href="index.php">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						<?php include_once('views/footer.php');?> 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>