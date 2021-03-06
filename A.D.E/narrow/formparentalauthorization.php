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
			<a href="form02.php"><b>Δήλωση στοιχείων για ενήλικες</b></a>
			<a href="form03.php"><b>Ερωτηματολόγιο αρχικής συνάντησης</b></a>
			<a href="form06.php"><b>Αρχική συνέντευξη</b></a>
			<a href="form10.php"><b>Καταγραφή άλλων επαφών</b></a>
			<a href="form12.php"><b>Μεταβίβαση πληροφοριών</b></a>
			<a href="formupload.php"><b>Ανάρτηση αρχείων</b></a>
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
						<h4>Γονική Εξουσιοδότηση, Συμφωνία και Συγκατάθεση για Θεραπεία Ανηλίκου</h4>
					</div>
					<div align="left">
						<h5>Ως ΚΕΨΥ, ευθύνη και στόχος μας είναι η ευεξία των πελατών μας. Σε περίπτωση που ο πρωταρχικός πελάτης είναι ανήλικος (δηλαδή, κάτω των 18 ετών),
							είναι απαραίτητη η συμφωνία και η συγκατάθεση των γονιών ή/και των νόμιμων κηδεμόνων του για τη λήψη υπηρεσιών, τον καθορισμό των στόχων της θεραπείας, των προγραμματισμό των συναντήσεων και την ανάγκη για διατήρηση της εχεμύθειας του πελάτη. Ως αποτέλεσμα, η πολιτική του ΚΕΨΥ αναφορικά με τους ανήλικους πελάτες που αποτείνονται κοντά μας για θεραπεία απαιτεί όπως έχουμε τα ακόλουθα έντυπα στο αρχείο μας, ανάλογα με την κάθε περίπτωση.
						<br>
						<br>
						Παρακαλούμε όπως υποδείξετε τι ισχύει για τη δική σας περίπτωση:
						<br>
						<br>
						<strong>1. Οι δύο γονείς/νόμιμοι κηδεμόνες έχουν από κοινού την κηδεμονία του παιδιού και θα δώσουν από κοινού τη συγκατάθεση τους</strong>
						<br>
						- Και οι δυο γονείς ή κηδεμόνες συμφωνούν με τη θεραπεία και τη λήψη υπηρεσιών ψυχικής υγείας από το παιδί τους και καταθέτουν την συγκατάθεση τους (αυτό απαιτείται νομικά όταν την κηδεμονία έχουν και οι δύο γονείς).
						<br>
						- Αν οι βιολογικοί ή νόμιμα θετοί γονείς είναι σε διάσταση στην παρούσα φάση, ή είναι στη διαδικασία έκδοσης διαζυγίου, παραμένει απαραίτητο όπως και οι δύο γονείς υπογράψουν το έντυπο συγκατάθεσης για λήψη υπηρεσιών ψυχικής υγείας.
						<br>
						<br>
						<strong>2. Επιμέλεια από ένα γονιό λόγω διαζυγίου, ή άλλων νομικών ζητημάτων</strong>
						<br>
						- Υπάρχει επίσημο πιστοποιημένο διάταγμα διαζυγίου ή νόμιμη εντολή επιμέλειας που υποδεικνύει ότι μόνο ένας γονέας έχει τη νόμιμη άδεια να καθορίζει και να αποφασίζει για την ψυχική υγεία και θεραπεία του παιδιού χωρίς τη συγκατάθεση άλλου γονέα (Σε αυτή την περίπτωση, παρακαλούμε να μας παράσχετε επικυρωμένο αντίγραφο του σχετικού νομικού εγγράφου στο σύνολό του).
						<br>
						<br>
						<strong>3. Απών ή αποθανών γονέας</strong>
						<br>
						- Ο γονέας που παρουσιάζει το παιδί για θεραπεία δεν έχει πρόσβαση στον άλλο γονέα/νόμιμο κηδεμόνα λόγω μιας από τις ακόλουθες αιτίες: θάνατος, φυλακή, αγνοούμενος, απών χωρίς στοιχεία επαφής,  κ.α. Ως εκ τούτου, αναγνωρίζει ότι είναι ο μοναδικός κύριος φροντιστής του παιδιού για σκοπούς θεραπείας και θεμάτων ψυχικής υγείας και αναλαμβάνει κάθε νομική ευθύνη για τη συναίνεση που παρέχει.
						<br>
					</h5>
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
	</body>

</html>
