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
	<style>
		label {
			font-size: smaller;
		}
	</style>
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
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i> </a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<a href="#">
								<div>
									John Smith
									<span class="pull-right text-muted"> <em>Yesterday</em> </span>
								</div>
								<div>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									John Smith
									<span class="pull-right text-muted"> <em>Yesterday</em> </span>
								</div>
								<div>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									John Smith
									<span class="pull-right text-muted"> <em>Yesterday</em> </span>
								</div>
								<div>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a class="text-center" href="#"> Read All Messages <i class="fa fa-angle-right"></i> </a>
							</li>
						</ul>
						<!-- /.dropdown-messages -->
					</li>
					<!-- /.dropdown -->
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i> </a>
						<ul class="dropdown-menu dropdown-tasks">
							<li>
								<a href="#">
								<div>
									<p>
										Task 1
										<span class="pull-right text-muted">40% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
											<span class="sr-only">40% Complete (success)</span>
										</div>
									</div>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<p>
										<strong>Task 2</strong>
										<span class="pull-right text-muted">20% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
											<span class="sr-only">20% Complete</span>
										</div>
									</div>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<p>
										<strong>Task 3</strong>
										<span class="pull-right text-muted">60% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only">60% Complete (warning)</span>
										</div>
									</div>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<p>
										<strong>Task 4</strong>
										<span class="pull-right text-muted">80% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											<span class="sr-only">80% Complete (danger)</span>
										</div>
									</div>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
							</li>
						</ul>
						<!-- /.dropdown-tasks -->
					</li>
					<!-- /.dropdown -->
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i> </a>
						<ul class="dropdown-menu dropdown-alerts">
							<li>
								<a href="#">
								<div>
									<i class="fa fa-comment fa-fw"></i> New Comment <span class="pull-right text-muted small">4 minutes ago</span>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<i class="fa fa-twitter fa-fw"></i> 3 New Followers <span class="pull-right text-muted small">12 minutes ago</span>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<i class="fa fa-envelope fa-fw"></i> Message Sent <span class="pull-right text-muted small">4 minutes ago</span>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<i class="fa fa-tasks fa-fw"></i> New Task <span class="pull-right text-muted small">4 minutes ago</span>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<i class="fa fa-upload fa-fw"></i> Server Rebooted <span class="pull-right text-muted small">4 minutes ago</span>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a class="text-center" href="#"> <strong>See All Alerts</strong> <i class="fa fa-angle-right"></i> </a>
							</li>
						</ul>
						<!-- /.dropdown-alerts -->
					</li>
					<!-- /.dropdown -->
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i> </a>
						<ul class="dropdown-menu dropdown-user">
							<li>
								<a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="psychlogin.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
							<!--
							<li class="sidebar-search">
							<div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<button class="btn btn-default" type="button">
							<i class="fa fa-search"></i>
							</button> </span>
							</div>
							<!-- /input-group -->
							<!--</li>-->
							<li>
								<a href="psindex.php"><i class="fa fa-table"></i> Calendar</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-list"></i> Open<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="tasklist.php">Task List</a>
									</li>
									<li>
										<a href="myclients.php">My clients</a>
									</li>
									<li>
										<a href="waitinglist.php">Waiting List</a>
									</li>
									<li>
										<a href="search.php">Search</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="reports.php"><i class="fa fa-bar-chart-o"></i> Reports</a>
							</li>
							<li>
								<a href="help.php"><i class="fa fa-cog"></i> Help</a>
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
						<h1 class="page-header"><small>Έκθεση αρχικής αξιολόγησης</small></h1>
					</div>
				</div>
				<div>
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="" method="post">
								<div class="form-group">
									<label for="q1">1. Παρουσιαζόμενο πρόβλημα (διάρκεια, συχνότητα, σχέση με παράγοντες της κατάστασης, παράγοντες που συντείνουν στη διατήρηση, δευτερεύοντα οφέλη). Σχετικές δημογραφικές πληροφορίες:</label>
									<input type="text" class="form-control" id="q1" placeholder="" name="mainproblem">
								</div>
								<div class="form-group">
									<label for="q2">2. Ιστορικό προβλήματος και προηγούμενη θεραπεία:</label>
									<input type="text" class="form-control" id="q2" placeholder="" name="historyofproblem">
								</div>
								<div class="form-group">
									<label for="q3">3. Τρέχοντες παράγοντες άγχους ή/και έντασης: </label>
									<input type="number" class="form-control" id="q3" placeholder="" name="anxietyfactors">
								</div>

								<div class="form-group">
									<label for="q4">4. Ακαδημαϊκό Πρόγραμμα/εμπειρίες/δυσκολίες: </label>
									<input type="text" class="form-control" id="q4" placeholder="" name="q4">
								</div>
								<div class="form-group">
									<label for="history">5. Ιστορικό :</label>
								</div>
								<div class="form-group">
									<label for="q51">5.1. Σύντομο σχετικό προσωπικό και οικογενειακό ιστορικό </label>
									<br>
									<label><em>(συμπ. σχέσεις με γονείς και αδέλφια)</em></label>
									<br>
									<input type="text" class="form-control" id="q51" placeholder="" name="q51">
								</div>
								<div class="form-group">
									<label for="q52">5.2. Διαπροσωπικές/Ερωτικές Σχέσεις (συγκάτοικοι, φίλοι, σύντροφοι, ταυτότητα):</label>
									<input type="text" class="form-control" id="q52" placeholder="" name="q52">
								</div>
								<div class="form-group">
									<label for="q53">5.3 Ιατρικό ιστορικό </label>
									<br>
									<label><em>(Προηγούμενες σοβαρές ιατρικές περιθάλψεις ή σοβαρές καταστάσεις υγείας,  συμπ. παρούσα φαρμακοθεραπεία): </em></label>
									<br>
									<input type="text" class="form-control" id="q53" placeholder="" name="q53">
								</div>
								<div class="form-group">
									<label for="q54">5.4. Ιστορικό χρήσης/κατάχρησης ουσιών </label>
									<input type="text" class="form-control" id="q54" placeholder="" name="q54">
								</div>
								<div class="form-group">
									<label for="q55">5.5. Φαρμακευτική Αγωγή (ή σχετική προηγούμενη): </label>
									<input type="text" class="form-control" id="q55" placeholder="" name="q54">
								</div>
								<div class="form-group">
									<label for="q6">6. Ειδικά Αιτήματα/Διευκολύνσεις </label>
									<input type="text" class="form-control" id="q6" placeholder="" name="q6">
								</div>
								<div class="form-group">
									<label for="noitiki">7. Νοητική Κατάσταση :</label>
								</div>
								<div class="form-group">
									<label for="q71">7.1. Παρουσία, Στάση, Συμπεριφορά</label>
									<input type="text" class="form-control" id="q71" placeholder="" name="behaviour">
								</div>
								<div class="form-group">
									<label for="q72">7.2. Γνωστικές Λειτουργίες </label>
									<br>
									<label><em>(προσανατολισμός και μνήμη, γνωστική/νοητική αξιολόγηση, διαδικασία σκέψης, συλλογισμός και κρίση) </em></label>
									<br>
									<input type="text" class="form-control" id="q72" placeholder="" name="gnosticfunction">
								</div>
								<div class="form-group">
									<label for="q73">7.3. Διάθεση, συναίσθημα </label>
									<br>
									<label><em>(συμπ. αξιολόγηση για αυτοκτονικό/ανθρωποκτονικό ιδεασμό).</em></label>
									<br>
									<input type="text" class="form-control" id="q73" placeholder="" name="mood">
								</div>
								<div class="form-group">
									<label for="q8">8. Αποτελέσματα Ψυχομετρικής Αξιολόγησης </label>
									<br>
									<label><em>(αν υπάρχουν, συνεντεύξεις, έντυπα, κτλ)</em></label>
									<br>
									<input type="text" class="form-control" id="q8" placeholder="" name="psychometricresult">
								</div>
								<div class="form-group">
									<label for="q9">9.Διαγνωστική / Κλινική Εντύπωση </label>
									<br>
									<label><em>(πρωτεύων ζήτημα, δευτερεύοντα ζητήματα, συμπτώματα, συμπεριφορές, σχετικά χαρακτηριστικά προσωπικότητας, ψυχοκοινωνικοί παράγοντες άγχους, υγεία)</em></label>
									<br>
									<input type="text" class="form-control" id="q9" placeholder="" name="clinicalimpression">
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
										<input type="checkbox" name="psychologicalfunc" class="form-group" id="a1">
										</td>
										<td>
										<input type="checkbox" name="psychologicalfunc" class="form-group" id="a2">
										</td>
										<td>
										<input type="checkbox" name="psychologicalfunc" class="form-group" id="a3">
										</td>
										<td>
										<input type="checkbox" name="psychologicalfunc" class="form-group" id="a4">
										</td>
									</tr>
									<tr>
										<td>β. επαγγελματική/ακαδημαϊκή</td>
										<td>
										<input type="checkbox" name="professionacademicfunc" class="form-group" id="b1">
										</td>
										<td>
										<input type="checkbox" name="professionacademicfunc" class="form-group" id="b2">
										</td>
										<td>
										<input type="checkbox" name="professionacademicfunc" class="form-group" id="b3">
										</td>
										<td>
										<input type="checkbox" name="professionacademicfunc" class="form-group" id="b4">
										</td>
									</tr>
									<tr>
										<td>γ. κοινωνική</td>
										<td>
										<input type="checkbox" name="socialfunc" class="form-group" id="g1">
										</td>
										<td>
										<input type="checkbox" name="socialfunc" class="form-group" id="g2">
										</td>
										<td>
										<input type="checkbox" name="socialfunc" class="form-group" id="g3">
										</td>
										<td>
										<input type="checkbox" name="socialfunc" class="form-group" id="g4">
										</td>
									</tr>
									<tr>
										<td>δ. αυτοφροντίδα</td>
										<td>
										<input type="checkbox" name="autofix" class="form-group" id="d1">
										</td>
										<td>
										<input type="checkbox" name="autofix" class="form-group" id="d2">
										</td>
										<td>
										<input type="checkbox" name="autofix" class="form-group" id="d3">
										</td>
										<td>
										<input type="checkbox" name="autofix" class="form-group" id="d4">
										</td>
									</tr>
								</table>
								<br>
								<div class="form-group">
									<label for="q11">11. Παράγοντες Θεραπείας</label>
									<br>
									<label><em>(προηγούμενες προσπάθειες θεραπείας, κινητοποίηση/επίγνωση πρόγνωση, καταλληλότητα για θεραπεία) </em></label>
									<br>
									<input type="text" class="form-control" id="q11" placeholder="" name="therapyfactors">
								</div>
								<div class="form-group">
									<label for="q12">12. Εισηγήσεις για θεραπεία </label>
									<br>
									<label><em>(ψυχολογικές δυνάμεις, προτεινόμενοι στόχοι, δεξιότητες που μπορούν να αξιοποιηθούν ή να στοχευθούν)</em></label>
									<br>
									<input type="text" class="form-control" id="q12" placeholder="" name="therapysuggestions">
								</div>
								<div class="form-group">
									<label for="q13">13. Ζητήματα που χρήζουν επιπρόσθετη αξιολόγηση </label>
									<input type="text" class="form-control" id="q13" placeholder="" name="additionalevaluation">
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
									<input type="text" class="form-control" id="q15" placeholder="" name="initialtherapyprogram">
								</div>
						</div>
					</div>
					<button type="submit" class="btn btn-default" name="submit">
						Submit
					</button>
				</div>

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
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/register.php";
$method='POST';
if(isset($_POST['submit'])){
$postfields=http_build_query(array(
'id' => $_POST['id'],
'email' => $_POST['email'],
'name' => $_POST['name'],
'lastname' => $_POST['surname'],
'password' => $_POST['password']
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