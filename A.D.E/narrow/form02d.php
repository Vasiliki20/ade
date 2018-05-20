<?php session_start(); ?>
<?php
ob_start();
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/myclient.php?patientID=".$_SESSION['id'];
$method='GET';
//if(isset($_POST['submit'])){
$postfields=http_build_query(array(
	));
	if(isset($_COOKIE['token'])){
		$response1=request($url,$method,$postfields,$_COOKIE['token']);
	}else{
		$response1=0;
	}
	while($response1['status']!=1){
		$tok=giveToken();
		print "<h5>".$tok."</h5>";
		?>
		<script>
			document.cookie='token=<?= $tok ?>';
		</script>
		<?php
		//$GLOBALS['curtoken']=giveToken();
		//print "<h5>".$GLOBALS['curtoken']."</h5>";
		$response1=request($url,$method,$postfields,$tok);
	}
//}
?>
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
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>

	
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
			<?php if($response1['patient']['numberofsessions']==NULL){ ?>
			<a href="form01.php"><b>Αρχική επικοινωνία</b></a>
			<?php } ?>
			
			<?php if($response1['patient']['numberofsessions']==1){ ?>
			
			<?php if(strnatcmp($response1['patient']['type'],"φοιτητής")==0){?>
			<a href="form02.php"><b>Δήλωση στοιχείων</b></a>
			<?php }elseif(strnatcmp($response1['patient']['type'],"ακαδημαικό")==0){?>
			<a href="form02b.php"><b>Δήλωση στοιχείων</b></a>
			<?php }elseif(strnatcmp($response1['patient']['type'],"διοικητικό")==0){?>
			<a href="form02c.php"><b>Δήλωση στοιχείων</b></a>
			<?php }elseif(strnatcmp($response1['patient']['type'],"άλλο")==0){?>
			<a href="form02d.php"><b>Δήλωση στοιχείων</b></a>
			<?php }else{?>
			<a href="form02d.php"><b>Δήλωση στοιχείων</b></a>
			<?php } ?>
			
			<?php } ?>
			
			<?php if($response1['patient']['numberofsessions']==2){ ?>
			
			<a href="form03.php"><b>Ερωτηματολόγιο αρχικής συνάντησης</b></a>
			
			<?php } ?>
			
			<?php if($response1['patient']['numberofsessions']==3){ ?>
			
			<?php if($response1['patient']['age']==null){?>
			<a href="form06.php"><b>Αρχική συνέντευξη</b></a>
			<?php }elseif($response1['patient']['age']>=18){?>
			<a href="form06.php"><b>Αρχική συνέντευξη</b></a>
			<?php }elseif($response1['patient']['age']<18){?>
			<a href="historyforchildren.php"><b>Αρχική συνέντευξη</b></a>
			<?php } ?>
			
			<?php } ?>
			
			<a href="form10.php"><b>Καταγραφή άλλων επαφών</b></a>
			<a href="form12.php"><b>Μεταβίβαση πληροφοριών</b></a>
			<a href="formupload.php"><b>Ανάρτηση αρχείων</b></a>
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
										<a class="fh5co-logo" href="home.html">Κεντρο Ψυχικης Υγειας</a>
									</div>
								</div>
								<ul class="nav text-right" class="col-md-3">
									<li>
										<a href="index.php">Logout</a>
									</li>
								</ul>								
							</div>
							</div>
						</nav>
					
				</header>

				<div class="container">
					<div align="center">
						<h4>ΔΗΛΩΣΗ ΣΤΟΙΧΕΙΩΝ ΠΕΛΑΤΩΝ</h4>
					</div>
					<div align="left">
						<h5><b>Α. ΔΗΜΟΓΡΑΦΙΚΑ ΣΤΟΙΧΕΙΑ</b></h5>
					</div>
					<form action="" method="post" id="contact-form">
						<div class="form-group">
							<label for="dob"><b>1. Ημερομηνία γέννησης:</b></label>
							<input type="date" class="form-control" id="dob" placeholder="" name="dob">
						</div>
						<div class="form-group">
							<label for="age"><b>2. Ηλικία:</b></label>
							<input type="number" class="form-control" id="age" placeholder="" name="age">
						</div>
						<div class="form-group">
							<input type="hidden" name="sex" />
							<label for="sex"><b>3. Φύλο:</b></label>
							<br>
							<input type="radio" name="sex" value="Άρρεν">
							Άρρεν
							<br>
							<input type="radio" name="sex" value="Θύλη">
							Θύλη
							<br>
							<input type="radio" name="sex" value="Άλλο">
							Άλλο
						</div>
						<div class="form-group">
							<label for="citizenship"><b>4. Υπηκοότητα:</b></label>
							<input type="text" class="form-control" id="citizenship" placeholder="" name="citizenship">
						</div>
						<div class="form-group">
							<label for="id"><b>5. Αρ. Δελτίου Ταυτότητας:</b></label>
							<input type="number" class="form-control" id="id" placeholder="" name="id">
						</div>
						<div class="form-group">
							<label for="address"><b>6. Παρούσα Διεύθυνση Διαμονής:</b></label>
							<input type="text" class="form-control" id="address" placeholder="" name="address">
						</div>
						<div class="form-group">
							<label for="city"><b>7. Πόλη/Χωριό:</b></label>
							<input type="text" class="form-control" id="city" placeholder="" name="city">
						</div>
						<div class="form-group">
							<label for="tk"><b>8. Τ.Κ:</b></label>
							<input type="number" class="form-control" id="tk" placeholder="" name="tk">
						</div>
						<div class="form-group">
							<input type="hidden" name="contact" />
							<label for="contact"><b>9. Ποιος είναι ο καλύτερος τρόπος να επικοινωνήσουμε μαζί σας;</b></label>
							<br>
							<input type="radio" name="contact" value="Ηλεκτρονική Διεύθυνση">
							Email
							<br>
							<input type="radio" name="contact" value="Τηλέφωνο">
							Τηλέφωνο
						</div>

						<div align="left">
							<h5><b>Β. ΕΠΑΦΗ ΕΚΤΑΚΤΗΣ ΑΝΑΓΚΗΣ</b></h5>
						</div>
						<div class="form-group">
							<label for="emname"><b>10. Ονοματεπώνυμο:</b></label>
							<input type="text" class="form-control" id="emname" placeholder="" name="emname">
						</div>
						<div class="form-group">
							<label for="emrelationship"><b>11. Σχέση:</b></label>
							<input type="text" class="form-control" id="emrelationship" placeholder="" name="emrelationship">
						</div>
						<div class="form-group">
							<label for="emphone"><b>12. Τηλ. Επικοινωνίας:</b></label>
							<input type="number" class="form-control" id="emphone" placeholder="" name="emphone">
						</div>

						<div align="left">
							<h5><b>Γ. ΠΡΟΣΩΠΙΚΑ ΣΤΟΙΧΕΙΑ-ΙΣΤΟΡΙΚΟ</b></h5>
						</div>
						<div class="form-group">
							<input type="hidden" name="family" />
							<label for="family"><b>13. Οικογενειακή Κατάσταση:</b></label>
							<br>
							<input type="radio" name="family" value="Ανύπαντρος/η">
							Ανύπαντρος/η
							<br>
							<input type="radio" name="family" value="Σε σχέση/συμβίωση">
							Σε σχέση/συμβίωση
							<br>
							<input type="radio" name="family" value="Αρραβωνιασμένος/η">
							Αρραβωνιασμένος/η
							<br>
							<input type="radio" name="family" value="Παντρεμένος/η">
							Παντρεμένος/η
							<br>
							<input type="radio" name="family" value="Χωρισμένος/η">
							Χωρισμένος/η
							<br>
							<input type="radio" name="family" value="Χήρος/α">
							Χήρος/α
							<br>

							<input type="radio" name="family" value="άλλο">
							Άλλο
						
						</div>
						<<div class="form-group">
							<input type="hidden" name="previous" />
							<label for="previous"><b>14. Είχατε προηγούμενη συνεργασία με ψυχολόγο, ψυχίατρο ή άλλο λειτουργό ψυχικής υγείας;</b></label>
							<br>
							<input type="radio" name="previous" value="Όχι">
							Όχι
							<br>

							<input type="radio" name="previous" value="Ναι">

							Ναι
							<br>
							Αν ναι(διευκρινίστε)
							<br>
							<input type="text" class="form-control" id="previous" name="previoustherapist">
						</div>
						<div class="form-group">
							<input type="hidden" name="currentlystaying" />
							<label for="currentlystaying"><b>15. Αυτή τη στιγμή διαμένεται:</b></label>
							<br>
							<input type="radio" name="currentlystaying" value="Μόνος/η">
							Μόνος/η
							<br>
							<input type="radio" name="currentlystaying" value="Με συγκάτοικο/ους">
							Με συγκάτοικο/ους
							<br>
							<input type="radio" name="currentlystaying" value="Με την οικογένεια μου">
							Με την οικογένεια μου(γονέις,αδέλφια)
							<br>
							<input type="radio" name="currentlystaying" value="Άλλο">
							Άλλο (διαυκρινίστε)
							<br>
							<input type="text" class="form-control" id="currentlystaying" name="currentlystaying">
						</div>
						<div class="form-group">
							<input type="hidden" name="referred" />
							<label for="referred"><b>16. Σας έχει παραπέμψει κάποιος άλλος στο ΚΕΨΥ:</b></label>
							<br>
							<input type="radio" name="referred" value="Όχι">
							Όχι
							<br>
							<input type="radio" name="referred" value="Ναι">
							Ναι (διευκρινίστε)
							<br>
							<input type="text" class="form-control" id="referred" name="referred">
						</div>
						<div class="form-group">
							
							<label for="otherservices"><b>17. Λαμβάνετε τώρα υπηρεσίες από άλλους επαγγελματίες ψυχικής υγείας;</b></label>
							<input type="hidden" name="otherservices">
							<br>
							<input type="radio" name="otherservices" value="Όχι">
							Όχι
							<br>
							<input type="radio" name="otherservices" value="Ναί">
							Ναι
							<br>
							<label for="contactothers">Αν ναι, θα μπορούσαμε να επικοινωνήσουμε μαζί τους αν χρειαστεί;</label>
							Τηλέφωνο:
							<br>
							<input type="text" class="form-control" id="otherservices" name="contactothers">
						</div>
						<div class="form-group">
							<label for="job"><b>18. Εργασία:</b></label>
							<input type="text" class="form-control" id="job" placeholder="" name="job">
						</div>
						<div class="form-group">
							<label for="dimos"><b>19. Δήμος:</b></label>
							<input type="text" class="form-control" id="dimos" placeholder="" name="dimos">
						</div>
						<button type="submit" class="btn btn-default" name="submit">
							Καταχωρηση
						</button>
