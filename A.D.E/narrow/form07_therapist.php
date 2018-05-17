<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/myclient.php?patientID=".$_GET['patientID'];
$method='GET';
//if(isset($_POST['submit'])){
$postfields=http_build_query(array(
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
var_dump($response);
//}
?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Κέντρο Ψυχικής Υγείας</title>

		<!-- Bootstrap Core CSS -->
		<link href="bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- MetisMenu CSS -->
		<link href="bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

		<!-- DataTables CSS -->
		<link href="bootstrap/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
		<!-- DataTables Responsive CSS -->
		<link href="bootstrap/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>
	<script>
		$(document).ready(function() {
			$('myTable').DataTable();
		});
	</script>
	<body>

		<div id="wrapper">

			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="psindex.php">Κέντρο Ψυχικής Υγείας</a>
				</div>
				<!-- /.navbar-header -->

				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i> </a>
						<ul class="dropdown-menu dropdown-user">
							<li>
								<a href="myprofile_therapist.php"><i class="fa fa-user fa-fw"></i> Προφίλ</a>
							</li>
							<li>
								<a href="usermanual_therapist.php"><i class="fa fa-gear fa-fw"></i> Εγχειρίδιο</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="psychlogin.php"><i class="fa fa-sign-out fa-fw"></i> Αποσύνδεση</a>
							</li>
						</ul>
						<!-- /.dropdown-user -->
					</li>
					<!-- /.dropdown -->
				</ul>
				<!-- /.navbar-top-links -->
				<div class="navbar-default sidebar" role="navigation">
					<div class="sidebar-nav navbar-collapse">
						<ul class="nav" id="side-menu">
							<li>
								<a href="psindex_therapist.php"><i class="fa fa-table"></i> Ημερολόγιο</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-list"></i> Επιλογές<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="tasklist_therapist.php">Λίστα Εργασιών</a>
									</li>
									<li>
										<a href="myclients_therapist.php">Πελάτες</a>
									</li>
									<li>
										<a href="myappointments_therapist.php">Ραντεβού</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="formupload_therapist.php"><i class="fa fa-upload"></i> Ανάρτηση Αρχείου</a>
							</li>
							<li>
								<a href="reports_therapist.php"><i class="fa fa-bar-chart-o"></i> Στατιστικές</a>
							</li>
						</ul>
					</div>
					<!-- /.sidebar-collapse -->
				</div>
				<!-- /.navbar-static-side -->
			</nav>

			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Case File</h1>
					</div>
				</div>
				<div>
					<!-- /.col-lg-12 -->
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li>
										<a href="casenotes_therapist.php?patientID=<?=$_GET['patientID'] ?>">Σημειώσεις Προόδου</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Σημειώσεις<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="contactlog_therapist.php?patientID=<?= $_GET['patientID'] ?>">Contact Logs</a>
											</li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Γενικές πληροφορίες<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="personalinformation_therapist.php?patientID=<?= $_GET['patientID'] ?>">Προσωπικά Στοιχεία Πελάτη</a>
											</li>
											<li>
												<a href="schedule_therapist.php?patientID=<?= $_GET['patientID'] ?>">Διαθέσιμο Πρόγραμμα Πελάτη</a>
											</li>
										</ul>

									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ιατρικές Πληροφορίες <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="clientrelationships_therapist.php?patientID=<?= $_GET['patientID'] ?>">Οικογενειακές Σχέσεις Πελάτη</a>
											</li>
											<li>
												<a href="clientmedication_therapist.php?patientID=<?= $_GET['patientID'] ?>">Φαρμακευτική Αγωγή Πελάτη</a>
											</li>
											<li>
												<a href="medhistory_therapist.php?patientID=<?= $_GET['patientID'] ?>">Medlog</a>
											</li>
											<li>
												<a href="form07_therapist.php">Έκθεση Αρχικής Αξιολόγησης</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="externalinformation_therapist.php?patientID=<?= $_GET['patientID'] ?>">Εξωτερική Πληροφόρηση</a>
									</li>
									<li>
										<a href="billing_therapist.php?patientID=<?= $_GET['patientID'] ?>">Πληρωμές</a>
									</li>
								</ul>

							</div><!-- /.navbar-collapse -->

						</div><!-- /.container-fluid -->
					</nav>
				</div>

				<div>
					<div class="panel panel-default">
						<div class="panel-heading">
							Έκθεση αρχικής αξιολόγησης
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label for="q1">1. Παρουσιαζόμενο πρόβλημα (διάρκεια, συχνότητα, σχέση με παράγοντες της κατάστασης, παράγοντες που συντείνουν στη διατήρηση, δευτερεύοντα οφέλη). Σχετικές δημογραφικές πληροφορίες:</label>
								<input type="text" class="form-control" id="q1" placeholder="" name="q1">
							</div>
							<div class="form-group">
								<label for="q2">2. Ιστορικό προβλήματος και προηγούμενη θεραπεία:</label>
								<input type="text" class="form-control" id="q2" placeholder="" name="q2">
							</div>
							<div class="form-group">
								<label for="q3">3. Τρέχοντες παράγοντες άγχους ή/και έντασης: </label>
								<input type="number" class="form-control" id="q3" placeholder="" name="q3">
							</div>
							<div class="form-group">
								<label for="q6">6. Ειδικά Αιτήματα/Διευκολύνσεις </label>
								<input type="text" class="form-control" id="q6" placeholder="" name="q4">
							</div>
							<div class="form-group">
								<label for="noitiki">7. Νοητική Κατάσταση :</label>
							</div>
							<div class="form-group">
								<label for="q71">7.1. Παρουσία, Στάση, Συμπεριφορά</label>
								<input type="text" class="form-control" id="q71" placeholder="" name="q5">
							</div>
							<div class="form-group">
								<label for="q72">7.2. Γνωστικές Λειτουργίες </label>
								<br>
								<label><em>(προσανατολισμός και μνήμη, γνωστική/νοητική αξιολόγηση, διαδικασία σκέψης, συλλογισμός και κρίση) </em></label>
								<br>
								<input type="text" class="form-control" id="q72" placeholder="" name="q6">
							</div>
							<div class="form-group">
								<label for="q73">7.3. Διάθεση, συναίσθημα </label>
								<br>
								<label><em>(συμπ. αξιολόγηση για αυτοκτονικό/ανθρωποκτονικό ιδεασμό).</em></label>
								<br>
								<input type="text" class="form-control" id="q73" placeholder="" name="q7">
							</div>
							<div class="form-group">
								<label for="q8">8. Αποτελέσματα Ψυχομετρικής Αξιολόγησης </label>
								<br>
								<label><em>(αν υπάρχουν, συνεντεύξεις, έντυπα, κτλ)</em></label>
								<br>
								<input type="text" class="form-control" id="q8" placeholder="" name="q8">
							</div>
							<div class="form-group">
								<label for="q9">9.Διαγνωστική / Κλινική Εντύπωση </label>
								<br>
								<label><em>(πρωτεύων ζήτημα, δευτερεύοντα ζητήματα, συμπτώματα, συμπεριφορές, σχετικά χαρακτηριστικά προσωπικότητας, ψυχοκοινωνικοί παράγοντες άγχους, υγεία)</em></label>
								<br>
								<input type="text" class="form-control" id="q9" placeholder="" name="q9">
							</div>
							<div class="form-group">
								<label for="q10">10.Συνολική Λειτουργικότητα – Βαθμός Δυσλειτουργίας </label>
								<br>
								<label><em>(βάλτε Χ στο σημείο που θεωρείτε ότι αντικατοπτρίζει ό,τι ισχύει για τον πελάτη) </em></label>
								<br>
							</div>
							<table style="width:100%">
								<tr>
									<th></th>
									<th>Απούσα</th>
									<th>Ήπια</th>
									<th>Μέτρια</th>
									<th>Σοβαρή</th>
								</tr>
								<tr>
									<td>α. ψυχολογική</td>
									<td>
									<input type="hidden" name="q10">
									<input type="radio" value="Απούσα Ψυχολογική" name="q10" class="form-group" id="a1">
									</td>
									<td>
									<input type="radio" value="Ήπια Ψυχολογική" name="q10" class="form-group" id="a2">
									</td>
									<td>
									<input type="radio" value="Μέτρια Ψυχολογική" name="q10" class="form-group" id="a3">
									</td>
									<td>
									<input type="radio" value="Σοβαρή Ψυχολογική" name="q10" class="form-group" id="a4">
									</td>
								</tr>
								<tr>
									<td>β. επαγγελματική/ακαδημαϊκή</td>
									<td>
									<input type="hidden" name="q11">
									<input type="radio" value="Απούσα επαγγελματική" name="q11" class="form-group" id="b1">
									</td>
									<td>
									<input type="radio" value="Ήπια επαγγελματική" name="q11" class="form-group" id="b2">
									</td>
									<td>
									<input type="radio" value="Μέτρια επαγγελματική" name="q11" class="form-group" id="b3">
									</td>
									<td>
									<input type="radio" value="Σοβαρή επαγγελματική" name="q11" class="form-group" id="b4">
									</td>
								</tr>
								<tr>
									<td>γ. κοινωνική</td>
									<td>
									<input type="hidden" name="q12">
									<input type="radio" value="Απούσα κοινωνική" name="q12" class="form-group" id="g1">
									</td>
									<td>
									<input type="radio" value="Ήπια κοινωνική" name="q12" class="form-group" id="g2">
									</td>
									<td>
									<input type="radio" value="Μέτρια κοινωνική" name="q12" class="form-group" id="g3">
									</td>
									<td>
									<input type="radio" value="Σοβαρή κοινωνική" name="q12" class="form-group" id="g4">
									</td>
								</tr>
								<tr>
									<td>δ. αυτοφροντίδα</td>
									<td>
									<input type="hidden" name="q13">
									<input type="radio" value="Απούσα αυτοφροντίδα" name="q13" class="form-group" id="d1">
									</td>
									<td>
									<input type="radio" value="Ήπια αυτοφροντίδα" name="q13" class="form-group" id="d2">
									</td>
									<td>
									<input type="radio" value="Μέτρια αυτοφροντίδα" name="q13" class="form-group" id="d3">
									</td>
									<td>
									<input type="radio" value="Σοβαρή αυτοφροντίδα" name="q13" class="form-group" id="d4">
									</td>
								</tr>

							</table>
							<br>
							<div class="form-group">
								<label for="q11">11. Παράγοντες Θεραπείας</label>
								<br>
								<label><em>(προηγούμενες προσπάθειες θεραπείας, κινητοποίηση/επίγνωση πρόγνωση, καταλληλότητα για θεραπεία) </em></label>
								<br>
								<input type="text" class="form-control" id="q14" placeholder="" name="q14">
							</div>
							<div class="form-group">
								<label for="q12">12. Εισηγήσεις για θεραπεία </label>
								<br>
								<label><em>(ψυχολογικές δυνάμεις, προτεινόμενοι στόχοι, δεξιότητες που μπορούν να αξιοποιηθούν ή να στοχευθούν)</em></label>
								<br>
								<input type="text" class="form-control" id="q12" placeholder="" name="q15">
							</div>
							<div class="form-group">
								<label for="q13">13. Ζητήματα που χρήζουν επιπρόσθετη αξιολόγηση </label>
								<input type="text" class="form-control" id="q13" placeholder="" name="q16">
							</div>
							<div class="form-group">
								<label for="q14">14. Πιθανή Πολυαξονική Εκτίμηση με βάση το DSM </label>
								<br>
								<label for="q14more">Άξονας Ι: Κλινικές διαταραχές, άλλες καταστάσεις που μπορούν να αποτελέσουν εστία κλινικής προσοχής</label>
								<input type="text" class="form-control" id="q14a" placeholder="" name="q14">
								<label for="q14more">Άξονας ΙΙ:Διαταραχές της προσωπικότητας. Νοητική καθυστέρηση</label>
								<input type="text" class="form-control" id="q14b" placeholder="" name="q14">
								<label for="q14more">Άξονας ΙΙΙ:Σωματικές Νόσοι</label>
								<input type="text" class="form-control" id="q14c" placeholder="" name="q14">
								<label for="q14more">Άξονας ΙV:Ψυχοκοινωνικά και περιβαλλοντικά προβλήματα</label>
								<input type="text" class="form-control" id="q14d" placeholder="" name="q14">
								<label for="q14more">Άξονας V:Σφαιρική εκτίμηση λειτουργικότητας (GAF):</label>
								<input type="text" class="form-control" id="q14e" placeholder="" name="q14">
							</div>
							<div class="form-group">
								<label for="q15">15. Αρχικό Πρόγραμμα Θεραπείας </label>
								<br>
								<label><em>(συμπεριλαμβάνονται στόχοι θεραπείας, τρόποι και υπολογιζόμενος χρόνος θεραπείας): </em></label>
								<br>
								<input type="text" class="form-control" id="q15" placeholder="" name="q17">
							</div>
							<div class="form-group">
								<button type="submit" onclick="init();" class="btn btn-default" name="submit">
									Καταχώρηση
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div>
				<br>
				<br>
			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- /#wrapper -->
		</div>

		<!-- jQuery -->
		<script src="bootstrap/vendor/jquery/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>

		<!-- Metis Menu Plugin JavaScript -->
		<script src="bootstrap/vendor/metisMenu/metisMenu.min.js"></script>

		<!-- DataTables JavaScript -->
		<script src="bootstrap/vendor/datatables/js/jquery.dataTables.min.js"></script>
		<script src="bootstrap/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
		<script src="bootstrap/vendor/datatables-responsive/dataTables.responsive.js"></script>

		<!-- Custom Theme JavaScript -->
		<script src="bootstrap/dist/js/sb-admin-2.js"></script>

		<!-- Page-Level Demo Scripts - Tables - Use for reference -->
		<script>
			$(document).ready(function() {
				$('#dataTables-example').DataTable({
					responsive : true
				});
			});
		</script>

	</body>

</html>

<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/form7.php";
$method='POST';
if(isset($_POST['submit'])){
$postfields=http_build_query(array(
'patientID' => "12345",
'mainproblem' => $_POST['q1'],
'historyofproblem' => $_POST['q2'],
'anxietyfactors' => $_POST['q3'],
'specialrequests' => $_POST['q4'],
'behaviour' => $_POST['q5'],
'gnosticfunction' => $_POST['q6'],
'mood' => $_POST['q7'],
'psychometricresult' => $_POST['q8'],
'clinicalimpression' => $_POST['q9'],
'psychologicalfunc' => $_POST['q10'],
'professionacademicfunc' => $_POST['q11'],
'socialfunc' => $_POST['q12'],
'autofix' => $_POST['q13'],
'therapyfactors' => $_POST['q14'],
'therapysuggestions' => $_POST['q15'],
'additionalevaluation' => $_POST['q16'],
'initialtherapyprogram' => $_POST['q17'],
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