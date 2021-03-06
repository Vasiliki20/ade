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
												document.cookie='token=<?= $tok ?>
										';
		</script>
		<?php
		//$GLOBALS['curtoken']=giveToken();
		//print "<h5>".$GLOBALS['curtoken']."</h5>";
		$response1 = request($url, $method, $postfields, $tok);
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
			* {
				box-sizing: border-box;
			}

			/* Create two unequal columns that floats next to each other */
			.column {
				float: left;
				padding: 10px;
				height: 300px; /* Should be removed. Only for demonstration */
			}

			.left {
				width: 75%;
			}

			.right {
				width: 25%;
			}

			/* Clear floats after the columns */
			.row:after {
				content: "";
				display: table;
				clear: both;
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
			
			<?php if(strnatcmp($response1['patient']['type'],"φοιτητής")==0){?>
			<a href="form02.php"><b>Δήλωση στοιχείων</b></a>
			<?php }elseif(strnatcmp($response1['patient']['type'],"ακαδημαικό")==0){ ?>
			<a href="form02b.php"><b>Δήλωση στοιχείων</b></a>
			<?php }elseif(strnatcmp($response1['patient']['type'],"διοικητικό")==0){ ?>
			<a href="form02c.php"><b>Δήλωση στοιχείων</b></a>
			<?php }elseif(strnatcmp($response1['patient']['type'],"άλλο")==0){ ?>
			<a href="form02d.php"><b>Δήλωση στοιχείων</b></a>
			<?php }else{ ?>
			<a href="form02d.php"><b>Δήλωση στοιχείων</b></a>
			<?php } ?>
			<a href="form03.php"><b>Ερωτηματολόγιο αρχικής συνάντησης</b></a>
			<?php if($response1['patient']['age']==null){?>
			<a href="form06.php"><b>Αρχική συνέντευξη</b></a>
			<?php }elseif($response1['patient']['age']>=18){ ?>
			<a href="form06.php"><b>Αρχική συνέντευξη</b></a>
			<?php }elseif($response1['patient']['age']<18){ ?>
			<a href="historyforchildren.php"><b>Αρχική συνέντευξη</b></a>
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
					<div align="center">
						<h4>ΑΞΙΟΛΟΓΗΣΗ ΥΠΗΡΕΣΙΩΝ ΑΠΟ ΠΕΛΑΤΕΣ</h4>
					</div>
					<div align="left">
						<h5>Θα  το εκτιμούσαμε ιδιαίτερα αν θα μπορούσατε να αφιερώσετε λίγο από το χρόνο σας  και να συμπληρώσετε το πιο κάτω ερωτηματολόγιο που αφορά τις υπηρεσίες του λάβατε από το ΚΕΨΥ.
						Η ανατροφοδότησή σας θα είναι σημαντική ώστε να μπορούμε να βελτιώνουμε τις υπηρεσίες που λαμβάνετε σύμφωνα με τις ανάγκες σας. Οι απαντήσεις σας είναι ανώνυμες.
						Σας ευχαριστούμε εκ των προτέρων για τη συμβολή σας.</h5>
						<br>
						<h5><strong>Α. Χρησιμοποιήστε την παρακάτω κλίμακα για να απαντήσετε στις ερωτήσεις σχετικά με την εμπειρία σας στο ΚΕΨΥ, βάζοντας σε κύκλο τον αριθμό που αντιστοιχεί στη δική σας περίπτωση. </strong></h5>
					</div>
					<div align="center">
						<h5><strong>Διαφωνώ απόλυτα 1 2 3 4 5 6 7 Συμφωνώ απόλυτα</strong></h5>
					</div>
					<form action="" method="post">
						<div class="row">
 							<div class="column left">
								<label for="q1">1. Ήταν εύκολο για μένα να διευθετήσω συνάντηση </label>
 								<label for="q2">2. Ο χρόνος που χρειάστηκε να περιμένω για τη διευθέτηση συνεδρίας μου φάνηκε πάρα πολύς</label>
								<label for="q3">3. Ένιωθα άνετα περιμένοντας στην αίθουσα αναμονής&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
								<label for="q4">4. Μου φάνηκε ότι μου ζητήθηκε να συμπληρώσω πάρα πολλά έντυπα</label>
								<label for="q5">5. Η αρχική αξιολόγηση ήταν χρήσιμη για να με βοηθήσει να εντοπίσω τις ανάγκες μου και να καθορίσω τους στόχους μου</label>
								<label for="q6">6. Θα σύστηνα σε κάποιο φίλο ή δικό μου άτομο τις υπηρεσίες του  ΚΕΨΥ</label>
								<label for="q7">7. Τα διάφορα εργαλεία (π.χ. ερωτηματολόγια) που συμπλήρωσα μου φάνηκαν χρήσιμα </label>
								<label for="q8">8. Οι ανησυχίες που με ώθησαν να αποταθώ στο ΚΕΨΥ επηρέαζαν σημαντικά τις σπουδές μου </label>
								<label for="q9">9. Οι υπηρεσίες του έλαβα ήταν χρήσιμες για μένα </label>
							</div>
							<style>
									input[type="radio"], input[type="checkbox"] {
										margin: 4px 0 0;
										margin-top: 1px \9;
										line-height: normal;
										margin-bottom: 10px;
										margin-top: 5px;
									}
								</style>
 							<div class="column right">
 								<input type="hidden" name="q1" />
 								<input type="radio" name="q1" value="1">
								1
								<input type="radio" name="q1" value="2">
								2
								<input type="radio" name="q1" value="3">
								3
								<input type="radio" name="q1" value="4">
								4
								<input type="radio" name="q1" value="5">
								5
								<input type="radio" name="q1" value="6">
								6
								<input type="radio" name="q1" value="7">
								7
								<br>
								<input type="hidden" name="q2" />
								<input type="radio" name="q2" value="1">
								1
								<input type="radio" name="q2" value="2">
								2
								<input type="radio" name="q2" value="3">
								3
								<input type="radio" name="q2" value="4">
								4
								<input type="radio" name="q2" value="5">
								5
								<input type="radio" name="q2" value="6">
								6
								<input type="radio" name="q2" value="7">
								7
								<br>
								<input type="hidden" name="q3" />
								<input type="radio" name="q3" value="1">
								1
								<input type="radio" name="q3" value="2">
								2
								<input type="radio" name="q3" value="3">
								3
								<input type="radio" name="q3" value="4">
								4
								<input type="radio" name="q3" value="5">
								5
								<input type="radio" name="q3" value="6">
								6
								<input type="radio" name="q3" value="7">
								7
								<br>
								<input type="hidden" name="q4" />
								<input type="radio" name="q4" value="1">
								1
								<input type="radio" name="q4" value="2">
								2
								<input type="radio" name="q4" value="3">
								3
								<input type="radio" name="q4" value="4">
								4
								<input type="radio" name="q4" value="5">
								5
								<input type="radio" name="q4" value="6">
								6
								<input type="radio" name="q4" value="7">
								7
								<br>
								<input type="hidden" name="q5" />
								<input type="radio" name="q5" value="1">
								1
								<input type="radio" name="q5" value="2">
								2
								<input type="radio" name="q5" value="3">
								3
								<input type="radio" name="q5" value="4">
								4
								<input type="radio" name="q5" value="5">
								5
								<input type="radio" name="q5" value="6">
								6
								<input type="radio" name="q5" value="7">
								7
								<br>
								<input type="hidden" name="q6" />
								<input type="radio" name="q6" value="1">
								1
								<input type="radio" name="q6" value="2">
								2
								<input type="radio" name="q6" value="3">
								3
								<input type="radio" name="q6" value="4">
								4
								<input type="radio" name="q6" value="5">
								5
								<input type="radio" name="q6" value="6">
								6
								<input type="radio" name="q6" value="7">
								7
								<br>
								<input type="hidden" name="q7" />
								<input type="radio" name="q7" value="1">
								1
								<input type="radio" name="q7" value="2">
								2
								<input type="radio" name="q7" value="3">
								3
								<input type="radio" name="q7" value="4">
								4
								<input type="radio" name="q7" value="5">
								5
								<input type="radio" name="q7" value="6">
								6
								<input type="radio" name="q7" value="7">
								7
								<br>
								<input type="hidden" name="q8" />
								<input type="radio" name="q8" value="1">
								1
								<input type="radio" name="q8" value="2">
								2
								<input type="radio" name="q8" value="3">
								3
								<input type="radio" name="q8" value="4">
								4
								<input type="radio" name="q8" value="5">
								5
								<input type="radio" name="q8" value="6">
								6
								<input type="radio" name="q8" value="7">
								7
								<br>
								<input type="hidden" name="q9" />
								<input type="radio" name="q9" value="1">
								1
								<input type="radio" name="q9" value="2">
								2
								<input type="radio" name="q9" value="3">
								3
								<input type="radio" name="q9" value="4">
								4
								<input type="radio" name="q9" value="5">
								5
								<input type="radio" name="q9" value="6">
								6
								<input type="radio" name="q9" value="7">
								7
								<br>
							</div>
						</div>	
						<label for="q10">Οι υπηρεσίες του έλαβα με βοήθησαν…</label>
						<div class="row">
							<div class="column left">
								<label for="q10">10. να νιώθω καλύτερα για τον εαυτό μου&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<label for="q11">11. να κατανοώ καλύτερα τον εαυτό μου&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<label for="q12">12. να παραμείνω στο Πανεπιστήμιο&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
								<label for="q13">13. να βελτιώσω την ακαδημαϊκή μου επίδοση&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<label for="q14">14. να βελτιώσω την  παρουσία μου στις διαλέξεις/μαθήματα&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<label for="q15">15. να βελτιώσω συνολικά την εμπειρία μου στο Πανεπιστήμιο</label>
								<label for="q16">16. να αναπτύξω δεξιότητες ώστε να μπορώ να διαχειριστώ  θέματα που με
									απασχολούν</label>
								<label for="q17">17.  να αναπτύξω δεξιότητες που θα βρω χρήσιμες στη μελλοντική προσωπική και
									επαγγελματική μου πορεία (π.χ. αυτό-κατανόηση, κατανόηση των άλλων, διαχείριση δύσκολων συναισθημάτων, αυτοπεποίθηση, ασφάλεια)</label>
								<label for="q18">18. Ο θεραπευτής έδειξε να νοιάζεται πραγματικά για τις ανησυχίες μου</label>
								<label for="q19">19. Ο θεραπευτής φάνηκε να είναι καλά καταρτισμένος για να με βοηθήσει όσον αφορά το θέμα που με απασχολούσε </label>
								<label for="q20">20. Ο θεραπευτής μου συμπεριφέρθηκε ευγενικά </label>
								<label for="q21">21. Αν προκύψει ξανά η ανάγκη να μιλήσω με κάποιον θα αποταθώ ξανά στο ΚΕΨΥ</label>
							</div>
							<div class="column right">
								<input type="hidden" name="q10" />
								<input type="radio" name="q10" value="1">
								1
								<input type="radio" name="q10" value="2">
								2
								<input type="radio" name="q10" value="3">
								3
								<input type="radio" name="q10" value="4">
								4
								<input type="radio" name="q10" value="5">
								5
								<input type="radio" name="q10" value="6">
								6
								<input type="radio" name="q10" value="7">
								7
								<br>
								<input type="hidden" name="q11" />
								<input type="radio" name="q11" value="1">
								1
								<input type="radio" name="q11" value="2">
								2
								<input type="radio" name="q11" value="3">
								3
								<input type="radio" name="q11" value="4">
								4
								<input type="radio" name="q11" value="5">
								5
								<input type="radio" name="q11" value="6">
								6
								<input type="radio" name="q11" value="7">
								7
								<br>
								<input type="hidden" name="q12" />
								<input type="radio" name="q12" value="1">
								1
								<input type="radio" name="q12" value="2">
								2
								<input type="radio" name="q12" value="3">
								3
								<input type="radio" name="q12" value="4">
								4
								<input type="radio" name="q12" value="5">
								5
								<input type="radio" name="q12" value="6">
								6
								<input type="radio" name="q12" value="7">
								7
								<br>
								<input type="hidden" name="q13" />
								<input type="radio" name="q13" value="1">
								1
								<input type="radio" name="q13" value="2">
								2
								<input type="radio" name="q13" value="3">
								3
								<input type="radio" name="q13" value="4">
								4
								<input type="radio" name="q13" value="5">
								5
								<input type="radio" name="q13" value="6">
								6
								<input type="radio" name="q13" value="7">
								7
								<br>
								<input type="hidden" name="q14" />
								<input type="radio" name="q14" value="1">
								1
								<input type="radio" name="q14" value="2">
								2
								<input type="radio" name="q14" value="3">
								3
								<input type="radio" name="q14" value="4">
								4
								<input type="radio" name="q14" value="5">
								5
								<input type="radio" name="q14" value="6">
								6
								<input type="radio" name="q14" value="7">
								7
								<br>
								<input type="hidden" name="q15" />
								<input type="radio" name="q15" value="1">
								1
								<input type="radio" name="q15" value="2">
								2
								<input type="radio" name="q15" value="3">
								3
								<input type="radio" name="q15" value="4">
								4
								<input type="radio" name="q15" value="5">
								5
								<input type="radio" name="q15" value="6">
								6
								<input type="radio" name="q15" value="7">
								7
								<br>
								<input type="hidden" name="q16" />
								<input type="radio" name="q16" value="1">
								1
								<input type="radio" name="q16" value="2">
								2
								<input type="radio" name="q16" value="3">
								3
								<input type="radio" name="q16" value="4">
								4
								<input type="radio" name="q16" value="5">
								5
								<input type="radio" name="q16" value="6">
								6
								<input type="radio" name="q16" value="7">
								7
								<br>
								<input type="hidden" name="q17" />
								<input type="radio" name="q17" value="1">
								1
								<input type="radio" name="q17" value="2">
								2
								<input type="radio" name="q17" value="3">
								3
								<input type="radio" name="q17" value="4">
								4
								<input type="radio" name="q17" value="5">
								5
								<input type="radio" name="q17" value="6">
								6
								<input type="radio" name="q17" value="7">
								7
								<br>
								<br>
								<input type="hidden" name="q18" />
								<input type="radio" name="q18" value="1">
								1
								<input type="radio" name="q18" value="2">
								2
								<input type="radio" name="q18" value="3">
								3
								<input type="radio" name="q18" value="4">
								4
								<input type="radio" name="q18" value="5">
								5
								<input type="radio" name="q18" value="6">
								6
								<input type="radio" name="q18" value="7">
								7
								<br>
								<input type="hidden" name="q19" />
								<input type="radio" name="q19" value="1">
								1
								<input type="radio" name="q19" value="2">
								2
								<input type="radio" name="q19" value="3">
								3
								<input type="radio" name="q19" value="4">
								4
								<input type="radio" name="q19" value="5">
								5
								<input type="radio" name="q19" value="6">
								6
								<input type="radio" name="q19" value="7">
								7
								<br>
								<input type="hidden" name="q20" />
								<input type="radio" name="q20" value="1">
								1
								<input type="radio" name="q20" value="2">
								2
								<input type="radio" name="q20" value="3">
								3
								<input type="radio" name="q20" value="4">
								4
								<input type="radio" name="q20" value="5">
								5
								<input type="radio" name="q20" value="6">
								6
								<input type="radio" name="q20" value="7">
								7
								<br>
								<input type="hidden" name="q21" />
								<input type="radio" name="q21" value="1">
								1
								<input type="radio" name="q21" value="2">
								2
								<input type="radio" name="q21" value="3">
								3
								<input type="radio" name="q21" value="4">
								4
								<input type="radio" name="q21" value="5">
								5
								<input type="radio" name="q21" value="6">
								6
								<input type="radio" name="q21" value="7">
								7
								<br>
							</div>
						</div>
						<div>
							<br>
							<br>
							<br>
						</div>
						<div class="row">		
							<div class="form-group">
								<label for="q22"><strong>22. Περιγράψτε λίγο πιο αναλυτικά με ποιους τρόπους οι υπηρεσίες που λάβατε ήταν βοηθητικοί για εσάς.</strong> </label>
								<input type="text" class="form-control" id="q22" placeholder="" name="q22">
							</div>
							<div class="form-group">
								<label for="q23"><strong>23. Περιγράψτε επίσης λίγο πιο αναλυτικά τα στοιχεία στις υπηρεσίες που λάβατε, τα οποία βρήκατε λιγότερο βοηθητικά ή αρνητικά. </strong>
									<br>
									<em>(συμπεριλάβετε οποιοδήποτε περιστατικό σας φάνηκε αρνητικό ή δύσκολο). </em>:</label>
								<input type="text" class="form-control" id="q23" placeholder="" name="q23">
							</div>
							<div class="form-group">
								<label for="q24"><strong>24.  Έχετε οποιεσδήποτε εισηγήσεις για το πώς θα μπορούσε να βελτιωθούν οι υπηρεσίες μας; </strong> </label>
								<input type="text" class="form-control" id="q24" placeholder="" name="q24">
							</div>
							<div class="form-group">
								<label for="q25"><strong>25. Θα θέλατε να αναφέρετε οτιδήποτε άλλο  σχετικά με το ΚΕΨΥ;</strong> </label>
								<input type="text" class="form-control" id="q25" placeholder="" name="q25">
							</div>
							<div align="left">
								<h5><strong>B. Λίγα στοιχεία για εσάς (προαιρετικά)</strong></h5>
							</div>
							<div class="form-group">
								<label for="q7"><strong>1. Πόσες συναντήσεις πραγματοποιήσετε στο ΚΕΨΥ</strong> </label>
								<input type="number" class="form-control" id="meetingsnum" placeholder="απο βάση" name="q7">
							</div>
							<div class="form-group">
								<label for="q8"><strong>2. Με ποιο θεραπευτή συνεργαστήκατε;</strong> </label>
								<input type="text" class="form-control" id="therapist" placeholder="απο βάση" name="q8">
							</div>
							<div class="form-group">
								<label for="q9"><strong>3. Ποιοι ήταν οι κυριότεροι λόγοι που αποταθήκατε στο ΚΕΨΥ; (σημειώστε όσα ισχύουν)</strong> </label>
								<br>
								<input type="hidden" name="reasons">
								<input type="radio" name="reasons" value="κακοποίηση">
								κακοποίηση
								<br>
								<input type="radio" name="reasons" value="ακαδημαϊκές δυσκολίες">
								ακαδημαϊκές δυσκολίες
								<br>
								<input type="radio" name="reasons" value="άγχος">
								άγχος
								<br>
								<input type="radio" name="reasons" value="εθισμός">
								εθισμός
								<br>
								<input type="radio" name="reasons" value="διάθεση/κατάθλιψη">
								διάθεση/κατάθλιψη
								<br>
								<input type="radio" name="reasons" value="θυμός-επιθετικότητα">
								θυμός-επιθετικότητα
								<br>
								<input type="radio" name="reasons" value="απώλεια/πένθος">
								απώλεια/πένθος
								<br>
								<input type="radio" name="reasons" value="σωματική υγεία">
								σωματική υγεία
								<br>
								<input type="radio" name="reasons" value="διατροφικές διαταραχές">
								διατροφικές διαταραχές
								<br>
								<input type="radio" name="reasons" value="σχέσεις">
								σχέσεις
								<br>
								<input type="radio" name="reasons" value="προσωπική ταυτότητα">
								προσωπική ταυτότητα
								<br>
								<input type="radio" name="reasons" value="σεξουαλικά θέματα">
								σεξουαλικά θέματα
								<br>
								<input type="radio" name="reasons" value="Άλλο">
								Άλλο (διευκρινίστε)
								<br>
								<input type="text" class="form-control" name="reasons" value="">
							</div>
							<div class="form-group">
								<label for="q9"><strong>4. Για ποιο λόγο τερματίσετε τις υπηρεσίες που λαμβάνατε στο ΚΕΨΥ;</strong> <em>(σημειώστε όσα ισχύουν)</em></label>
								<br>
								<input type="hidden" name="whyend">
								<input type="radio" name="whyend" value="Η συμβουλευτική δεν μπορούσε να ανταποκριθεί στις ανησυχίες μου">
								Η συμβουλευτική δεν μπορούσε να ανταποκριθεί στις ανησυχίες μου
								<br>
								<input type="radio" name="whyend" value="Νιώθω καλύτερη και θεωρώ πώς δεν χρειάζομαι πια τις υπηρεσίες">
								Νιώθω καλύτερη και θεωρώ πώς δεν χρειάζομαι πια τις υπηρεσίες
								<br>
								<input type="radio" name="whyend" value="Δεν ήμουν ικανοποιημένος/η με το θεραπευτή/σύμβουλό μου">
								Δεν ήμουν ικανοποιημένος/η με το θεραπευτή/σύμβουλό μου
								<br>
								<input type="radio" name="whyend" value="Έχω ολοκληρώσεις το πρόγραμμα θεραπείας">
								Έχω ολοκληρώσεις το πρόγραμμα θεραπείας
								<br>
								<input type="radio" name="whyend" value="Λόγω αποφοίτησής μου">
								Λόγω αποφοίτησής μου
								<br>
								<input type="radio" name="whyend" value="Άλλο">
								Άλλο (διευκρινίστε)
								<br>
								<input type="text" class="form-control" name="whyend" value="">
							</div>
							<div class="form-group">
								<label for="thankyou"><strong>Σας ευχαριστούμε πολύ για το χρόνο και την προσοχή σας για να μας βοηθήσετε να αξιολογήσουμε/βελτιώσουμε τις υπηρεσίες που σας προσφέρουμε! </strong></label>
							</div>
						</div>
						<button type="submit" class="btn btn-default" name="submit">
							καταχωρηση
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
				<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/form15.php";
$method='POST';
if(isset($_POST['submit'])){
$postfields=http_build_query(array(
  'id' => $_SESSION['id'],
  'q1' => $_POST['q1'],
  'q2' => $_POST['q2'],
  'q3' => $_POST['q3'],
  'q4' => $_POST['q4'],
  'q5' => $_POST['q5'],
  'q6' => $_POST['q6'],
  'q7' => $_POST['q7'],
  'q8' => $_POST['q8'],
  'q9' => $_POST['q9'],
  'q10' => $_POST['q10'],
  'q11' => $_POST['q11'],
  'q12' => $_POST['q12'],
  'q13' => $_POST['q13'],
  'q14' => $_POST['q14'],
  'q15' => $_POST['q15'],
  'q16' => $_POST['q16'],
  'q17' => $_POST['q17'],
  'q18' => $_POST['q18'],
  'q19' => $_POST['q19'],
  'q20' => $_POST['q20'],
  'q21' => $_POST['q21'],
  'helpful' => $_POST['q22'],
  'negative' => $_POST['q23'],
  'sugestions' => $_POST['q24'],
  'other' => $_POST['q25'],
  'whyterminate1' => $_POST['whyend']
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
									document.cookie='token=<?= $tok ?>
							';
		</script>
		<?php
		//$GLOBALS['curtoken']=giveToken();
		//print "<h5>".$GLOBALS['curtoken']."</h5>";

		$response=request($url,$method,$postfields,$tok);
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

			<!-- Main JS (Do not remove) -->
			<script src="js/main.js"></script>
		</div>

	</body>
</html>


