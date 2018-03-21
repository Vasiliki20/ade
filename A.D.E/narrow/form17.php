<?php session_start(); ?>

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

			table, th, td {
				border: 1px solid black;
				border-collapse: collapse;
			}
			th, td {
				padding: 5px;
				text-align: left;
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

			.form-group {
				font-size: 13px;
			}
			.form-control {
				font-size: 13px;
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
			<a href="form02.php"><b>Δήλωση στοιχείων για ενήλικες</b></a>
			<a href="form03.php"><b>Ερωτηματολόγιο αρχικής συνάντησης</b></a>
			<a href="form06.php"><b>Αρχική συνέντευξη</b></a>
			<a href="form10.php"><b>Καταγραφή άλλων επαφών</b></a>
			<a href="form12.php"><b>Μεταβίβαση πληροφοριών</b></a>
			<a href="form14.php"><b>Τερματισμός</b></a>
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
										<a class="fh5co-logo" href="home.html">Κεντρο Ψυχικης Υγειας <?= $_SESSION['id']; ?></a>
									</div>
									<ul class="nav text-left">
										<li>
											<a href="contact.html">Contact Us</a>
										</li>
										<li>
											<a href="#">Logout</a>
										</li>
									</ul>
								</div>
							</div>
						</nav>
					</div>
				</header>

				<div class="container">
					<div align="center">
						<h4>ΕΝΤΥΠΟ ΠΑΡΑΠΟΝΩΝ Η ΕΠΙΣΗΜΑΝΣΕΩΝ ΓΙΑ ΤΟ ΚΕΝΤΡΟ ΨΥΧΙΚΗΣ ΥΓΕΙΑΣ</h4>
					</div>
					<div align="left">
						<h5>Αν επιθυμείτε να υποβάλλετε κάποιο παράπονο ή επισήμανση σχετικά με το ΚΕΨΥ και τις παρεχόμενες υπηρεσίες του, παρακαλούμε συμπληρώστε το ακόλουθο έντυπο και υποβάλετέ το στη Διεύθυνση του ΚΕ.Ψ.Υ. <h5><a href="mailto:mentalhealth@ucy.ac.cy">mentalhealth@ucy.ac.cy</a></h5>
					</div>

					<form action="" method="post">
						<div class="row">
							<div class="column">
								<label for="q2">1. Ημερομηνία που συνέβη το/α περιστατικό/α (αν αφορά συγκεκριμένα περιστατικά)</label>
								<input for ="q2" class="form-control" type="date" name="date" id="q2">
								<br>
								<label for="q3">2. Άτομα τα οποία εμπλέκονται (όπου ισχύει) :</label>
								<input type="text" class="form-control" name="q3" name="people" id="q3">
								<br>
								<label for="q4">3. Περιγραφή του παραπόνου/των παραπόνων και σχετικά συμβάντα:</label>
								<input type="text" class="form-control" name="description" id="q4">
								<br>
								<label for="q5">4. Υπεύθυνη δήλωση </label>
								<input type="text" class="form-control" name="affirmation" id="q5">
								<br>
								<button type="submit" class="btn btn-default" name="submit">
									Submit
								</button>

							</div>
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
				</div>

	</body>
</html>

<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/form17.php";
$method='POST';
if(isset($_POST['submit'])){
$postfields=http_build_query(array(
'id' => $_POST['id'],
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

}
?>
