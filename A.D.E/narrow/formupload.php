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
						</nav>
					</div>
				</header>

		<div class="container">
			<div class="row">
            	<div class="col-lg-12">
               		<form id="hi" class="well" action="http://thesis.in.cs.ucy.ac.cy/mhc/upload.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value=<?=$_SESSION['id'] ?> >
                  		<div class="form-group">
                    		<label for="file">Προσθηκη αρχειου για πελατη</label>
                    		<input id="file" type="file" name="file">
                    		<p class="help-block"><h6>Μόνο pdf,jpg,jpeg,png και gif αρχεία με μέγεθος 10 MB επιτρέπονται.</h6></p>
                  			<input type="submit" class="btn  btn-default" id="sub" value="Προσθηκη αρχειου">
                  		</div>
                 	</form>
            	</div>
          	</div>
			<div class="warning" id="hiresponse"></div>
		 	<div class="row">
				<div class="col-lg-12">
					<form class="well" id="contactForm" action="http://thesis.in.cs.ucy.ac.cy/mhc/retrieveapproved.php" method="post" >
						<input type="hidden" name="id" value=<?=$_SESSION['id'] ?> >
						<input class="btn  btn-default" type="submit" name="submit" value="Εμφανιση εγκεκριμενων αρχειων" >
					</form>
				</div>
			</div>
			<div id="contactResponse"></div>
		
    	
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
			</div> <!-- /container -->
		</div>
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
		<script>
			$("#contactForm").submit(function(event) {
				/* stop form from submitting normally */
				event.preventDefault();

				/* get some values from elements on the page: */
				var $form = $(this),
				    $submit = $form.find('button[type="submit"]'),
				    id_value = $form.find('input[name="id"]').val(),
				    url = $form.attr('action');

				/* Send the data using post */
				var posting = $.post(url, {
					id : id_value
				});

				posting.done(function(data) {
					/* Put the results in a div */
					$("#contactResponse").html(data);

					/* Change the button text. */
					$submit.text('Sent, Thank you');

					/* Disable the button. */
					$submit.attr("disabled", true);
				});
			});
			$(document).ready(function() {

				$("#sub").click(function(event) {

					//stop submit the form, we will post it manually.
					event.preventDefault();

					// Get form
					var form = $('#hi')[0];

					// Create an FormData object
					var data = new FormData(form);

					// disabled the submit button
					$("sub").prop("disabled", true);

					$.ajax({
						type : "POST",
						enctype : 'multipart/form-data',
						url : "http://thesis.in.cs.ucy.ac.cy/mhc/upload.php",
						data : data,
						processData : false,
						contentType : false,
						cache : false,
						timeout : 600000,
						success : function(data) {

							$("#hiresponse").text(data);
							console.log("SUCCESS : ", data);
							$("#sub").prop("disabled", false);

						},
						error : function(e) {

							$("#hiresponse").text(e.responseText);
							console.log("ERROR : ", e);
							$("#sub").prop("disabled", false);

						}
					});

				});

			}); 
</script>
	</body>

</html>

