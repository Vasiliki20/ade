<?php ob_start(); ?>
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
		<script src='https://www.google.com/recaptcha/api.js'></script>
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
								<a href="forgotpassword.php">Ξεχάσατε τον κωδικό σας;</a>
								<p>
									<strong>Αν δεν έχεις λογαριασμό, δημιούργησε εδώ</strong>
									<br>
									<a href="signupfinal.php" id="flip-btn" class="signup signup_link">Εγγραφή</a>
								</p>
								<div class="f1-buttons">
									<button type="submit" name="submit" class="btn btn-submit">
										Σύνδεση
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
		
		<!--[if lt IE 10]>
		<script src="assets/js/placeholder.js"></script>
		<![endif]-->
	</body>
</html>

<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/psylogin.php";
$method='POST';
if(isset($_POST['submit'])){
$postfields=http_build_query(array(
'id' => $_POST['id'],
'password' => $_POST['password']
));
if(isset($_COOKIE['token'])){
$response=request($url,$method,$postfields,$_COOKIE['token']);
}else{
$response=0;
}
if($response['status']!=1){
$tok=giveToken();
print "<h5>".$tok."</h5>";
?>
<script>
	document.cookie='token=<?= $tok ?>';</script>
<?php
$response = request($url, $method, $postfields, $tok);
}
if(strnatcmp($response['login'],true)==0){
session_start();
$_SESSION['id']=$_POST['id'];
echo $_SESSION['id'];
if(strnatcmp($response['role'],"therapist")==0){
header('Location: psindex.php');
}
if(strnatcmp($response['role'],"supervisor")==0){
header('Location: psindex.php');
}
if(strnatcmp($response['role'],"frontdesk")==0){
header('Location: psindex_frontdesk.php');
}
if(strnatcmp($response['role'],"admin")==0){
header('Location: psindex_admin.php');
}

}else{
	echo "<script> alert(\"Wrong username or password!\");</script>";
}
}
?>
<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/mailjet-apiv3-php-simple-master/src/Mailjet/reminder.php";
$method='POST';
$postfields=http_build_query(array(
));
if(isset($_COOKIE['token'])){
$response1=request($url,$method,$postfields,$_COOKIE['token']);
}else{
$response1=0;
}

if($response1['status']!=1){
$tok=giveToken();
print "<h5>".$tok."</h5>";
?>
<script>
	document.cookie='token=<?= $tok ?>';</script>
<?php
$response1 = request($url, $method, $postfields, $tok);
}
//var_dump($response1);

?>