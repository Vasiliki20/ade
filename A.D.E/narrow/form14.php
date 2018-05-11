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
				height: 10px;
			}
			th, td {
				padding: none;
			}
			th {
				text-align: left;
			}
			td {
				height: 5px;
				
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
						<h4>ΤΕΡΜΑΤΙΣΜΟΣ ΘΕΡΑΠΕΙΑΣ/ΠΑΡΕΜΒΑΣΗΣ</h4>
					</div>

					<form action="" method="post">
						<table style="width:100%">
							<div class="form-group">
								<label for="date"><strong>1. Ημερ. Έναρξης Υπηρεσιών: </strong></label>
								<input type="date" class="form-control" id="date" placeholder="" name="date">
							</div>
							<div class="form-group">
								<label for="number"><strong>2. Αρ. Συνεδριών</strong></label>
								<input type="number" class="form-control" id="number" placeholder="" name="number">
							</div>
							<div class="form-group">
								<label for="dateend"><strong>3. Ημερ. Αποδέσμευσης:</strong> </label>
								<input type="date" class="form-control" id="dateend" placeholder="" name="dateend">
							</div>
							<div class="form-group">
								<label for="eidos"><strong>4. Είδος θεραπείας/υπηρεσιών: </strong></label>
								<input type="text" class="form-control" id="eidos" placeholder="" name="eidos">
							</div>
							<div class="form-group">
								<label for="firstissues"><strong>5. Αρχικό παρουσιαζόμενο ζήτημα/ζητήματα και επιπρόσθετα παρουσιαζόμενα ζητήματα </strong></label>
								<input type="text" class="form-control" id="firstissues" placeholder="" name="firstissues">
							</div>
							<div class="form-group">
								<label for="reasons"><strong>6. Λόγος/Λόγοι Αποδέσμευσης: </strong></label>
								<input type="text" class="form-control" id="reasons" placeholder="" name="reasons">
							</div>
							<div class="form-group">
								<label for="brief"><strong>7. Έκβαση Θεραπείας: </strong></label>
								<br>
								<label><em>(Σύνοψη παρέμβασης/θεραπείας συμπ. αποκλίσεις από αρχικό πλάνο και αιτιολόγηση, δυσκολίες/εμπόδια, σημεία που διευκόλυναν τη θεραπεία, στάση/συμπεριφορά πελάτη κ.ο.κ., αποτελέσματα) </em></label>
								<br>
								<input type="text" class="form-control" id="brief" placeholder="" name="brief">
							</div>
						</table>
						<div class="form-group">
							<label for="future"><strong>8. Επανεκτίμηση Συνολικής Λειτουργικότητας – Βαθμός Δυσλειτουργίας κατά τον τερματισμό</strong></label>
							<br>
							<label><em>(βάλτε Χ στο σημείο που θεωρείτε ότι αντικατοπτρίζει ό,τι ισχύει για τον πελάτη κατά τον τερματισμό/ολοκλήρωση της θεραπείας) </em></label>
						</div>
						<div class="form-group">
							<table style="width:100%">
								<col width="250">
								<tr>
									<th></th>
									<th>Απούσα</th>
									<th>Ήπια</th>
									<th>Μέτρια</th>
									<th>Σοβαρή</th>
								</tr>
								<tr>
									<td>α. ψυχολογική</td><input type="hidden" name="epsychologicalfunc">
									<td>
									<input type="radio" name="epsychologicalfunc" class="form-group" id="a1">
									</td>
									<td>
									<input type="radio" name="epsychologicalfunc" class="form-group" id="a2">
									</td>
									<td>
									<input type="radio" name="epsychologicalfunc" class="form-group" id="a3">
									</td>
									<td>
									<input type="radio" name="epsychologicalfunc" class="form-group" id="a4">
									</td>
								</tr>
								<tr>
									<td>β. επαγγελματική/ακαδημαϊκή</td><input type="hidden" name="eprofessionacademicfunc">
									<td>
									<input type="radio" name="eprofessionacademicfunc" class="form-group" id="b1">
									</td>
									<td>
									<input type="radio" name="eprofessionacademicfunc" class="form-group" id="b2">
									</td>
									<td>
									<input type="radio" name="eprofessionacademicfunc" class="form-group" id="b3">
									</td>
									<td>
									<input type="radio" name="eprofessionacademicfunc" class="form-group" id="b4">
									</td>
								</tr>
								<tr>
									<td>γ. κοινωνική</td><input type="hidden" name="esocialfunc">
									<td>
									<input type="radio" name="esocialfunc" class="form-group" id="g1">
									</td>
									<td>
									<input type="radio" name="esocialfunc" class="form-group" id="g2">
									</td>
									<td>
									<input type="radio" name="esocialfunc" class="form-group" id="g3">
									</td>
									<td>
									<input type="radio" name="esocialfunc" class="form-group" id="g4">
									</td>
								</tr>
								<tr>
									<td>δ. αυτοφροντίδα</td><input type="hidden" name="eautofix">
									<td>
									<input type="radio" name="eautofix" class="form-group" id="d1">
									</td>
									<td>
									<input type="radio" name="eautofix" class="form-group" id="d2">
									</td>
									<td>
									<input type="radio" name="eautofix" class="form-group" id="d3">
									</td>
									<td>
									<input type="radio" name="eautofix" class="form-group" id="d4">
									</td>
								</tr>
							</table>
						</div>
						<div class="form-group">
							<label for="more"><strong>9. Οποιεσδήποτε άλλες σημαντικές πληροφορίες  ή παρατηρήσεις</strong></label>
							<input type="text" class="form-control" id="more" placeholder="" name="more">
						</div>
						<button type="submit" class="btn btn-default" name="submit">
							ΚΑΤΑΧΩΡΗΣΗ
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
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/form14.php";
$method='POST';
	if(isset($_POST['submit'])){
		$postfields=http_build_query(array(
		'id' => $_SESSION['id'],
		'dateended' => $_POST['dateend'],
		'whyterminate' => $_POST['reasons'],
		'infoterminate' => $_POST['brief'],
		'therapyend' => $_POST['more'],
		'epsychologicalfunc' => $_POST['epsychologicalfunc'],
		'eprofessionacademicfunc' => $_POST['eprofessionacademicfunc'],
		'esocialfunc' => $_POST['esocialfunc'],
		'eautofix' => $_POST['eautofix']
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
