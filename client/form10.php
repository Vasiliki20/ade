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
				padding: 10px;
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
			<a href="form01.html"><b>Αρχική επικοινωνία</b></a>
			<a href="form02.html"><b>Δήλωση στοιχείων για ενήλικες</b></a>
			<a href="form03.html"><b>Ερωτηματολόγιο αρχικής συνάντησης</b></a>
			<a href="form04.html"><b>Ενημερομένη συγκατάθεση</b></a>
			<a href="form05.html"><b>Κανόνες</b></a>
			<a href="form06.html"><b>Αρχική συνέντευξη</b></a>
			<a href="form07.html"><b>Αρχική αξιολόγηση</b></a>
			<a href="form08.html"><b>Φόρμα καταγραφής επαφών</b></a>
			<a href="form09.html"><b>Σημειώσης συνάντησεις</b></a>
			<a href="form10.html"><b>Καταγραφή άλλων επαφών</b></a>
			<a href="form11.html"><b>Έκθεση ενδιάμεσης αξιολόγησης</b></a>
			<a href="form12.html"><b>Μεταβίβαση πληροφοριών</b></a>
			<a href="form13.html"><b>Συμφωνιτικό για την ασφάλεια</b></a>
			<a href="form14.html"><b>Τερματισμός</b></a>
			<a href="form15.html"><b>Αξιολόγηση</b></a>
			<a href="form16.html"><b>Αναφορά δραστηριότητηας</b></a>
			<a href="form17.html"><b>Φόρμα παραπόνων</b></a>
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
								<div class="col-md-8 main-nav">
									<ul class="nav text-right">
										<li>
											<a href="contact.html"><span>Contact Us</span></a>
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
						<h4><strong>Καταγραφή Επικοινωνίας </strong> (εκτός συνεδριών)</h4>
					</div>

					<form action="/action_page.php">
						<div class="form-group">
							<label for="s1"><em>Συμπληρώνεται σε περιπτώσεις όπου γίνεται οποιαδήποτε μορφή επικοινωνίας (τηλεφωνική, κατ’ιδίαν, ηλεκτρονική) σε πλαίσια εκτός των συνεδριών συμβουλευτικής από τον πελάτη ή τρίτους (οικογένεια, φίλοι, ακαδημαϊκοί, φίλοι, άλλος επαγγελματίες). </em></label>
						</div>
						<table style="width:100%">
							<div class="form-group">
								<label for="date"><strong>1. Ημερομηνία επικοινωνίας: </strong></label>
								<input type="date" class="form-control" id="date" placeholder="" name="date">
							</div>
							<div class="form-group">
								<label for="hour"><strong>2. Ώρα</strong></label>
								<input type="datetime" class="form-control" id="hour" placeholder="" name="hour">
							</div>
							<div class="form-group">
								<label for="name"><strong>3. Ονοματεπώνυμο καλούντα:</strong> </label>
								<input type="text" class="form-control" id="name" placeholder="" name="name">
							</div>
							<div class="form-group">
								<label for="idiotita"><strong>4. Ιδιότητα καλούντα:</strong></label>
								<input type="text" class="form-control" id="idiotita" placeholder="" name="idiotita">
							</div>
							<div class="form-group">
								<label for="comm"><strong>5. Είδος επαφής: </strong></label>
								<br>
								<input type="radio" placeholder="" name="comm" value="phone">
								Τηλεφωνική
								<br>
								<input type="radio" placeholder="" name="comm" value="email">
								Ηλεκτρονικό Μήνυμα
								<br>
								<input type="radio" placeholder="" name="comm" value="inperson">
								Κατ'ιδίαν
								<br>
								<input type="radio" placeholder="" name="comm" value="other">
								Άλλο
								<br>
								<input type="text" class="form-control" id="communication" placeholder="" name="comm">
							</div>
							<div class="form-group">
								<label for="phone"><strong>6. Τηλέφωνο επικοινωνίας:</strong></label>
								<input type="number" class="form-control" id="phone" placeholder="" name="phone">
							</div>
							<div class="form-group">
								<label for="email"><strong>7. Ηλεκτρονική διεύθυνση:</strong></label>
								<input type="email" class="form-control" id="email" placeholder="" name="email">
							</div>
							<div class="form-group">
								<label for="to"><strong>8. Σε ποιον απευθύνεται (ονοματεπώνυμο, ιδιότητα):</strong></label>
								<input type="text" class="form-control" id="to" placeholder="" name="to">
							</div>
							<div class="form-group">
								<label for="afora"><strong>9. Ποιον αφορά η κλήση: </strong></label>
								<input type="text" class="form-control" id="afora" placeholder="" name="afora">
							</div>
						</table>
						<div class="form-group">
							<label for="issue"><strong>10. Θέμα: </strong></label>
							<input type="text" class="form-control" id="issue" placeholder="" name="issue">
						</div>
						<div class="form-group">
							<label for="perigrafi"><strong>11. Περιγραφή επαφής </strong></label>
							<br>
							<label><em>(τι συζητήθηκε, διάρκεια, αιτήματα)</em></label>
							<br>
							<input type="text" class="form-control" id="description" placeholder="" name="description">
						</div>
						<div class="form-group">
							<label for="xeirismos"><strong>12. Χειρισμός </strong></label>
							<br>
							<label><em>(ενέργειες που πραγματοποιήθηκαν ή που εκκρεμούν)</em></label>
							<br>
							<input type="text" class="form-control" id="handle" placeholder="" name="handle">
						</div>
						<div class="form-group">
							<label for="sxolia"><strong>13. Άλλα σχόλια:</strong></label>
							<br>
							<label><em>(όπου ισχύει επισυνάψτε σχετικά παραρτήματα, π.χ. επιστολές)</em></label>
							<br>
							<input type="text" class="form-control" id="comments" placeholder="" name="comments">
						</div>
						<button type="submit" class="btn btn-default" name="submit">
							Submit
						</button>
					</form>
				</div>
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

if (isset($_POST['submit'])){
$request = new HttpRequest();
$request->setUrl('http://localhost/mhcserver/post/register.php');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'cache-control' => 'no-cache',
  'content-type' => 'application/x-www-form-urlencoded',
  'authorization' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MTg3LCJleHAiOjE1MTgyNzI4NzV9.J90clNUiOoVLnqc9ND_mivBdf7mtxtL6BoE3yEYpQ2c'
));

$request->setContentType('application/x-www-form-urlencoded');
$request->setPostFields(array(
  'id' => $_POST['id'],
  'typeof' => $_POST['comm'],
  'typeofcall' => $_POST['communication'],
  'tel' => $_POST['phone'],
  'email' => $_POST['email'],
  'dateofcall' => $_POST['date'],
  'timeofcall' => $_POST['hour'],
  'nameofcaller' => $_POST['name'],
  'roleofcaller' => $_POST['idiotita'],
  'nameofcallee' => $_POST['to'],
  'roleofcallee' => $_POST['afora'],
  'subject' => $_POST['issue'],
  'description' => $_POST['description'], 
  'handle' => $_POST['handle'],
  'othercomments' => $_POST['comments'],
  'signedexternal' => $_POST['']
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}

}