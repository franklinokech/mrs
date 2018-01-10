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
  <link rel="stylesheet" type="text/css" href="resources/datepicker/datepicker.css">
  <script src="resources/datepicker/datepicker.js"></script>
	<script src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript">
    //function to disable submit button until the user checked the agreement box
        $(function () {
            $('.chk1').change(function () {
                if ($(this).is(":checked")) {
                    $('#submit').removeAttr('disabled');
                }
                else {
                    var isChecked = false;
                    $('.chk1').each(function () {
                        if ($(this).is(":checked")) {
                            $('#submit').removeAttr('disabled');
                            isChecked = true;
                        }
                    });
                    if (!isChecked) {
                        $('#submit').attr('disabled', 'disabled');
                    }
                }
 
 
            })
        });

        //function to check password meter
        $(function () {
        $("#password").bind("keyup", function () {
            //TextBox left blank.
            if ($(this).val().length == 0) {
                $("#password_strength").html("");
                return;
            }
 
            //Regular Expressions.
            var regex = new Array();
            regex.push("[A-Z]"); //Uppercase Alphabet.
            regex.push("[a-z]"); //Lowercase Alphabet.
            regex.push("[0-9]"); //Digit.
            regex.push("[$@$!%*#?&]"); //Special Character.
 
            var passed = 0;
 
            //Validate for each Regular Expression.
            for (var i = 0; i < regex.length; i++) {
                if (new RegExp(regex[i]).test($(this).val())) {
                    passed++;
                }
            }
 
 
            //Validate for length of Password.
            if (passed > 2 && $(this).val().length > 8) {
                passed++;
            }
 
            //Display status.
            var color = "";
            var strength = "";
            switch (passed) {
                case 0:
                case 1:
                    strength = "Weak";
                    color = "red";
                    break;
                case 2:
                    strength = "Good";
                    color = "darkorange";
                    break;
                case 3:
                case 4:
                    strength = "Strong";
                    color = "green";
                    break;
                case 5:
                    strength = "Very Strong";
                    color = "darkgreen";
                    break;
            }
            $("#password_strength").html(strength);
            $("#password_strength").css("color", color);
        });
    });
    </script>
							
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
							<form method="POST" action="controllers/processregisterpatient.php">

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
                  <label for="email">Date Of Birth</label>
                  <input id="dob" type="text" class="form-control datepicker" name="dob" required>
                </div>

                <div class="form-group">
                  <label for="mobilephone">Phone Number</label>
                  <input id="mobilephone" type="text" class="form-control" name="mobilephone" required>
                </div>

								<div class="form-group">
									<label for="email">Postal Address</label>
									<textarea class="form-control" id="postalAddress" name="postalAddress"></textarea>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>
                 <span id="password_strength"></span> 
								<div class="form-group">
									<label for="cpassword">Confirm Password</label>
									<input id="cpassword" type="password" class="form-control" name="cpassword" required data-eye>
								</div>
								
								
								<div class="form-group">
									<label>
										<input type="checkbox" class="chk1"  id="agree" name="aggree" value="1"> I agree to the Terms and Conditions
									</label>
								</div>

								<div class="form-group no-margin">
									<button type="submit" id="submit" disabled="disabled" name="submit" class="btn btn-primary btn-block">
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

	
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/my-login.js"></script>
</body>
</html>