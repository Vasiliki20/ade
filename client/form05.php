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
						<h4><strong>ΚΑΝΟΝΕΣ ΛΕΙΤΟΥΡΓΙΑΣ</strong></h4>
					</div>
					<div align="center">
						<h5><strong>Χρήσιμες Πληροφορίες για Πελάτες του ΚΕΨΥ</strong></h5>
					</div>
					<div align="left">
						<h5><strong>ΔΙΚΑΙΟΥΧΟΙ</strong></h5>
					</div>
					<div align="left">
						<h5>Οι υπηρεσίες του ΚΕΨΥ είναι διαθέσιμες δωρεάν σε όλους τους φοιτητές του Πανεπιστημίου Κύπρου, καθώς και για φοιτητές ανταλλαγής Erasmus. </h5>
					</div>

					<div align="left">
						<h5><strong>ΠΡΟΣΩΠΙΚΟ</strong></h5>
					</div>

					<div align="left">
						<h5>Οι υπηρεσίες παρέχονται από εγγεγραμμένους ειδικούς ψυχολόγους και από Ειδικευόμενους Κλινικούς Ψυχολόγους στο Διδακτορικό Πρόγραμμα Κλινικής Ψυχολογίας του Τμήματος Ψυχολογίας, με εποπτεία από επαγγελματίες. Σε τέτοιες περιπτώσεις θα ζητηθεί η συγκατάθεσή σου για συζήτηση των πληροφοριών στην εποπτεία και/ή για ηχογράφηση ή βιντεοσκόπηση συνεδριών για σκοπούς εποπτείας.
						<br>
						Το προσωπικό οφείλει να τηρεί τους κώδικες δεοντολογίας και τη σχετική εθνική νομοθεσία που διέπουν το επάγγελμα των ψυχολόγων. Αντίτυπα των σχετικών εγγράφων είναι διαθέσιμα από το ΚΕΨΥ. </h5>
					</div>

					<div align="left">
						<h5><strong>ΣΥΝΕΔΡΙΕΣ</strong></h5>
					</div>

					<div align="left">
						<h5>Κατά την αρχική συνεδρία, θα σου ζητηθεί να συμπληρώσεις κάποια έντυπα, και ο ψυχολόγος θα εξηγήσει τη διαδικασία και θα συζητήσει μαζί σου τους κανόνες του ΚΕΨΥ. Ακολούθως θα διενεργήσει συνέντευξη για το ιστορικό σου και θα συζητήσει μαζί σου τους λόγους της επίσκεψής σου, τα θέματα που σε απασχολούν και τους στόχους σου. Στο τέλος θα συζητήσει μαζί σου τις επιλογές που θα σε βοηθήσουν καλύτερα, και σε κάποιες περιπτώσεις ίσως προτείνει και κάποιες εξωτερικές παραπομπές. Η αρχική συνάντηση συνήθως διαρκεί έως 90 λεπτά. Οι συνεδρίες ψυχολογικής συμβουλευτικής συνήθως διαρκούν 45-50 λεπτά και καθορίζονται σε συνεννόηση με το θεραπευτή σου. Παρακαλούμε να είσαι στην ώρα σου. </h5>
					</div>

					<div align="left">
						<h5><strong>ΑΡΧΕΙΑ</strong></h5>
					</div>

					<div align="left">
						<h5>Το ΚΕΨΥ, συνάδοντας με τη σχετική νομοθεσία, τηρεί εμπιστευτικά αρχεία για τις υπηρεσίες που προσφέρει. Στους φακέλους των πελατών καταχωρούνται σημειώσεις και έντυπα για τις συνεδρίες ή άλλες ενέργειες σχετικά με τα περιστατικά και την εργασία που διεκπεραιώνουμε μαζί σου. Το περιεχόμενο είναι εμπιστευτικό και χρησιμοποιείται μόνο για σκοπούς βέλτιστου χειρισμού των περιστατικών μας. Τα ακαδημαϊκά σου αρχεία σε καμία περίπτωση δεν περιέχουν αναφορές στην ψυχολογική συμβουλευτική. Οι φάκελοι φυλάγονται κλειδωμένοι σε ασφαλές μέρος και καταστρέφονται μετά την παρέλευση δύο (2) ετών από την ημερομηνία τερματισμού παροχής υπηρεσιών και κλείσιμο του φακέλου, ή με βάση τις σχετικές πρόνοιες της νομοθεσίας.</h5>
					</div>

					<div align="left">
						<h5><strong>ΕΠΕΙΓΟΝΤΑ ΠΕΡΙΣΤΑΤΙΚΑ</strong></h5>
					</div>

					<div align="left">
						<h5>Οι συνεδρίες του ΚΕΨΥ καθορίζονται με ραντεβού. Σε κάποιες περιπτώσεις μπορεί να μην έχεις πρόσβαση στο ΚΕΨΥ ή στο θεραπευτή σου. Σε περιπτώσεις έκτακτης ανάγκης (δηλαδή όπου υπάρχει άμεσος κίνδυνος της δικής σου ζωής ή ασφάλειας ή κάποιου άλλου) μπορείς να καλέσεις τον 24ωρο αριθμό 112 ή να επισκεφτείς το Τμήμα Επειγόντων Περιστατικών του πλησιέστερου νοσοκομείου. Σε περίπτωση που σε ανησυχούν θέματα ασφάλειάς σου, μπορείς να το συζητήσεις με το θεραπευτή σου που θα σε βοηθήσει να φτιάξεις ένα πλάνο για την ασφάλειά σου. </h5>
					</div>

					<div align="left">
						<h5><strong>ΕΧΕΜΥΘΕΙΑ</strong></h5>
					</div>

					<div align="left">
						<h5>Οι υπηρεσίες του ΚΕΨΥ διέπονται από αυστηρή εχεμύθεια. Αυτό σημαίνει ότι το προσωπικό δεν μπορεί να μοιραστεί με τρίτους (ούτε με γονείς, φίλους, ή ακαδημαϊκούς) πληροφορίες για σένα χωρίς τη δική σου γραπτή συγκατάθεση, με εξαίρεση τις περιπτώσεις που περιγράφονται στο Έντυπο 04.  Αν επιθυμείς να μας δώσεις γραπτή συγκατάθεση για να μοιραστούμε πληροφορίες για σένα με κάποιο τρίτο, διατηρείς το δικαίωμα να την αποσύρεις όποτε το θελήσεις. </h5>
					</div>

					<div align="left">
						<h5><strong>ΔΙΚΑΙΩΜΑΤΑ ΚΑΙ ΕΥΘΥΝΕΣ ΠΕΛΑΤΩΝ</strong></h5>
					</div>
					<div align="left">
						<h5><strong>Τα Δικαιώματά σου ως πελάτης του ΚΕΨΥ </strong></h5>
					</div>
					<div align="left">
						<h5>
						<li>
							Έχεις το δικαίωμα να αντιμετωπίζεσαι με σεβασμό και αξιοπρέπεια, με κατανόηση και ενσυναίσθηση, και να λαμβάνεις την αποτελεσματικότερη δυνατή στήριξη από προσοντούχους θεραπευτές και ειδικευόμενους υπό εποπτεία.
						</li></h5>
						<h5>
						<li>
							Έχεις το δικαίωμα να συζητάς με τον θεραπευτή σου για τις πληροφορίες που περιέχονται φάκελό σου.
						</li></h5>
						<h5>
						<li>
							Αν πρόκειται να δώσεις συγκατάθεση στο θεραπευτή να ανταλλάξει πληροφορίες με εξωτερικούς φορείς, έχεις το δικαίωμα να γνωρίζεις ποιες συγκεκριμένες πληροφορίες θα δοθούν.
						</li></h5>
						<h5>
						<li>
							Έχεις το δικαίωμα να διακόψεις τη θεραπεία οποιαδήποτε στιγμή το θελήσεις.
						</li></h5>
						<h5>
						<li>
							Έχεις το δικαίωμα αξιολόγησης για το θέμα που σε απασχολεί και παραπομπής σε αρμόδιους εξωτερικούς φορείς εάν χρειαστεί ή το επιθυμείς.
						</li></h5>
						<h5>
						<li>
							Έχεις το δικαίωμα να συμμετέχεις στη διαμόρφωση και εφαρμογή του σχεδίου θεραπείας σου σύμφωνα με τους στόχους σου, συμπεριλαμβανομένης της διάρκειας και της συχνότητας της θεραπείας σου.
						</li></h5>
						<h5>
						<li>
							Έχεις το δικαίωμα να εκφράσεις απορίες ή ανησυχίες σου σχετικά με τη διαδικασία της ψυχολογικής συμβουλευτικής, και να ζητήσεις αλλαγή θεραπευτή ή παραπομπή σε εξωτερικό φορέα σε περίπτωση που το κρίνεις αναγκαίο.
						</li></h5>
					</div>
					<div align="left">
						<h5><strong>Οι Ευθύνες σου ως πελάτης του ΚΕΨΥ </strong></h5>
					</div>
					<div align="left">
						<li>
							<h5>Να παρουσιάζεσαι στις προκαθορισμένες συνεδρίες στην ώρα σου. Σε περίπτωση καθυστέρησης θα εξυπηρετηθείς μέχρι την προγραμματισμένη ώρα της συνεδρίας, ενώ σε περίπτωση καθυστέρησης πέρα των 15 λεπτών το ΚΕΨΥ διατηρεί το δικαίωμα να ακυρώσει τη συνεδρία.</h5>
							<ul>
								<li>
									<h5>Σε περίπτωση που χρειαστεί να ακυρώσεις ή να μετακινήσεις κάποια συνεδρία, έχεις την ευθύνη να ενημερώσεις το ΚΕΨΥ, κατά προτίμηση<strong>24 ώρες πριν την προγραμματισμένη ώρα</strong>, ή το συντομότερο δυνατόν, ώστε να δίνεται η ευκαιρία διευθέτησης κάποιας άλλης συνεδρίας.</h5>
								</li>
								<li>
									<h5>Σε περίπτωση που χάσεις κάποια συνεδρία, έχεις εσύ την ευθύνη να επικοινωνήσεις με το ΚΕΨΥ για επαναδιευθέτηση.</h5>
								</li>
								<li>
									<h5>Σε περίπτωση που δεν προσέλθεις στο ραντεβού χωρίς προειδοποίηση για τρεις συνεχόμενες φορές και δεν έχεις επικοινωνήσει με το ΚΕΨΥ, θα θεωρηθεί ότι δεν ενδιαφέρεσαι πλέον για λήψη υπηρεσιών.</h5>
								</li>
							</ul>
						</li>
						<li>
							<h5>Να μεριμνάς για τη δική σου υγεία και ασφάλεια, και να αναφέρεις οποιαδήποτε απειλή για το άτομο σου ή για άλλους στο προσωπικό του ΚΕΨΥ ή σε αρμόδιο φορέα. </h5>
						</li>
						<li>
							<h5>Να συμμετέχεις ενεργά στη διαδικασία της συμβουλευτικής, να διεκπεραιώνεις τις εργασίες, και να ενημερώνεις το θεραπευτή σου για οποιεσδήποτε σημαντικές αλλαγές στις συνθήκες ή στα συμπτώματά σου. </h5>
						</li>
						<li>
							<h5>Να είσαι ειλικρινής με το θεραπευτή σου, ανοικτός και πρόθυμος να δοκιμάσεις νέες τεχνικές και συστάσεις. Σε περίπτωση που νιώσεις άβολα με κάποια άσκηση ή τεχνική, να το αναφέρεις στο θεραπευτή σου.</h5>
						</li>
						<li>
							<h5>Εάν προτίθεσαι να διακόψεις τη θεραπεία, συστήνεται να μοιραστείς τις ανησυχίες σου με το θεραπευτή σου. Εάν νιώθεις ότι δεν έχουν λυθεί οι ανησυχίες σου και δεν επιθυμείς να συνεχίσεις, είναι προτιμότερο να ενημερώσεις το θεραπευτή σου και το ΚΕΨΥ παρά να ακυρώνεις επανειλημμένα τις συνεδρίες. Παρόμοιες αμφισβητήσεις και προβληματισμοί είναι φυσιολογικό μέρος της θεραπευτικής διαδικασίας.</h5>
						</li>
					</div>
					<div align="left">
						<h5><strong>Ανατροφοδότηση και Εισηγήσεις για τις Υπηρεσίες του ΚΕΨΥ </strong></h5>
						<h5>Το ΚΕΨΥ ενδιαφέρεται για οποιαδήποτε θετικά ή αρνητικά σχόλια ή ανατροφοδότηση ώστε να συνεχίσει να βελτιώνει τις υπηρεσίες που προσφέρει. </h5>
						<li>
							<h5>Με τον τερματισμό της θεραπείας σου θα σου ζητηθεί να συμπληρώσεις ανώνυμο έντυπο αξιολόγησης των υπηρεσιών που έλαβες. Σε παρακαλούμε να είσαι ειλικρινής στην ανατροφοδότησή σου ώστε να μπορέσουμε να συνεχίσουμε να βελτιωνόμαστε. Πιθανόν να σου ζητηθεί και η συμπλήρωση άλλων εντύπων για σκοπούς καταγραφής της προόδου σου.</h5>
						</li>
						<li>
							<h5>Σε περίπτωση που σε προβληματίζει κάτι για τις υπηρεσίες που λαμβάνεις, σε πρώτη φάση συστήνεται να το συζητήσεις με το θεραπευτή σου. Σε περίπτωση που αυτό δεν ικανοποιήσει τις ανησυχίες σου, ή ανησυχείς ότι προκύπτει παραβίαση της επαγγελματικής δεοντολογίας, μπορείς να αποτεθείς στη Διεύθυνση του ΚΕΨΥ.</h5>
						</li>
						<li>
							<h5>Η συνέπεια στη σχέση που κτίζεται με το θεραπευτή σου είναι πολύ σημαντική για την αποτελεσματικότητα της θεραπείας. Ωστόσο, κατανοούμε ότι σε κάποιες περιπτώσεις ο συνδυασμός θεραπευτή-πελάτη ενδεχομένως να μην είναι κατάλληλος. Σε τέτοιες περιπτώσεις έχεις δικαίωμα να ζητήσεις αλλαγή θεραπευτή. Συστήνουμε αρχικά να το συζητήσεις με τον τωρινό σου θεραπευτή, που μαζί με τη Διεύθυνση του ΚΕΨΥ θα προσπαθήσει να βρει τον καταλληλότερο θεραπευτή για σένα. Η διαδικασία αυτή μπορεί να προϋποθέτει κάποια περίοδο αναμονής.</h5>
						</li>
					</div>

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
		
	</body>
</html>