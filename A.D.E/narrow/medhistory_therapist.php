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
							<li>
								<a href="psindex_therapist.php"><i class="fa fa-table"></i> Calendar</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-list"></i> Open<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="tasklist_therapist.php">Task List</a>
									</li>
									<li>
										<a href="myclients_therapist.php">My clients</a>
									</li>
									<li>
										<a href="myappointments_therapist.php">My appointments</a>
									</li>
									<li>
										<a href="waitinglist_therapist.php">Waiting List</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="formupload_therapist.php"><i class="fa fa-upload"></i> Upload file</a>
							</li>
							<li>
								<a href="reports_therapist.php"><i class="fa fa-bar-chart-o"></i> Reports</a>
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
							<!-- Collect the nav links, forms, and other content for toggling -->
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
												<a href="form07_therapist.php">Έκθεση αρχικής αξιολόγησης</a>
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
							Ιστορικό Πελάτη
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label for="mainproblem">Κύριο πρόβλημα:</label>
								<input type="text" class="form-control" id="mainproblem" placeholder="" name="mainproblem" value=<?=$response['medlog']['mainproblem'] ?>>
							</div>
							<div class="form-group">
								<label for="request">Ειδικά αιτήματα πελάτη:</label>
								<input type="number" class="form-control" id="request" placeholder="" name="request" value=<?=$response['medlog']['specialrequests'] ?>>
							</div>
							<div class="form-group">
								<label for="historyproblem">Ιστορικό προβλήματος:</label>
								<input type="text" class="form-control" id="historyproblem" placeholder="" name="historyproble" value=<?=$response['medlog']['historyofproblem'] ?>>
							</div>
							<div class="form-group">
								<label for="anxietycause">Παράγοντες άγχους:</label>
								<input type="text" class="form-control" id="anxietycause" placeholder="" name="anxietycause" value=<?=$response['medlog']['anxietyfactors'] ?>>
							</div>
							<div class="form-group">
								<label for="emotionsforuni">Συναισθήματα για πανεπιστήμιο:</label>
								<input type="text" class="form-control" id="emotionsforuni" placeholder="" name="emotionsforuni" value=<?=$response['medlog']['feelaboutstudies'] ?>>
							</div>
							<div class="form-group">
								<label for="timeofwork">Ώρα εργασίας:</label>
								<input type="text" class="form-control" id="timeofwork" placeholder="" name="timeofwork" value=<?=$response['medlog']['jobtime'] ?>>
							</div>
							<div class="form-group">
								<label for="workduties">Καθήκοντα εργασίας:</label>
								<input type="text" class="form-control" id="workduties" placeholder="" name="workduties" value=<?=$response['medlog']['jobdutys'] ?>>
							</div>
							<div class="form-group">
								<label for="anexietywork">Άγχος εργασίας:</label>
								<input type="text" class="form-control" id="anexietywork" placeholder="" name="anexietywork" value=<?=$response['medlog']['jobstress'] ?>>
							</div>
							<div class="form-group">
								<label for="previouswork">Προηγούμενη εργασία:</label>
								<input type="text" class="form-control" id="previouswork" placeholder="" name="previouswork" value=<?=$response['medlog']['jobprevious'] ?>>
							</div>
							<div class="form-group">
								<label for="relationship">Σε σχέση:</label>
								<input type="text" class="form-control" id="relationship" placeholder="" name="relationship" value=<?=$response['medlog']['relationshipin'] ?>>
							</div>
							<div class="form-group">
								<label for="moreinfoforrel">Πληροφορίες για σχέσεις:</label>
								<input type="text" class="form-control" id="moreinfoforrel" placeholder="" name="moreinfoforrel" value=<?=$response['medlog']['relationshipinfo'] ?>>
							</div>
							<div class="form-group">
								<label for="nameofrel">Όνομα σχέσης:</label>
								<input type="text" class="form-control" id="nameofrel" placeholder="" name="nameofrel" value=<?=$response['medlog']['relationshipname'] ?>>
							</div>
							<div class="form-group">
								<label for="jobofrel">Εργασία σχέσης:</label>
								<input type="text" class="form-control" id="jobofrel" placeholder="" name="jobofrel" value=<?=$response['medlog']['relationshipjob'] ?>>
							</div>
							<div class="form-group">
								<label for="kids">Παιδία:</label>
								<input type="text" class="form-control" id="kids" placeholder="" name="kids" value=<?=$response['medlog']['children'] ?>>
							</div>
							<div class="form-group">
								<label for="roommate">Συγκατοίκηση:</label>
								<input type="text" class="form-control" id="roommate" placeholder="" name="roommate" value=<?=$response['medlog']['staywith'] ?>>
							</div>
							<div class="form-group">
								<label for="roomatedif">Δυσκολίες συγκατοίκησης:</label>
								<input type="text" class="form-control" id="roomatedif" placeholder="" name="roomatedif" value=<?=$response['medlog']['staydificulties'] ?>>
							</div>
							<div class="form-group">
								<label for="family">Σύνθεση οικογένειας:</label>
								<input type="text" class="form-control" id="family" placeholder="" name="family" value=<?=$response['medlog']['familysynthesis'] ?>>
							</div>
							<div class="form-group">
								<label for="support">Υποστήρικη απο οικογένεια/φίλους:</label>
								<input type="text" class="form-control" id="support" placeholder="" name="support" value=<?=$response['medlog']['support'] ?>>
							</div>
							<div class="form-group">
								<label for="finance">Οικονομική κατάσταση:</label>
								<input type="text" class="form-control" id="finance" placeholder="" name="finance" value=<?=$response['medlog']['economicstatus'] ?>>
							</div>
							<div class="form-group">
								<label for="legalissues">Νομικά προβλήματα:</label>
								<input type="text" class="form-control" id="legalissues" placeholder="" name="legalissues" value=<?=$response['medlog']['legalissues1'] ?>>
							</div>
							<div class="form-group">
								<label for="medproblems">Ιατρικά προβλήματα:</label>
								<input type="text" class="form-control" id="medproblems" placeholder="" name="medproblems" value=<?=$response['medlog']['healthissues'] ?>>
							</div>
							<div class="form-group">
								<label for="concerns">Ιατρικές ανησυχίες:</label>
								<input type="text" class="form-control" id="concerns" placeholder="" name="concerns" value=<?=$response['medlog']['healthconsernes'] ?>>
							</div>
							<div class="form-group">
								<label for="doc">Γιατρός:</label>
								<input type="text" class="form-control" id="doc" placeholder="" name="doc" value=<?=$response['medlog']['doctor'] ?>>
							</div>
							<div class="form-group">
								<label for="contactdoc">Στοιχεία επικοινωνίας ιατρού:</label>
								<input type="text" class="form-control" id="contactdoc" placeholder="" name="contactdoc" value=<?=$response['medlog']['doctorcontacts'] ?>>
							</div>
							<div class="form-group">
								<label for="medicaltreatment">Ιατρική Αγωγή:</label>
								<input type="text" class="form-control" id="medicaltreatment" placeholder="" name="medicaltreatment" value=<?=$response['medlog']['medicines1'] ?>>
							</div>
							<div class="form-group">
								<label for="generalhealth">Γενική υγεία:</label>
								<input type="text" class="form-control" id="generalhealth" placeholder="" name="generalhealth" value=<?=$response['medlog']['generalhealth'] ?>>
							</div>
							<div class="form-group">
								<label for="flag">Κάπνισμα:</label>
								<input type="text" class="form-control" id="flag" placeholder="" name="flag" value=<?=$response['medlog']['smoking1'] ?>>
							</div>
							<div class="form-group">
								<label for="alcohol">Αλκοόλ:</label>
								<input type="text" class="form-control" id="alcohol" placeholder="" name="alcohol" value=<?=$response['medlog']['alcohol1'] ?>>
							</div>
							<div class="form-group">
								<label for="drugs">Ναρκωτικά:</label>
								<input type="text" class="form-control" id="drugs" placeholder="" name="drugs" value=<?=$response['medlog']['drugs1'] ?>>
							</div>
							<div class="form-group">
								<label for="marihuana">Συχνότητα λήψης marihuana:</label>
								<input type="text" class="form-control" id="marihuana" placeholder="" name="marihuana" value=<?=$response['medlog']['marihuanafrequency'] ?>>
							</div>
							<div class="form-group">
								<label for="games">Τυχερά παιχνίδια:</label>
								<input type="text" class="form-control" id="games" placeholder="" name="games" value=<?=$response['medlog']['luckygames1'] ?>>
							</div>
							<div class="form-group">
								<label for="addiction">Εθισμός:</label>
								<input type="text" class="form-control" id="addiction" placeholder="" name="addiction" value=<?=$response['medlog']['betmore'] ?>>
							</div>
							<div class="form-group">
								<label for="gambling">Συναισθήματα για τζόγο:</label>
								<input type="text" class="form-control" id="gambling" placeholder="" name="gambling" value=<?=$response['medlog']['speakaboutlucky'] ?>>
							</div>
							<div class="form-group">
								<label for="youngage">Παιδική ηλικία:</label>
								<input type="text" class="form-control" id="youngage" placeholder="" name="youngage" value=<?=$response['medlog']['childlife'] ?>>
							</div>
							<div class="form-group">
								<label for="youngageproblems">Προβλήματα παιδικής ηλικίας:</label>
								<input type="text" class="form-control" id="youngageproblems" placeholder="" name="youngageproblems" value=<?=$response['medlog']['childlifeproblems'] ?>>
							</div>
							<div class="form-group">
								<label for="previous">Προηγούμενη ψυχολογική υποστήριξη:</label>
								<input type="text" class="form-control" id="previous" placeholder="" name="previous" value=<?=$response['medlog']['psychosupport1'] ?>>
							</div>
							<div class="form-group">
								<label for="previousdiagnosis">Προηγούμενη ψυχολογική διάγνωση:</label>
								<input type="text" class="form-control" id="previousdiagnosis" placeholder="" name="previousdiagnosis" value=<?=$response['medlog']['psychodiagnosis1'] ?>>
							</div>
							<div class="form-group">
								<label for="malfunction">Δυσλειτουργικότητα:</label>
								<input type="text" class="form-control" id="malfunction" placeholder="" name="malfunction" value=<?=$response['medlog']['disability1'] ?>>
							</div>
							<div class="form-group">
								<label for="sucide">Αυτοκτονική πρόθεση:</label>
								<input type="text" class="form-control" id="sucide" placeholder="" name="sucide" value=<?=$response['medlog']['suicideprothesis1'] ?>>
							</div>
							<div class="form-group">
								<label for="violentintention">Βίαιη πρόθεση:</label>
								<input type="text" class="form-control" id="violentintention" placeholder="" name="violentintention" value=<?=$response['medlog']['violenceprothesis1'] ?>>
							</div>
							<div class="form-group">
								<label for="violence">Βία:</label>
								<input type="text" class="form-control" id="violence" placeholder="" name="violence" value=<?=$response['medlog']['violence1'] ?>>
							</div>
							<div class="form-group">
								<label for="emotionsfortherapy">Συναισθήματα για τη θεραπεία:</label>
								<input type="text" class="form-control" id="emotionsfortherapy" placeholder="" name="emotionsfortherapy" value=<?=$response['medlog']['feelfortherapy'] ?>>
							</div>
							<div class="form-group">
								<label for="moreinfo">Άλλες σημαντικές πληροφορίες:</label>
								<input type="text" class="form-control" id="moreinfo" placeholder="" name="moreinfo" value=<?=$response['medlog']['otherseriousinfo'] ?>>
							</div>
							<div class="form-group">
								<label for="reasons">Λόγοι για θεραπεία:</label>
								<input type="text" class="form-control" id="reasons" placeholder="" name="reasons" value=<?=$response['medlog']['reasonsfortherapy'] ?>>
							</div>
							<div class="form-group">
								<label for="cognitivefunctionality">Γνωστική λειτουργικότητα:</label>
								<input type="text" class="form-control" id="cognitivefunctionality" placeholder="" name="cognitivefunctionality" value=<?=$response['medlog']['gnosticfunction'] ?>>
							</div>

							<div class="form-group">
								<label for="mood">Διάθεση:</label>
								<input type="text" class="form-control" id="mood" placeholder="" name="mood" value=<?=$response['medlog']['gnosticfunction'] ?>>
							</div>
							<div class="form-group">
								<label for="psychometricresults">Ψυχομετρικά αποτελέσματα:</label>
								<input type="text" class="form-control" id="psychometricresults" placeholder="" name="psychometricresults" value=<?=$response['medlog']['psychometricresult'] ?>>
							</div>
							<div class="form-group">
								<label for="clinicalimpression">Κλινική εντύπωση:</label>
								<input type="text" class="form-control" id="clinicalimpression" placeholder="" name="clinicalimpression" value=<?=$response['medlog']['clinicalimpression'] ?>>
							</div>
							<div class="form-group">
								<label for="psychologicalfunctionality">Ψυχολογική λειτουργικότητα:</label>
								<input type="text" class="form-control" id="psychologicalfunctionality" placeholder="" name="psychologicalfunctionality" value=<?=$response['medlog']['psychologicalfunc'] ?>>
							</div>
							<div class="form-group">
								<label for="academicfunctionality">Ακαδημαική λειτουργικότητα:</label>
								<input type="text" class="form-control" id="academicfunctionality" placeholder="" name="academicfunctionality" value=<?=$response['medlog']['professionacademicfunc'] ?>>
							</div>
							<div class="form-group">
								<label for="socialfunctionality">Κοινωνική λειτουργικότητα:</label>
								<input type="text" class="form-control" id="socialfunctionality" placeholder="" name="socialfunctionality" value=<?=$response['medlog']['socialfunc'] ?>>
							</div>

							<div class="form-group">
								<label for="selfimprovement">Αυτοβελτίωση:</label>
								<input type="text" class="form-control" id="selfimprovement" placeholder="" name="selfimprovement" value=<?=$response['medlog']['autofix'] ?>>
							</div>
							<div class="form-group">
								<label for="treatmentfactors">Παράγοντες θεραπείας:</label>
								<input type="text" class="form-control" id="treatmentfactors" placeholder="" name="treatmentfactors" value=<?=$response['medlog']['therapyfactors'] ?>>
							</div>
							<div class="form-group">
								<label for="recommtherapy">Εισηγήσεις θεραπείας:</label>
								<input type="text" class="form-control" id="recommtherapy" placeholder="" name="recommtherapy" value=<?=$response['medlog']['therapysuggestions'] ?>>
							</div>
							<div class="form-group">
								<label for="additionalev">Επιπλέον αξιολόγηση:</label>
								<input type="text" class="form-control" id="additionalev" placeholder="" name="additionalev" value=<?=$response['medlog']['additionalevaluation'] ?>>
							</div>
							<div class="form-group">
								<label for="firstprogram">Αρχικό πρόγραμμα θεραπείας:</label>
								<input type="text" class="form-control" id="firstprogram" placeholder="" name="firstprogram" value=<?=$response['medlog']['initialtherapyprogram'] ?>>
							</div>
							<div class="form-group">
								<label for="signed">Υπογεγραμμένο απο Supervisor:</label>
								<input type="text" class="form-control" id="signed" placeholder="" name="signed" value=<?=$response['medlog']['signed'] ?>>
							</div>
							<div class="form-group">
								<label for="completed">Ημερομηνία που έχει συμπληρωθεί εντελώς:</label>
								<input type="date" class="form-control" id="completed" placeholder="" name="completed" value=<?=$response['medlog']['datecompleted'] ?>>
							</div>
							<div class="form-group">
								<label for="addmore">Προσθήκη ανασκόπησης</label>
								<button id="addmore" class="btn btn-default" onclick="window.location='form11.php'">
									ADD
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
