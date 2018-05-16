<?php session_start(); ?>
<?php
ob_start();
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/myclient.php?patientID=".$_SESSION['id'];
$method='GET';
//if(isset($_POST['submit'])){
$postfields=http_build_query(array(
	));
	if(isset($_COOKIE['token'])){
		$response1=request($url,$method,$postfields,$_COOKIE['token']);
	}else{
		$response1=0;
	}
	while($response1['status']!=1){
		$tok=giveToken();
		print "<h5>".$tok."</h5>";
		?>
		<script>
			document.cookie='token=<?= $tok ?>';
		</script>
		<?php
		//$GLOBALS['curtoken']=giveToken();
		//print "<h5>".$GLOBALS['curtoken']."</h5>";
		$response1=request($url,$method,$postfields,$tok);
	}
//}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Κέντρο Ψυχικής Υγείας</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Kentro Psixikis Ygias" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="favicon.ico">

		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

		<style>
			form {
				font-size: 13px;
			}
			input {
				font-size: 13px;
			}
			.form-group {
				font-size: 13px;
			}
			.form-control {
				font-size: 13px;
			}
			.sidenav {
				height: 100%;
				width: 300px;
				position: fixed;
				z-index: 1;
				top: 0;
				left: 0;
				background-color: #111;
				overflow-x: hidden;
				padding-top: 20px;
			}
			.sidenav a {
				padding: 6px 6px 6px 6px;
				text-decoration: none;
				font-size: 13px;
				color: #818181;
				display: block;
			}
			.sidenav a:hover {
				color: #f1f1f1;
			}
			.main {
				margin-left: 300px; /* Same as the width of the sidenav */
				display: inline-block;
				position: relative;
				width: 90%;
				background-size: contain;
			}
			@media screen and (max-height: 450px) {
				.sidenav {
					padding-top: 15px;
				}
				.sidenav a {
					font-size: 18px;
				}
			}
			div {
				padding: 5px;
			}
		</style>
		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<!-- Owl Carousel -->
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">

		<link rel="stylesheet" href="css/style.css">
		<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		<div class="sidenav">
			<a href="form01.php"><b>Αρχική επικοινωνία</b></a>
			
			<?php if(strnatcmp($response1['patient']['type'],"φοιτητής")==0){?>
			<a href="form02.php"><b>Δήλωση στοιχείων</b></a>
			<?php }elseif(strnatcmp($response1['patient']['type'],"ακαδημαικό")==0){?>
			<a href="form02b.php"><b>Δήλωση στοιχείων</b></a>
			<?php }elseif(strnatcmp($response1['patient']['type'],"διοικητικό")==0){?>
			<a href="form02c.php"><b>Δήλωση στοιχείων</b></a>
			<?php }elseif(strnatcmp($response1['patient']['type'],"άλλο")==0){?>
			<a href="form02d.php"><b>Δήλωση στοιχείων</b></a>
			<?php }else{?>
			<a href="form02d.php"><b>Δήλωση στοιχείων</b></a>
			<?php } ?>
			<a href="form03.php"><b>Ερωτηματολόγιο αρχικής συνάντησης</b></a>
			<?php if($response1['patient']['age']==null){?>
			<a href="form06.php"><b>Αρχική συνέντευξη</b></a>
			<?php }elseif($response1['patient']['age']>=18){?>
			<a href="form06.php"><b>Αρχική συνέντευξη</b></a>
			<?php }elseif($response1['patient']['age']<18){?>
			<a href="historyforchildren.php"><b>Αρχική συνέντευξη</b></a>
			<?php } ?>
			<a href="form10.php"><b>Καταγραφή άλλων επαφών</b></a>
			<a href="form12.php"><b>Μεταβίβαση πληροφοριών</b></a>
			<a href="formupload.php"><b>Ανάρτηση αρχείων</b></a>
			<a href="form15.php"><b>Αξιολόγηση</b></a>
			<a href="form17.php"><b>Φόρμα παραπόνων</b></a>
		</div>
		<div class="main">
			<div class="box-wrap">
				<header role="banner" id="fh5co-header">
					<div class="container">
						<nav class="navbar navbar-default">
							<div class="row">
								<div class="col-md-4">
									<div class="fh5co-navbar-brand">
										<a class="fh5co-logo" href="home.html">Κεντρο Ψυχικης Υγειας</a>
									</div>
								</div>
								<ul class="nav text-right" class="col-md-3">
									<li>
										<a href="index.php">Logout</a>
									</li>
								</ul>								
							</div>
						</nav>
					</div>
				</header>

				<div class="container">
					<div align="center">
						<h4>ΕΝΤΥΠΟ ΠΑΡΑΠΟΝΩΝ Η ΕΠΙΣΗΜΑΝΣΕΩΝ ΓΙΑ ΤΟ ΚΕΝΤΡΟ ΨΥΧΙΚΗΣ ΥΓΕΙΑΣ</h4>
					</div>
					<div align="left">
						<h5>Αν επιθυμείτε να υποβάλλετε κάποιο παράπονο ή επισήμανση σχετικά με το ΚΕΨΥ και τις παρεχόμενες υπηρεσίες του, παρακαλούμε συμπληρώστε το ακόλουθο έντυπο και υποβάλετέ το στη Διεύθυνση του ΚΕ.Ψ.Υ. <a href="mailto:mentalhealth@ucy.ac.cy">mentalhealth@ucy.ac.cy</a>
					</div>

					<form action="" method="post" id="contact-form">
						<div class="row">
							<div class="column">
								<label for="q2">1. Ημερομηνία που συνέβη το/α περιστατικό/α (αν αφορά συγκεκριμένα περιστατικά)</label>
								<input for ="q2" class="form-control" type="date" name="date" id="q2">
								<br>
								<label for="q3">2. Άτομα τα οποία εμπλέκονται (όπου ισχύει) :</label>
								<input type="text" class="form-control" name="people" id="q3">
								<br>
								<label for="q4">3. Περιγραφή του παραπόνου/των παραπόνων και σχετικά συμβάντα:</label>
								<input type="text" class="form-control" name="description" id="q4">
								<br>
								<label for="q5">4. Υπεύθυνη δήλωση </label>
								<input type="text" class="form-control" name="affirmation" id="q5">
								<br>
								<button type="submit" class="btn btn-default" name="submit">
									ΚΑΤΑΧΩΡΗΣΗ
								</button>

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
				people : {
					sqlValidator : true,
					xssValidator : true
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
							<footer>
								<div id="footer" class="fh5co-border-line">
									<div class="container">
										<div class="row">
											<div class="col-md-6 col-md-offset-3 text-center">
												<p class="fh5co-social-icons">
													<a href="https://twitter.com/MentalHealthUCY"><i class="icon-twitter-with-circle"></i></a>
													<a href="https://www.facebook.com/ucykepsy/"><i class="icon-facebook-with-circle"></i></a>
												</p>
											</div>
										</div>
									</div>
								</div>
							</footer>
						</div>
						<!-- END: box-wrap -->

						<!-- jQuery -->
						<script src="js/jquery.min.js"></script>
						<!-- jQuery Easing -->
						<script src="js/jquery.easing.1.3.js"></script>
						<!-- Bootstrap -->
						<script src="js/bootstrap.min.js"></script>
						<!-- Owl carousel -->
						<script src="js/owl.carousel.min.js"></script>
						<!-- Waypoints -->
						<script src="js/jquery.waypoints.min.js"></script>
						<!-- Parallax Stellar -->
						<script src="js/jquery.stellar.min.js"></script>

						<!-- Main JS (Do not remove) -->
						<script src="js/main.js"></script>
						<script src="js/jquery.validate.js"></script>

				</div>

	</body>
</html>

<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/form17.php";
$method='POST';
if(isset($_POST['submit'])){
$postfields=http_build_query(array(
'id' => $_SESSION['id'],
'dateof' => $_POST['date'],
'people' => $_POST['people'],
'description' => $_POST['description'],
'affirmation' => $_POST['affirmation']
));
if(isset($_COOKIE['token'])){
$response=request($url,$method,$postfields,$_COOKIE['token']);
}else{
$response=0;
}
while($response['status']!=1){
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
if($response['success']==1){
		echo "<div class=\"alert alert-success fade in\">
			<a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
			<strong>Success!</strong> You have successfully submit your form!
			</div>";
		}else{
		echo "<div class=\"alert alert-danger fade in\">
			  <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
			  <strong>Error!</strong> A problem has been occurred while submitting your data. Please check your internet connection and/or if you have some special characters in your inputs remove them
			  </div>";
		}
}
?>
