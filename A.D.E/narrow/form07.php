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
						<h4>ΕΚΘΕΣΗ ΑΡΧΙΚΗΣ ΑΞΙΟΛΟΓΗΣΗΣ</h4>
					</div>
					<form action="" method="post">
						<div class="form-group">
							<label for="q1"><strong>1. Παρουσιαζόμενο πρόβλημα (διάρκεια, συχνότητα, σχέση με παράγοντες της κατάστασης, παράγοντες που συντείνουν στη διατήρηση, δευτερεύοντα οφέλη). Σχετικές δημογραφικές πληροφορίες:</strong></label>
							<input type="text" class="form-control" id="q1" placeholder="" name="mainproblem">
						</div>
						<div class="form-group">
							<label for="q2"><strong>2. Ιστορικό προβλήματος και προηγούμενη θεραπεία:</strong></label>
							<input type="text" class="form-control" id="q2" placeholder="" name="historyofproblem">
						</div>
						<div class="form-group">
							<label for="q3"><strong>3. Τρέχοντες παράγοντες άγχους ή/και έντασης:</strong> </label>
							<input type="number" class="form-control" id="q3" placeholder="" name="anxietyfactors">
						</div>

						<div class="form-group">
							<label for="q4"><strong>4. Ακαδημαϊκό Πρόγραμμα/εμπειρίες/δυσκολίες: </strong></label>
							<input type="text" class="form-control" id="q4" placeholder="" name="q4">
						</div>
						<div class="form-group">
							<label for="history"><strong>5. Ιστορικό</strong></label>
						</div>
						<div class="form-group">
							<label for="q51"><strong>5.1. Σύντομο σχετικό προσωπικό και οικογενειακό ιστορικό </strong></label>
							<br>
							<label><em>(συμπ. σχέσεις με γονείς και αδέλφια)</em></label>
							<br>
							<input type="text" class="form-control" id="q51" placeholder="" name="q51">
						</div>
						<div class="form-group">
							<label for="q52"><strong>5.2. Διαπροσωπικές/Ερωτικές Σχέσεις (συγκάτοικοι, φίλοι, σύντροφοι, ταυτότητα):</strong></label>
							<input type="text" class="form-control" id="q52" placeholder="" name="q52">
						</div>
						<div class="form-group">
							<label for="q53"><strong>5.3 Ιατρικό ιστορικό</strong> </label>
							<br>
							<label><em>(Προηγούμενες σοβαρές ιατρικές περιθάλψεις ή σοβαρές καταστάσεις υγείας,  συμπ. παρούσα φαρμακοθεραπεία): </em></label>
							<br>
							<input type="text" class="form-control" id="q53" placeholder="" name="q53">
						</div>
						<div class="form-group">
							<label for="q54"><strong>5.4. Ιστορικό χρήσης/κατάχρησης ουσιών </strong></label>
							<input type="text" class="form-control" id="q54" placeholder="" name="q54">
						</div>
						<div class="form-group">
							<label for="q55"><strong>5.5. Φαρμακευτική Αγωγή (ή σχετική προηγούμενη): </strong></label>
							<input type="text" class="form-control" id="q55" placeholder="" name="q54">
						</div>
						<div class="form-group">
							<label for="q6"><strong>6. Ειδικά Αιτήματα/Διευκολύνσεις </strong></label>
							<input type="text" class="form-control" id="q6" placeholder="" name="q6">
						</div>
						<div class="form-group">
							<label for="noitiki"><strong>7. Νοητική Κατάσταση</strong></label>
						</div>
						<div class="form-group">
							<label for="q71"><strong>7.1. Παρουσία, Στάση, Συμπεριφορά</strong></label>
							<input type="text" class="form-control" id="q71" placeholder="" name="behaviour">
						</div>
						<div class="form-group">
							<label for="q72"><strong>7.2. Γνωστικές Λειτουργίες</strong> </label>
							<br>
							<label><em>(προσανατολισμός και μνήμη, γνωστική/νοητική αξιολόγηση, διαδικασία σκέψης, συλλογισμός και κρίση) </em></label>
							<br>
							<input type="text" class="form-control" id="q72" placeholder="" name="gnosticfunction">
						</div>
						<div class="form-group">
							<label for="q73"><strong>7.3. Διάθεση, συναίσθημα </strong></label>
							<br>
							<label><em>(συμπ. αξιολόγηση για αυτοκτονικό/ανθρωποκτονικό ιδεασμό).</em></label>
							<br>
							<input type="text" class="form-control" id="q73" placeholder="" name="mood">
						</div>
						<div class="form-group">
							<label for="q8"><strong>8. Αποτελέσματα Ψυχομετρικής Αξιολόγησης </strong></label>
							<br>
							<label><em>(αν υπάρχουν, συνεντεύξεις, έντυπα, κτλ)</em></label>
							<br>
							<input type="text" class="form-control" id="q8" placeholder="" name="psychometricresult">
						</div>
						<div class="form-group">
							<label for="q9"><strong>9.Διαγνωστική / Κλινική Εντύπωση </strong></label>
							<br>
							<label><em>(πρωτεύων ζήτημα, δευτερεύοντα ζητήματα, συμπτώματα, συμπεριφορές, σχετικά χαρακτηριστικά προσωπικότητας, ψυχοκοινωνικοί παράγοντες άγχους, υγεία)</em></label>
							<br>
							<input type="text" class="form-control" id="q9" placeholder="" name="clinicalimpression">
						</div>
						<div class="form-group">
							<label for="q10"><strong>10.Συνολική Λειτουργικότητα – Βαθμός Δυσλειτουργίας</strong> </label>
							<br>
							<label><em>(βάλτε <strong>Χ</strong> στο σημείο που θεωρείτε ότι αντικατοπτρίζει ό,τι ισχύει για τον πελάτη) </em></label>
							<br>
						</div>
						<table style="width:100%">
							<tr>
								<th></th>
								<th>Απούσα</th>
								<th>Ήπια</th>
								<th>Μέτρια</th>
								<th>Σοβαρή</th>
							</tr>
							<tr>
								<td>α. ψυχολογική</td>
								<td>
								<input type="checkbox" name="psychologicalfunc" class="form-group" id="a1">
								</td>
								<td>
								<input type="checkbox" name="psychologicalfunc" class="form-group" id="a2">
								</td>
								<td>
								<input type="checkbox" name="psychologicalfunc" class="form-group" id="a3">
								</td>
								<td>
								<input type="checkbox" name="psychologicalfunc" class="form-group" id="a4">
								</td>
							</tr>
							<tr>
								<td>β. επαγγελματική/ακαδημαϊκή</td>
								<td>
								<input type="checkbox" name="professionacademicfunc" class="form-group" id="b1">
								</td>
								<td>
								<input type="checkbox" name="professionacademicfunc" class="form-group" id="b2">
								</td>
								<td>
								<input type="checkbox" name="professionacademicfunc" class="form-group" id="b3">
								</td>
								<td>
								<input type="checkbox" name="professionacademicfunc" class="form-group" id="b4">
								</td>
							</tr>
							<tr>
								<td>γ. κοινωνική</td>
								<td>
								<input type="checkbox" name="socialfunc" class="form-group" id="g1">
								</td>
								<td>
								<input type="checkbox" name="socialfunc" class="form-group" id="g2">
								</td>
								<td>
								<input type="checkbox" name="socialfunc" class="form-group" id="g3">
								</td>
								<td>
								<input type="checkbox" name="socialfunc" class="form-group" id="g4">
								</td>
							</tr>
							<tr>
								<td>δ. αυτοφροντίδα</td>
								<td>
								<input type="checkbox" name="autofix" class="form-group" id="d1">
								</td>
								<td>
								<input type="checkbox" name="autofix" class="form-group" id="d2">
								</td>
								<td>
								<input type="checkbox" name="autofix" class="form-group" id="d3">
								</td>
								<td>
								<input type="checkbox" name="autofix" class="form-group" id="d4">
								</td>
							</tr>
						</table>
						<br>
						<div class="form-group">
							<label for="q11"><strong>11. Παράγοντες Θεραπείας</strong></label>
							<br>
							<label><em>(προηγούμενες προσπάθειες θεραπείας, κινητοποίηση/επίγνωση πρόγνωση, καταλληλότητα για θεραπεία) </em></label>
							<br>
							<input type="text" class="form-control" id="q11" placeholder="" name="therapyfactors">
						</div>
						<div class="form-group">
							<label for="q12"><strong>12. Εισηγήσεις για θεραπεία </strong></label>
							<br>
							<label><em>(ψυχολογικές δυνάμεις, προτεινόμενοι στόχοι, δεξιότητες που μπορούν να αξιοποιηθούν ή να στοχευθούν)</em></label>
							<br>
							<input type="text" class="form-control" id="q12" placeholder="" name="therapysuggestions">
						</div>
						<div class="form-group">
							<label for="q13"><strong>13. Ζητήματα που χρήζουν επιπρόσθετη αξιολόγηση </strong></label>
							<input type="text" class="form-control" id="q13" placeholder="" name="additionalevaluation">
						</div>
						<div class="form-group">
							<label for="q14"><strong>14. Πιθανή Πολυαξονική Εκτίμηση με βάση το DSM </strong></label>
							<br>
							<label for="q14more"><strong>Άξονας Ι:</strong> Κλινικές διαταραχές, άλλες καταστάσεις που μπορούν να αποτελέσουν εστία κλινικής προσοχής</label>
							<input type="text" class="form-control" id="q14a" placeholder="" name="q14">
							<label for="q14more"><strong>Άξονας ΙΙ:</strong>Διαταραχές της προσωπικότητας. Νοητική καθυστέρηση</label>
							<input type="text" class="form-control" id="q14b" placeholder="" name="q14">
							<label for="q14more"><strong>Άξονας ΙΙΙ:</strong>Σωματικές Νόσοι</label>
							<input type="text" class="form-control" id="q14c" placeholder="" name="q14">
							<label for="q14more"><strong>Άξονας ΙV:</strong>Ψυχοκοινωνικά και περιβαλλοντικά προβλήματα</label>
							<input type="text" class="form-control" id="q14d" placeholder="" name="q14">
							<label for="q14more"><strong>Άξονας V:</strong>Σφαιρική εκτίμηση λειτουργικότητας (GAF):</label>
							<input type="text" class="form-control" id="q14e" placeholder="" name="q14">
						</div>
						<div class="form-group">
							<label for="q15"><strong>15. Αρχικό Πρόγραμμα Θεραπείας </strong></label>
							<br>
							<label><em>(συμπεριλαμβάνονται στόχοι θεραπείας, τρόποι και υπολογιζόμενος χρόνος θεραπείας): </em></label>
							<br>
							<input type="text" class="form-control" id="q15" placeholder="" name="initialtherapyprogram">
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
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/form7.php";
$method='POST';
if(isset($_POST['submit'])){
$postfields=http_build_query(array(
  'patientID' => $_POST['id'],
  'mainproblem' => $_POST['mainproblem'],
  'historyofproblem' => $_POST['historyofproblem'],
  'anxietyfactors' => $_POST['anxietyfactors'],
  'specialrequests' => $_POST['specialrequests'],
  'behaviour' => $_POST['behaviour'],
  'gnosticfunction' => $_POST['gnosticfunction'],
  'mood' => $_POST['mood'],
  'psychometricresult' => $_POST['psychometricresult'],
  'clinicalimpression' => $_POST['clinicalimpression'],
  'psychologicalfunc' => $_POST['psychologicalfunc'],
  'professionacademicfunc' => $_POST['professionacademicfunc'],
  'socialfunc' => $_POST['socialfunc'], 
  'autofix' => $_POST['autofix'],
  'therapyfactors' => $_POST['therapyfactors'],
  'therapysuggestions' => $_POST['therapysuggestions'],
  'additionalevaluation' => $_POST['additionalevaluation'],
  'initialtherapyprogram' => $_POST['initialtherapyprogram'],
  'signed' => $_POST['signed'],
  'datecompleted' => $_POST['datecompleted']
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