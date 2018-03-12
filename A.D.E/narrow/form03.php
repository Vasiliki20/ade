<?php session_start(); ?>
<b><!DOCTYPE html>
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
						<h4>Ερωτηματολόγιο Αρχικής Επίσκεψης</h4>
					</div>
					<div align="left">
						<h5>Σας παρακαλούμε βάλτε σε κύκλο τον αριθμό που αντιπροσωπεύει το βαθμό που επηρεάζεστε αρνητικά τώρα στο κάθε θέμα που αναφέρεται. Παρακαλώ απαντήστε σε ΟΛΑ τα θέματα. Οι απαντήσεις σας θα είναι πολύ βοηθητικές για να καθορίσουμε τους στόχους στις επόμενες συνεδρίες</h5>
					</div>
					<div align="center">
						<h5>ΒΑΘΜΟΣ: 0=Καθόλου 1=Κάποτε 2=Πολύ 3=Πάρα Πολύ</h5>
					</div>
					<form action="" method="post">
						<div class="row">
							<div class="column">
								<div style="width: 50%; float:left">
									<label for="q1">1. Ακαδημαικές δυσκολίες:</label>
									<input type="radio" type="hidden" name="q1" value="0">
									0
									<input type="radio" type="hidden" name="q1" value="1">
									1
									<input type="radio" type="hidden" name="q1" value="2">
									2
									<input type="radio" type="hidden" name="q1" value="3">
									3
									<br>
									<label for="q2">2. Εργασιακά προβλήματα:</label>
									<input type="radio" type="hidden" name="q2" value="0">
									0
									<input type="radio" type="hidden" name="q2" value="1">
									1
									<input type="radio" type="hidden" name="q2" value="2">
									2
									<input type="radio" type="hidden" name="q2" value="3">
									3
									<br>
									<label for="q3">3. Ερωτική σχέση:</label>
									<input type="radio" type="hidden" name="q3" value="0">
									0
									<input type="radio" type="hidden" name="q3" value="1">
									1
									<input type="radio" type="hidden" name="q3" value="2">
									2
									<input type="radio" type="hidden" name="q3" value="3">
									3
									<br>
									<label for="q4">4. Σχέση με γονείς/οικογένεια:</label>
									<input type="radio" type="hidden" name="q4" value="0">
									0
									<input type="radio" type="hidden" name="q4" value="1">
									1
									<input type="radio" type="hidden" name="q4" value="2">
									2
									<input type="radio" type="hidden" name="q4" value="3">
									3
									<br>
									<label for="q5">5. Γνωριμίες:</label>
									<input type="radio" type="hidden" name="q5" value="0">
									0
									<input type="radio" type="hidden" name="q5" value="1">
									1
									<input type="radio" type="hidden" name="q5" value="2">
									2
									<input type="radio" type="hidden" name="q5" value="3">
									3
									<br>
									<label for="q6">6. Κοινωνικές επαφές:</label>
									<input type="radio" type="hidden" name="q6" value="0">
									0
									<input type="radio" type="hidden" name="q6" value="1">
									1
									<input type="radio" type="hidden" name="q6" value="2">
									2
									<input type="radio" type="hidden" name="q6" value="3">
									3
									<br>
									<label for="q7">7. Κοινωνική απομόνωση:</label>
									<input type="radio" type="hidden" name="q7" value="0">
									0
									<input type="radio" type="hidden" name="q7" value="1">
									1
									<input type="radio" type="hidden" name="q7" value="2">
									2
									<input type="radio" type="hidden" name="q7" value="3">
									3
									<br>
									<label for="q8">8. Αίσθημα μοναξιάς:</label>
									<input type="radio" type="hidden" name="q8" value="0">
									0
									<input type="radio" type="hidden" name="q8" value="1">
									1
									<input type="radio" type="hidden" name="q8" value="2">
									2
									<input type="radio" type="hidden" name="q8" value="3">
									3
									<br>
									<label for="q9">9. Φόβος για στενές σχέσεις:</label>
									<input type="radio" type="hidden" name="q9" value="0">
									0
									<input type="radio" type="hidden" name="q9" value="1">
									1
									<input type="radio" type="hidden" name="q9" value="2">
									2
									<input type="radio" type="hidden" name="q9" value="3">
									3
									<br>
									<label for="q10">10. Δυσκολίες έκφρασης συναισθημάτων:</label>
									<input type="radio" type="hidden" name="q10" value="0">
									0
									<input type="radio" type="hidden" name="q10" value="1">
									1
									<input type="radio" type="hidden" name="q10" value="2">
									2
									<input type="radio" type="hidden" name="q10" value="3">
									3
									<br>
									<label for="q11">11. Δυσκολίες διεκδίκησης άποψης:</label>
									<input type="radio" type="hidden" name="q11" value="0">
									0
									<input type="radio" type="hidden" name="q11" value="1">
									1
									<input type="radio" type="hidden" name="q11" value="2">
									2
									<input type="radio" type="hidden" name="q11" value="3">
									3
									<br>
									<label for="q12">12. Συναισθήματα-ξεσπάσματα θυμού:</label>
									<input type="radio" type="hidden" name="q12" value="0">
									0
									<input type="radio" type="hidden" name="q12" value="1">
									1
									<input type="radio" type="hidden" name="q12" value="2">
									2
									<input type="radio" type="hidden" name="q12" value="3">
									3
									<br>
									<label for="q13">13. Ζήλια:</label>
									<input type="radio" type="hidden" name="q13" value="0">
									0
									<input type="radio" type="hidden" name="q13" value="1">
									1
									<input type="radio" type="hidden" name="q13" value="2">
									2
									<input type="radio" type="hidden" name="q13" value="3">
									3
									<br>
									<label for="q14">14. Πρόσφατος χωρισμός:</label>
									<input type="radio" type="hidden" name="q14" value="0">
									0
									<input type="radio" type="hidden" name="q14" value="1">
									1
									<input type="radio" type="hidden" name="q14" value="2">
									2
									<input type="radio" type="hidden" name="q14" value="3">
									3
									<br>
									<label for="q15">15. Θλίψη για πρόσφατο χωρισμό:</label>
									<input type="radio" type="hidden" name="q15" value="0">
									0
									<input type="radio" type="hidden" name="q15" value="1">
									1
									<input type="radio" type="hidden" name="q15" value="2">
									2
									<input type="radio" type="hidden" name="q15" value="3">
									3
									<br>
									<label for="q16">16. Σεξ και σεξουαλικότητα:</label>
									<input type="radio" type="hidden" name="q16" value="0">
									0
									<input type="radio" type="hidden" name="q16" value="1">
									1
									<input type="radio" type="hidden" name="q16" value="2">
									2
									<input type="radio" type="hidden" name="q16" value="3">
									3
									<br>
									<label for="q17">17. Σεξουαλικός προσανατολισμός:</label>
									<input type="radio" type="hidden" name="q17" value="0">
									0
									<input type="radio" type="hidden" name="q17" value="1">
									1
									<input type="radio" type="hidden" name="q17" value="2">
									2
									<input type="radio" type="hidden" name="q17" value="3">
									3
									<br>
									<label for="q18">18. Εγκυμοσύνη:</label>
									<input type="radio" type="hidden" name="q18" value="0">
									0
									<input type="radio" type="hidden" name="q18" value="1">
									1
									<input type="radio" type="hidden" name="q18" value="2">
									2
									<input type="radio" type="hidden" name="q18" value="3">
									3
									<br>
									<label for="q19">19. Σύγχιση για πιστεύω/αξίες:</label>
									<input type="radio" type="hidden" name="q19" value="0">
									0
									<input type="radio" type="hidden" name="q19" value="1">
									1
									<input type="radio" type="hidden" name="q19" value="2">
									2
									<input type="radio" type="hidden" name="q19" value="3">
									3
									<br>
									<label for="q20">20. Δεν μου αρέσει ο εαυτός μου:</label>
									<input type="radio" type="hidden" name="q20" value="0">
									0
									<input type="radio" type="hidden" name="q20" value="1">
									1
									<input type="radio" type="hidden" name="q20" value="2">
									2
									<input type="radio" type="hidden" name="q20" value="3">
									3
									<br>
									<label for="q21">21. Αισθήματα κατωτερότητας:</label>
									<input type="radio" type="hidden" name="q21" value="0">
									0
									<input type="radio" type="hidden" name="q21" value="1">
									1
									<input type="radio" type="hidden" name="q21" value="2">
									2
									<input type="radio" type="hidden" name="q21" value="3">
									3
									<br>
									<label for="q22">22. Αισθήματα τύψεων:</label>
									<input type="radio" type="hidden" name="q22" value="0">
									0
									<input type="radio" type="hidden" name="q22" value="1">
									1
									<input type="radio" type="hidden" name="q22" value="2">
									2
									<input type="radio" type="hidden" name="q22" value="3">
									3
									<br>
									<label for="q23">23. Δυστυχία:</label>
									<input type="radio" type="hidden" name="q23" value="0">
									0
									<input type="radio" type="hidden" name="q23" value="1">
									1
									<input type="radio" type="hidden" name="q23" value="2">
									2
									<input type="radio" type="hidden" name="q23" value="3">
									3
									<br>
									<label for="q24">24. Καταθλιπτική διάθεση:</label>
									<input type="radio" type="hidden" name="q24" value="0">
									0
									<input type="radio" type="hidden" name="q24" value="1">
									1
									<input type="radio" type="hidden" name="q24" value="2">
									2
									<input type="radio" type="hidden" name="q24" value="3">
									3
									<br>
									<label for="q25">25. Αισθήματα κενού/απουσία συναισθημάτων:</label>
									<input type="radio" type="hidden" name="q25" value="0">
									0
									<input type="radio" type="hidden" name="q25" value="1">
									1
									<input type="radio" type="hidden" name="q25" value="2">
									2
									<input type="radio" type="hidden" name="q25" value="3">
									3
									<br>
									<label for="q26">26. Κόπωση-μειωμένη ενέργεια:</label>
									<input type="radio" type="hidden" name="q26" value="0">
									0
									<input type="radio" type="hidden" name="q26" value="1">
									1
									<input type="radio" type="hidden" name="q26" value="2">
									2
									<input type="radio" type="hidden" name="q26" value="3">
									3
									<br>
									<label for="q27">27. Μειωμένη διάθεση για δραστηριότητες:</label>
									<input type="radio" type="hidden" name="q27" value="0">
									0
									<input type="radio" type="hidden" name="q27" value="1">
									1
									<input type="radio" type="hidden" name="q27" value="2">
									2
									<input type="radio" type="hidden" name="q27" value="3">
									3
									<br>
									<label for="q28">28. Δυσκολίες συγκέντρωσης/προσοχής:</label>
									<input type="radio" type="hidden" name="q28" value="0">
									0
									<input type="radio" type="hidden" name="q28" value="1">
									1
									<input type="radio" type="hidden" name="q28" value="2">
									2
									<input type="radio" type="hidden" name="q28" value="3">
									3
									<br>
									<label for="q29">29. Δυσκολίες μνήμης:</label>
									<input type="radio" type="hidden" name="q29" value="0">
									0
									<input type="radio" type="hidden" name="q29" value="1">
									1
									<input type="radio" type="hidden" name="q29" value="2">
									2
									<input type="radio" type="hidden" name="q29" value="3">
									3
									<br>
									<label for="q30">30. Αναποφασιστικότητα:</label>
									<input type="radio" type="hidden" name="q30" value="0">
									0
									<input type="radio" type="hidden" name="q30" value="1">
									1
									<input type="radio" type="hidden" name="q30" value="2">
									2
									<input type="radio" type="hidden" name="q30" value="3">
									3
									<br>

									<label for="q31">31. Επιβράδυνση στη σκέψη:</label>
									<input type="radio" type="hidden" name="q31" value="0">
									0
									<input type="radio" type="hidden" name="q31" value="1">
									1
									<input type="radio" type="hidden" name="q31" value="2">
									2
									<input type="radio" type="hidden" name="q31" value="3">
									3
									<br>
									<label for="q32">32. Δυσκολίες ύπνου:</label>
									<input type="radio" type="hidden" name="q32" value="0">
									0
									<input type="radio" type="hidden" name="q32" value="1">
									1
									<input type="radio" type="hidden" name="q32" value="2">
									2
									<input type="radio" type="hidden" name="q32" value="3">
									3
									<br>
									<label for="q33">33. Δυσκολίες ύπνου:</label>
									<input type="radio" type="hidden" name="q33" value="0">
									0
									<input type="radio" type="hidden" name="q33" value="1">
									1
									<input type="radio" type="hidden" name="q33" value="2">
									2
									<input type="radio" type="hidden" name="q33" value="3">
									3
									<br>
									<label for="q32">34. Άγχος/ανησυχία:</label>
									<input type="radio" type="hidden" name="q34" value="0">
									0
									<input type="radio" type="hidden" name="q34" value="1">
									1
									<input type="radio" type="hidden" name="q34" value="2">
									2
									<input type="radio" type="hidden" name="q34" value="3">
									3
								</div>
								<div style="width: 50%; float:right">
									<label for="q33">35. Ένταση/πίεση:</label>
									<input type="radio" type="hidden" name="q35" value="0">
									0
									<input type="radio" type="hidden" name="q35" value="1">
									1
									<input type="radio" type="hidden" name="q35" value="2">
									2
									<input type="radio" type="hidden" name="q35" value="3">
									3
									<br>
									<label for="q34">36. Φοβίες για συγκεκριμένα μέρη ή πράγματα:</label>
									<input type="radio" type="hidden" name="q36" value="0">
									0
									<input type="radio" type="hidden" name="q36" value="1">
									1
									<input type="radio" type="hidden" name="q36" value="2">
									2
									<input type="radio" type="hidden" name="q36" value="3">
									3
									<br>
									<label for="q35">37. Έμμονες σκέψεις:</label>
									<input type="radio" type="hidden" name="q37" value="0">
									0
									<input type="radio" type="hidden" name="q37" value="1">
									1
									<input type="radio" type="hidden" name="q37" value="2">
									2
									<input type="radio" type="hidden" name="q37" value="3">
									3
									<br>
									<label for="q36">38. Επίμονες επαναλαμβανόμενες συμπεριφορές:</label>
									<input type="radio" type="hidden" name="q38" value="0">
									0
									<input type="radio" type="hidden" name="q38" value="1">
									1
									<input type="radio" type="hidden" name="q38" value="2">
									2
									<input type="radio" type="hidden" name="q38" value="3">
									3
									<br>
									<label for="q37">39. Προβήματα διατροφής:</label>
									<input type="radio" type="hidden" name="q39" value="0">
									0
									<input type="radio" type="hidden" name="q39" value="1">
									1
									<input type="radio" type="hidden" name="q39" value="2">
									2
									<input type="radio" type="hidden" name="q39" value="3">
									3
									<br>
									<label for="q38">40. Προβλήματα με βάρος:</label>
									<input type="radio" type="hidden" name="q40" value="0">
									0
									<input type="radio" type="hidden" name="q40" value="1">
									1
									<input type="radio" type="hidden" name="q40" value="2">
									2
									<input type="radio" type="hidden" name="q40" value="3">
									3
									<br>
									<label for="q39">41. Αλλαγές στην όρεξη για φαγητό:</label>
									<input type="radio" type="hidden" name="q41" value="0">
									0
									<input type="radio" type="hidden" name="q41" value="1">
									1
									<input type="radio" type="hidden" name="q41" value="2">
									2
									<input type="radio" type="hidden" name="q41" value="3">
									3
									<br>
									<label for="q40">42. Προβλήματα υγείας:</label>
									<input type="radio" type="hidden" name="q42" value="0">
									0
									<input type="radio" type="hidden" name="q42" value="1">
									1
									<input type="radio" type="hidden" name="q42" value="2">
									2
									<input type="radio" type="hidden" name="q42" value="3">
									3
									<br>
									<label for="q41">43. Σωματική Αναπηρίας:</label>
									<input type="radio" type="hidden" name="q43" value="0">
									0
									<input type="radio" type="hidden" name="q43" value="1">
									1
									<input type="radio" type="hidden" name="q43" value="2">
									2
									<input type="radio" type="hidden" name="q43" value="3">
									3
									<br>
									<label for="q42">44. Εγκεφαλικό τραύμα:</label>
									<input type="radio" type="hidden" name="q44" value="0">
									0
									<input type="radio" type="hidden" name="q44" value="1">
									1
									<input type="radio" type="hidden" name="q44" value="2">
									2
									<input type="radio" type="hidden" name="q44" value="3">
									3
									<br>
									<label for="q43">45. Τραυματικό γεγονός:</label>
									<input type="radio" type="hidden" name="q45" value="0">
									0
									<input type="radio" type="hidden" name="q45" value="1">
									1
									<input type="radio" type="hidden" name="q45" value="2">
									2
									<input type="radio" type="hidden" name="q45" value="3">
									3
									<br>
									<label for="q44">46. Υπερκινητικότητα:</label>
									<input type="radio" type="hidden" name="q46" value="0">
									0
									<input type="radio" type="hidden" name="q46" value="1">
									1
									<input type="radio" type="hidden" name="q46" value="2">
									2
									<input type="radio" type="hidden" name="q46" value="3">
									3
									<br>
									<label for="q45">47. Παρορμητική συμπεριφορά:</label>
									<input type="radio" type="hidden" name="q47" value="0">
									0
									<input type="radio" type="hidden" name="q47" value="1">
									1
									<input type="radio" type="hidden" name="q47" value="2">
									2
									<input type="radio" type="hidden" name="q47" value="3">
									3
									<br>
									<label for="q46">48. Προβλήματα με αλκοόλ:</label>
									<input type="radio" type="hidden" name="q48" value="0">
									0
									<input type="radio" type="hidden" name="q48" value="1">
									1
									<input type="radio" type="hidden" name="q48" value="2">
									2
									<input type="radio" type="hidden" name="q48" value="3">
									3
									<br>
									<label for="q47">49. Προβλήματα με άλλες ουσίες:</label>
									<input type="radio" type="hidden" name="q49" value="0">
									0
									<input type="radio" type="hidden" name="q49" value="1">
									1
									<input type="radio" type="hidden" name="q49" value="2">
									2
									<input type="radio" type="hidden" name="q49" value="3">
									3
									<br>
									<label for="q48">50. Προβλήματα με τζόγο:</label>
									<input type="radio" type="hidden" name="q50" value="0">
									0
									<input type="radio" type="hidden" name="q50" value="1">
									1
									<input type="radio" type="hidden" name="q50" value="2">
									2
									<input type="radio" type="hidden" name="q50" value="3">
									3
									<br>
									<label for="q49">51. Ενασχόληση διαδικτυακά παιγνίδια:</label>
									<input type="radio" type="hidden" name="q51" value="0">
									0
									<input type="radio" type="hidden" name="q51" value="1">
									1
									<input type="radio" type="hidden" name="q51" value="2">
									2
									<input type="radio" type="hidden" name="q51" value="3">
									3
									<br>
									<label for="q50">52. Διαχείριση χρόνου:</label>
									<input type="radio" type="hidden" name="q52" value="0">
									0
									<input type="radio" type="hidden" name="q52" value="1">
									1
									<input type="radio" type="hidden" name="q52" value="2">
									2
									<input type="radio" type="hidden" name="q52" value="3">
									3
									<br>
									<label for="q51">53. Κακοποίηση(σωματική, σεξουαλική, λεκτική, παραμέληση):</label>
									<input type="radio" type="hidden" name="q53" value="0">
									0
									<input type="radio" type="hidden" name="q53" value="1">
									1
									<input type="radio" type="hidden" name="q53" value="2">
									2
									<input type="radio" type="hidden" name="q53" value="3">
									3
									<br>
									<label for="q52">54. Ακούω φωνές:</label>
									<input type="radio" type="hidden" name="q54" value="0">
									0
									<input type="radio" type="hidden" name="q54" value="1">
									1
									<input type="radio" type="hidden" name="q54" value="2">
									2
									<input type="radio" type="hidden" name="q54" value="3">
									3
									<br>
									<label for="q53">55. Πιστεύω ότι με παρακολουθούν:</label>
									<input type="radio" type="hidden" name="q55" value="0">
									0
									<input type="radio" type="hidden" name="q55" value="1">
									1
									<input type="radio" type="hidden" name="q55" value="2">
									2
									<input type="radio" type="hidden" name="q55" value="3">
									3
									<br>
									<label for="q54">56. Πιστεύω ότι με ελέγχουν/χειραγωγούν:</label>
									<input type="radio" type="hidden" name="q56" value="0">
									0
									<input type="radio" type="hidden" name="q56" value="1">
									1
									<input type="radio" type="hidden" name="q56" value="2">
									2
									<input type="radio" type="hidden" name="q56" value="3">
									3
									<br>
									<label for="q55">57. Αλλόκοτη συμπεριφορά:</label>
									<input type="radio" type="hidden" name="q57" value="0">
									0
									<input type="radio" type="hidden" name="q57" value="1">
									1
									<input type="radio" type="hidden" name="q57" value="2">
									2
									<input type="radio" type="hidden" name="q57" value="3">
									3
									<br>
									<label for="q56">58. Οικονομικά προβλήματα:</label>
									<input type="radio" type="hidden" name="q58" value="0">
									0
									<input type="radio" type="hidden" name="q58" value="1">
									1
									<input type="radio" type="hidden" name="q58" value="2">
									2
									<input type="radio" type="hidden" name="q58" value="3">
									3
									<br>
									<label for="q57">59. Νομικά προβλήματα:</label>
									<input type="radio" type="hidden" name="q59" value="0">
									0
									<input type="radio" type="hidden" name="q59" value="1">
									1
									<input type="radio" type="hidden" name="q59" value="2">
									2
									<input type="radio" type="hidden" name="q59" value="3">
									3
									<br>
									<label for="q58">60. Σκέψεις αυτοκτονίας:</label>
									<input type="radio" name="q60" value="0">
									0
									<input type="radio" name="q60" value="1">
									1
									<input type="radio" name="q60" value="2">
									2
									<input type="radio" name="q60" value="3">
									3
									<br>
									<label for="q59">61. Σκέψεις ανθρωποκτονίας:</label>
									<input type="radio" type="hidden" name="q61" value="0">
									0
									<input type="radio" type="hidden" name="q61" value="1">
									1
									<input type="radio" type="hidden" name="q61" value="2">
									2
									<input type="radio" type="hidden" name="q61" value="3">
									3
									<br>
									<label for="q60">62. Άλλο</label>
									<input type="text" class="form-control" id="q62" name="q62">
									<input type="radio" type="hidden" name="q62" value="0">
									0
									<input type="radio" type="hidden" name="q62" value="1">
									1
									<input type="radio" type="hidden" name="q62" value="2">
									2
									<input type="radio" type="hidden" name="q62" value="3">
									3
									<br>
									<label for="q61">63. Άλλο</label>
									<input type="text" class="form-control" id="q63" name="q63">
									<input type="radio" name="q63" value="0">
									0
									<input type="radio" name="q63" value="1">
									1
									<input type="radio" name="q63" value="2">
									2
									<input type="radio" name="q63" value="3">
									3
								</div>
							</div>
						</div>
				</div>

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
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/form3.php";
$method='POST';
if(isset($_POST['submit'])){
	$days=base64_encode(serialize($_POST["myInputs"]));
	$hours=base64_encode(serialize($_POST["myInputs1"]));
	$postfields=http_build_query(array(
  		'id' => $_SESSION['id'],
  		'q1' => $_POST['q1'],
  		'q2' => $_POST['q2'],
 		'q3' => $_POST['q3'],
  		'q4' => $_POST['q4'],
  		'q5' => $_POST['q5'],
  		'q6' => $_POST['q6'],
  		'q7' => $_POST['q7'],
 		'q8' => $_POST['q8'],
  		'q9' => $_POST['q9'],
  		'q10' => $_POST['q10'],
  		'q11' => $_POST['q11'],
  		'q12' => $_POST['q12'],
 		'q13' => $_POST['q13'],
  		'q14' => $_POST['q14'],
  		'q15' => $_POST['q15'],
  		'q16' => $_POST['q16'],
  		'q17' => $_POST['q17'],
 		'q18' => $_POST['q18'],
  		'q19' => $_POST['q19'],
  		'q20' => $_POST['q20'],
  		'q21' => $_POST['q21'],
  		'q22' => $_POST['q22'],
 		'q23' => $_POST['q23'],
  		'q24' => $_POST['q24'],
  		'q25' => $_POST['q25'],
  		'q26' => $_POST['q26'],
  		'q27' => $_POST['q27'],
 		'q28' => $_POST['q28'],
  		'q29' => $_POST['q29'],
  		'q30' => $_POST['q30'],
  		'q31' => $_POST['q31'],
  		'q32' => $_POST['q32'],
 		'q33' => $_POST['q33'],
  		'q34' => $_POST['q34'],
  		'q35' => $_POST['q35'],
  		'q36' => $_POST['q36'],
  		'q37' => $_POST['q37'],
 		'q38' => $_POST['q38'],
  		'q39' => $_POST['q39'],
  		'q40' => $_POST['q40'],
  		'q41' => $_POST['q41'],
  		'q42' => $_POST['q42'],
 		'q43' => $_POST['q43'],
  		'q44' => $_POST['q44'],
  		'q45' => $_POST['q45'],
  		'q46' => $_POST['q46'],
  		'q47' => $_POST['q47'],
 		'q48' => $_POST['q48'],
  		'q49' => $_POST['q49'],
  		'q50' => $_POST['q50'],
  		'q51' => $_POST['q51'],
  		'q52' => $_POST['q52'],
 		'q53' => $_POST['q53'],
  		'q54' => $_POST['q54'],
  		'q55' => $_POST['q55'],
  		'q56' => $_POST['q56'],
  		'q57' => $_POST['q57'],
 		'q58' => $_POST['q58'],
  		'q59' => $_POST['q59'],
  		'q60' => $_POST['q60'],
  		'q61' => $_POST['q61'],
  		'q62' => $_POST['q62'],
  		'q63' => $_POST['q63']
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