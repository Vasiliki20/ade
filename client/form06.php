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
						<h4>ΟΔΗΓΟΣ ΑΡΧΙΚΗΣ ΣΥΝΕΝΤΕΥΞΗΣ – ΠΡΟΣΩΠΙΚΑ ΣΤΟΙΧΕΙΑ ΚΑΙ ΙΣΤΟΡΙΚΟ</h4>
					</div>

					<form action="/action_page.php">
						<div align="left">
							<h5>Α. ΑΚΑΔΗΜΑΪΚΕΣ ΠΛΗΡΟΦΟΡΙΕΣ </h5>
						</div>
						<div class="form-group">
							<label for="department"><strong>1. Κλάδος φοίτησης:</strong></label>
							<input type="text" class="form-control" id="department" placeholder="" name="department">
						</div>
						<div class="form-group">
							<label for="year"><strong>2. Έτος φοίτησης:</strong></label>
							<input type="text" class="form-control" id="year" placeholder="" name="year">
						</div>
						<div class="form-group">
							<label for="feel"><strong>3. Πώς αισθάνεσαι για τον κλάδο σπουδών σου;</strong></label>
							<label for="feelextra"><em>(συμπ. ακαδημαϊκή επίδοση/ειδικές δυσκολίες, παρουσία στα μαθήματα, ακαδημαϊκή και
								κοινωνική προσαρμογή στο πανεπιστήμιο, προηγούμενες σπουδές αν ισχύει)</em></label>
							<input type="text" class="form-control" id="feel" placeholder="" name="feel">
						</div>

						<div align="left">
							<h5><strong>Β. ΠΡΟΣΩΠΙΚΑ ΣΤΟΙΧΕΙΑ </strong></h5>
						</div>
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
						</script>

						<div class="form-group">
							<label for="working"><strong>4. Εργάζεσαι κάπου;</strong></label>
							<br>
							<input type="radio" name="working" value="no" onclick="show1()">
							Όχι
							<br>
							<input type="radio" name="working" value="yes" onclick="show2()">
							Ναι
						</div>

						<div class="form-group" id="div1" class="hide">
							<label for="nameworking">Τίτλος εργασίας</label>
							<input type="text" class="form-control" id="nameworking" name="nameworking">
							<br>
							<label for="timeworking">Περίοδος εργασίας</label>
							<input type="text" class="form-control" id="timeworking" name="timeworking">
							<br>
							<label for="duties">Καθήκοντα:</label>
							<input type="text" class="form-control" id="duties" name="duties">
							<br>
							<label for="stress">Εργασιακό άγχος:</label>
							<br>
							<input type="radio" name="stress" value="low">
							Χαμηλό
							<br>
							<input type="radio" name="stress" value="medium">
							Μέτριο
							<br>
							<input type="radio" name="stress" value="high">
							Υψηλό
							<br>
							<br>
							<label for="previouswork">Προηγούμενη εργασία:</label>
							<input type="text" class="form-control" id="previouswork" name="previouswork">
						</div>

						<div class="form-group">
							<label for="relationship"><strong>5. Βρίσκεσται αυτή τη περίοδο σε κάποια σχέση;</strong></label>
							<br>
							<input type="radio" name="relationship" value="no" onclick="show3()">
							Όχι
							<br>
							<input type="radio" name="relationship" value="yes" onclick="show4()">
							Ναι
							<br>
							<label for="relationship"><em>Αν ναι, ιστορικό παρούσας σχέσης (διάρκεια, συχνότητα επαφών, δυσκολίες, κ.ο.κ)
								Αν όχι, διερεύνηση ιστορικού σχέσεων. </em></label>
							<input type="text" class="form-control" id="relationship" name="relationshipinfo">
						</div>

						<div class="form-group" id="div2" class="hide">
							<label for="namerel">Όνομα συντρόφου (προαιρετικά)</label>
							<input type="text" class="form-control" id="namerel" name="namerel">
							<br>
							<label for="workrel">Επάγγελμα συντρόφου (προαιρετικά)</label>
							<input type="text" class="form-control" id="workrel" name="workrel">
							<br>
						</div>

						<div class="form-group">
							<label for="kids"><strong>6. Παιδιά (αν υπάρχουν, φύλο και ηλικία)</strong></label>
							<input type="text" class="form-control" id="kids" name="kids">
						</div>

						<div class="form-group">
							<label for="living"><strong>7. Συνθήκες διαβίωσης. Με ποιο διαμένεις/συγκατοικείς αυτή τη στιγμή;</strong></label>
							<br>
							<input type="radio" name="living" value="alone">
							Μόνος/η
							<br>
							<input type="radio" name="living" value="otherfamily">
							Με άλλη οικογένεια
							<br>
							<input type="radio" name="living" value="ownfamily">
							Με τη δική μου οικογένεια (σύντροφο/σύζυγο ή/και παιδιά)
							<br>
							<input type="radio" name="living" value="roommate">
							Με συγκάτοικο
							<br>
							<input type="radio" name="living" value="family">
							Με τη οικογένεια μου (γονείς/αδέλφια)
							<br>
							<input type="radio" name="living" value="other">
							Άλλο
							<br>
							<input type="text" class="form-control" id="living" name="other">
							<label for="livingmore"><em>Διερευνήστε συνθήκες, σημειώστε οποιεσδήποτε αλλαγές ή δυσκολίες παρουσιάζονται. </em></label>
							<input type="text" class="form-control" id="livingmore" name="livingmore">
						</div>

						<div class="form-group">
							<label for="enviroment"><strong>8. Σύνθεση οικογένειας (γονείς, αδέρφια κτλ.): </strong></label>
							<br>
							<label for="enviromentmore">Διερευνήστε την εντύπωση του πελάτη για την ατμόσφαιρα στο σπίτι μεγαλώνοντας και τώρα, σχέση μεταξύ μελών της οικογένειας, αν υπάρχουν/υπήρξαν δυσκολίες ή εντάσεις κ.ο.κ. </label>
							<input type="text" class="form-control" id="enviromentmore" name="enviromentmore">
							<br>
							<label for="states"><em>Συμπληρώνεται από το θεραπευτή (προαιρετικά) </em></label>
							<br>
							<div style="width: 40%; float:left">
								<label for="r1"><strong>Σχέση</strong></label>
							</div>
							<div style="width: 20%; float:left">
								<label for="r1"><strong>Όνομα</strong></label>
							</div>
							<div style="width: 20%; float:left">
								<label for="r1"><strong>Ηλικία</strong></label>
							</div>
							<div style="width: 20%; float:left">
								<label for="r1"><strong>Ποιότητα σχέσης</strong></label>
							</div>

							<div style="width: 40%; float:left">
								<label for="r1">Μητέρα</label>
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r1" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r1" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r1" value="">
							</div>

							<div style="width: 40%; float:left">
								<label for="r2">Πατέρας</label>
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>

							<div style="width: 40%; float:left">
								<label for="r2">Αδέλφια</label>
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 40%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 40%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 40%; float:left">
								<label for="r1">Μητριά</label>
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r1" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r1" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r1" value="">
							</div>

							<div style="width: 40%; float:left">
								<label for="r2">Πατριός</label>
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>

							<div style="width: 40%; float:left">
								<label for="r2">Σύντροφος/σύζυγος</label>
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 40%; float:left">
								<label for="r2">Παιδιά</label>
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 40%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 40%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 20%; float:left">
								<input type="text" name="r2" value="">
							</div>
						</div>

						<div class="form-group">
							<label for="support"><strong>9. Τι είδους υποστήριξη έχεις από το περιβάλλον σου; </strong></label>
							<br>
							<label for="supportmor">(π.χ. από οικογένεια, φίλους, ομάδες, θρησκευτική/πνευματική υποστήριξη)</label>
							<input type="text" class="form-control" id="support" name="support">
						</div>

						<div class="form-group">
							<label for="finance"><strong>10. Οικονομικές συνθήκες</strong></label>
							<input type="text" class="form-control" id="finance" name="finance">
						</div>

						<div class="form-group">
							<label for="financehelp"><strong>11. Λαμβάνετε οποιοδήποτε οικονομικό βοήθημα;</strong></label>
							<input type="radio" name="financehelp" value="no" onclick="show5()">
							όχι
							<input type="radio" name="financehelp" value="yes" onclick="show6()">
							ναι
						</div>

						<div class="form-group" id="div3" class="hide">
							<label for="financehelpyes">(Εάν ναι εξήγησε:)</label>
							<input type="text" class="form-control" id="financehelpyes" name="financehelpyes">
						</div>

						<div class="form-group">
							<label for="legal"><strong>12. Νομικά θέματα:</strong></label>
							<br>
							<label for="legalissues">Έχεις ποτέ καταδικαστεί; </label>
							<input type="radio" name="legalissues" value="no" onclick="show7()">
							όχι
							<input type="radio" name="legalissues" value="yes" onclick="show8()">
							ναι
						</div>

						<div class="form-group" id="div4" class="hide">
							<label for="legalissuesyes">(Εάν ναι εξήγησε:)</label>
							<input type="text" class="form-control" id="legalissuesyes" name="legalissuesyes">
						</div>

						<div class="form-group">
							<label for="comments"><strong>Σχόλια θεραπευτή:</strong></label>
							<input type="text" class="form-control" id="comments" name="comments">
						</div>

						<div align="left">
							<h5>Γ. ΥΓΕΙΑ </h5>
						</div>

						<div class="form-group">
							<label for="healthproblem"><strong>13. Έχεις ή πιστεύεις ότι έχεις οποιοδήποτε σοβαρό ή χρόνιο ιατρικό πρόβλημα; </strong></label>
							<br>
							<label for="healthproblemmore">(π.χ. ‘Άσθμα, διαβήτη, κλπ.):</label>
							<input type="text" class="form-control" id="healthproblem" name="healthproblem">
							<label for="healthproblem"><em>Σημειώστε αν αναφέρονται οποιαδήποτε από τα πιο κάτω:</em></label>
							<br>
							<input type="checkbox" name="healthproblem" value="allergies">
							Αλλεργίες
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Ζαλάδες
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Σεξουαλική μεταδιδόμενη ασθένεια
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Εγχείρηση
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Διαβήτης
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Επιληψία
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Πονοκέφαλοι
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Διαταραχή/δυσκολίες ύπνου
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Πόνοι στο στομάχι
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Τραύμα στο κεφάλι
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Χρόνιος πόνος
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Ψηλοί πυρετοί
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Άσθμα
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Μηνιγγίτιδα
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Έκτρωση
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Αποβολή (εμβρύου)
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Σοβαρό ατύχημα
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Προβλήματα ακοής
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Προβλήματα ακοής
							<br>
							<input type="checkbox" name="healthproblem" value="zalades">
							Άλλο
							<input type="text" class="form-group" id="healthproblemmore" name="healthproblem">
						</div>

						<div class="form-group">
							<label for="concerns"><strong>14. Ανέφερε οποιεσδήποτε τρέχουσες ανησυχίες για την υγεία σου: </strong></label>
							<input type="text" class="form-control" id="concerns" name="concerns">
						</div>

						<div class="form-group">
							<label for="otherdoc"><strong>15. Έχεις κάποιο τακτικό ιατρό που σε παρακολουθεί;
								<br>
								Αυτή τη στιγμή συνεργάζεσαι με κάποιο γιατρό/ψυχίατρο ή άλλο ειδικό; </strong></label>
							<input type="radio" name="otherdoc" value="no" onclick="show9()">
							όχι
							<input type="radio" name="otherdoc" value="yes" onclick="show10()">
							ναι
						</div>

						<div class="form-group" id="div5" class="hide">
							<label for="otherdocyes">Αν ναι, παρακαλώ δώστε τα στοιχεία επικοινωνίας του/της.</label>
							<label for="otherdocyes"><em>Όνομα, (διαδικασία συγκατάθεσης)</em></label>
							<input type="text" class="form-control" id="otherdocyes" name="otherdocyes">
						</div>

						<div class="form-group">
							<label for="meds"><strong>16. Παίρνεις οποιαδήποτε φάρμακα; </strong></label>
							<input type="radio" name="meds" value="no" onclick="show11()">
							Όχι
							<input type="radio" name="meds" value="yes" onclick="show12()">
							Ναι
						</div>

						<div class="form-group" id="div6" class="hide">
							<label for="medsyes"><strong>Πρόσφατη φαρμακευτική αγωγή:</strong></label>
							<br>
							<div style="width: 25%; float:left">
								<label for="meds1"><strong>Φάρμακα</strong></label>
							</div>
							<div style="width: 25%; float:left">
								<label for="meds2"><strong>Δοσολογία</strong></label>
							</div>
							<div style="width: 25%; float:left">
								<label for="meds3"><strong>Ημ. πρώτης λήψη</strong></label>
							</div>
							<div style="width: 25%; float:left">
								<label for="meds4"><strong>Συνταγογραφήθηκε</strong></label>
							</div>

							<div style="width: 25%; float:left">
								<input type="text" name="r1" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r1" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r1" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r1" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r3" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r3" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r3" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r3" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r4" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r4" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r4" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r4" value="">
							</div>
						</div>

						<div class="form-group">
							<label for="care"><strong>17. Σε παρακαλώ ανάφερε οποιαδήποτε νοσοκομειακή περίθαλψη είχες (ημερ. και λόγοι) </strong></label>
							<input type="text" class="form-control" id="care" name="care">
						</div>

						<div class="form-group">
							<label for="commentshealth"><strong>Σχόλια θεραπευτή: </strong></label>
							<input type="text" class="form-control" id="commentshealth" name="commentshealth">
						</div>

						<div align="left">
							<h5>Δ. ΧΡΗΣΗ ΟΥΣΙΩΝ/ΕΞΑΡΤΗΣΕΙΣ </h5>
						</div>

						<div class="form-group">
							<label for="smoking"><strong>18. Καπνίζεις τσιγάρα; </strong></label>
							<input type="radio" name="smoking" value="smokingno">
							Όχι
							<input type="radio" name="smoking" value="smokingyes">
							Ναι <label for="smoking">Αν ναι σημειώστε διάρκεια και κατανάλωση</label>
							<input type="text" class="form-group" id="smokingyes" name="smokingyes">
						</div>

						<div class="form-group">
							<label for="alcohol"><strong>19. Καταναλώνεις αλκοόλ; </strong></label>
							<input type="radio" name="alcohol" value="alcoholno">
							Όχι
							<input type="radio" name="alcohol" value="alcoholyes">
							Ναι <label for="alcohol">Αν ναι σημειώστε συχνότητα και κατανάλωση</label>
							<input type="text" class="form-group" id="alcoholyes" name="alcoholyes">
						</div>

						<div class="form-group">
							<label for="illegal"><strong>20. Έχεις οποιαδήποτε επαφή ή εμπειρία με άλλες (παράνομες) ουσίες; </strong></label>
							<input type="radio" name="illegal" value="illegalno">
							Όχι
							<input type="radio" name="illegal" value="illegalyes">
							Ναι <label for="illegal">Αν ναι σημειώστε διάρκεια και κατανάλωση</label>
							<input type="text" class="form-group" id="illegalyes" name="illegalyes">
						</div>

						<div class="form-group">
							<label for="mar"><strong>21. Τις τελευταίες δύο εβδομάδες πόσες φορές έχεις καπνίσει μαριχουάνα (κάνναβη); </strong></label>
							<br>
							<input type="radio" name="mar" value="none">
							Καμία
							<br>
							<input type="radio" name="mar" value="once">
							Μια φορά
							<br>
							<input type="radio" name="mar" value="twice">
							Δυο φορές
							<br>
							<input type="radio" name="mar" value="3-5">
							3-5 φορές
							<br>
							<input type="radio" name="mar" value="6-9">
							6-9 φορές
							<br>
							<input type="radio" name="mar" value="morethan10">
							10 ή περισσότερες φορές
							<br>
						</div>

						<div class="form-group">
							<label for="games"><strong>22. Τους τελευταίους 6 μήνες έχεις παίξει τυχερά παιχνίδια; </strong></label>
							<input type="radio" name="games" value="gamesno">
							Όχι
							<input type="radio" name="games" value="gamesyes">
							Ναι
							<br>
							<label for="illegal">Εάν ναι, διερευνήστε συχνότητα και ένταση (π.χ. ποσά, ερεθίσματα)</label>
							<input type="text" class="form-group" id="gamesyes" name="gamesyes">
						</div>

						<div class="form-group">
							<label for="games"><strong>23. Έχεις νιώσει ποτέ την ανάγκη να στοιχηματίσεις όλο και περισσότερα χρήματα; </strong></label>
							<input type="radio" name="bet" value="gamesno">
							Όχι
							<input type="radio" name="bet" value="gamesyes">
							Ναι
						</div>

						<div class="form-group">
							<label for="talked"><strong>24. Έχεις μιλήσει ποτέ με κοντινά σου άτομα σχετικά με το πόσο παίζεις τυχερά παιχνίδια; </strong></label>
							<input type="radio" name="talked" value="talkedno">
							Όχι
							<input type="radio" name="talked" value="talkedyes">
							Ναι
						</div>

						<div class="form-group">
							<label for="commentsousies"><strong>Σχόλια θεραπευτή:</strong></label>
							<input type="text" class="form-control" id="commentsousies" name="comments">
						</div>

						<div align="left">
							<h5>Ε. ΑΝΑΠΤΥΞΙΑΚΟ ΙΣΤΟΡΙΚΟ</h5>
						</div>

						<div class="form-group">
							<label for="descr"><strong>25.(α) Πώς θα περιέγραφες τον εαυτό σου ως παιδί και ως έφηβο;</strong></label>
							<br>
							<label for="descr"><em>(π.χ. χαρούμενο, υπερβολικά ενεργό, κοινωνικό, απομονωμένο)</em></label>
							<br>
							<label for="descr"><em>Διερευνήστε τα πιο κάτω θέματα από την εμπειρία του πελάτη ως παιδιού/εφήβου:</em></label>
							<br>
							<h6>Ενδιαφέροντα-δραστηριότητες</h6>
							<h6>Κοινωνικές σχέσεις/σχέσεις με άλλα άτομα </h6>
							<h6>Προσωπικές σχέσεις </h6>
							<h6>Εκπαίδευση, προσαρμογή και επίδοση στο σχολείο </h6>
							<h6>Υγεία και ψυχολογική κατάσταση</h6>
							<input type="text" class="form-control" id="descr" name="descr">
						</div>

						<div class="form-group">
							<label for="problems"><strong>(β) Ως παιδί ή ως έφηβος, αντιμετώπιζες οποιαδήποτε προβλήματα ή δυσκολίες στη συμπεριφορά σου, στο σχολείο,  στις σχέσεις σου, ή άλλα θέματα που σχετίζονται με την εφηβεία; </strong></label>
							<br>
							<label for="problems"><em>(π.χ. εκρήξεις, π.χ., σχολική άρνηση, αποβολές, προβλήματα με τα μαθήματα ή συμμαθητές, υγεία ή ψυχολογική κατάσταση, συμπεριφορά)</em></label>
							<input type="text" class="form-control" id="problems" name="problems">
						</div>

						<div class="form-group">
							<label for="army"><strong>26. Στρατιωτική θητεία (όπου ισχύει)</strong></label>
							<br>
							<label for="army"><em>Διερευνήστε θέματα όπως κλάδο κατάταξης, περίοδο υπηρεσίας, θέματα πειθαρχίας, σχέσεις με άλλους στρατιώτες ή τη μονάδα, οποιεσδήποτε δυσκολίες, ανάγκες που παρουσιάστηκαν κ.ο.κ. </em></label>
							<input type="text" class="form-control" id="army" name="army">
						</div>

						<div class="form-group">
							<label for="commentsanaptiksiako"><strong>Σχόλια θεραπευτή:</strong></label>
							<input type="text" class="form-control" id="commentsanaptiksiako" name="comments">
						</div>

						<div align="left">
							<h5>ΣΤ. ΟΙΚΟΓΕΝΕΙΑΚΟ & ΠΡΟΣΩΠΙΚΟ ΙΣΤΟΡΙΚΟ. </h5>
						</div>

						<div class="form-group">
							<label for="familyissues"><strong>27. Έχεις οποιοδήποτε μέλος της οικογένειάς σου που πιστεύεις ότι είχε ή έχει κάποιο πρόβλημα υγείας, ή σοβαρές συναισθηματικές/ψυχολογικές δυσκολίες, ή προβλήματα με αλκοόλ και ναρκωτικά: </strong></label>
							<input type="text" class="form-control" id="familyissues" name="familyissues">

							<label for="medsyes"><strong>Συμπληρώνεται από το θεραπευτή (προαιρετικά) </strong></label>

							<br>
							<div style="width: 50%; float:left">
								<label for="meds1"><strong>Ιστορικό Ψυχικής Υγείας στην Οικογένεια</strong></label>
							</div>
							<div style="width: 50%; float:left">
								<label for="meds1"><strong>Ποιος;</strong></label>
							</div>

							<div style="width: 50%; float:left">
								<label for="meds1">a. Υπερκινητικότητα</label>
							</div>
							<div style="width: 50%; float:left">
								<input type="text" name="r1" value="">
							</div>

							<div style="width: 50%; float:left">
								<label for="meds1">b. Σεξουαλική κακοποίηση</label>
							</div>
							<div style="width: 50%; float:left">
								<input type="text" name="r1" value="">
							</div>

							<div style="width: 50%; float:left">
								<label for="meds1">c. Κατάθλιψη</label>
							</div>
							<div style="width: 50%; float:left">
								<input type="text" name="r1" value="">
							</div>

							<div style="width: 50%; float:left">
								<label for="meds1">d. Μανιο-Κατάθλιψη</label>
							</div>
							<div style="width: 50%; float:left">
								<input type="text" name="r1" value="">
							</div>

							<div style="width: 50%; float:left">
								<label for="meds1">d. Μανιο-Κατάθλιψη</label>
							</div>
							<div style="width: 50%; float:left">
								<input type="text" name="r1" value="">
							</div>

							<div style="width: 50%; float:left">
								<label for="meds1">f. Άγχος</label>
							</div>
							<div style="width: 50%; float:left">
								<input type="text" name="r1" value="">
							</div>

							<div style="width: 50%; float:left">
								<label for="meds1">g. Κρίσεις πανικού</label>
							</div>
							<div style="width: 50%; float:left">
								<input type="text" name="r1" value="">
							</div>

							<div style="width: 50%; float:left">
								<label for="meds1">h. Ιδεο-ψυχαναγκασμούς</label>
							</div>
							<div style="width: 50%; float:left">
								<input type="text" name="r1" value="">
							</div>

							<div style="width: 50%; float:left">
								<label for="meds1">i. Θυμό</label>
							</div>
							<div style="width: 50%; float:left">
								<input type="text" name="r1" value="">
							</div>

							<div style="width: 50%; float:left">
								<label for="meds1">j. Σχιζοφρένεια </label>
							</div>
							<div style="width: 50%; float:left">
								<input type="text" name="r1" value="">
							</div>

							<div style="width: 50%; float:left">
								<label for="meds1">k. Διατροφικές διαταραχές </label>
							</div>
							<div style="width: 50%; float:left">
								<input type="text" name="r1" value="">
							</div>

							<div style="width: 50%; float:left">
								<label for="meds1">l. Εξαρτημένος από αλκοόλ</label>
							</div>
							<div style="width: 50%; float:left">
								<input type="text" name="r1" value="">
							</div>

							<div style="width: 50%; float:left">
								<label for="meds1">m. Εξαρτημένος από ναρκωτικά</label>
							</div>
							<div style="width: 50%; float:left">
								<input type="text" name="r1" value="">
							</div>
						</div>

						<div class="form-group">
							<label for="event"><strong>Βίωσες ποτέ κάποιο δύσκολο, πιεστικό ή τραυματικό γεγονός που πιστεύεις ότι ακόμα σε ενοχλεί; </strong></label>
							<label for="event"><em>(Αν ναι, διερευνήστε ιστορικό, συνθήκες, επιπτώσεις, τρόπους διαχείρισης). </em></label>
							<input type="text" class="form-control" id="trauma" name="trauma">
						</div>

						<div class="form-group">
							<label for="previous"><strong>Έχεις προηγουμένως λάβει (ή λαμβάνεις τώρα) υπηρεσίες ψυχολογικής στήριξης ή συμβουλευτικής;</strong></label>
							<label for="previous"><em> (σημειώστε όσα ισχύουν) </em></label>
							<br>
							<input type="checkbox" name="previous" value="no">
							Όχι
							<br>
							<input type="checkbox" name="previous" value="op2">
							Ναι, από το  Γραφείο Ψυχολογικής Στήριξης (ΓΨΣ) του Πανεπιστημίου Κύπρου
							<br>
							<input type="checkbox" name="previous" value="op3">
							Ναι, από το  Κέντρο Ψυχικής Υγείας (ΚΕΨΥ) του Πανεπιστημίου Κύπρου
							<br>
							<input type="checkbox" name="previous" value="op4">
							Ναι, από σχολικό/εκπαιδευτικό ψυχολόγο (ΥΕΨ)
							<br>
							<input type="checkbox" name="previous" value="op5">
							Ναι, από εξωτερικό σύμβουλο ή ψυχολόγο
							<br>
							<input type="checkbox" name="previous" value="op6">
							Ναι, από ψυχίατρο
							<br>
							<input type="checkbox" name="previous" value="op7">
							Ναι, άλλο (διευκρινίστε)
							<br>
							<input type="text" id="alloop" name="alloop" class="form-group">
							<br>
							<label for="ifyes"><strong>Εάν «ναι» σε οποιοδήποτε από τα πιο πάνω, διερευνήστε/σημειώστε: </strong></label>
							<br>
							<label for="medsyes"><strong>Πρόσφατη φαρμακευτική αγωγή:</strong></label>
							<br>
							<div style="width: 25%; float:left">
								<label for="meds1"><strong>Ημερομηνία</strong></label>
							</div>
							<div style="width: 25%; float:left">
								<label for="meds2"><strong>Διάρκεια</strong></label>
							</div>
							<div style="width: 25%; float:left">
								<label for="meds3"><strong>Θεραπευτής</strong></label>
							</div>
							<div style="width: 25%; float:left">
								<label for="meds4"><strong>Λόγοι, Είδος θεραπείας, Σχόλια</strong></label>
							</div>

							<div style="width: 25%; float:left">
								<input type="text" name="r1" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r1" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r1" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r1" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r2" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r3" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r3" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r3" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r3" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r4" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r4" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r4" value="">
							</div>
							<div style="width: 25%; float:left">
								<input type="text" name="r4" value="">
							</div>
						</div>

						<div class="form-group">
							<label for="diagnosi"><strong>30. Σου έχει δοθεί ποτέ κάποια διάγνωση για την ψυχική σου υγεία από κάποιο επαγγελματία; </strong></label>
							<input type="radio" name="diagnosi" value="diagnosino">
							Όχι
							<input type="radio" name="diagnosi" value="diagnosiyes">
							Ναι <label for="alcohol">Εάν ναι, παρακαλώ δήλωσε τη διάγνωση που πήρες (και πότε):</label>
							<input type="text" class="form-group" id="diagnosi" name="diagnosi1">
						</div>

						<div class="form-group">
							<label for="anapiria"><strong>31. Στο Πανεπιστήμιο έχεις δηλώσει ότι έχεις κάποια αναπηρία παρουσιάζοντας κάποια σχετικά έγγραφα και τη διάγνωση; </strong></label>
							<input type="radio" name="anapiria" value="anapiriano">
							Όχι
							<input type="radio" name="anapiria" value="anapiriayes">
							Ναι <label for="alcohol">Εάν ναι, παρακαλώ δήλωσε την αναπηρία:</label>
							<input type="text" class="form-group" id="anapiria" name="anapiria1">
						</div>

						<div class="form-group">
							<label for="hurtself"><strong>32. Είχες ποτέ σκέψεις, έκανες δηλώσεις ή αποπειράθηκες να βλάψεις στον εαυτό σου; </strong></label>
							<input type="radio" name="hurtself" value="hurtselfno">
							Όχι
							<input type="radio" name="hurtself" value="hurtselfyes">
							Ναι
						</div>

						<div class="form-group">
							<label for="hurtothers"><strong>33. Είχες ποτέ σκέψεις, έκανες δηλώσεις ή αποπειράθηκες να βλάψεις κάποιο άλλο άτομο; </strong></label>
							<input type="radio" name="hurtothers" value="hurtothersno">
							Όχι
							<input type="radio" name="hurtothers" value="hurtothersyes">
							Ναι
						</div>

						<div class="form-group">
							<label for="hurtsm"><strong>34. Έχεις πρόσφατα τραυματιστεί ή απειληθεί από κάποιο άτομο; </strong></label>
							<input type="radio" name="hurtothers1" value="hurtsmno">
							Όχι
							<input type="radio" name="hurtothers1" value="hurtsmyes">
							Ναι
						</div>
						<div class="form-group">
							<label for="commentshistory"><strong>Σχόλια θεραπευτή:</strong></label>
							<input type="text" class="form-control" id="commentshistory" name="commentshistory">
						</div>

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
  'patientID' => $_POST['id'],
  'feelaboutstudies' => $_POST['feel'],
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
  'medicines1' => $_POST['r1'],
  'generalhealth' => $_POST['care'], 
  'smoking' => $_POST['smoking'],
  'smoking1' => $_POST['smokingyes'],
  'alcohol' => $_POST['alcohol'],
  'alcohol1' => $_POST['alcoholyes'],
  'drugs' => $_POST['illigal'],
  'drugs1' => $_POST['illigalyes'],
  'marihuanafrequency' => $_POST['mar'], 
  'luckygames' => $_POST['games'],
  'luckygames1' => $_POST['gamesyes'],
  'betmore' => $_POST['bet'],
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
  
  'feelfortherapy' => $_POST[''],
  'otherseriousinfo' => $_POST[''],
  'reasonsfortherapy' => $_POST['']
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}

}

?>
