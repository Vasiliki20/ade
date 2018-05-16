<?php session_start()?>
<!DOCTYPE html>
<html class="no-js">
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Κέντρο Ψυχικής Υγείας</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

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
										<a href="index.php">Είσοδος</a>
									</li>
							</div>
						</div>
					</nav>
				</div>
			</header>
			<!-- END: header -->
			<div id="fh5co-intro-section" class="section-overlay animate-box" data-animate-effect="fadeIn">
				<div class="fh5co-intro-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/intro.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 float-overlay">
								<h2>Επικοινωνήστε μαζί μας</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END fh5co-intro-section -->
			<div id="fh5co-contact-section">
				<div class="container">
					<div class="col-md-4 animate-box">
						<h3 class="section-title">Διεύθυνση</h3>

						<ul class="contact-info">
							<li>
								<i class="icon-location-pin"></i>Κέντρο Υγείας (Κτήριο ΚΟΔ06),Ισόγειο,
								Πανεπιστημιούπολη, Αγλαντζιά  T.Θ. 20537
								CY 1678, Λευκωσία
								Κύπρος
							</li>
							<li>
								<i class="icon-phone2"></i> (+357) 22892136
							</li>
							<li>
								<i class="icon-mail"></i><a href="#">mentalhealth@ucy.ac.cy </a>
							</li>

						</ul>
					</div>
					<div class="col-md-8 animate-box">
						<form action="#">
							<div class="form-group row">
								<div class="col-md-6 field">
									<label for="firstname">Όνομα</label>
									<input type="text" name="FName" id="firstname" class="form-control">
								</div>
								<div class="col-md-6 field">
									<label for="lastname">Επίθετο</label>
									<input type="text" name="LName" id="lastname" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-6 field">
									<label for="email">Ηλ. Διεύθυνση</label>
									<input type="text" name="email" id="email" class="form-control">
								</div>
								<div class="col-md-6 field">
									<label for="phone">Τηλέφωνο</label>
									<input type="text" name="phone" id="phone" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-12 field">
									<label for="message">Μήνυμα</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-12 field">
									<input type="submit" id="submit" class="btn btn-primary" value="Send Message">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
<!--
			<div id="googleMap" class="fh5co-map animate-box" style="width:100%;height:400px;"></div>

			<script>
				function myMap() {
					var mapProp = {
						center : new google.maps.LatLng(35.1463067, 33.40800360000003),
						zoom : 7,
					};
					var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
				}
			</script>

			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABiVgtDDYtAIzIYBxzm4rTGmlvIamDBOU
			&callback=myMap"></script>
-->
			<div id="map" class="fh5co-map animate-box"></div>
			<!-- END map -->
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
		<!-- Google Map -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
		<script src="js/google_map.js"></script>

		<!-- Main JS (Do not remove) -->
		<script src="js/main.js"></script>

	</body>
</html>

<?php

if (isset($_POST['submit'])){
$request = new HttpRequest();
$request->setUrl('http://localhost/mhcserver/post/register.php');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'cache-control' => 'no-cache',
  'content-type' => 'application/x-www-form-urlencoded',
  'authorization' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MTg3LCJleHAiOjE1MTgyNzI4NzV9.J90clNUiOoVLnqc9ND_mivBdf7mtxtL6BoE3yEYpQ2c'
));

$request->setContentType('application/x-www-form-urlencoded');
$request->setPostFields(array(
  'name' => $_POST['FName'],
  'lastname' => $_POST['LName'],
  'email' => $_POST['email'],
  'phone' => $_POST['phone'],
  'message' => $_POST['message'],
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}

}

?>
