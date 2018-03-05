<?php session_start();?>
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
								<div class="col-md-4">
									<div class="fh5co-navbar-brand">
										<a class="fh5co-logo" href="home.html">Κεντρο Ψυχικης Υγειας <?= $_SESSION['id'];?></a>
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
						<h4>ΑΡΧΙΚΗ ΕΠΙΚΟΙΝΩΝΙΑ- ΔΙΕΥΘΕΤΗΣΤΕ ΣΥΝΑΝΤΗΣΗ ΜΕ ΨΥΧΟΛΟΓΟ</h4>
					</div>
					<form action="/action_page.php">
						<div class="form-group">
							<label for="email"><b>Ηλεκτρονική Διεύθυνση:</b></label>

							<input type="email" class="form-control" id="email" placeholder="" name="email">
						</div>
						<div class="form-group">
							<label for="name"><b>Όνομα:</b></label>
							<input type="text" class="form-control" id="name" placeholder="" name="name">
						</div>
						<div class="form-group">
							<label for="surname"><b>Επώνυμο:</b></label>
							<input type="text" class="form-control" id="surname" placeholder="" name="surname">
						</div>
						<div class="form-group">
							<label for="phone"><b>Τηλέφωνο Επικοινωνίας:</b></label>
							<input type="number" class="form-control" id="tilephono" placeholder="" name="phone">
						</div>

						<script>
							function add_fields() {
								var objTo = document.getElementById('room_fileds');
								var divtest = document.createElement("div");
								divtest.innerHTML = '<select><option value="1">Δευτέρα</option><option value="2" selected="selected">Τρίτη</option><option value="3">Τετάρτη</option><option value="4">Πέμπτη</option><option value="5">Παρασκευή</option></select><input type="time" name="timeavailable"  placeholder="time">';
								objTo.appendChild(divtest);
							}
						</script>

						<div class="form-group">
							<label for="available"><b>Μέρες και ώρες που είστε διαθέσιμοι για συνάντηση εντός του ωραρίου του ΚΕΨΥ:</b></label>

							<div id="room_fileds">
								<div>
									<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
									<select>
										<option value="1">Δευτέρα</option>
										<option value="2" selected="selected">Τρίτη</option>
										<option value="3">Τετάρτη</option>
										<option value="4">Πέμπτη</option>
										<option value="5">Παρασκευή</option>
									</select>
									<input type="time" name="timeavailable"  placeholder="time">
									<input type="button" id="more_fields" onclick="add_fields();" value="Add More" />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="needfordate"><b>Μπορώ να περιμένω μέρχι να διευθετηθεί συνάντηση:</b></label>
							<br>
							<label><i>(η περίδος διευθέτησης συνάντησης κυμαίνεται ανάλογα με το φόρτο εργασίας του ΚΕΨΥ)**</i></label>
							<br>
							<input type="radio" name="needfordate" value="asap">
							Χρειάζομαι ραντεβού το συντομότερο
							<br>
							<input type="radio" name="needfordate" value="one">
							1 εβδομάδα
							<br>
							<input type="radio" name="needfordate" value="two">
							2 εβδομάδες
							<br>
							<input type="radio" name="needfordate" value="more">
							Περισσότερο από 2 εβδομάδες
						</div>
						<div class="form-group">
							<label for="issue"><b>Ποιο είναι το κυριότερο θέμα/θέματα που σας αποσχολεί/ουν;(προαιρετικά)</b></label>
							<input type="text" class="form-control" id="issue" placeholder="(Σημειώστε τουλάχιστο 2-3 επιλογές)" name="available">
						</div>
						<div class="form-group">
							<label for="info"><b>Πώς ενημερωθήκατε για το ΚΕΨΥ(σημειώστε ό,τι ισχύει):</b></label>
							<br>
							<input type="radio" name="info" value="webpage">
							Ιστοσελίδα
							<br>
							<input type="radio" name="info" value="friends">
							Φίλοι/συμφοιτητές
							<br>
							<input type="radio" name="info" value="family">
							Οικογένεια
						</div>
						<div class="form-group">
							<label for="belong"><b>Είμαι:</b></label>
							<br>
							<input type="radio" name="belong" value="foititis">
							Φοιτητής
							<br>
							<input type="radio" name="belong" value="akadimaiko">
							Μέλος του ακαδημαικού
							<br>
							<input type="radio" name="belong" value="dioikitiko">
							Μέλος του διοικητικού
							<br>
							<input type="radio" name="belong" value="politis">
							Απλός πολίτης
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
	</body>

</html>

<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/form1.php";
$method='POST';
if(isset($_POST['submit'])){
	//kwdikas sou pou tha pianeis ta panw na ta valeis se pinaka kai meta tin entoli pou sou eipa gia na to valeis ton pinaka se mia metavliti gia meres kai wres
$postfields=http_build_query(array(
  'id' => $_SESSION['id'],
  'phone' => $_POST['phone'],
  'period' => $_POST['needfordate'],
  'mainissue' => $_POST['mainissue'],
  'sentby' => $_POST['info'],
  'type' => $_POST['belong'],
  'days' => "pinakasmeres", //metavliti poy tha kameis gia tis meres,
  'hours' => "pinakaswres" //metavliti poy tha kameis gia tis wres,
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

