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
								<div class="col-md-3">
									<div class="fh5co-navbar-brand">
										<a class="fh5co-logo" href="home.html">Κεντρο Ψυχικης Υγειας</a>
									</div>
								</div>
								<div class="col-md-9 main-nav">
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
						<h4><strong>ΈΝΤΥΠΟ ΚΑΤΑΓΡΑΦΗΣ ΣΥΝΑΝΤΗΣΕΩΝ ΚΑΙ ΕΠΑΦΩΝ (SESSION LOG)</strong></h4>
					</div>
					<form action="/action_page.php">
						<table style="width:100%">
							<tr>
								<th><strong>Ημερομηνία</strong></th>
								<th><strong>Είδος επαφής</strong></th>
								<th><strong>Σχόλια-Περιγραφή</strong></th>
								<th><strong>Εργασία</strong></th>
							</tr>
							<tr>
								<td>
								<input type="date" class="form-group" id="q1"/>
								</td>
								<td>
								<input type="text" class="form-group" id="q2"/>
								</td>
								<td>
								<input type="text" class="form-group" id="q3"/>
								</td>
								<td>
								<input type="text" class="form-group" id="q4"/>
								</td>
							</tr>
							<tr>
								<td>
								<input type="date" class="form-group" id="q5"/>
								</td>
								<td>
								<input type="text" class="form-group" id="q6"/>
								</td>
								<td>
								<input type="text" class="form-group" id="q7"/>
								</td>
								<td>
								<input type="text" class="form-group" id="q8"/>
								</td>
							</tr>
							<tr>
								<td>
								<input type="date" class="form-group" id="q9"/>
								</td>
								<td>
								<input type="text" class="form-group" id="q10"/>
								</td>
								<td>
								<input type="text" class="form-group" id="q11"/>
								</td>
								<td>
								<input type="text" class="form-group" id="q12"/>
								</td>
						</table>
						<br>
						<br>
						<button type="submit" class="btn btn-default" name="submit">
							Submit
						</button>
					</form>

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