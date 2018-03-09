<?php session_start()
?>
<!doctype html>
<html lang=''>
	<head>
		<meta charset='utf-8'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles.css">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="script.js"></script>
		<title>Κέντρο Ψυχικής Υγείας</title>
	</head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<style>
		html, body {
			height: 100%;
			width: 100%;
		}

		body {
			font-family: 'Raleway', sans-serif;
			position: relative;
			/*background: rgba(0, 0, 0, 0) url("../img/ptn.png") repeat scroll 0 0;*/
		}

		.in-page {
			min-height: 520px;
		}

		.main {
			position: relative;
		}

		a {
			color: #1b5a7c;
		}

		a:hover, a:focus {
			color: #1b5a7c;
		}

		.btn-cyan {
			background-color: #1b5a7c;
			color: #fff;
		}

		.btn-cyan:hover {
			color: #fff;
			opacity: 0.9;
		}

		.form-control:focus {
			border-color: #1b5a7c;
			box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(24, 204, 162, 0.6);
			outline: 0 none;
		}

		.min-height {
			min-height: 380px;
		}

		.login-screen {
			background-image: url(https://www.squiz.net/__public/Systems/Perspective/FileCache/1-32000/465/prop/header-bg-image.jpg?t=1472431690);
			background-position: center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			-moz-background-size: cover;
			-webkit-background-size: cover;
			position: fixed;
			top: 0;
			bottom: 0;
			right: 0;
			left: 0;
		}

		.login-screen:before {
			content: "";
			background: rgba(0,0,0, 0.5);
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
		}

		.login-center {
			text-align: left;
		}

		.login {
			width: 320px;
			color: #fff;
		}

		.login .login-form {
			text-align: left;
		}

		.login label {
			color: #fff;
		}

		.login-form .input-group .form-control {
			background: none;
			height: 44px;
			color: #ddd;
		}

		.login-form .input-group .input-group-addon {
			background: none;
		}

		.login-form .input-group .input-group-addon .glyphicon {
			color: #1b5a7c;
		}

		.login-form .input-group .form-control::-moz-placeholder {
			color: #fff;
			opacity: 0.3;
		}

		.login .sign-btn input.btn {
			background: #1b5a7c;
			border-color: #1b5a7c;
			color: #fff;
			width: 180px;
		}

		.login .sign-btn a {
			text-decoration: none;
		}

		.login .checkbox {
			margin-top: 20px;
			margin-bottom: 20px;
		}

		.login .forgot {
			display: inline-block;
			margin: 20px 0;
		}
	</style>
	<script>
		$().ready(function() {
			$("#card").flip({
				trigger : 'manual'
			});
		});

		$(".signup_link").click(function() {

			$(".signin_form").css('opacity', '0');
			$(".signup_form").css('opacity', '100');

			$("#card").flip(true);

			return false;
		});

		$("#unflip-btn").click(function() {

			$(".signin_form").css('opacity', '100');
			$(".signup_form").css('opacity', '0');

			$("#card").flip(false);

			return false;

		});
	</script>
	<body class="main">

		<div class="login-screen"></div>
		<div class="login-center">
			<div class="container min-height" style="margin-top: 150px;">
				<div class="row">
					<div align="center">
						<div class="login" id="card">
							<div class="front signin_form">
								<p>
									<b>Εγγραφή</b>
								</p>
								<form class="login-form">
									<div class="form-group">
										<div class="input-group">
											<input type="text" class="form-control" name="name" placeholder="Όνομα">
											<span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
										</div>
									</div>
									<b></b>
									<div class="form-group">
										<div class="input-group">
											<input type="text" class="form-control" name="surname" placeholder="Επίθετο">
											<span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<input type="text" class="form-control" name="id" placeholder="Ταυτότητα">
											<span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<input type="email" class="form-control" name="email" placeholder="Ηλεκτρονική Διεύθυνση">
											<span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
										</div>
									</div>

									<div class="form-group">
										<div class="input-group">
											<input type="password" class="form-control" name="password" placeholder="Κωδικός">
											<span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
										</div>
									</div>

									<div class="form-group">
										<div class="input-group">
											<input type="password" class="form-control" name="password" placeholder="Επιβεβέωση κωδικού">
											<span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
										</div>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox">
											Remember me next time.</label>
									</div>

									<div class="form-group sign-btn">
										<input type="submit" class="btn" value="Εγγραφή">
									</div>
								</form>
							</div>
							<div class="back signup_form" style="opacity: 0;">
								<p>
									Sign Up for Your New Account
								</p>
								<form class="login-form">
									<div class="form-group">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="">
											<span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<input type="text" class="form-control">
											<span class="input-group-btn">
												<button type="button" class="btn btn-cyan">
													<span class="fa fa-refresh"></span>
												</button></span>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<input type="password" class="form-control" placeholder="Confirm Password">
											<span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<input type="email" class="form-control" placeholder="Email">
											<span class="input-group-addon"> <i class="glyphicon glyphicon-envelope"></i> </span>
										</div>
									</div>

									<div class="form-group sign-btn">
										<input type="submit" class="btn" value="Sign up">
										<br>
										<br>
										<p>
											You have already Account So <a href="#" id="unflip-btn" class="signup">Log in</a>
										</p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.0.18/jquery.flip.js"></script>

	</body>
</html>
<?php
include ('post.php');
if (isset($_POST['id']) && isset($_POST['email']) && isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['password'])) {
	$name = $_POST['name'];
	$stmt = $db -> prepare('INSERT INTO patient(patientID,email,firstname,lastname,password) VALUES(:id,:email,:name,:lastname,:password)');
	$stmt -> bindParam(':id', $_POST['id']);
	$stmt -> bindParam(':email', $_POST['email']);
	$stmt -> bindParam(':name', $_POST['name']);
	$stmt -> bindParam(':lastname', $_POST['surname']);
	$stmt -> bindParam(':password', $_POST['password']);
	$stmt -> execute();
	//$result = $stmt->fetch(PDO::FETCH_ASSOC);
	echo "\nThanks $name for the information!\n";
} else {echo "\nYou didn't put all information\n";
}
?>
