<?php 
require_once("controllers/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?php titlePrefix();?>Password Reset</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/my-login.css">
	<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon"/>
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="assets/logo.jpg">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Reset Password</h4>
							<form method="POST">
							 
								<div class="form-group">
									<label for="new-password">New Password</label>
									<input id="new-password" type="password" class="form-control" name="password" required autofocus data-eye>
									<div class="form-text text-muted">
										Make sure your password is strong and easy to remember
									</div>
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Reset Password
									</button>
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