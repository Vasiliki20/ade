<?php
ob_start();
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
										<a href="myappointments.php">My appointments</a>
									</li>
									<li>
										<a href="waitinglist.php">Waiting List</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="formupload_supervisor.php"><i class="fa fa-upload"></i> Upload file</a>
							</li>
							<li>
								<a href="reports.php"><i class="fa fa-bar-chart-o"></i> Reports</a>
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
										<a href="casenotes.php?patientID=<?=$_GET['patientID'] ?>">Σημειώσεις Προόδου</a>
									</li>
									<li>
										<a href="filesofpatient.php">Εκθέσεις/Αναφορές</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Γενικές πληροφορίες<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="personalinformation.php?patientID=<?= $_GET['patientID'] ?>">Προσωπικά Στοιχεία Πελάτη</a>
											</li>
											<li>
												<a href="schedule.php?patientID=<?= $_GET['patientID'] ?>">Διαθέσιμο Πρόγραμμα Πελάτη</a>
											</li>
											<li>
												<a href="contactlog.php?patientID=<?= $_GET['patientID'] ?>">Contact Logs</a>
											</li>
										</ul>

									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ιατρικές Πληροφορίες <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="clientrelationships.php?patientID=<?= $_GET['patientID'] ?>">Οικογενειακές Σχέσεις Πελάτη</a>
											</li>
											<li>
												<a href="clientmedication.php?patientID=<?= $_GET['patientID'] ?>">Φαρμακευτική Αγωγή Πελάτη</a>
											</li>
											<li>
												<a href="medhistory.php?patientID=<?= $_GET['patientID'] ?>">Medlog</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="externalinformation.php?patientID=<?= $_GET['patientID'] ?>">Εξωτερική Πληροφόρηση</a>
									</li>
									<li>
										<a href="billing.php?patientID=<?= $_GET['patientID'] ?>">Πληρωμές</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Τερματισμός<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="formcomplaints.php">Παράπονα πελάτη</a>
											</li>
											<li>
												<a href="formreasons.php">Λόγοι Τερματισμού</a>
											</li>
										</ul>
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
						<form method="post" action="">
						<div class="panel-body">
							<input type="hidden" name="patientID" value=<?=$_GET['patientID']?>>
							<div class="form-group">
								<label for="emotionsforuni">Συναισθήματα για πανεπιστήμιο:</label>
								<input type="text" class="form-control" id="emotionsforuni" placeholder="" name="feelaboutstudies" value=<?=$response['medlog']['feelaboutstudies'] ?>>
							</div>
							<div class="form-group">
								<label for="timeofwork">Eργασία:</label>
								<input type="text" class="form-control" id="timeofwork" placeholder="" name="job" value=<?=$response['medlog']['job'] ?>>
							</div>
							<div class="form-group">
								<label for="timeofwork">Ώρα εργασίας:</label>
								<input type="text" class="form-control" id="timeofwork" placeholder="" name="jobtime" value=<?=$response['medlog']['jobtime'] ?>>
							</div>
							<div class="form-group">
								<label for="workduties">Καθήκοντα εργασίας:</label>
								<input type="text" class="form-control" id="workduties" placeholder="" name="jobdutys" value=<?=$response['medlog']['jobdutys'] ?>>
							</div>
							<div class="form-group">
								<label for="anexietywork">Άγχος εργασίας:</label>
								<input type="text" class="form-control" id="anexietywork" placeholder="" name="jobstress" value=<?=$response['medlog']['jobstress'] ?>>
							</div>
							<div class="form-group">
								<label for="previouswork">Προηγούμενη εργασία:</label>
								<input type="text" class="form-control" id="previouswork" placeholder="" name="jobprevious" value=<?=$response['medlog']['jobprevious'] ?>>
							</div>
							<div class="form-group">
								<label for="relationship">Σε σχέση:</label>
								<input type="text" class="form-control" id="relationship" placeholder="" name="relationshipin" value=<?=$response['medlog']['relationshipin'] ?>>
							</div>
							<div class="form-group">
								<label for="moreinfoforrel">Πληροφορίες για σχέσεις:</label>
								<input type="text" class="form-control" id="moreinfoforrel" placeholder="" name="relationshipinfo" value=<?=$response['medlog']['relationshipinfo'] ?>>
							</div>
							<div class="form-group">
								<label for="nameofrel">Όνομα σχέσης:</label>
								<input type="text" class="form-control" id="nameofrel" placeholder="" name="relationshipname" value=<?=$response['medlog']['relationshipname'] ?>>
							</div>
							<div class="form-group">
								<label for="jobofrel">Εργασία σχέσης:</label>
								<input type="text" class="form-control" id="jobofrel" placeholder="" name="relationshipjob" value=<?=$response['medlog']['relationshipjob'] ?>>
							</div>
							<div class="form-group">
								<label for="kids">Παιδία:</label>
								<input type="text" class="form-control" id="kids" placeholder="" name="children" value=<?=$response['medlog']['children'] ?>>
							</div>
							<div class="form-group">
								<label for="roommate">Συγκατοίκηση:</label>
								<input type="text" class="form-control" id="roommate" placeholder="" name="staywith" value=<?=$response['medlog']['staywith'] ?>>
							</div>
							<div class="form-group">
								<label for="roomatedif">Δυσκολίες συγκατοίκησης:</label>
								<input type="text" class="form-control" id="roomatedif" placeholder="" name="staydificulties" value=<?=$response['medlog']['staydificulties'] ?>>
							</div>
							<div class="form-group">
								<label for="family">Σύνθεση οικογένειας:</label>
								<input type="text" class="form-control" id="family" placeholder="" name="familysynthesis" value=<?=$response['medlog']['familysynthesis'] ?>>
							</div>
							<div class="form-group">
								<label for="family">Οικογνειακά Προβλήματα:</label>
								<input type="text" class="form-control" id="family" placeholder="" name="familyproblems" value=<?=$response['medlog']['familyproblems'] ?>>
							</div>
							<div class="form-group">
								<label for="support">Υποστήρικη απο οικογένεια/φίλους:</label>
								<input type="text" class="form-control" id="support" placeholder="" name="support" value=<?=$response['medlog']['support'] ?>>
							</div>
							<div class="form-group">
								<label for="finance">Οικονομική κατάσταση:</label>
								<input type="text" class="form-control" id="finance" placeholder="" name="economicstatus" value=<?=$response['medlog']['economicstatus'] ?>>
							</div>
							<div class="form-group">
								<label for="finance">Οικονομική βοήθεια:</label>
								<input type="text" class="form-control" id="finance" placeholder="" name="economichelp1" value=<?=$response['medlog']['economichelp']." ".$response['medlog']['economichelp1'] ?>>
							</div>
							<div class="form-group">
								<label for="legalissues">Νομικά προβλήματα:</label>
								<input type="text" class="form-control" id="legalissues" placeholder="" name="legalissues1" value=<?=$response['medlog']['legalissues']." ".$response['medlog']['legalissues1']?>>
							</div>
							<div class="form-group">
								<label for="medproblems">Ιατρικά προβλήματα:</label>
								<input type="text" class="form-control" id="medproblems" placeholder="" name="healthissues" value=<?=$response['medlog']['healthissues']?>>
							</div>
							<div class="form-group">
								<label for="concerns">Ιατρικές ανησυχίες:</label>
								<input type="text" class="form-control" id="concerns" placeholder="" name="healthconsernes" value=<?=$response['medlog']['healthconsernes'] ?>>
							</div>
							<div class="form-group">
								<label for="doc">Γιατρός:</label>
								<input type="text" class="form-control" id="doc" placeholder="" name="doctor" value=<?=$response['medlog']['doctor'] ?>>
							</div>
							<div class="form-group">
								<label for="contactdoc">Στοιχεία επικοινωνίας ιατρού:</label>
								<input type="text" class="form-control" id="contactdoc" placeholder="" name="doctorcontacts" value=<?=$response['medlog']['doctorcontacts'] ?>>
							</div>
							<div class="form-group">
								<label for="medicaltreatment">Ιατρική Αγωγή:</label>
								<input type="text" class="form-control" id="medicaltreatment" placeholder="" name="medicines1" value=<?=$response['medlog']['medicines']." ".$response['medlog']['medicines1']?>>
							</div>
							<div class="form-group">
								<label for="generalhealth">Γενική υγεία:</label>
								<input type="text" class="form-control" id="generalhealth" placeholder="" name="generalhealth" value=<?=$response['medlog']['generalhealth'] ?>>
							</div>
							<div class="form-group">
								<label for="flag">Κάπνισμα:</label>
								<input type="text" class="form-control" id="flag" placeholder="" name="smoking1" value=<?=$response['medlog']['smoking']." ".$response['medlog']['smoking1']?>>
							</div>
							<div class="form-group">
								<label for="alcohol">Αλκοόλ:</label>
								<input type="text" class="form-control" id="alcohol" placeholder="" name="alcohol1" value=<?=$response['medlog']['alcohol']." ".$response['medlog']['alcohol1']?>>
							</div>
							<div class="form-group">
								<label for="drugs">Ναρκωτικά:</label>
								<input type="text" class="form-control" id="drugs" placeholder="" name="drugs1" value=<?=$response['medlog']['drugs']." ".$response['medlog']['drugs1']?>>
							</div>
							<div class="form-group">
								<label for="marihuana">Συχνότητα λήψης marihuana:</label>
								<input type="text" class="form-control" id="marihuana" placeholder="" name="marihuanafrequency" value=<?=$response['medlog']['marihuanafrequency'] ?>>
							</div>
							<div class="form-group">
								<label for="games">Τυχερά παιχνίδια:</label>
								<input type="text" class="form-control" id="games" placeholder="" name="luckygames1" value=<?=$response['medlog']['luckygames']." ".$response['medlog']['luckygames1']?>>
							</div>
							<div class="form-group">
								<label for="addiction">Εθισμός:</label>
								<input type="text" class="form-control" id="addiction" placeholder="" name="betmore" value=<?=$response['medlog']['betmore'] ?>>
							</div>
							<div class="form-group">
								<label for="gambling">Συναισθήματα για τζόγο:</label>
								<input type="text" class="form-control" id="gambling" placeholder="" name="speakaboutlucky" value=<?=$response['medlog']['speakaboutlucky'] ?>>
							</div>
							<div class="form-group">
								<label for="youngage">Παιδική ηλικία:</label>
								<input type="text" class="form-control" id="youngage" placeholder="" name="childlife" value=<?=$response['medlog']['childlife'] ?>>
							</div>
							<div class="form-group">
								<label for="youngage">Παιδική τραύμα ή άλλο:</label>
								<input type="text" class="form-control" id="youngage" placeholder="" name="trauma" value=<?=$response['medlog']['trauma'] ?>>
							</div>
							<div class="form-group">
								<label for="youngage">Στρατιωτική ζωή:</label>
								<input type="text" class="form-control" id="youngage" placeholder="" name="militarylife" value=<?=$response['medlog']['militarylife'] ?>>
							</div>
							<div class="form-group">
								<label for="youngageproblems">Προβλήματα παιδικής ηλικίας:</label>
								<input type="text" class="form-control" id="youngageproblems" placeholder="" name="childlifeproblems" value=<?=$response['medlog']['childlifeproblems'] ?>>
							</div>
							<div class="form-group">
								<label for="previous">Προηγούμενη ψυχολογική υποστήριξη:</label>
								<input type="text" class="form-control" id="previous" placeholder="" name="psychosupport1" value=<?=$response['medlog']['psychosupport']." ".$response['medlog']['psychosupport1']?>>
							</div>
							<div class="form-group">
								<label for="previousdiagnosis">Προηγούμενη ψυχολογική διάγνωση:</label>
								<input type="text" class="form-control" id="previousdiagnosis" placeholder="" name="psychodiagnosis1" value=<?=$response['medlog']['psychodiagnosis']." ".$response['medlog']['psychodiagnosis1']?>>
							</div>
							<div class="form-group">
								<label for="malfunction">Δυσλειτουργικότητα:</label>
								<input type="text" class="form-control" id="malfunction" placeholder="" name="disability1" value=<?=$response['medlog']['disability']." ".$response['medlog']['disability1']?>>
							</div>
							<div class="form-group">
								<label for="sucide">Αυτοκτονική πρόθεση:</label>
								<input type="text" class="form-control" id="sucide" placeholder="" name="suicideprothesis1" value=<?=$response['medlog']['suicideprothesis']." ".$response['medlog']['suicideprothesis1']?>>
							</div>
							<div class="form-group">
								<label for="violentintention">Βίαιη πρόθεση:</label>
								<input type="text" class="form-control" id="violentintention" placeholder="" name="violenceprothesis1" value=<?=$response['medlog']['violenceprothesis']." ".$response['medlog']['violenceprothesis1']?>>
							</div>
							<div class="form-group">
								<label for="violence">Βία:</label>
								<input type="text" class="form-control" id="violence" placeholder="" name="violence1" value=<?=$response['medlog']['violence']." ".$response['medlog']['violence1']?>>
							</div>
							<div class="form-group">
								<label for="emotionsfortherapy">Συναισθήματα για τη θεραπεία:</label>
								<input type="text" class="form-control" id="emotionsfortherapy" placeholder="" name="feelfortherapy" value=<?=$response['medlog']['feelfortherapy'] ?>>
							</div>
							<div class="form-group">
								<label for="moreinfo">Άλλες σημαντικές πληροφορίες:</label>
								<input type="text" class="form-control" id="moreinfo" placeholder="" name="otherseriousinfo" value=<?=$response['medlog']['otherseriousinfo'] ?>>
							</div>
							<div class="form-group">
								<label for="reasons">Λόγοι για θεραπεία:</label>
								<input type="text" class="form-control" id="reasons" placeholder="" name="reasonsfortherapy" value=<?=$response['medlog']['reasonsfortherapy'] ?>>
							</div>
							<div class="form-group">
								<label for="signed">Υπογεγραμμένο απο Supervisor:</label>
								<input type="text" class="form-control" id="signed" placeholder="" name="signed" value=<?=$response['medlog']['signed'] ?>>
							</div>
							<div class="form-group">
								<label for="completed">Ημερομηνία που έχει συμπληρωθεί εντελώς:</label>
								<input type="date" class="form-control" id="completed" placeholder="" name="datecompleted" value=<?=$response['medlog']['datecompleted'] ?>>
							</div>
							<div><h3>Έκθεση Αρχικής Αξιολόγησης<b></h3><p>(Να συμπληρωθεί απο Ψυχολόγο)</p></div>
							<div class="form-group">
								<label for="mainproblem"> Παρουσιαζόμενο πρόβλημα (διάρκεια, συχνότητα, σχέση με παράγοντες της κατάστασης, παράγοντες που συντείνουν στη διατήρηση, δευτερεύοντα οφέλη). Σχετικές δημογραφικές πληροφορίες:</label>
								<input type="text" class="form-control" id="mainproblem" placeholder="" name="mainproblem" value=<?=$response['medlog']['mainproblem'] ?>>
							</div>
							<div class="form-group">
								<label for="historyproblem">Ιστορικό προβλήματος και προηγούμενη θεραπεία:</label>
								<input type="text" class="form-control" id="historyproblem" placeholder="" name="historyofproblem" value=<?=$response['medlog']['historyofproblem'] ?>>
							</div>
							<div class="form-group">
								<label for="anxietycause">Τρέχοντες παράγοντες άγχους ή/και έντασης:</label>
								<input type="text" class="form-control" id="anxietycause" placeholder="" name="anxietyfactors" value=<?=$response['medlog']['anxietyfactors'] ?>>
							</div>
							<div class="form-group">
								<label for="request">Ειδικά Αιτήματα/Διευκολύνσεις: </label>
								<input type="number" class="form-control" id="request" placeholder="" name="specialrequests" value=<?=$response['medlog']['specialrequests'] ?>>
							</div>
							<div class="form-group">
								<label for="mood">Παρουσία, Στάση, Συμπεριφορά:</label>
								<input type="text" class="form-control" id="mood" placeholder="" name="behaviour" value=<?=$response['medlog']['behaviour'] ?>>
							</div>
							<div class="form-group">
								<label for="cognitivefunctionality"> Γνωστικές Λειτουργίες(προσανατολισμός και μνήμη, γνωστική/νοητική αξιολόγηση, διαδικασία σκέψης, συλλογισμός και κρίση):</label>
								<input type="text" class="form-control" id="cognitivefunctionality" placeholder="" name="gnosticfunction" value=<?=$response['medlog']['gnosticfunction'] ?>>
							</div>
							<div class="form-group">
								<label for="mood">Διάθεση, συναίσθημα(συμπ. αξιολόγηση για αυτοκτονικό/ανθρωποκτονικό ιδεασμό):</label>
								<input type="text" class="form-control" id="mood" placeholder="" name="mood" value=<?=$response['medlog']['mood'] ?>>
							</div>
							<div class="form-group">
								<label for="psychometricresults">Αποτελέσματα Ψυχομετρικής Αξιολόγησης:</label>
								<input type="text" class="form-control" id="psychometricresults" placeholder="" name="psychometricresult" value=<?=$response['medlog']['psychometricresult'] ?>>
							</div>
							<div class="form-group">
								<label for="clinicalimpression">Διαγνωστική / Κλινική Εντύπωση:</label>
								<input type="text" class="form-control" id="clinicalimpression" placeholder="" name="clinicalimpression" value=<?=$response['medlog']['clinicalimpression'] ?>>
							</div>
							<div class="form-group">
								<label for="psychologicalfunctionality">Ψυχολογική λειτουργικότητα:</label>
								<input type="text" class="form-control" id="psychologicalfunctionality" placeholder="" name="psychologicalfunc" value=<?=$response['medlog']['psychologicalfunc'] ?>>
							</div>
							<div class="form-group">
								<label for="academicfunctionality">Ακαδημαική λειτουργικότητα:</label>
								<input type="text" class="form-control" id="academicfunctionality" placeholder="" name="professionacademicfunc" value=<?=$response['medlog']['professionacademicfunc'] ?>>
							</div>
							<div class="form-group">
								<label for="socialfunctionality">Κοινωνική λειτουργικότητα:</label>
								<input type="text" class="form-control" id="socialfunctionality" placeholder="" name="socialfunc" value=<?=$response['medlog']['socialfunc'] ?>>
							</div>

							<div class="form-group">
								<label for="selfimprovement">Αυτοφροντίδα:</label>
								<input type="text" class="form-control" id="selfimprovement" placeholder="" name="autofix" value=<?=$response['medlog']['autofix'] ?>>
							</div>
							<div class="form-group">
								<label for="treatmentfactors">Παράγοντες θεραπείας(προηγούμενες προσπάθειες θεραπείας, κινητοποίηση/επίγνωση πρόγνωση, καταλληλότητα για θεραπεία):</label>
								<input type="text" class="form-control" id="treatmentfactors" placeholder="" name="therapyfactors" value=<?=$response['medlog']['therapyfactors'] ?>>
							</div>
							<div class="form-group">
								<label for="recommtherapy">Εισηγήσεις θεραπείας(ψυχολογικές δυνάμεις, προτεινόμενοι στόχοι, δεξιότητες που μπορούν να αξιοποιηθούν ή να στοχευθούν):</label>
								<input type="text" class="form-control" id="recommtherapy" placeholder="" name="therapysuggestions" value=<?=$response['medlog']['therapysuggestions'] ?>>
							</div>
							<div class="form-group">
								<label for="additionalev">Ζητήματα που χρήζουν επιπρόσθετη αξιολόγηση:</label>
								<input type="text" class="form-control" id="additionalev" placeholder="" name="additionalevaluation" value=<?=$response['medlog']['additionalevaluation'] ?>>
							</div>
							<div class="form-group">
								<label for="q14">Πιθανή Πολυαξονική Εκτίμηση με βάση το DSM </label>
								<br>
								<label for="q14more">Άξονας Ι: Κλινικές διαταραχές, άλλες καταστάσεις που μπορούν να αποτελέσουν εστία κλινικής προσοχής</label>
								<input type="text" class="form-control" id="q14a" placeholder="" name="dsmaxis1" value=<?=$response['medlog']['dsmaxis1'] ?>>
								<label for="q14more">Άξονας ΙΙ:Διαταραχές της προσωπικότητας. Νοητική καθυστέρηση</label>
								<input type="text" class="form-control" id="q14b" placeholder="" name="dsmaxis2" value=<?=$response['medlog']['dsmaxis2'] ?>>
								<label for="q14more">Άξονας ΙΙΙ:Σωματικές Νόσοι</label>
								<input type="text" class="form-control" id="q14c" placeholder="" name="dsmaxis3" value=<?=$response['medlog']['dsmaxis3'] ?>>
								<label for="q14more">Άξονας ΙV:Ψυχοκοινωνικά και περιβαλλοντικά προβλήματα</label>
								<input type="text" class="form-control" id="q14d" placeholder="" name="dsmaxis4" value=<?=$response['medlog']['dsmaxis4'] ?>>
								<label for="q14more">Άξονας V:Σφαιρική εκτίμηση λειτουργικότητας (GAF):</label>
								<input type="text" class="form-control" id="q14e" placeholder="" name="dsmaxis5" value=<?=$response['medlog']['dsmaxis5'] ?>>
							</div>
							<div class="form-group">
								<label for="firstprogram">Αρχικό πρόγραμμα θεραπείας(συμπεριλαμβάνονται στόχοι θεραπείας, τρόποι και υπολογιζόμενος χρόνος θεραπείας):</label>
								<input type="text" class="form-control" id="firstprogram" placeholder="" name="initialtherapyprogram" value=<?=$response['medlog']['initialtherapyprogram'] ?>>
							</div>
							<div class="form-group">
								<label for="addmore">Προσθήκη ανασκόπησης</label>
								<input type="submit" id="addmore" name="addmore" value="ADD" class="btn btn-default">
									
								
							</div>
							<div class="form-group">
								<label for="addmore">Save Changes</label>
								<input type="submit" name="submit">
							</div>
						</div>
						</form>
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
//var_dump($_POST);
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/editmedlog.php";
$method='POST';
if(isset($_POST['submit'])){
$postfields=http_build_query($_POST);
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
//$GLOBALS['curtoken']=giveToken();
//print "<h5>".$GLOBALS['curtoken']."</h5>";
$response1 = request($url, $method, $postfields, $tok);
}
	var_dump($response1);
	header("Refresh:0");
}
if(isset($_POST['addmore'])){
	header("Location:form11.php");
}
?>
