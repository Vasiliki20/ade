<?php session_start(); ?>
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
		<link rel="stylesheet" href="css/meter.css">
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
							<h3><strong>Εγγραφη</strong></h3>
							<p>
								Συμπληρώστε την πάρακατω φόρμα για την ολοκλήρωση της εγγραφής σας
							</p>
							<div class="f1-steps">
								<div class="f1-progress">
									<div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
								</div>
								<div class="f1-step active">
									<div class="f1-step-icon">
										<i class="fa fa-user"></i>
									</div>
									<p>
										Βασικά στοιχεία
									</p>
								</div>
								<div class="f1-step">
									<div class="f1-step-icon">
										<i class="fa fa-key"></i>
									</div>
									<p>
										Περισσότερα
									</p>
								</div>
								<div class="f1-step">
									<div class="f1-step-icon">
										<i class="fa fa-pencil"></i>
									</div>
									<p>
										Δημιουργία Λογαριασμού
									</p>
								</div>
							</div>

							<fieldset>
								<h4>Προσωπικά στοιχεία σας:</h4>
								<div class="form-group">
									<label class="sr-only" for="name">Όνομα</label>
									<input type="text" name="name" placeholder="Όνομα" class="form-control" id="name">
								</div>
								<div class="form-group">
									<label class="sr-only" for="surname">Επίθετο</label>
									<input type="text" name="surname" placeholder="Επίθετο" class="form-control" id="surname">
								</div>
								<div class="form-group">
									<label class="sr-only" for="id">Αριθμός Ταυτότητας</label>
									<input type="text" name="id" placeholder="Αριθμός Ταυτότητας" class="form-control" id="id">
								</div>
								<div class="form-group">
									<input class="w3-radio" type="radio" name="gender" value="Άρρεν" checked>
									<label>Άρρεν</label>
									<input class="w3-radio" type="radio" name="gender" value="Θήλυ">
									<label>Θήλυ</label>
									<input class="w3-radio" type="radio" name="gender" value="Άλλο">
									<label>Άλλο</label>
								</div>
								<div class="f1-buttons">
									<button type="button" class="btn btn-next">
										Συνέχεια
									</button>
								</div>
							</fieldset>

							<fieldset>
								<h4>Περισσότερα στοιχεία:</h4>

								<div class="form-group">
									<label class="sr-only" for="age">Ηλικία</label>
									<input type="text" name="age" placeholder="Ηλικία" class="form-control" id="age">
								</div>
								<div class="form-group">
									<label class="sr-only" for="address">Διεύθυνση Διαμονής</label>
									<input type="text" name="address" placeholder="Διεύθυνση Διαμονής" class="form-control" id="address">
								</div>
								<div class="form-group">
									<label class="sr-only" for="phone">Τηλέφωνο</label>
									<input type="number" name="phone" placeholder="Τηλέφωνο" class="form-control" id="phone">
								</div>
								<div class="form-group">
									<label class="sr-only" for="fax">Fax</label>
									<input type="number" name="fax" placeholder="Fax" class="form-control" id="fax">
								</div>
								<div class="form-group">
									<label class="sr-only" for="position">Θέση Εργασίας</label>
									<input type="text" name="position" placeholder="Θέση Εργασίας" class="form-control" id="position">
								</div>
								<div class="form-group">
									<label class="sr-only" for="specialty">Ειδικότητα</label>
									<input type="text" name="speciality" placeholder="Ειδικότητα" class="form-control" id="specialty">
								</div>
								<div class="form-group">
									<label class="sr-only" for="building">Κτήριο</label>
									<input type="text" name="building" placeholder="Κτήριο" class="form-control" id="building">
								</div>
								<div class="form-group">
									<label class="sr-only" for="officenum">Αριθμός Γραφείου</label>
									<input type="number" name="officenum" placeholder="Αριθμός Γραφείου" class="form-control" id="officenum">
								</div>
								<div class="f1-buttons">
									<button type="button" class="btn btn-previous">
										Προηγούμενη
									</button>
									<button type="button" class="btn btn-next">
										Συνέχεια
									</button>
								</div>
							</fieldset>

							<fieldset>
								<h4>Δημιουργία Λογαριασμού</h4>
								<div class="form-group">
									<label class="sr-only" for="email">Ηλεκτρονική Διεύθυνση</label>
									<input type="email" name="email" placeholder="Ηλεκτρονική Διεύθυνση" class="form-control" id="email">
								</div>
								<div class="form-group">
									<label class="sr-only" for="password">Κωδικός</label>
									<input type="password" name="password" placeholder="Κωδικός" class="form-control" id="password">
									<meter max="4" id="password-strength-meter"></meter>
        				<p id="password-strength-text"></p>
								</div>
								<div class="form-group">
									<label class="sr-only" for="confirm">Επιβεβέωση Κωδικού</label>
									<input type="password" name="confirm" placeholder="Επιβεβέωση Κωδικού" class="form-control" id="confirm">
								</div>
								<div class="f1-buttons">
									<button type="button" class="btn btn-previous">
										Προηγούμενη
									</button>
									<button type="submit" name="submit" class="btn btn-submit">
										Καταχώρηση
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
									name : {
										minlength : 1,
										sqlValidator : true,
										xssValidator : true,
										noSpace : true,
										required : true
									},
									surname : {
										minlength : 1,
										sqlValidator : true,
										xssValidator : true,
										noSpace : true,
										required : true
									},
									email : {
										required : true,
										email : true
									},
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
									confirm : {
										equalTo : "#password",
										required : true
									},
									address : {
										minlength : 1,
										sqlValidator : true,
										xssValidator : true,
									},
									position : {
										minlength : 1,
										sqlValidator : true,
										xssValidator : true,
									},
									building : {
										minlength : 1,
										sqlValidator : true,
										xssValidator : true,
									},
									speciality : {
										minlength : 1,
										sqlValidator : true,
										xssValidator : true,
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>

		<!-- Javascript -->
		<script src="bootzard-bootstrap-wizard-template/assets/js/jquery-1.11.1.min.js"></script>
		<script src="bootzard-bootstrap-wizard-template/assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="bootzard-bootstrap-wizard-template/assets/js/jquery.backstretch.min.js"></script>
		<script src="bootzard-bootstrap-wizard-template/assets/js/retina-1.1.0.min.js"></script>
		<script src="bootzard-bootstrap-wizard-template/assets/js/scripts.js"></script>
		<script src="js/jquery.validate.js"></script>
		<script src="js/meter.js"></script>

		<!--[if lt IE 10]>
		<script src="assets/js/placeholder.js"></script>
		<![endif]-->
	</body>
</html>

<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/psyregister.php";
$method='POST';
if(isset($_POST['submit'])){
$salt="angelos";
$sha512 = hash('sha512', $_POST['password'].$salt);
$postfields=http_build_query(array(
'id'=> $_POST['id'],
'name'=> $_POST['name'],
'lastname'=> $_POST['surname'],
'sex' => $_POST['gender'],
'age' => $_POST['age'],
'address' => $_POST['address'],
'telephone' => $_POST['phone'],
'fax' => $_POST['fax'],
'position' => $_POST['position'],
'speciality' => $_POST['speciality'],
'building' => $_POST['building'],
'office_num' => $_POST['officenum'],
'email' => $_POST['email'],
'password' => $sha512
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
//$GLOBALS['curtoken']=giveToken();
//print "<h5>".$GLOBALS['curtoken']."</h5>";
$response = request($url, $method, $postfields, $tok);
}
if(isset($response['error'])){
?><
script> alert("This id already exist! Please use another id!"); </script><?php
}
if($response['success']==1){
echo "<div class=\"alert alert-success fade in\">
<a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
<strong>Success!</strong> You have successfully registered to the system!
</div>";
}else{
echo "<div class=\"alert alert-danger fade in\">
<a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
<strong>Error!</strong> A problem has been occurred while submitting your data. Please check your internet connection and/or if you have some special characters in your inputs remove them
</div>";
}
}
?>