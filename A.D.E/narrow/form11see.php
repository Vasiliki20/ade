<?php
ob_start();
require_once("requests.php");
$_GET['patientID']=Encryption::decode($_GET['patientID']);
$_GET['an']=Encryption::decode($_GET['an']);
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
								<a href="myprofile.php"><i class="fa fa-user fa-fw"></i> Προφίλ</a>
							</li>
							<li>
								<a href="usermanual.php"><i class="fa fa-gear fa-fw"></i> Εγχειρίδιο</a>
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
								<a href="psindex.php"><i class="fa fa-table"></i> Ημερολόγιο</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-list"></i> Επιλογές<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="tasklist.php">Λίστα Εργασιών</a>
									</li>
									<li>
										<a href="myclients.php">Πελάτες</a>
									</li>
									<li>
										<a href="myappointments.php">Ραντεβού</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="formupload_supervisor.php"><i class="fa fa-upload"></i> Ανάρτηση Αρχείου</a>
							</li>
							<li>
								<a href="reports.php"><i class="fa fa-bar-chart-o"></i> Στατιστικές</a>
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
										<a href="casenotes.php?patientID=<?=Encryption::encode($_GET['patientID']) ?>">Σημειώσεις Προόδου</a>
									</li>
									<li>
										<a href="filesofpatient.php?patientID=<?= Encryption::encode($_GET['patientID']) ?>">Εκθέσεις/Αναφορές</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Γενικές πληροφορίες<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="personalinformationfull.php?patientID=<?= Encryption::encode($_GET['patientID']) ?>">Προσωπικά Στοιχεία Πελάτη</a>
											</li>
											<li>
												<a href="schedule.php?patientID=<?= Encryption::encode($_GET['patientID']) ?>">Διαθέσιμο Πρόγραμμα Πελάτη</a>
											</li>
											<li>
												<a href="contactlog.php?patientID=<?= Encryption::encode($_GET['patientID']) ?>">Contact Logs</a>
											</li>
										</ul>

									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ιατρικές Πληροφορίες <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="clientrelationships.php?patientID=<?= Encryption::encode($_GET['patientID']) ?>">Οικογενειακές Σχέσεις Πελάτη</a>
											</li>
											<li>
												<a href="clientmedication.php?patientID=<?= Encryption::encode($_GET['patientID']) ?>">Φαρμακευτική Αγωγή Πελάτη</a>
											</li>
											<li>
												<a href="medhistory.php?patientID=<?= Encryption::encode($_GET['patientID']) ?>">Medlog</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="externalinformation.php?patientID=<?= Encryption::encode($_GET['patientID']) ?>">Εξωτερική Πληροφόρηση</a>
									</li>
									<li>
										<a href="billing.php?patientID=<?= Encryption::encode($_GET['patientID']) ?>">Πληρωμές</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Τερματισμός<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="formcomplaints.php?patientID=<?= Encryption::encode($_GET['patientID']) ?>">Παράπονα πελάτη</a>
											</li>
											<li>
												<a href="formreasons.php?patientID=<?= Encryption::encode($_GET['patientID']) ?>">Λόγοι Τερματισμού</a>
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
						<div class="panel-body">
							<form action="" method="post">
								<div class="form-group">
								
									<label for="date"><label>1. Ημερ. Έναρξης Υπηρεσιών: </label></label>
									<input type="date" class="form-control" id="date" placeholder="" name="datesubmited" value="<?=$response['anaskopisi'][$_GET['an']]['datesubmited']?>">
								</div>
								<div class="form-group">
									<label for="eidos"><label>2. Είδος θεραπείας/υπηρεσιών: </label></label>
									<input type="text" class="form-control" id="eidos" placeholder="" name="kind" value="<?=$response['anaskopisi'][$_GET['an']]['kind']?>">
								</div>
								<div class="form-group">
									<label for="firstissues"><label>3. Αρχικό παρουσιαζόμενο ζήτημα/ζητήματα και επιπρόσθετα παρουσιαζόμενα ζητήματα </label></label>
									<input type="text" class="form-control" id="firstissues" placeholder="" name="initialproblem" value="<?=$response['anaskopisi'][$_GET['an']]['initialproblem']?>">
								</div>
								<div class="form-group">
									<label for="issues"><label>4. Παρουσιαζόμενα ζητήματα : </label></label>
									<input type="text" class="form-control" id="issues" placeholder="" name="problems" value="<?=$response['anaskopisi'][$_GET['an']]['problems']?>">
								</div>
								<div class="form-group">
									<label for="brief"><label>5. Σύνοψη Αρχικής Αξιολόγησης:</label></label>
									<br>
									<label><em>(ιστορικό, προσωπικά στοιχεία, παράγοντες άγχους, θέματα υγείας και άλλα συναφή θέματα, κλινική/διαγνωστική εντύπωση, λειτουργικότητα, προτεινόμενο πλάνο παρέμβασης) </em></label>
									<br>
									<input type="text" class="form-control" id="brief" placeholder="" name="sinopsis" value="<?=$response['anaskopisi'][$_GET['an']]['sinopsis']?>">
								</div>
								<div class="form-group">
									<label for="changes"><label>6. Σημαντικές αλλαγές στις προσωπικές και περιβαλλοντικές συνθήκες  κατά την υπό εξέταση περίοδο:</label></label>
									<br>
									<label><em>(π.χ. αλλαγές σε εργασία, σπουδές, προσωπικές σχέσεις, συνθήκες διαμονής, υγεία, κ.ο.κ)</em></label>
									<br>
									<input type="text" class="form-control" id="changes" placeholder="" name="changesenv" value="<?=$response['anaskopisi'][$_GET['an']]['changesenv']?>">
								</div>
								</table>
								<div class="form-group">
									<label for="progress"><label>7. Εξέλιξη θεραπείας : </label></label>
									<br>
									<label><em>(Σύνοψη μέχρι στιγμής παρέμβασης/θεραπείας συμπ. αποκλίσεις από αρχικό πλάνο και αιτιολόγηση, δυσκολίες/εμπόδια, σημεία που διευκολύνουν τη θεραπεία, στάση/συμπεριφορά πελάτη κ.ο.κ.) </em></label>
									<br>
									<input type="text" class="form-control" id="progress" placeholder="" name="evolution" value="<?=$response['anaskopisi'][$_GET['an']]['evolution']?>">
								</div>
								<div class="form-group">
									<label for="xeirismos"><label>8. Αλλαγές ως αποτέλεσμα της θεραπείας </label></label>
									<br>
									<label><em>(στόχοι που επιτεύχθηκαν, νέες δεξιότητες/συμπεριφορές/συνήθειες, αλλαγές στη λειτουργικότητα, νέα αιτήματα κ.ο.κ.)</em></label>
									<br>
									<input type="text" class="form-control" id="xeirismos" placeholder="" name="changes" value="<?=$response['anaskopisi'][$_GET['an']]['changes']?>">
								</div>
								<div class="form-group">
									<label for="future"><label>9. Μελλοντικό Πρόγραμμα Θεραπείας – Εισηγήσεις και Προγραμματισμός:</label></label>
									<br>
									<label><em>(συμεριλαμβάνονται στόχοι θεραπείας, μέθοδοι-τεχνικές και υπολογιζόμενος χρόνος θεραπείας)</em></label>
									<br>
									<input type="text" class="form-control" id="future" placeholder="" name="mellon" value="<?=$response['anaskopisi'][$_GET['an']]['mellon']?>">
								</div>
								<div class="form-group">
									<table style="width:100%">
										<tr>
											<th></th>
											<th>Βαθμός</th>
											
										</tr>
										<tr>
											<td>α. ψυχολογική</td>
											<td>
											<input type="text" class="form-control" id="future" placeholder="" name="mellon" value="<?=$response['anaskopisi'][$_GET['an']]['psychologicalfunc']?>">
											</td>
											
										</tr>
										<tr>
											<td>β. επαγγελματική/ακαδημαϊκή</td>
											<td>
											<input type="text" class="form-control" id="future" placeholder="" name="mellon" value="<?=$response['anaskopisi'][$_GET['an']]['professionacademicfunc']?>">
											</td>
										</tr>
										<tr>
											<td>γ. κοινωνική</td>
											<td>
											<input type="text" class="form-control" id="future" placeholder="" name="mellon" value="<?=$response['anaskopisi'][$_GET['an']]['socialfunc']?>">
											</td>
										</tr>
										<tr>
											<td>δ. αυτοφροντίδα</td>
											<td>
											<input type="text" class="form-control" id="future" placeholder="" name="mellon" value="<?=$response['anaskopisi'][$_GET['an']]['autofix']?>">
											</td>
										</tr>
									</table>
								</div>
								<div class="form-group">
									<label for="more"><label>10. Οποιεσδήποτε άλλες σημαντικές πληροφορίες:</label></label>
									<input type="text" class="form-control" id="more" placeholder="" name="infos" value="<?=$response['anaskopisi'][$_GET['an']]['infos']?>">
								</div>
								
							</form>
						</div>
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

