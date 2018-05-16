<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Κέντρο Ψυχικής Υγείας</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>

		<!-- CSS -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
		<link rel="stylesheet" href="bootzard-bootstrap-wizard-template/assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootzard-bootstrap-wizard-template/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="bootzard-bootstrap-wizard-template/assets/css/form-elements.css">
		<link rel="stylesheet" href="bootzard-bootstrap-wizard-template/assets/css/style.css">

	</head>

	<style>
		body {
			background-image: url("1.jpg");
		}
	</style>
	<body>

		<!-- Top content -->
		<div class="top-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
						<form id="contact-form" role="form" action="" method="post" class="f1">
							<img src="logo_el.png">
							<br>
							<br>
							<br>
							<h3><strong>Συνδεση</strong></h3>
							<p>
								Συμπληρώστε τα στοιχεία σας για να συνδεθείτε στον λογαριασμό σας
							</p>

							<fieldset>
								<div class="form-group">
									<label class="sr-only" for="id">Ταυτότητα</label>
									<input type="number" name="id" placeholder="Ταυτότητα" class="form-control" id="id">
								</div>
								<div class="form-group">
									<label class="sr-only" for="password">Κωδικός</label>
									<input type="password" name="password" placeholder="Κωδικός" class="form-control" id="password">
								</div>
								<p>
									<strong>Αν δεν έχεις λογαριασμό, δημιούργησε εδώ</strong>
									<br>
									<a href="signupfinal.php" id="flip-btn" class="signup signup_link">Εγγραφή</a>
								</p>
								<div class="f1-buttons">
									<button type="submit" class="btn btn-submit">
										Submit
									</button>
								</div>
							</fieldset>

						</form>
					</div>
					<script>
			$(document).ready(function() {
				jQuery.validator.addMethod("noSpace", function(value, element) {
					return value.indexOf(" ") < 0 && value != "";
				}, "Παρακαλώ σημπληρώστε ξανά χωρίς κενά");

				jQuery.validator.addMethod("sqlValidator", function(value, element) {
					return this.optional(element) || !(/[\s]*((delete)|(exec)|(drop\s*table)|(insert)|(shutdown)|(update)|(\bor\b))/.test(value));
				}, 'Παρακαλώ συμπληρώστε ξανά');

				jQuery.validator.addMethod("xssValidator", function(value, element) {
					return this.optional(element) || !(/\s*script\b[^>]*>[^<]+<\s*\/\s*script\s*/.test(value));
				}, 'Παρακαλώ συμπληρώστε ξανά');

				$('#contact-form').validate({
					rules : {
						id : {
							required : true,
							sqlValidator : true,
							xssValidator : true
						},
						password : {
							required : true,
							sqlValidator : true,
							xssValidator : true,
							noSpace : true
						},
						confirmpassword : {
							equalTo: "#password"
						}
					},
					highlight : function(element) {
						$(element).closest('.form-group').addClass('error text-danger');
					},
					success : function(element) {
						$(element).closest('.form-group').removeClass('error text-danger');
					}
				});

			});

		</script>
				</div>

			</div>
		</div>

		<!-- Javascript -->
		<script src="bootzard-bootstrap-wizard-template/assets/js/jquery-1.11.1.min.js"></script>
		<script src="bootzard-bootstrap-wizard-template/assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="bootzard-bootstrap-wizard-template/assets/js/jquery.backstretch.min.js"></script>
		<script src="bootzard-bootstrap-wizard-template/assets/js/retina-1.1.0.min.js"></script>
		<script src="bootzard-bootstrap-wizard-template/assets/js/scripts.js"></script>
<script src="js/jquery.validate.js"></script>
		<script src="bootzard-bootstrap-wizard-template/assets/js/jquery.validate.js"></script>
		
	
	</body>
</html>

<?php
if (isset($_POST['submit'])) {
	$request = new HttpRequest();
	$request -> setUrl('http://localhost/mhcserver/post/psyfirstpage.html');
	$request -> setMethod(HTTP_METH_POST);
	$request -> setHeaders(array('cache-control' => 'no-cache', 'content-type' => 'application/x-www-form-urlencoded', 'authorization' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MTg3LCJleHAiOjE1MTgyNzI4NzV9.J90clNUiOoVLnqc9ND_mivBdf7mtxtL6BoE3yEYpQ2c'));
	$request -> setContentType('application/x-www-form-urlencoded');
	$request -> setPostFields(array('email' => $_POST['email'], 'password' => $_POST['psw']));
	try {
		$response = $request -> send();
		echo $response -> getBody();
	} catch (HttpException $ex) {
		echo $ex;
	}
}
?>