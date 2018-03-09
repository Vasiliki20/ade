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
			<a href="form01.php"><b>Αρχική επικοινωνία</b></a>
			<a href="form02.php"><b>Δήλωση στοιχείων για ενήλικες</b></a>
			<a href="form03.php"><b>Ερωτηματολόγιο αρχικής συνάντησης</b></a>
			<a href="form04.php"><b>Ενημερομένη συγκατάθεση</b></a>
			<a href="form05.php"><b>Κανόνες</b></a>
			<a href="form06.php"><b>Αρχική συνέντευξη</b></a>
			<a href="form08.php"><b>Φόρμα καταγραφής επαφών</b></a>
			<a href="form09.php"><b>Σημειώσης συνάντησεις</b></a>
			<a href="form10.php"><b>Καταγραφή άλλων επαφών</b></a>
			<a href="form11.php"><b>Έκθεση ενδιάμεσης αξιολόγησης</b></a>
			<a href="form12.php"><b>Μεταβίβαση πληροφοριών</b></a>
			<a href="form13.php"><b>Συμφωνιτικό για την ασφάλεια</b></a>
			<a href="form14.php"><b>Τερματισμός</b></a>
			<a href="form15.php"><b>Αξιολόγηση</b></a>
			<a href="form16.php"><b>Αναφορά δραστηριότητηας</b></a>
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
						<h4><strong>Συγκατάθεση για Μεταβίβαση/Λήψη/Ανταλλαγή πληροφοριών – Ενήλικες</strong></h4>
						<h5>Για να μπορεί το ΚΕΨΥ να μεταβιβάσει, να λάβει, ή να ανταλλάξει εμπιστευτικές πληροφορίες που σε αφορούν, είναι απαραίτητη προϋπόθεση να συμπληρώσεις το παρόν έντυπο σύμφωνα με τις οδηγίες. </h5>
					</div>

					<form action="" method="post">
						<label><strong>Α. ΣΤΟΙΧΕΙΑ ΠΕΛΑΤΗ</strong></label>
						<div class="form-group">
							<label for="surname"><strong>1. Επώνυμο: </strong></label>
							<input type="text" class="form-control" id="surname" placeholder="απο βάση" name="surname">
						</div>
						<div class="form-group">
							<label for="name"><strong>2. Όνομα(τα): </strong></label>
							<input type="text" class="form-control" id="name" placeholder="απο βάση" name="name">
						</div>
						<div class="form-group">
							<label for="date"><strong>3. Ημερομηνία Γέννησης:</strong></label>
							<input type="date" class="form-control" id="date" placeholder="απο βάση" name="date">
						</div>
						<div class="form-group">
							<label for="id"><strong>4. Αρ. Δελτίου Ταυτότητας:</strong></label>
							<input type="number" class="form-control" id="id" placeholder="απο βάση" name="id">
						</div>
						<div class="form-group">
							<label for="address"><strong>5. Παρούσα Διεύθυνση Διαμονής:</strong></label>
							<input type="text" class="form-control" id="address" placeholder="απο βάση" name="address">
						</div>
						<div class="form-group">
							<label for="city"><strong>6. Πόλη/χωριό:</strong></label>
							<input type="text" class="form-control" id="city" placeholder="απο βάση" name="city">
						</div>
						<div class="form-group">
							<label for="tk"><strong>7. Τ.Κ.:</strong></label>
							<input type="number" class="form-control" id="tk" placeholder="απο βάση" name="tk">
						</div>
						<div class="form-group">
							<label for="phone"><strong>8. Τηλ. Επικοινωνίας:</strong></label>
							<input type="number" class="form-control" id="phone" placeholder="απο βάση" name="phone">
						</div>
						<div class="form-group">
							<label for="email"><strong>9. Ηλ. Διεύθυνση: </strong></label>
							<input type="email" class="form-control" id="email" placeholder="απο βάση" name="email">
						</div>
						<div class="form-group">
							<label for="eksousiodotisi"><strong>Β. ΕΞΟΥΣΙΟΔΟΤΗΣΗ</strong> </label>
							<label for="eksousiodotisi"><em>Εξουσιοδοτώ το Κέντρο Ψυχικής Υγείας (ΚΕΨΥ) του Πανεπιστημίου Κύπρου να μεταβιβάσει/λάβει/ ανταλλάξει (υπογραμμίστε ό,τι ισχύει) εμπιστευτικές πληροφορίες για το άτομό μου με:</em> </label>
						</div>
						<div class="form-group">
							<label for="namepr"><strong>10. Ονοματεπώνυμο επαγγελματία ή Υπηρεσίας/Δομής:</strong></label>
							<input type="text" class="form-control" id="namepr" placeholder="" name="nameofprof">
						</div>
						<div class="form-group">
							<label for="addresspr"><strong>11. Διεύθυνση:</strong></label>
							<input type="text" class="form-control" id="addresspr" placeholder="" name="addressofprof">
						</div>
						<div class="form-group">
							<label for="citypr"><strong>12. Πόλη/χωριό:</strong></label>
							<input type="text" class="form-control" id="citypr" placeholder="" name="cityofprof">
						</div>
						<div class="form-group">
							<label for="tkpr"><strong>13. Τ.Κ.:</strong></label>
							<input type="text" class="form-control" id="tkpr" placeholder="" name="tkpr">
						</div>
						<div class="form-group">
							<label for="phonepr"><strong>14. Τηλ. Επικοινωνίας:</strong></label>
							<input type="number" class="form-control" id="phonepr" placeholder="" name="telofprof">
						</div>
						<div class="form-group">
							<label for="emailpr"><strong>15. Ηλ. Διεύθυνση: </strong></label>
							<input type="email" class="form-control" id="emailpr" placeholder="" name="emailofprof">
						</div>
						<div class="form-group">
							<label for="purpose"><strong>16. Σκοπός (διευκρινίστε, π.χ. «επιβεβαίωση παρουσίας στη συνεδρία», «παραπομπή», «αίτημα πελάτη»)</strong></label>
							<input type="text" class="form-control" id="purpose" placeholder="" name="purposeofinfo">
						</div>
						<div class="form-group">
							<label for="q17"><strong>17. Κατηγορίες πληροφοριών που συναινώ να μεταβιβαστούν <em>(Σημειώστε τη μονογραφή σας σε όσα ισχύουν)</em></strong></label>
							<br>
							<input type="checkbox" name="infototransfer" class="form-group" id="q17a">
							Μόνο συμμετοχή σε συνεδρία/ες
							<br>
							<input type="checkbox" name="infototransfer" class="form-group" id="q17b">
							Πλάνο και στόχοι θεραπείας/παρέμβασης
							<br>
							<input type="checkbox" name="infototransfer" class="form-group" id="q17c">
							Ψυχολογική έκθεση
							<br>
							<input type="checkbox" name="infototransfer" class="form-group" id="q17d">
							Σημειώσεις συνεδρίας
							<br>
							<input type="checkbox" name="infototransfer" class="form-group" id="q17e">
							Συστάσεις
							<br>
							<input type="checkbox" name="infototransfer" class="form-group" id="q17f">
							Ψυχομετρική αξιολόγηση/τεστ, διευκρινίστε:
							<br>
							<input type="text" class="form-group" name="infototransfer" id="q17fmore">
							<br>
							<input type="checkbox" class="form-group" name="infototransfer" id="q17g">
							Άλλο, διευκρινίστε:
							<br>
							<input type="text" class="form-group" name="infototransfer" id="q17gmore">
							<br>
						</div>
						<div class="form-group">
							<label for="q18"><strong>18. Η πιο πάνω εξουσιοδότηση θα ισχύει για: (επιλέξτε ό,τι ισχύει) </strong></label>
							<br>
							<input type="checkbox" name="timeofexpire" class="form-group" id="q18a">
							μόνο μια φορά
							<br>
							<input type="checkbox" name="timeofexpire" class="form-group" id="q18b">
							3 μήνες
							<br>
							<input type="checkbox" name="timeofexpire" class="form-group" id="q18c">
							6 μήνες
							<br>
							<input type="checkbox" name="timeofexpire" class="form-group" id="q18d">
							1 χρόνο
							<br>
							<input type="checkbox" name="timeofexpire" class="form-group" id="q18e">
							άλλο, διευκρινίστε:
							<br>
							<input type="text" name="timeofexpire" class="form-group" id="q18fmore">
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
$request->setUrl('http://localhost/mhcserver/post/form12.php');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'cache-control' => 'no-cache',
  'content-type' => 'application/x-www-form-urlencoded',
  'authorization' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MTg3LCJleHAiOjE1MTgyNzI4NzV9.J90clNUiOoVLnqc9ND_mivBdf7mtxtL6BoE3yEYpQ2c'
));

$request->setContentType('application/x-www-form-urlencoded');
$request->setPostFields(array(
  'id' => $_POST['id'],
  'typeof' => $_POST[''],
  'nameofprof' => $_POST['nameofprof'],
  'addressofprof' => $_POST['addressofprof'],
  'cityofprof' => $_POST['cityofprof'],
  'telofprof' => $_POST['telofprof'],
  'emailofprof' => $_POST['emailofprof'],
  'purposeofinfo' => $_POST['purposeofinfo'],
  'infototransfer' => $_POST['infototransfer'],
  'timeofexpire' => $_POST['timeofexpire'],
  'signedinfo' => $_POST['afora']
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}

}
