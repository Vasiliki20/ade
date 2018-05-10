<?php ob_start(); ?>
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
		<link rel="shortcut icon" href="favicon.ico">

		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/icomoon.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">

		<link rel="stylesheet" href="css/style.css">
		<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>

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
										<a href="appointment.php"><span>Register</span></a>
									</li>
									<li>
										<a href="contact.html"><span>Contact Us</span></a>
									</li>
								</ul>

							</div>
						</div>
					</nav>
				</div>
			</header>

			<div id="fh5co-intro-section" class="section-overlay animate-box" data-animate-effect="fadeIn">
				<div class="fh5co-intro-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/intro.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 float-overlay">
								<h2>Κεντρο Ψυχικης Υγειας</h2>
								<h4 style="color:white;"> Τα χρόνια στο Πανεπιστήμιο μπορούν να είναι συναρπαστικά, δημιουργικά, αλλά
								συνάμα αγχώδη. Κατά τη διάρκεια της φοιτητικής τους ζωής, οι προπτυχιακοί
								και μεταπτυχιακοί φοιτητές έχουν να αντιμετωπίσουν αρκετές προκλήσεις,
								όπως να διαχειριστούν την πίεση και το άγχος των σπουδών, να πάρουν αποφάσεις,
								και να αναλάβουν νέους ρόλους. Είναι μια περίοδος της ζωής σημαντική για την
								ανακάλυψη της ταυτότητας, τη δημιουργία και διατήρηση σχέσεων με άλλους
								ανθρώπους, ενώ συχνά οι φοιτητές καλούνται να αντιμετωπίσουν απώλειες στη ζωή
								τους, να χειριστούν νέες ακαδημαϊκές απαιτήσεις, και να διαχειριστούν τον
								τρόπο που οι ίδιοι βιώνουν και οι άλλοι αντιμετωπίζουν τη διαφορετικότητά τους.
								Ως εκ τούτου, κατά τη διάρκεια των σπουδών τους οι φοιτητές μπορεί να
								χρειαστούν υποστήριξη για την αντιμετώπιση τέτοιων προκλήσεων. </h4>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div align="center">
					<h4>LOGIN</h4>
				</div>
				<form action="" method="post">
					<div class="form-group">
						<label for="id">Αρ. Ταυτότητας:</label>
						<input type="number" class="form-control" id="id" placeholder="Αριθμός Ταυτότητας" name="id">
					</div>
					<div class="form-group">
						<label for="pwd">Κωδικός:</label>
						<input type="password" class="form-control" id="password" placeholder="Κωδικός" name="pwd">
					</div>
					<button type="submit" class="btn btn-default" name="submit">
						Καταχώρηση
					</button>
				</form>
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
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/login.php";
$method='POST';
if(isset($_POST['submit'])){
$postfields=http_build_query(array(
'id' => $_POST['id'],
'password' => $_POST['pwd']
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
$response = request($url, $method, $postfields, $tok);
}
if(strnatcmp($response['login'],true)==0){
	session_start();
	$_SESSION['id']=$_POST['id'];
	echo $_SESSION['id'];
	header('Location: form01.php');

}else{
	echo "<script> alert(\"Wrong username or password!\");</script>";
}
}
?>
<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/mailjet-apiv3-php-simple-master/src/Mailjet/reminder.php";
$method='POST';
$postfields=http_build_query(array(
));
if(isset($_COOKIE['token'])){
$response1=request($url,$method,$postfields,$_COOKIE['token']);
}else{
$response1=0;
}
if($response1['status']!=1){
$tok=giveToken();
print "<h5>".$tok."</h5>";
?>
<script>
	document.cookie='token=<?= $tok ?>';</script>
<?php
$response1 = request($url, $method, $postfields, $tok);
}
//var_dump($response1);

?>