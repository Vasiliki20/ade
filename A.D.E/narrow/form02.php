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
			.sidenav {
				height: 100%;
				width: 200px;
				position: fixed;
				z-index: 1;
				top: 0;
				left: 0;
				background-color: #111;
				overflow-x: hidden;
				padding-top: 20px;
			}

			.sidenav a {
				padding: 6px 6px 6px 32px;
				text-decoration: none;
				font-size: 15px;
				color: #818181;
				display: block;
			}

			.sidenav a:hover {
				color: #f1f1f1;
			}
			.main {
				margin-left: 200px; /* Same as the width of the sidenav */
			}

			@media screen and (max-height: 450px) {
				.sidenav {
					padding-top: 15px;
				}
				.sidenav a {
					font-size: 18px;
				}
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
						<h4>ΔΗΛΩΣΗ ΣΤΟΙΧΕΙΩΝ ΠΕΛΑΤΩΝ</h4>
					</div>
					<div align="left">
						<h5><b>Α. ΔΗΜΟΓΡΑΦΙΚΑ ΣΤΟΙΧΕΙΑ</b></h5>
					</div>
					<form action="" method="post">
						<div class="form-group">
							<label for="surname"><b>1. Επώνυμο:</b></label>
							<input type="text" class="form-control" id="surname" placeholder="" name="surname">
						</div>
						<div class="form-group">
							<label for="name"><b>2. Όνομα(τα):</b></label>
							<input type="text" class="form-control" id="name" placeholder="" name="name">
						</div>
						<div class="form-group">
							<label for="dob"><b>3. Ημερομηνία γέννησης:</b></label>
							<input type="date" class="form-control" id="dob" placeholder="" name="dob">
						</div>
						<div class="form-group">
							<label for="age"><b>4. Ηλικία:</b></label>
							<input type="number" class="form-control" id="age" placeholder="" name="age">
						</div>
						<div class="form-group">
							<label for="sex"><b>5. Φύλο:</b></label>
							<input type="radio" name="sex" value="male">
							A
							<input type="radio" name="sex" value="female">
							Θ
						</div>
						<div class="form-group">
							<label for="citizenship"><b>6. Υπηκοότητα:</b></label>
							<input type="text" class="form-control" id="citizenship" placeholder="" name="citizenship">
						</div>
						<div class="form-group">
							<label for="id"><b>7. Αρ. Δελτίου Ταυτότητας:</b></label>
							<input type="number" class="form-control" id="id" placeholder="" name="id">
						</div>
						<div class="form-group">
							<label for="address"><b>8. Παρούσα Διεύθυνση Διαμονής:</b></label>
							<input type="text" class="form-control" id="address" placeholder="" name="address">
						</div>
						<div class="form-group">
							<label for="city"><b>9. Πόλη/Χωριό:</b></label>
							<input type="text" class="form-control" id="city" placeholder="" name="city">
						</div>
						<div class="form-group">
							<label for="tk"><b>10. Τ.Κ:</b></label>
							<input type="number" class="form-control" id="tk" placeholder="" name="tk">
						</div>
						<div class="form-group">
							<label for="phone"><b>11. Τηλέφωνο Επικοινωνίας:</b></label>
							<input type="number" class="form-control" id="phone" placeholder="" name="phone">
						</div>
						<div class="form-group">
							<label for="emailaddress"><b>12. Ηλ.Διεύθυνση:</b></label>
							<input type="email" class="form-control" id="emailaddress" placeholder="" name="emailaddress">
						</div>
						<div class="form-group">
							<label for="contact"><b>13. Ποιος είναι ο καλύτερος τρόπος να επικοινωνήσουμε μαζί σας;</b></label>
							<input type="text" class="form-control" id="contact" placeholder="" name="contact">
						</div>

						<div align="left">
							<h5><b>B. ΣΤΟΙΧΕΙΑ ΦΟΙΤΗΣΗΣ</b></h5>
						</div>
						<div class="form-group">
							<label for="department"><b>14. Τμήμα/Πρόγραμμα Σπουδών:</b></label>
							<input type="text" class="form-control" id="department" placeholder="" name="department">
						</div>
						<div class="form-group">
							<label for="year"><b>15. Έτος Σπουδών:</b></label>
							<input type="number" class="form-control" id="year" placeholder="" name="year">
						</div>
						<div class="form-group">
							<label for="level"><b>16. Επίπεδο Σπουδών:</b></label>
							<input type="radio" name="level" value="proptixiako">
							Προπτυχιακό
							<input type="radio" name="level" value="metaptixiako">
							Μεταπτυχιακό
							<input type="radio" name="level" value="didaktoriko">
							Διδακτορικό
						</div>
						<div class="form-group">
							<label for="erasmus"><b>17. Φοιτητής Erasmus:</b></label>
							<input type="radio" name="erasmus" value="yes">
							Ναι
							<input type="radio" name="erasmus" value="no">
							Όχι
						</div>
						<div class="form-group">
							<label for="status"><b>18. Κατάσταση Φοίτησης:</b></label>
							<br>
							<input type="radio" name="status" value="active">
							Ενεργή
							<br>
							<input type="radio" name="status" value="suspensionstudy">
							Με αναστολή φοίτησης
							<br>
						</div>

						<div align="left">
							<h5><b>Γ. ΕΠΑΦΗ ΕΚΤΑΚΤΗΣ ΑΝΑΓΚΗΣ</b></h5>
						</div>
						<div class="form-group">
							<label for="emname"><b>19. Ονοματεπώνυμο:</b></label>
							<input type="text" class="form-control" id="emname" placeholder="" name="emname">
						</div>
						<div class="form-group">
							<label for="emrelationship"><b>20. Σχέση:</b></label>
							<input type="text" class="form-control" id="emrelationship" placeholder="" name="emrelationship">
						</div>
						<div class="form-group">
							<label for="emphone"><b>21. Τηλ. Επικοινωνίας:</b></label>
							<input type="number" class="form-control" id="emphone" placeholder="" name="emphone">
						</div>

						<div align="left">
							<h5><b>Δ. ΠΡΟΣΩΠΙΚΑ ΣΤΟΙΧΕΙΑ-ΙΣΤΟΡΙΚΟ</b></h5>
						</div>
						<div class="form-group">
							<label for="family"><b>22. Οικογενειακή Κατάσταση:</b></label>
							<br>
							<input type="radio" name="family" value="anipantros">
							Ανύπαντρος/η
							<br>
							<input type="radio" name="family" value="sxesi">
							Σε σχέση/συμβίωση
							<br>
							<input type="radio" name="family" value="arravoniasmenos">
							Αρραβωνιασμένος/η
							<br>
							<input type="radio" name="family" value="pantremenos">
							Παντρεμένος/η
							<br>
							<input type="radio" name="family" value="xorismenos">
							Χωρισμένος/η
							<br>
							<input type="radio" name="family" value="xiros">
							Χήρος/α
							<br>
							<input type="radio" name="family" value="familyallo">
							Άλλο (διευκρινίστε)
							<input type="text" class="form-control" id="family" name="family">
						</div>
						<div class="form-group">
							<label for="previous"><b>23. Είχατε προηγούμενη συνεργασία με ψυχολόγο, ψυχίατρο ή άλλο λειτουργό ψυχικής υγείας;</b></label>
							<br>
							<input type="radio" name="previous" value="oxi">
							Όχι
							<br>
							<input type="radio" name="previous" value="yesuni">
							Ναι, στο Πανεπιστήμιο Κύπρου
							<br>
							<input type="radio" name="previoustherapist" value="yesnouni">
							Ναι, σε άλλη υπηρεσία(διευκρινίστε)
							<br>
							<input type="text" class="form-control" id="previous" name="previous">
						</div>
						<div class="form-group">
							<label for="currentlystaying"><b>24. Αυτή τη στιγμή διαμένεται:</b></label>
							<br>
							<input type="radio" name="currentlystaying" value="stayingalone">
							Μόνος/η
							<br>
							<input type="radio" name="currentlystaying" value="stayingroommate">
							Με συγκάτοικο/ους
							<br>
							<input type="radio" name="currentlystaying" value="stayingfamily">
							Με την οικογένεια μου(γονέις,αδέλφια)
							<br>
							<input type="radio" name="currentlystaying" value="stayingother">
							Άλλο (διαυκρινίστε)
							<br>
							<input type="text" class="form-control" id="currentlystaying" name="currentlystaying">
						</div>
						<div class="form-group">
							<label for="referred"><b>25. Σας έχει παραπέμψει κάποιος άλλος στο ΚΕΨΥ:</b></label>
							<br>
							<input type="radio" name="referred" value="no">
							Όχι
							<br>
							<input type="radio" name="referred" value="yes">
							Ναι (διευκρινίστε)
							<br>
							<input type="text" class="form-control" id="referred" name="referred">
						</div>
						<div class="form-group">
							<label for="otherservices"><b>26. Λαμβάνετε τώρα υπηρεσίες από άλλους επαγγελματίες ψυχικής υγείας;</b></label>
							<br>
							<input type="radio" name="otherservices" value="no">
							Όχι
							<br>
							<input type="radio" name="otherservices" value="yes">
							Ναι (διευκρινίστε)
							<br>
							<input type="text" class="form-control" id="otherservices" name="otherservices">
							<label for="contactothers">Αν ναι, θα μπορούσαμε να επικοινωνήσουμε μαζί τους αν χρειαστεί;</label>
							<br>
							<input type="radio" name="contactothers" value="no">
							Όχι
							<br>
							<input type="radio" name="contactothers" value="yes">
							Ναι
							<br>
						</div>
						<br>
						<label for="signature">Υπογραφή</label>
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
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/form2student.php";
$method='POST';
if(isset($_POST['submit'])){
$postfields=http_build_query(array(
  'id' => $_SESSION['id'],
  'dateofbirth' => $_POST['dob'],
  'age' => $_POST['age'],
  'sex' => $_POST['sex'],
  'citizenship' => $_POST['citizenship'],
  'address' => $_POST['address'],
  'city' => $_POST['city'],
  'postalcode' => $_POST['tk'],
  'communicatevia' => $_POST['contact'],
  'departmentofstudies' => $_POST['department'],
  'yearofstudies' => $_POST['year'],
  'levelofstudies' => $_POST['level'],
  'erasmusstudent' => $_POST['erasmus'],
  'statusofstudies' => $_POST['status'],
  'emergencyname' => $_POST['emname'],
  'emergencyrelation' => $_POST['emrelationship'],
  'emergencynumber' => $_POST['emphone'],
  'maritalstatus' => $_POST['family'], 
  'previoustherapy' => $_POST['previous'],
  'previoustherapist' => $_POST['previous'],
  'nowtherapist' => $_POST['otherservices'],
  'comnowtherapistb' => $_POST['contactothers']
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
