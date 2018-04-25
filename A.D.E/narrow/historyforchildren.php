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
			table, th, td {
				border: 1px solid black;
				border-collapse: collapse;
				height: 10px;
			}
			th, td {
				padding: 2px;
			}
			th {
				text-align: left;
			}
			td {
				height: 5px;
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

				<script>
							function show1() {
								document.getElementById('div1').style.display = 'none';
							}
							function show2() {
								document.getElementById('div1').style.display = 'block';
							}
							function show3() {
								document.getElementById('div2').style.display = 'none';
							}
							function show4() {
								document.getElementById('div2').style.display = 'block';
							}
							function show5() {
								document.getElementById('div3').style.display = 'none';
							}
							function show6() {
								document.getElementById('div3').style.display = 'block';
							}
							function show7() {
								document.getElementById('div4').style.display = 'none';
							}
							function show8() {
								document.getElementById('div4').style.display = 'block';
							}
							function show9() {
								document.getElementById('div5').style.display = 'none';
							}
							function show10() {
								document.getElementById('div5').style.display = 'block';
							}
							function show11() {
								document.getElementById('div6').style.display = 'none';
							}
							function show12() {
								document.getElementById('div6').style.display = 'block';
							}
							function show13() {
								document.getElementById('div7').style.display = 'none';
							}
							function show14() {
								document.getElementById('div7').style.display = 'block';
							}
						</script>
						
				<div class="container">
					<div align="center">
						<h4>ΙΣΤΟΡΙΚΟ ΓΙΑ ΠΑΙΔΙΑ</h4>
					</div>

					<form action="" method="post">
						<div align="left">
							<h5>Α. ΕΚΠΑΙΔΕΥΤΙΚΟ ΙΣΤΟΡΙΚΟ</h5>
						</div>
						<div class="form-group">
							<label for="school"><strong>1. Σχολείο στο οποίο φοιτά</strong></label>
							<input type="text" class="form-control" id="school" placeholder="" name="school">
						</div>
						<div class="form-group">
							<label for="class"><strong>2. Τάξη</strong></label>
							<input type="text" class="form-control" id="class" placeholder="" name="class">
						</div>
						<div class="form-group">
							<label for="previousschools"><strong>3. Προηγούμενα σχολεία</strong></label>
							<input type="text" class="form-control" id="previousschools" placeholder="" name="previousschools">
						</div>
						<div class="form-group">
							<input type="hidden" name="retakeclass" />
							<label for="retakeclass"><strong>4. Έχει επαναλάβει κάμια τάξη;</strong></label>
							<br>
							<input type="radio" name="retakeclass" value="no" onclick="show1()">
							Όχι
							<br>
							<input type="radio" name="retakeclass" value="yes" onclick="show2()">
							Ναι
							<br>
						</div>
						<div class="form-group" id="div1">
							<label for="retakeclass"><em>Αν ναι, ποιά και γιατί; </em></label>
							<input type="text" class="form-control" id="retakeclasswhy" name="retakeclasswhy">
						</div>
						<div class="form-group">
							<input type="hidden" name="troubleinschool" />
							<label for="troubleinschool"><strong>5. Προβλήματα στο σχολείο;</strong></label>
							<br>
							<input type="radio" name="troubleinschool" value="no" onclick="show3()">
							Όχι
							<br>
							<input type="radio" name="troubleinschool" value="yes" onclick="show4()">
							Ναι
							<br>
						</div>
						<div class="form-group" id="div2">
							<label for="troubleinschooldesc"><em>Αν ναι, παρακαλώ περιγράψτε</em></label>
							<input type="text" class="form-control" id="troubleinschooldesc" name="troubleinschooldesc">
						</div>
						<div class="form-group">
							<input type="hidden" name="specialtreatment" />
							<label for="specialtreatment"><strong>6. Ειδική αγωγή;</strong></label>
							<br>
							<input type="radio" name="specialtreatment" value="no" onclick="show5()">
							Όχι
							<br>
							<input type="radio" name="specialtreatment" value="yes" onclick="show6()">
							Ναι
							<br>
						</div>
						<div class="form-group" id="div3">
							<label for="specialtreatmentwhy"><em>Αν ναι, για ποιο λόγο; Πόσο καιρό;</em></label>
							<input type="text" class="form-control" id="specialtreatmentwhy" name="specialtreatmentwhy">
						</div>
						
						
						<div align="left">
							<h5>Β. ΟΙΚΟΓΕΝΕΙΑΚΟ ΙΣΤΟΡΙΚΟ</h5>
						</div>
						<div class="form-group">
							<label for="mothername"><strong>7. Όνομα μητέρας</strong></label>
							<input type="text" class="form-control" id="mothername" placeholder="" name="mothername">
						</div>
						<div class="form-group">
							<label for="motherage"><strong>8. Ηλικία μητέρας</strong></label>
							<input type="number" class="form-control" id="motherage" placeholder="" name="motherage">
						</div>
						<div class="form-group">
							<label for="motherjob"><strong>9. Επάγγελμα μητέρας</strong></label>
							<input type="text" class="form-control" id="motherjob" placeholder="" name="motherjob">
						</div>
						<div class="form-group">
							<label for="mothernationality"><strong>10. Εθνικότητα μητέρας</strong></label>
							<input type="text" class="form-control" id="mothernationality" placeholder="" name="mothernationality">
						</div>
						
						<div class="form-group">
							<label for="fathername"><strong>11. Όνομα πατέρα</strong></label>
							<input type="text" class="form-control" id="fathername" placeholder="" name="fathername">
						</div>
						<div class="form-group">
							<label for="fatherage"><strong>12. Ηλικία πατέρα</strong></label>
							<input type="number" class="form-control" id="fatherage" placeholder="" name="fatherage">
						</div>
						<div class="form-group">
							<label for="fatherjob"><strong>13. Επάγγελμα πατέρα</strong></label>
							<input type="text" class="form-control" id="fatherjob" placeholder="" name="fatherjob">
						</div>
						<div class="form-group">
							<label for="fathernationality"><strong>14. Εθνικότητα πατέρα</strong></label>
							<input type="text" class="form-control" id="fathernationality" placeholder="" name="fathernationality">
						</div>
						
						<div class="form-group">
							<input type="hidden" name="family" />
							<label for="family"><strong>15. Οικογενειακή κατάσταση:</strong></label>
							<br>
							<input type="radio" name="family" value="married">
							Παντρεμένοι
							<br>
							<input type="radio" name="family" value="devorced">
							Διαζευγμένοι
							<br>
							<input type="radio" name="family" value="apart">
							Σε διάσταση
							<br>
							<input type="radio" name="living" value="other">
							Άλλο
							<br>
							<input type="text" class="form-control" id="family" name="family">
						</div>
						<div class="form-group">
							<label for="brotherssisters"><strong>16. Αδέλφια (αριθμός, ηλικίες, φύλο)</strong></label>
							<input type="text" class="form-control" id="brotherssisters" placeholder="" name="brotherssisters">
						</div>
						<div class="form-group">
							<label for="adopted"><strong>17. Αν είστε υιοθετημένος, ποιες οι συνθήκες υιοθέτησης;</strong></label>
							<input type="text" class="form-control" id="adopted" placeholder="" name="adopted">
						</div>
						<div class="form-group">
							<label for="born"><strong>18. Τόπος γέννησης</strong></label>
							<input type="text" class="form-control" id="born" placeholder="" name="born">
						</div>
						<div class="form-group">
							<label for="problems"><strong>19. Προβλήματα με την κύηση;</strong></label>
							<br>
							<label><em> (φαρμακευτική αγωγή, χρήση ουσιών – νόμιμων ή παράνομων - από τη μητέρα, γέννα – πρόωρη, στην ώρα της, καθυστερημένη)</em></label>
							<input type="text" class="form-control" id="problems" placeholder="" name="problems">
						</div>
						<div class="form-group">
							<input type="hidden" name="bornproblems" />
							<label for="bornproblems"><strong>20. Προβλήματα στη γέννα;</strong></label>
							<br>
							<input type="radio" name="bornproblems" value="no" onclick="show7()">
							Όχι
							<br>
							<input type="radio" name="bornproblems" value="yes" onclick="show8()">
							Ναι
							<br>
						</div>
						<div class="form-group" id="div4">
							<label>Aν ναι, τι;</label>
							<input type="text" class="form-control" id="bornproblems" name="bornproblems">
						</div>
				
				
						
						<div align="left">
							<h5>Γ. ΑΝΑΠΤΥΞΙΑΚΟ ΙΣΤΟΡΙΚΟ</h5>
						</div>
						<div class="form-group">
							<label for="nutrition"><strong>21. Προβλήματα διατροφής στην παιδική ηλικία;</strong></label>
							<input type="text" class="form-control" id="nutrition" placeholder="" name="nutrition">
						</div>
						<div class="form-group">
							<label for="sleepproblems"><strong>22. Προβλήματα ύπνου στην παιδική ηλικία;</strong></label>
							<input type="text" class="form-control" id="sleepproblems" placeholder="" name="sleepproblems">
						</div>
						<div class="form-group">
							<label for="disease"><strong>23. Προβλήματα με ασθένειες; Αν ναι, σε ποια ηλικία;</strong></label>
							<input type="text" class="form-control" id="disease" placeholder="" name="disease">
						</div>
						<div class="form-group">
							<label for="important"><strong>24. Σημαντικά γεγονότα κατά την παιδική ηλικία;</strong></label>
							<br>
							<label><em>(π.χ., πολλαπλές μετακομίσεις, κακοποίηση, γονεϊκά προβλήματα, απώλεια γονιού ή αδελφιού, άλλα)</em></label>
							<input type="text" class="form-control" id="important" placeholder="" name="important">
						</div>
						
						<div align="left">
							<h5>Δ. ΙΑΤΡΙΚΟ ΙΣΤΟΡΙΚΟ</h5>
						</div>
						<div class="form-group">
							<label for="lastexam"><strong>25. Πότε ήταν η τελευταία εξέταση;</strong></label>
							<input type="date" class="form-control" id="lastexam" placeholder="" name="lastexam">
						</div>
						<div class="form-group">
							<label for="results"><strong>26. Ποιά ήταν τα αποτελέσματα;</strong></label>
							<input type="text" class="form-control" id="results" placeholder="" name="results">
						</div>
						<div class="form-group">
							<input type="hidden" name="generalproblems" />
							<label for="generalproblems"><strong>27. Είχατε ποτέ κάποιο ατύχημα, αναιμία, αλλεργίες, επιληψία, εγχειρίσεις, τραύματα, ή άλλα προβλήματα υγείας κατά την παιδική ηλικία;</strong></label>
							<br>
							<input type="radio" name="generalproblems" value="no" onclick="show9()">
							Όχι
							<br>
							<input type="radio" name="generalproblems" value="yes" onclick="show10()">
							Ναι
							<br>
						</div>
						<div class="form-group" id="div5">
							<label>Aν ναι, διευκρινείστε;</label>
							<input type="text" class="form-control" id="generalproblems" name="generalproblems">
						</div>
						<script>
							var counter = 1;
							var limit = 10;
							function addInput(divName) {
								if (counter == limit) {
									alert("You have reached the limit of adding " + counter + " inputs");
								} else {
									var newdiv = document.createElement('div');
									newdiv.innerHTML = "<td><input type="text
									" name="farmako
									"></td><td><input type="date
									" name="farmako
									"></td><td><input type="text
									" name="farmako
									"></td><td><input type="text
									" name="farmako
									"></td><td><input type="text
									" name="farmako
									"></td>";
									document.getElementById(divName).appendChild(newdiv);
									counter++;
								}
							}
						</script>

						<div class="form-group">
							<label for="familyhistory"><strong>28. Οικογενειακό ιστορικό για ιατρικά προβλήματα:</strong></label>
							<br>
							<script>
								function addField(argument) {
									var myTable = document.getElementById("myTable");
									var currentIndex = myTable.rows.length;
									var currentRow = myTable.insertRow(-1);
									var personBox = document.createElement("input");
									personBox.setAttribute("name", "person[]");
									var relationshipBox = document.createElement("input");
									relationshipBox.setAttribute("name", "relationship[]");
									var ageBox = document.createElement("input");
									ageBox.setAttribute("name", "age[]");
									var problemsBox = document.createElement("input");
									problemsBox.setAttribute("name", "problems[]");
									var resultsBox = document.createElement("input");
									resultsBox.setAttribute("name", "results[]");
									var addRowBox = document.createElement("input");
									addRowBox.setAttribute("type", "button");
									addRowBox.setAttribute("value", "Add");
									addRowBox.setAttribute("onclick", "addField();");
									addRowBox.setAttribute("class", "button");
									var currentCell = currentRow.insertCell(-1);
									currentCell.appendChild(personBox);
									currentCell = currentRow.insertCell(-1);
									currentCell.appendChild(relationshipBox);
									currentCell = currentRow.insertCell(-1);
									currentCell.appendChild(ageBox);
									currentCell = currentRow.insertCell(-1);
									currentCell.appendChild(problemsBox);
									currentCell = currentRow.insertCell(-1);
									currentCell.appendChild(resultsBox);
								}
							</script>
							<table id="myTable">
								<tr>
									<td><label for="person">Άτομο</label></td>
									<td><label for="relationship">Σχέση</label></td>
									<td><label for="age">Ηλικία</label></td>
									<td><label for="problems">Πρόβλημα</label></td>
									<td><label for="results">Αποτέλεσμα</label></td>
									<td>
									<input type="button" class="button" value="Add" onclick="addField();">
									</td>
								</tr>
								<tr>
									<td>
									<input type="text" name="person[]">
									</td>
									<td>
									<input type="text" name="relationship[]">
									</td>
									<td>
									<input type="text" name="age[]">
									</td>
									<td>
									<input type="text" name="problems[]">
									</td>
									<td>
									<input type="text" name="results[]">
									</td>
								</tr>
							</table>
						</div>
						<div class="form-group">
							<input type="hidden" name="disability" />
							<label for="disability"><strong>29. Έχετε κάποιο είδος αναπηρίας; </strong></label>
							<br>
							<input type="radio" name="disability" value="no" onclick="show11()">
							Όχι
							<br>
							<input type="radio" name="disability" value="yes" onclick="show12()">
							Ναι
							<br>
						</div>
						<div class-"form-group" id="div6">
							<label>Aν ναι, διευκρινείστε;</label>
							<input type="text" class="form-control" id="disability" name="disability">
						</div>
						
						
						<div align="left">
							<h5>Ε. ΚΟΙΝΩΝΙΚΟ ΙΣΤΟΡΙΚΟ</h5>
						</div>
						<div class="form-group">
							<label for="friends"><strong>30. Έχετε φίλους κατά την παιδική ηλικία;</strong></label>
							<input type="text" class="form-control" id="friends" placeholder="" name="friends">
						</div>
						<div class="form-group">
							<label for="puberty"><strong>31. Προβλήματα με την εφηβεία;</strong></label>
							<input type="text" class="form-control" id="puberty" placeholder="" name="puberty">
						</div>
						<div class="form-group">
							<label for="activities"><strong>32. Δραστηριότητες που σας αρέσουν;</strong></label>
							<input type="text" class="form-control" id="activities" placeholder="" name="activities">
						</div>
						
						<div align="left">
							<h5>ΓΕΝΙΚΕΣ ΠΛΗΡΟΦΟΡΙΕΣ</h5>
						</div>
						<div class="form-group">
							<input type="hidden" name="creed" />
							<label for="creed"><strong>33. Ακολουθείτε κάποιο θρήσκευμα ή πνευματική πρακτική; </strong></label>
							<br>
							<input type="radio" name="creed" value="no" onclick="show13()">
							Όχι
							<br>
							<input type="radio" name="creed" value="yes" onclick="show14()">
							Ναι
							<br>
						</div>
						<div class="form-group" id="div7">
							<label>Αν ναι, ποιο;</label>
							<input type="text" class="form-control" id="disability" name="creed">
						</div>
						<div class="form-group">
							<label for="creed"><strong>Πόσο συχνά </strong></label>
							<br>
							<input type="radio" name="creed" value="often">
							Πολύ
							<br>
							<input type="radio" name="creed" value="usualy">
							Λίγο
							<br>
							<input type="radio" name="creed" value="never">
							Καθόλου
							<br>
						</div>
						<div class="form-group">
							<input type="hidden" name="creed" />
							<label for="creed"><strong>34. Θα λέγατε ότι αποτελεί στοιχείο στήριξης η πνευματικότητα σας; </strong></label>
							<br>
							<input type="radio" name="creed" value="no">
							Όχι
							<br>
							<input type="radio" name="creed" value="yes">
							Ναι
							<br>
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
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/form6.php";
$method='POST';
if(isset($_POST['submit'])){
$sxesi=base64_encode(serialize($_POST["sxesi"]));
$onoma=base64_encode(serialize($_POST["onoma"]));
$ilikia=base64_encode(serialize($_POST["ilikia"]));
$poiotita=base64_encode(serialize($_POST["poiotitasxesis"]));
$farmako=base64_encode(serialize($_POST["farmaka"]));
$imfarm=base64_encode(serialize($_POST["imerominia"]));
$diarkeia=base64_encode(serialize($_POST["diarkia"]));
$therapist=base64_encode(serialize($_POST["therapeutis"]));
$comments=base64_encode(serialize($_POST["logostherapias"]));
$postfields=http_build_query(array(
  'patientID' => $_SESSION['id'],
  'feelaboutstudies' => $_POST['feel'],
  'job' => $_POST['working'],
  'jobtime' => $_POST['timeworking'],
  'jobdutys' => $_POST['duties'],
  'jobstress' => $_POST['stress'],
  'jobprevious' => $_POST['previouswork'],
  'relationshipin' => $_POST['relationship'],
  'relationshipinfo' => $_POST['relationshipinfo'],
  'relationshipname' => $_POST['namerel'],
  'relationshipjob' => $_POST['workrel'],
  'children' => $_POST['kids'],
  'staywith' => $_POST['living'],
  'staydificulties' => $_POST['livingmore'], 
  'familysynthesis' => $_POST['enviromentmore'],
  'support' => $_POST['support'],
  'economicstatus' => $_POST['finance'],
  'economichelp' => $_POST['financehelp'],
  'economichelp1' => $_POST['financehelpyes'],
  'legalissues' => $_POST['legalissues'],
  'legalissues1' => $_POST['legalissuesyes'], 
  'healthissues' => $_POST['healthproblem'],
  'healthconsernes' => $_POST['concerns'],
  'doctor' => $_POST['otherdoc'],
  'doctorcontacts' => $_POST['otherdocyes'],
  'medicines' => $_POST['meds'],
  'medicines1' => $_POST['meds'],
  'generalhealth' => $_POST['care'], 
  'smoking' => $_POST['smoking'],
  'smoking1' => $_POST['smokingyes'],
  'alcohol' => $_POST['alcohol'],
  'alcohol1' => $_POST['alcoholyes'],
  'drugs' => $_POST['illegal'],
  'drugs1' => $_POST['illegalyes'],
  'marihuanafrequency' => $_POST['mar'], 
  'luckygames' => $_POST['games'],
  'luckygames1' => $_POST['gamesyes'],
  'betmore' => $_POST['bet'],
  'speakaboutlucky' => $_POST['talked'],
  'childlife' => $_POST['descr'],
  'childlifeproblems' => $_POST['problems'],
  'militarylife' => $_POST['army'],
  'familyproblems' => $_POST['familyissues'], 
  'trauma' => $_POST['trauma'],
  'psychosupport' => $_POST['previous'],
  'psychosupport1' => $_POST['alloop'],
  'psychodiagnosis' => $_POST['diagnosi'],
  'psychodiagnosis1' => $_POST['diagnosi1'],
  'disability' => $_POST['anapiria'],
  'disability1' => $_POST['anapiria1'], 
  
  'suicideprothesis' => $_POST['hurtself'],
  'suicideprothesis1' => $_POST['hurtself'],
  'violenceprothesis' => $_POST['hurtothers'],
  'violenceprothesis1' => $_POST['hurtothers'],
  'violence' => $_POST['hurtothers1'], 
  'violence1' => $_POST['hurtothers1'],
  
  'feelfortherapy' => $_POST['feelfortherapy'],
  'otherseriousinfo' => $_POST['otherseriousinfo'],
  'reasonsfortherapy' => $_POST['reasonsfortherapy'],
  
  'relations' =>$sxesi,
  'namerel' =>$onoma,
  'agerel' =>$ilikia,
  'qualityrel' =>$poiotita,
  'namemed' =>$farmako,
  'datemed' =>$imfarm,
  'durationmed'=>$diarkeia,
  'doctormed'=>$therapist,
  'commentsmed'=>$comments
));
if(isset($_COOKIE['token'])){
		$response=request($url,$method,$postfields,$_COOKIE['token']);
	}else{
		$response=0;
	}
	if($response['status']!=1){
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