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
						<h4>Ενημερωμένη συγκατάθεση - Ενήλικες</h4>
					</div>
					<div align="left">
						<h5><strong>Καλώς όρισες στο Κέντρο Ψυχικής Υγείας του Πανεπιστημίου Κύπρου (ΚΕΨΥ)!</strong></h5>
					</div>
					<div align="left">
						<h5>Με την επίσκεψή σου εδώ μόλις έκανες ένα γενναίο και σημαντικό βήμα που θα σου δώσει την ευκαιρία να ανακαλύψεις πολλά πράγματα για τον εαυτό σου! Πιθανόν αυτή να είναι η πρώτη σου εμπειρία με ψυχολογικές υπηρεσίες και για αυτό θεωρούμε σημαντικό να σου εξηγήσουμε με σαφήνεια και διαφάνεια τι να περιμένεις! Παρακαλούμε μελέτησε προσεκτικά τις πληροφορίες που σου δίνονται και στη συνέχεια μίλησέ για οποιεσδήποτε απορίες έχεις ώστε να μπορέσουμε να τις συζητήσουμε. Αφού συζητήσουμε μαζί τις σχετικές πληροφορίες θα σου ζητήσουμε να υπογράψεις αυτό το έντυπο.
						<br>
						<br>
						Το ΚΕΨΥ παρέχει ψυχολογική στήριξη σε ένα ασφαλές και εχέμυθο περιβάλλον, όπου οι φοιτητές του Πανεπιστημίου Κύπρου μπορούν να συζητήσουν ελεύθερα θέματα που τους απασχολούν, ανησυχίες και προβληματισμούς. Οι γνώσεις, δεξιότητες και αυτό-αποτελεσματικότητα που ενισχύονται μέσω της διαδικασίας της παρέμβασης μπορούν να σε βοηθήσουν να βελτιώσεις τις διαπροσωπικές σου σχέσεις, την ακαδημαϊκή σου προσαρμογή και επίδοση, τη διαχείριση του καθημερινού στρες, να πετύχεις προσωπικούς σου στόχους και να διαχειριστείς προκλήσεις που μπορεί να αντιμετωπίσεις στο μέλλον. Στη διαδικασία μπορεί να βιώσεις κάποια έντονα ή αρνητικά συναισθήματα, κάτι που αποτελεί αναμενόμενο μέρος της διαδικασίας. Έχε όμως υπόψη σου ότι έχεις το δικαίωμα να μη συμμετέχεις ή να ζητήσεις να διακόψεις οτιδήποτε σε κάνει να νιώθεις άβολα. Καθώς δεν επωφελούνται όλοι με τον ίδιο τρόπο ή στον ίδιο βαθμό από τις ψυχολογικές παρεμβάσεις, σε ενθαρρύνουμε να συζητάς ανοικτά μαζί με το θεραπευτή σου ώστε να βρείτε μαζί τους τρόπους που θα σε βοηθήσουν καλύτερα. </h5>
					</div>
					<div align="left">
						<h5><strong>ΕΧΕΜΥΘΕΙΑ</strong></h5>
					</div>

					<div align="left">
						<h5>Οι υπηρεσίες του ΚΕΨΥ διέπονται από αυστηρή εχεμύθεια. Αυτό σημαίνει ότι το προσωπικό δεν μπορεί να μοιραστεί με τρίτους (ούτε με γονείς, φίλους, ή ακαδημαϊκούς) πληροφορίες για σένα χωρίς τη δική σου γραπτή συγκατάθεση. Αν επιθυμείς να μας δώσεις γραπτή συγκατάθεση για να μοιραστούμε πληροφορίες για σένα με κάποιο τρίτο, διατηρείς το δικαίωμα να την αποσύρεις όποτε το θελήσεις. </h5>
					</div>

					<div align="left">
						<h5><strong>Εξαιρέσεις</strong></h5>
					</div>

					<div align="left">
						<h5>Υπάρχουν κάποιες σπάνιες περιπτώσεις όπου έχουμε νομική υποχρέωση να μοιραστούμε ορισμένες πληροφορίες χωρίς τη συγκατάθεσή σου, ώστε να διασφαλίσουμε τη δική σου ασφάλεια ή την ασφάλεια τρίτων.
						Οι εξαιρέσεις αυτές αφορούν τις πιο κάτω περιπτώσεις:</h5>
					</div>
					<div align="left" size="2" >
						<ol>
							<li>
								<h5><strong>Κίνδυνος για τη ζωή ή την ασφάλειά σου ή άλλου ατόμου.</strong></h5>
								<h5>Αν ο ψυχολόγος έχει σαφείς ενδείξεις ότι κινδυνεύει η δική σου ζωή ή ασφάλεια ή η ασφάλεια τρίτων ατόμων, μπορεί να δράσει ανάλογα, όπως να ειδοποιήσει την αστυνομία ή τρίτο άτομο υπεύθυνο για την ασφάλεια. </h5>
							</li>
							<li>
								<h5><strong>Κακοποίηση ή παραμέληση ανηλίκου, ηλικιωμένου, ή ανάπηρου ατόμου. </strong></h5>
								<h5>Σε περίπτωση που περιέλθει στην αντίληψή μας ότι κακοποιείται ή παραμελείται ανήλικο, ηλικιωμένο ή ανάπηρο άτομο, είμαστε υποχρεωμένοι να το αναφέρουμε στις αρμόδιες υπηρεσίες. </h5>
							</li>
							<li>
								<h5><strong>Δικαστικό διάταγμα </strong></h5>
								<h5>Σε περίπτωση που εκδοθεί διάταγμα δικαστηρίου που το απαιτεί, το προσωπικό του ΚΕΨΥ υποχρεούται να δώσει πληροφορίες από τα αρχεία ή/και καταθέσει στο δικαστήριο. </h5>
							</li>
						</ol>
					</div>
					<div align="left">
						<h5>Σε τέτοιες σπάνιες περιπτώσεις, ο ψυχολόγος θα καταβάλει πρώτα προσπάθειες να συζητήσει μαζί σου την κατάσταση και να λάβει τη συγκατάθεσή σου, να σε ενημερώσει για τις επαφές στις οποίες προβαίνει, και θα περιορίσει τις πληροφορίες που μοιράζεται σε αυτές που είναι απόλυτα απαραίτητες. </h5>
					</div>

					<div align="center">
						<h4><strong>ΕΝΗΜΕΡΩΜΕΝΗ ΣΥΓΚΑΤΑΘΕΣΗ ΠΕΛΑΤΗ ΓΙΑ ΨΥΧΟΛΟΓΙΚΗ ΣΥΜΒΟΥΛΕΥΤΙΚΗ</strong></h4>
					</div>
					<div align="center">
						<h5>Παρακαλώ σημειώστε √ στα σημεία που ισχύουν για να δώσετε τη συγκατάθεσή σας για τη συμβουλευτική. </h5>
					</div>

					<form action="/action_page.php">
						<div class="form-group">
							<div style="width: 80%; float:left">
								<label for="q1" >Έχω διαβάσει το Έντυπο 04 «Ενημερωμένη Συγκατάθεση» και το Έντυπο 05 «Κανόνες Λειτουργίας-Πληροφορίες για Πελάτες», συζήτησα το περιεχόμενό τους με το θεραπευτή, και είχα ικανοποιητικό χρόνο για να τα μελετήσω προσεκτικά και να υποβάλω οποιεσδήποτε ερωτήσεις.</label>
							</div>
							<div style="width: 10%; float:right">
								<input type="checkbox" name="q1" value="q1">
							</div>
							<div style="width: 80%; float:left">
								<label for="q2">Κατανοώ ότι οι υπηρεσίες του ΚΕΨΥ διέπονται από αυστηρή εχεμύθεια, και ταυτόχρονα κατανοώ τις εξαιρέσεις στην εχεμύθεια σύμφωνα με τη νομοθεσία και τις υποδείξεις του θεραπευτή μου. </label>
							</div>
							<div style="width: 10%; float:right">
								<input type="checkbox" name="q2" value="q2">
							</div>
							<div style="width: 80%; float:left">
								<label for="q3">Κατανοώ ότι σε περίπτωση που προτίθεμαι να βλάψω τον εαυτό μου, τους άλλους, ανήλικους ή εξαρτώμενους, ο θεραπευτής μου είναι πρωτίστως υποχρεωμένος να διασφαλίσει την προστασία αυτών των ατόμων, ακόμα και εις βάρος της ιδιωτικότητάς μου. </label>
							</div>
							<div style="width: 10%; float:right">
								<input type="checkbox" name="q3" value="q3">
							</div>
							<div style="width: 80%; float:left">
								<label for="q4">Κατανοώ τα δικαιώματα και τις ευθύνες μου ως πελάτης, καθώς και τις ευθύνες του θεραπευτή μου. </label>
							</div>
							<div style="width: 10%; float:right">
								<input type="checkbox" name="q4" value="q4">
							</div>
							<div style="width: 80%; float:left">
								<label for="q5">Κατανοώ ότι έχω το δικαίωμα να συζητώ ανοιχτά και ειλικρινά με το θεραπευτή μου. Θα προσπαθώ να παρέχω στο θεραπευτή μου ανατροφοδότηση σχετικά με την πορεία της θεραπείας.</label>
							</div>
							<div style="width: 10%; float:right">
								<input type="checkbox" name="q5" value="q5">
							</div>
							<div style="width: 80%; float:left">
								<label for="q6">Βρίσκομαι στο ΚΕΨΥ με τη θέλησή μου και κατανοώ ότι η συμμετοχή μου στη συμβουλευτική είναι εθελοντική. Γνωρίζω ότι έχω το δικαίωμα να τερματίσω τη θεραπεία οποιαδήποτε στιγμή το επιθυμώ, να ζητήσω αλλαγή θεραπευτή, και ότι μπορώ να αρνηθώ οποιαδήποτε αιτήματα ή εισηγήσεις του θεραπευτή μου.</label>
							</div>
							<div style="width: 10%; float:right">
								<input type="checkbox" name="q6" value="q6">
							</div>
							<div style="width: 80%; float:left">
								<label for="q7">Θα φροντίζω να παρουσιάζομαι σε όλες τις προγραμματισμένες συνεδρίες, και θα καταβάλλω προσπάθεια ακόμα και αν δεν νιώθω πάντα ότι το θέλω. Αν δεν μπορώ να παρουσιαστώ σε προκαθορισμένη συνεδρία, κατανοώ ότι έχω την ευθύνη να επικοινωνώ με το ΚΕΨΥ για να ακυρώσω ή να επαναδιευθετήσω τη συνεδρία. Αν καθυστερήσω να παρουσιαστώ σε προγραμματισμένη συνεδρία, καταλαβαίνω ότι θα λήξει στον αρχικά προκαθορισμένο χρόνο.</label>
							</div>
							<div style="width: 10%; float:right">
								<input type="checkbox" name="q7" value="q7">
							</div>
							<div style="width: 80%; float:left">
								<label for="q8">Είμαι άνω της ηλικίας των δεκαοκτώ ετών και είμαι σε θέση να δώσω υπεύθυνα τη συγκατάθεσή μου. </label>
							</div>
							<div style="width: 10%; float:right">
								<input type="checkbox" name="q8" value="q8">
							</div>
							<div style="width: 80%; float:left">
								<label for="q9"><strong>Συμφωνώ να συμμετέχω στην παροχή υπηρεσιών σύμφωνα με τους όρους που περιγράφονται στο παρόν Έντυπο.</strong></label>
							</div>
							<div style="width: 10%; float:right">
								<input type="checkbox" name="q9" value="q9">
							</div>
						</div>
						<div align="left" style="width: 80%; float:left">
							<h5><em>Σε περίπτωση όπου ισχύει (εποπτευόμενες υπηρεσίες)</em></h5>
						</div>
						<div class="form-group">
							<div style="width: 80%; float:left">
								<label for="q9">Έχω ενημερωθεί ότι λαμβάνω υπηρεσίες από Ειδικευόμενο Κλινικό Ψυχολόγο ο οποίος εργάζεται υπό την εποπτεία επαγγελματία, και ότι ο θεραπευτής μου θα συζητά τις συνεδρίες στο πλαίσιο της εποπτείας για σκοπούς βέλτιστης ποιότητας των υπηρεσιών. </label>
							</div>
							<div style="width: 10%; float:right">
								<input type="checkbox" name="q9" value="q9">
							</div>
							<div style="width: 80%; float:left">
								<label for="q10">Δίνω υπεύθυνα τη συγκατάθεσή μου για μαγνητοσκόπηση/ ηχογράφηση των συνεδριών μου στο ΚΕΨΥ για σκοπούς εποπτείας και διασφάλισης της βέλτιστης ποιότητας των υπηρεσιών που λαμβάνω.</label>
							</div>
							<div style="width: 10%; float:right">
								<input type="checkbox" name="q10" value="q10">
							</div>
						</div>
						<div align="left" style="width: 80%; float:left">
							<h5><em>Μόνο για περιπτώσεις παραπομπής στο Κέντρο από προσωπικό του Πανεπιστημίου Κύπρου</em></h5>
						</div>
						<div class="form-group">
							<div style="width: 80%; float:left">
								<label for="q11">Δίνω συγκατάθεση στο ΚΕΨΥ να ενημερώσει το άτομο που με παράπεμψε ότι έχω αποταθεί στο ΚΕΨΥ για υπηρεσίες. Κατανοώ ότι αυτό αφορά μόνο την επιβεβαίωση της αρχικής μου επίσκεψης, και ότι καμία άλλη πληροφορία δεν θα δοθεί χωρίς τη συγκατάθεσή μου. </label>
							</div>
							<div style="width: 10%; float:right">
								<input type="checkbox" name="q11" value="q11">
							</div>
						</div>
						<div class="form-group">
							<div style="width: 80%; float:left">
								<label for="signature">Υπογραφή</label>
							</div>
							<input type="text" class="form-control" name="signature">
						</div>

						<div align="left" style="width: 80%; float:left">
							<h5><strong>Για το θεραπευτή:</strong> Έχω συζητήσει τις πιο πάνω πληροφορίες σχετικά με την ενημερωμένη συγκατάθεση με τον πελάτη μου, και σύμφωνα με τις παρατηρήσεις μου το άτομο αυτό κατανοεί τους κανόνες και τους όρους παροχής υπηρεσιών συμβουλευτικής και είναι στην παρούσα φάση σε θέση να παρέχει ενημερωμένη συναίνεση. </h5>
						</div>
						<div class="form-group">
							<div style="width: 80%; float:left">
								<label for="signature">Υπογραφή</label>
							</div>
							<input type="text" class="form-control" name="signature">
						</div>
				</div>
			</div>

			<div align="center" style="width: 90%; float:left">
				<button type="submit" class="btn btn-default" name="submit">
					Submit
				</button>
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