</div>
<script>
	$(document).ready(function() {
		jQuery.validator.addMethod("noSpace", function(value, element) {
			return value.indexOf(" ") < 0 && value != "";
		}, "Παρακαλώ σημπληρώστε ξανά χωρίς κενά");

		jQuery.validator.addMethod("sqlValidator", function(value, element) {
			return this.optional(element) || !(/[\s]*((delete)|(exec)|(drop\s*table)|(insert)|(shutdown)|(update)|(\bor\b))/.test(value));
		}, 'Παρακαλώ συμπληρώστε ξανά');

		jQuery.validator.addMethod("xssValidator", function(value, element) {
			return this.optional(element) || !(/\s*script\b[^>]*>[^<]+<\s*\/\s*script\s*/.test(value));
		}, 'Παρακαλώ συμπληρώστε ξανά');

		$('#contact-form').validate({
			rules : {
				emname : {
					sqlValidator : true,
					xssValidator : true
				},
				emrelationship : {
					sqlValidator : true,
					xssValidator : true,
				},
				job : {
					sqlValidator : true,
					xssValidator : true,
				},
				dimos : {
					sqlValidator : true,
					xssValidator : true,
				},
				city : {
					sqlValidator : true,
					xssValidator : true,
				},
			},
			highlight : function(element) {
				$(element).closest('.form-group').addClass('error text-danger');
			},
			success : function(element) {
				$(element).closest('.form-group').removeClass('error text-danger');
			}
		});

	}); 
</script>
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
				<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/form2d.php";
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
  'emergencyname' => $_POST['emname'],
  'emergencyrelation' => $_POST['emrelationship'],
  'emergencynumber' => $_POST['emphone'],
  'maritalstatus' => $_POST['family'], 
  'previoustherapy' => $_POST['previous'],
  'previoustherapist' => $_POST['previoustherapist'],
  'nowtherapist' => $_POST['otherservices'],
  'comnowtherapistb' => $_POST['contactothers'],
  'job' => $_POST['job'],
  'municipality' => $_POST['dimos']
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
if($response['success']==1){
			header('Location: homepage_client.php');
		}else{
		echo "<div class=\"alert alert-danger fade in\">
			  <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
			  <strong>Error!</strong> A problem has been occurred while submitting your data. Please check your internet connection and/or if you have some special characters in your inputs remove them
			  </div>";
		}
}
?>
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
	<script src="js/jquery.validate.js"></script>
		
			<!-- Main JS (Do not remove) -->
			<script src="js/main.js"></script>
		</div>
	</body>
</html>


