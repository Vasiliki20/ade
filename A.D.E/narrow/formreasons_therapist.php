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
									<li>
										<a href="filesofpatient_therapist.php?patientID=<?=$_GET['patientID'] ?>">Εκθέσεις/Αναφορές</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Γενικές πληροφορίες<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="personalinformationfull_therapist.php?patientID=<?= $_GET['patientID'] ?>">Προσωπικά Στοιχεία Πελάτη</a>
											</li>
											<li>
												<a href="schedule_therapist.php?patientID=<?= $_GET['patientID'] ?>">Διαθέσιμο Πρόγραμμα Πελάτη</a>
											</li>
											<li>
												<a href="contactlog_therapist.php?patientID=<?= $_GET['patientID'] ?>">Contact Logs</a>
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
										</ul>
									</li>
									<li>
										<a href="externalinformation_therapist.php?patientID=<?= $_GET['patientID'] ?>">Εξωτερική Πληροφόρηση</a>
									</li>
									<li>
										<a href="billing_therapist.php?patientID=<?= $_GET['patientID'] ?>">Πληρωμές</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Τερματισμός<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="formcomplaints_therapist.php?patientID=<?=$_GET['patientID'] ?>">Παράπονα πελάτη</a>
											</li>
											<li>
												<a href="formreasons_therapist.php?patientID=<?=$_GET['patientID'] ?>">Λόγοι Τερματισμού</a>
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
							Τερματισμός Θεραπείας/Παρέμβασης
						</div>
						<div class="panel panel-body">
							<form action="" method="post">
								<div class="form-group">
									<label for="date"><strong>1. Ημερ. Έναρξης Υπηρεσιών: </strong></label>
									<input type="date" class="form-control" id="date" placeholder="" name="date">
								</div>
								<div class="form-group">
									<label for="number"><strong>2. Αρ. Συνεδριών</strong></label>
									<input type="number" class="form-control" id="number" placeholder="" name="number">
								</div>
								<div class="form-group">
									<label for="dateend"><strong>3. Ημερ. Αποδέσμευσης:</strong> </label>
									<input type="date" class="form-control" id="dateend" placeholder="" name="dateend">
								</div>
								<div class="form-group">
									<label for="eidos"><strong>4. Είδος θεραπείας/υπηρεσιών: </strong></label>
									<input type="text" class="form-control" id="eidos" placeholder="" name="eidos">
								</div>
								<div class="form-group">
									<label for="firstissues"><strong>5. Αρχικό παρουσιαζόμενο ζήτημα/ζητήματα και επιπρόσθετα παρουσιαζόμενα ζητήματα </strong></label>
									<input type="text" class="form-control" id="firstissues" placeholder="" name="firstissues">
								</div>
								<div class="form-group">
									<label for="reasons"><strong>6. Λόγος/Λόγοι Αποδέσμευσης: </strong></label>
									<input type="text" class="form-control" id="reasons" placeholder="" name="reasons">
								</div>
								<div class="form-group">
									<label for="brief"><strong>7. Έκβαση Θεραπείας: </strong></label>
									<br>
									<label><em>(Σύνοψη παρέμβασης/θεραπείας συμπ. αποκλίσεις από αρχικό πλάνο και αιτιολόγηση, δυσκολίες/εμπόδια, σημεία που διευκόλυναν τη θεραπεία, στάση/συμπεριφορά πελάτη κ.ο.κ., αποτελέσματα) </em></label>
									<br>
									<input type="text" class="form-control" id="brief" placeholder="" name="brief">
								</div>
								</table>
								<div class="form-group">
									<label for="future"><strong>8. Επανεκτίμηση Συνολικής Λειτουργικότητας – Βαθμός Δυσλειτουργίας κατά τον τερματισμό</strong></label>
									<br>
									<label><em>(βάλτε Χ στο σημείο που θεωρείτε ότι αντικατοπτρίζει ό,τι ισχύει για τον πελάτη κατά τον τερματισμό/ολοκλήρωση της θεραπείας) </em></label>
								</div>
								<div class="form-group">
									<table style="width:100%">
										<col width="250">
										<tr>
											<th></th>
											<th>Απούσα</th>
											<th>Ήπια</th>
											<th>Μέτρια</th>
											<th>Σοβαρή</th>
										</tr>
										<tr>
											<td>α. ψυχολογική</td>
											<input type="hidden" name="epsychologicalfunc">
											<td>
											<input type="radio" name="epsychologicalfunc" class="form-group" id="a1">
											</td>
											<td>
											<input type="radio" name="epsychologicalfunc" class="form-group" id="a2">
											</td>
											<td>
											<input type="radio" name="epsychologicalfunc" class="form-group" id="a3">
											</td>
											<td>
											<input type="radio" name="epsychologicalfunc" class="form-group" id="a4">
											</td>
										</tr>
										<tr>
											<td>β. επαγγελματική/ακαδημαϊκή</td>
											<input type="hidden" name="eprofessionacademicfunc">
											<td>
											<input type="radio" name="eprofessionacademicfunc" class="form-group" id="b1">
											</td>
											<td>
											<input type="radio" name="eprofessionacademicfunc" class="form-group" id="b2">
											</td>
											<td>
											<input type="radio" name="eprofessionacademicfunc" class="form-group" id="b3">
											</td>
											<td>
											<input type="radio" name="eprofessionacademicfunc" class="form-group" id="b4">
											</td>
										</tr>
										<tr>
											<td>γ. κοινωνική</td>
											<input type="hidden" name="esocialfunc">
											<td>
											<input type="radio" name="esocialfunc" class="form-group" id="g1">
											</td>
											<td>
											<input type="radio" name="esocialfunc" class="form-group" id="g2">
											</td>
											<td>
											<input type="radio" name="esocialfunc" class="form-group" id="g3">
											</td>
											<td>
											<input type="radio" name="esocialfunc" class="form-group" id="g4">
											</td>
										</tr>
										<tr>
											<td>δ. αυτοφροντίδα</td>
											<input type="hidden" name="eautofix">
											<td>
											<input type="radio" name="eautofix" class="form-group" id="d1">
											</td>
											<td>
											<input type="radio" name="eautofix" class="form-group" id="d2">
											</td>
											<td>
											<input type="radio" name="eautofix" class="form-group" id="d3">
											</td>
											<td>
											<input type="radio" name="eautofix" class="form-group" id="d4">
											</td>
										</tr>
									</table>
								</div>
								<div class="form-group">
									<label for="more"><strong>9. Οποιεσδήποτε άλλες σημαντικές πληροφορίες  ή παρατηρήσεις</strong></label>
									<input type="text" class="form-control" id="more" placeholder="" name="more">
								</div>
								<button type="submit" class="btn btn-default" name="submit">
									Submit
								</button>
							</form>
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
