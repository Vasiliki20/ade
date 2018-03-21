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
						<h4>ΑΞΙΟΛΟΓΗΣΗ ΥΠΗΡΕΣΙΩΝ ΑΠΟ ΠΕΛΑΤΕΣ</h4>
					</div>
					<div align="left">
						<h5>Θα  το εκτιμούσαμε ιδιαίτερα αν θα μπορούσατε να αφιερώσετε λίγο από το χρόνο σας  και να συμπληρώσετε το πιο κάτω ερωτηματολόγιο που αφορά τις υπηρεσίες του λάβατε από το ΚΕΨΥ.
						Η ανατροφοδότησή σας θα είναι σημαντική ώστε να μπορούμε να βελτιώνουμε τις υπηρεσίες που λαμβάνετε σύμφωνα με τις ανάγκες σας. Οι απαντήσεις σας είναι ανώνυμες.
						Σας ευχαριστούμε εκ των προτέρων για τη συμβολή σας.</h5>
						<br>
						<h5><strong>Α. Χρησιμοποιήστε την παρακάτω κλίμακα για να απαντήσετε στις ερωτήσεις σχετικά με την εμπειρία σας στο ΚΕΨΥ, βάζοντας σε κύκλο τον αριθμό που αντιστοιχεί στη δική σας περίπτωση. </strong></h5>
					</div>
					<div align="center">
						<h5><strong>Διαφωνώ απόλυτα 1 2 3 4 5 6 7 Συμφωνώ απόλυτα</strong></h5>
					</div>
					<form action="" method="post">
						<div class="row">
							<div class="column">
								<input type="hidden" name="q1" />
 								<label for="q1">1. Ήταν εύκολο για μένα να διευθετήσω συνάντηση </label>
								<input type="radio" name="q1" value="1">
								1
								<input type="radio" name="q1" value="2">
								2
								<input type="radio" name="q1" value="3">
								3
								<input type="radio" name="q1" value="4">
								4
								<input type="radio" name="q1" value="5">
								5
								<input type="radio" name="q1" value="6">
								6
								<input type="radio" name="q1" value="7">
								7
								<br>
								<input type="hidden" name="q2" />
								<label for="q2">2. Ο χρόνος που χρειάστηκε να περιμένω για τη διευθέτηση συνεδρίας μου φάνηκε πάρα πολύς</label>
								<input type="radio" name="q2" value="1">
								1
								<input type="radio" name="q2" value="2">
								2
								<input type="radio" name="q2" value="3">
								3
								<input type="radio" name="q2" value="4">
								4
								<input type="radio" name="q2" value="5">
								5
								<input type="radio" name="q2" value="6">
								6
								<input type="radio" name="q2" value="7">
								7
								<br>
								<input type="hidden" name="q3" />
								<label for="q3">3. Ένιωθα άνετα περιμένοντας στην αίθουσα αναμονής </label>
								<input type="radio" name="q3" value="1">
								1
								<input type="radio" name="q3" value="2">
								2
								<input type="radio" name="q3" value="3">
								3
								<input type="radio" name="q3" value="4">
								4
								<input type="radio" name="q3" value="5">
								5
								<input type="radio" name="q3" value="6">
								6
								<input type="radio" name="q3" value="7">
								7
								<br>
								<input type="hidden" name="q4" />
								<label for="q4">4. Μου φάνηκε ότι μου ζητήθηκε να συμπληρώσω πάρα πολλά έντυπα</label>
								<input type="radio" name="q4" value="1">
								1
								<input type="radio" name="q4" value="2">
								2
								<input type="radio" name="q4" value="3">
								3
								<input type="radio" name="q4" value="4">
								4
								<input type="radio" name="q4" value="5">
								5
								<input type="radio" name="q4" value="6">
								6
								<input type="radio" name="q4" value="7">
								7
								<br>
								<input type="hidden" name="q5" />
								<label for="q5">5. Η αρχική αξιολόγηση ήταν χρήσιμη για να με βοηθήσει να εντοπίσω τις ανάγκες μου και να καθορίσω τους στόχους μου :</label>
								<input type="radio" name="q5" value="1">
								1
								<input type="radio" name="q5" value="2">
								2
								<input type="radio" name="q5" value="3">
								3
								<input type="radio" name="q5" value="4">
								4
								<input type="radio" name="q5" value="5">
								5
								<input type="radio" name="q5" value="6">
								6
								<input type="radio" name="q5" value="7">
								7
								<br>
								<input type="hidden" name="q6" />
								<label for="q6">6. Θα σύστηνα σε κάποιο φίλο ή δικό μου άτομο τις υπηρεσίες του  ΚΕΨΥ</label>
								<input type="radio" name="q6" value="1">
								1
								<input type="radio" name="q6" value="2">
								2
								<input type="radio" name="q6" value="3">
								3
								<input type="radio" name="q6" value="4">
								4
								<input type="radio" name="q6" value="5">
								5
								<input type="radio" name="q6" value="6">
								6
								<input type="radio" name="q6" value="7">
								7
								<br>
								<input type="hidden" name="q7" />
								<label for="q7">7. Τα διάφορα εργαλεία (π.χ. ερωτηματολόγια) που συμπλήρωσα μου φάνηκαν χρήσιμα </label>
								<input type="radio" name="q7" value="1">
								1
								<input type="radio" name="q7" value="2">
								2
								<input type="radio" name="q7" value="3">
								3
								<input type="radio" name="q7" value="4">
								4
								<input type="radio" name="q7" value="5">
								5
								<input type="radio" name="q7" value="6">
								6
								<input type="radio" name="q7" value="7">
								7
								<br>
								<input type="hidden" name="q8" />
								<label for="q8">8. Οι ανησυχίες που με ώθησαν να αποταθώ στο ΚΕΨΥ επηρέαζαν σημαντικά τις σπουδές μου </label>
								<input type="radio" name="q8" value="1">
								1
								<input type="radio" name="q8" value="2">
								2
								<input type="radio" name="q8" value="3">
								3
								<input type="radio" name="q8" value="4">
								4
								<input type="radio" name="q8" value="5">
								5
								<input type="radio" name="q8" value="6">
								6
								<input type="radio" name="q8" value="7">
								7
								<br>
								<input type="hidden" name="q9" />
								<label for="q9">9. Οι υπηρεσίες του έλαβα ήταν χρήσιμες για μένα </label>
								<input type="radio" name="q9" value="1">
								1
								<input type="radio" name="q9" value="2">
								2
								<input type="radio" name="q9" value="3">
								3
								<input type="radio" name="q9" value="4">
								4
								<input type="radio" name="q9" value="5">
								5
								<input type="radio" name="q9" value="6">
								6
								<input type="radio" name="q9" value="7">
								7
								<br>
								<label for="q10">Οι υπηρεσίες του έλαβα με βοήθησαν…</label>
								<br>
								<input type="hidden" name="q10" />
								<label for="q10">10. να νιώθω καλύτερα για τον εαυτό μου</label>
								<input type="radio" name="q10" value="1">
								1
								<input type="radio" name="q10" value="2">
								2
								<input type="radio" name="q10" value="3">
								3
								<input type="radio" name="q10" value="4">
								4
								<input type="radio" name="q10" value="5">
								5
								<input type="radio" name="q10" value="6">
								6
								<input type="radio" name="q10" value="7">
								7
								<br>
								<input type="hidden" name="q11" />
								<label for="q11">11. να κατανοώ καλύτερα τον εαυτό μου</label>
								<input type="radio" name="q11" value="1">
								1
								<input type="radio" name="q11" value="2">
								2
								<input type="radio" name="q11" value="3">
								3
								<input type="radio" name="q11" value="4">
								4
								<input type="radio" name="q11" value="5">
								5
								<input type="radio" name="q11" value="6">
								6
								<input type="radio" name="q11" value="7">
								7
								<br>
								<input type="hidden" name="q12" />
								<label for="q12">12. να παραμείνω στο Πανεπιστήμιο </label>
								<input type="radio" name="q12" value="1">
								1
								<input type="radio" name="q12" value="2">
								2
								<input type="radio" name="q12" value="3">
								3
								<input type="radio" name="q12" value="4">
								4
								<input type="radio" name="q12" value="5">
								5
								<input type="radio" name="q12" value="6">
								6
								<input type="radio" name="q12" value="7">
								7
								<br>
								<input type="hidden" name="q13" />
								<label for="q13">13. να βελτιώσω την ακαδημαϊκή μου επίδοση</label>
								<input type="radio" name="q13" value="1">
								1
								<input type="radio" name="q13" value="2">
								2
								<input type="radio" name="q13" value="3">
								3
								<input type="radio" name="q13" value="4">
								4
								<input type="radio" name="q13" value="5">
								5
								<input type="radio" name="q13" value="6">
								6
								<input type="radio" name="q13" value="7">
								7
								<br>
								<input type="hidden" name="q14" />
								<label for="q14">14. να βελτιώσω την  παρουσία μου στις διαλέξεις/μαθήματα</label>
								<input type="radio" name="q14" value="1">
								1
								<input type="radio" name="q14" value="2">
								2
								<input type="radio" name="q14" value="3">
								3
								<input type="radio" name="q14" value="4">
								4
								<input type="radio" name="q14" value="5">
								5
								<input type="radio" name="q14" value="6">
								6
								<input type="radio" name="q14" value="7">
								7
								<br>
								<input type="hidden" name="q15" />
								<label for="q15">15. να βελτιώσω συνολικά την εμπειρία μου στο Πανεπιστήμιο</label>
								<input type="radio" name="q15" value="1">
								1
								<input type="radio" name="q15" value="2">
								2
								<input type="radio" name="q15" value="3">
								3
								<input type="radio" name="q15" value="4">
								4
								<input type="radio" name="q15" value="5">
								5
								<input type="radio" name="q15" value="6">
								6
								<input type="radio" name="q15" value="7">
								7
								<br>
								<input type="hidden" name="q6" />
								<label for="q16">16. να αναπτύξω δεξιότητες ώστε να μπορώ να διαχειριστώ  θέματα που με
									απασχολούν</label>
								<input type="radio" name="q16" value="1">
								1
								<input type="radio" name="q16" value="2">
								2
								<input type="radio" name="q16" value="3">
								3
								<input type="radio" name="q16" value="4">
								4
								<input type="radio" name="q16" value="5">
								5
								<input type="radio" name="q16" value="6">
								6
								<input type="radio" name="q16" value="7">
								7
								<br>
								<input type="hidden" name="q17" />
								<label for="q17">17.  να αναπτύξω δεξιότητες που θα βρω χρήσιμες στη μελλοντική προσωπική και
									επαγγελματική μου πορεία (π.χ. αυτό-κατανόηση, κατανόηση των άλλων, διαχείριση δύσκολων συναισθημάτων, αυτοπεποίθηση, ασφάλεια)</label>
								<input type="radio" name="q17" value="1">
								1
								<input type="radio" name="q17" value="2">
								2
								<input type="radio" name="q17" value="3">
								3
								<input type="radio" name="q17" value="4">
								4
								<input type="radio" name="q17" value="5">
								5
								<input type="radio" name="q17" value="6">
								6
								<input type="radio" name="q17" value="7">
								7
								<br>
								<input type="hidden" name="q18" />
								<label for="q18">18. Ο θεραπευτής έδειξε να νοιάζεται πραγματικά για τις ανησυχίες μου</label>
								<input type="radio" name="q18" value="1">
								1
								<input type="radio" name="q18" value="2">
								2
								<input type="radio" name="q18" value="3">
								3
								<input type="radio" name="q18" value="4">
								4
								<input type="radio" name="q18" value="5">
								5
								<input type="radio" name="q18" value="6">
								6
								<input type="radio" name="q18" value="7">
								7
								<br>
								<input type="hidden" name="q19" />
								<label for="q19">19. Ο θεραπευτής φάνηκε να είναι καλά καταρτισμένος για να με βοηθήσει όσον αφορά το θέμα που με απασχολούσε </label>
								<input type="radio" name="q19" value="1">
								1
								<input type="radio" name="q19" value="2">
								2
								<input type="radio" name="q19" value="3">
								3
								<input type="radio" name="q19" value="4">
								4
								<input type="radio" name="q19" value="5">
								5
								<input type="radio" name="q19" value="6">
								6
								<input type="radio" name="q19" value="7">
								7
								<br>
								<input type="hidden" name="q20" />
								<label for="q20">20. Ο θεραπευτής μου συμπεριφέρθηκε ευγενικά </label>
								<input type="radio" name="q20" value="1">
								1
								<input type="radio" name="q20" value="2">
								2
								<input type="radio" name="q20" value="3">
								3
								<input type="radio" name="q20" value="4">
								4
								<input type="radio" name="q20" value="5">
								5
								<input type="radio" name="q20" value="6">
								6
								<input type="radio" name="q20" value="7">
								7
								<br>
								<input type="hidden" name="q21" />
								<label for="q21">21. Αν προκύψει ξανά η ανάγκη να μιλήσω με κάποιον θα αποταθώ ξανά στο ΚΕΨΥ</label>
								<input type="radio" name="q21" value="1">
								1
								<input type="radio" name="q21" value="2">
								2
								<input type="radio" name="q21" value="3">
								3
								<input type="radio" name="q21" value="4">
								4
								<input type="radio" name="q21" value="5">
								5
								<input type="radio" name="q21" value="6">
								6
								<input type="radio" name="q21" value="7">
								7
								<br>
							</div>
							<div class="form-group">
								<label for="q22"><strong>22. Περιγράψτε λίγο πιο αναλυτικά με ποιους τρόπους οι υπηρεσίες που λάβατε ήταν βοηθητικοί για εσάς.</strong> </label>
								<input type="text" class="form-control" id="q22" placeholder="" name="q22">
							</div>
							<div class="form-group">
								<label for="q23"><strong>23. Περιγράψτε επίσης λίγο πιο αναλυτικά τα στοιχεία στις υπηρεσίες που λάβατε, τα οποία βρήκατε λιγότερο βοηθητικά ή αρνητικά. </strong>
									<br>
									<em>(συμπεριλάβετε οποιοδήποτε περιστατικό σας φάνηκε αρνητικό ή δύσκολο). </em>:</label>
								<input type="text" class="form-control" id="q23" placeholder="" name="q23">
							</div>
							<div class="form-group">
								<label for="q24"><strong>24.  Έχετε οποιεσδήποτε εισηγήσεις για το πώς θα μπορούσε να βελτιωθούν οι υπηρεσίες μας; </strong> </label>
								<input type="text" class="form-control" id="q24" placeholder="" name="q24">
							</div>
							<div class="form-group">
								<label for="q25"><strong>25. Θα θέλατε να αναφέρετε οτιδήποτε άλλο  σχετικά με το ΚΕΨΥ;</strong> </label>
								<input type="text" class="form-control" id="q25" placeholder="" name="q25">
							</div>
							<div align="left">
								<h5><strong>B. Λίγα στοιχεία για εσάς (προαιρετικά)</strong></h5>
							</div>
							<div class="form-group">
								<label for="q7"><strong>1. Πόσες συναντήσεις πραγματοποιήσετε στο ΚΕΨΥ</strong> </label>
								<input type="number" class="form-control" id="meetingsnum" placeholder="απο βάση" name="q7">
							</div>
							<div class="form-group">
								<label for="q8"><strong>2. Με ποιο θεραπευτή συνεργαστήκατε;</strong> </label>
								<input type="text" class="form-control" id="therapist" placeholder="απο βάση" name="q8">
							</div>
							<div class="form-group">
								<label for="q9"><strong>3. Ποιοι ήταν οι κυριότεροι λόγοι που αποταθήκατε στο ΚΕΨΥ; (σημειώστε όσα ισχύουν)</strong> </label>
								<br>
								<input type="checkbox" name="reasons" value="opt1">
								κακοποίηση
								<br>
								<input type="checkbox" name="reasons" value="opt2">
								ακαδημαϊκές δυσκολίες
								<br>
								<input type="checkbox" name="reasons" value="opt3">
								άγχος
								<br>
								<input type="checkbox" name="reasons" value="opt4">
								εθισμός
								<br>
								<input type="checkbox" name="reasons" value="opt5">
								διάθεση/κατάθλιψη
								<br>
								<input type="checkbox" name="reasons" value="opt6">
								θυμός-επιθετικότητα
								<br>
								<input type="checkbox" name="reasons" value="opt7">
								απώλεια/πένθος
								<br>
								<input type="checkbox" name="reasons" value="opt8">
								σωματική υγεία
								<br>
								<input type="checkbox" name="reasons" value="opt9">
								διατροφικές διαταραχές
								<br>
								<input type="checkbox" name="reasons" value="opt10">
								σχέσεις
								<br>
								<input type="checkbox" name="reasons" value="opt11">
								προσωπική ταυτότητα
								<br>
								<input type="checkbox" name="reasons" value="opt12">
								σεξουαλικά θέματα
								<br>
								<input type="checkbox" name="reasons" value="opt13">
								Άλλο (διευκρινίστε)
								<br>
								<input type="text" class="form-control" name="reasons" value="">
							</div>
							<div class="form-group">
								<label for="q9"><strong>4. Για ποιο λόγο τερματίσετε τις υπηρεσίες που λαμβάνατε στο ΚΕΨΥ;</strong> <em>(σημειώστε όσα ισχύουν)</em></label>
								<br>
								<input type="checkbox" name="whyend" value="opt1">
								Η συμβουλευτική δεν μπορούσε να ανταποκριθεί στις ανησυχίες μου
								<br>
								<input type="checkbox" name="whyend" value="opt2">
								Νιώθω καλύτερη και θεωρώ πώς δεν χρειάζομαι πια τις υπηρεσίες
								<br>
								<input type="checkbox" name="whyend" value="opt3">
								Δεν ήμουν ικανοποιημένος/η με το θεραπευτή/σύμβουλό μου
								<br>
								<input type="checkbox" name="whyend" value="opt4">
								Έχω ολοκληρώσεις το πρόγραμμα θεραπείας
								<br>
								<input type="checkbox" name="whyend" value="opt5">
								Λόγω αποφοίτησής μου
								<br>
								<input type="checkbox" name="whyend" value="opt6">
								Άλλο (διευκρινίστε)
								<br>
								<input type="text" class="form-control" name="whyend" value="">
							</div>
							<div class="form-group">
								<label for="thankyou"><strong>Σας ευχαριστούμε πολύ για το χρόνο και την προσοχή σας για να μας βοηθήσετε να αξιολογήσουμε/βελτιώσουμε τις υπηρεσίες που σας προσφέρουμε! </strong></label>
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
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/form15.php";
$method='POST';
if(isset($_POST['submit'])){
$postfields=http_build_query(array(
  'id' => $_POST['id'],
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
  'helpful' => $_POST['q22'],
  'negative' => $_POST['q23'],
  'sugestions' => $_POST['q24'],
  'other' => $_POST['q25'],
  'whyterminate1' => $_POST['whyend']
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
			document.cookie='token=<?= $tok ?>';
		</script>
		<?php
		//$GLOBALS['curtoken']=giveToken();
		//print "<h5>".$GLOBALS['curtoken']."</h5>";
		$response=request($url,$method,$postfields,$tok);
	}
	
}
?>
