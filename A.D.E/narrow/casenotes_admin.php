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
								<a href="myprofile_admin.php"><i class="fa fa-user fa-fw"></i> Προφίλ</a>
							</li>
							<li>
								<a href="usermanual_admin.php"><i class="fa fa-gear fa-fw"></i> Εγχειρίδιο</a>
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
								<a href="psindex_admin.php"><i class="fa fa-table"></i> Ημερολόγιο</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-list"></i> Επιλογές<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="myclients_admin.php">Πελάτες</a>
									</li>
									<li>
										<a href="therapists.php">Θεραπευτές</a>
									</li>
									<li>
										<a href="myappointments_admin.php">Ραντεβού</a>
									</li>
									<li>
										<a href="waitinglist_admin.php">Λίστα Αναμονής</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
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
						<h1 class="page-header">Αρχεία Πελάτη</h1>
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
										<a href="casenotes_admin.php?patientID=<?=$_GET['patientID'] ?>">Σημειώσεις Προόδου</a>
									</li>
									<li>
										<a href="filesofpatient_admin.php?patientID=<?=$_GET['patientID'] ?>">Εκθέσεις/Αναφορές</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Γενικές πληροφορίες<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="personalinformationfull_admin.php?patientID=<?= $_GET['patientID'] ?>">Προσωπικά Στοιχεία Πελάτη</a>
											</li>
											<li>
												<a href="schedule_admin.php?patientID=<?= $_GET['patientID'] ?>">Διαθέσιμο Πρόγραμμα Πελάτη</a>
											</li>
											<li>
												<a href="contactlog_admin.php?patientID=<?= $_GET['patientID'] ?>">Contact Logs</a>
											</li>
										</ul>

									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ιατρικές Πληροφορίες <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="clientrelationships_admin.php?patientID=<?= $_GET['patientID'] ?>">Οικογενειακές Σχέσεις Πελάτη</a>
											</li>
											<li>
												<a href="clientmedication_admin.php?patientID=<?= $_GET['patientID'] ?>">Φαρμακευτική Αγωγή Πελάτη</a>
											</li>
											<li>
												<a href="medhistory_admin.php?patientID=<?= $_GET['patientID'] ?>">Medlog</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="externalinformation_admin.php?patientID=<?= $_GET['patientID'] ?>">Εξωτερική Πληροφόρηση</a>
									</li>
									<li>
										<a href="billing_admin.php?patientID=<?= $_GET['patientID'] ?>">Πληρωμές</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Τερματισμός<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="formcomplaints_admin.php?patientID=<?=$_GET['patientID'] ?>">Παράπονα πελάτη</a>
											</li>
											<li>
												<a href="formreasons_admin.php?patientID=<?=$_GET['patientID'] ?>">Λόγοι Τερματισμού</a>
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
							Σημειώσεις προόδου
						</div>
						<div class="panel-body">
							<table id="casenotes" style="width:100%">
								<tr>
									<th><label>Κλινικές παρατηρήσεις: </label></th>
									<?php for($i=0;$i<count($response['casenotes']);$i++){ ?>
<td>
<input type="text" class="form-control" id="casenotes" name="clinicalobservations" value=<?= $response['casenotes'][$i]['clinicalobservations'] ?>>
</input></td>
<?php } ?>
								</tr>
								<tr>
									<th><label> Περιεχόμενα session: </label></th>
									<?php for($i=0;$i<count($response['casenotes']);$i++){ ?>
<td>
<input type="text" class="form-control" id="casenotes" name="sessions" value=<?= $response['casenotes'][$i]['sessioncontent'] ?>>
</input></td>
<?php } ?>
								</tr>
								<tr>
									<th><label>Άλλες παρατηρήσεις:</label></th>
									<?php for($i=0;$i<count($response['casenotes']);$i++){ ?>
<td>
<input type="text" class="form-control" id="casenotes" name="othercomments" value=<?= $response['casenotes'][$i]['otherobservations'] ?>>
</input></td>
<?php } ?>
								</tr>
								<tr>
									<th><label> Στόχος επόμενου appointment: </label></th>
									<?php for($i=0;$i<count($response['casenotes']);$i++){ ?>
<td>
<input type="text" class="form-control" id="casenotes" name="goal" value=<?= $response['casenotes'][$i]['goalsfornextappoinment'] ?>>
</input></td>
<?php } ?>
								</tr>
								<tr>
									<th><label>Τύπος:</label></th>
									<?php for($i=0;$i<count($response['casenotes']);$i++){ ?>
<td>
<input type="text" class="form-control" id="casenotes" name="type" value=<?= $response['casenotes'][$i]['typeof'] ?>>
</input></td>
<?php } ?>
								</tr>
								<tr>
									<th><label>Ημερομηνία γραφής:</label></th>
									<?php for($i=0;$i<count($response['casenotes']);$i++){ ?>
<td>
<input type="date" class="form-control" id="casenotes" name="date" value=<?= $response['casenotes'][$i]['dateof'] ?>>
</input></td>
<?php } ?>
								</tr>
								<tr>
									<th><label>Ώρα γραφής:</label></th>
									<?php for($i=0;$i<count($response['casenotes']);$i++){ ?>
<td>
<input type="time" class="form-control" id="casenotes" name="time" value=<?= $response['casenotes'][$i]['timeof'] ?>>
</input></td>
<?php } ?>
								</tr>
								<tr>
									<th><label>Υπογράφτηκε:</label></th>
									<?php for($i=0;$i<count($response['casenotes']);$i++){ ?>
<td>
<input type="text" class="form-control" id="casenotes" name="supervisor" value=<?= $response['casenotes'][$i]['Signed'] ?>>
</input></td>
<?php } ?>
								</tr>
								<tr>
									<th><label>Σημειώσεις:</label></th>
									<?php for($i=0;$i<count($response['casenotes']);$i++){ ?>
<td>
<input type="text" class="form-control" id="casenotes" name="notes" value=<?= $response['casenotes'][$i]['Note'] ?>>
</input></td>
<?php } ?>
								</tr>
						</div>
					</div>

					<!-- /#page-wrapper -->
				</div>
			</div>
		</div>
		</div>
		<!-- /#wrapper -->

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
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/casenote.php";
$method='POST';
if(isset($_POST['submit'])){
$postfields=http_build_query(array(
'appointmentID'=>$_GET['pID'],
'clinical'=>$_POST['observations'],
'content'=>$_POST['sessions'],
'observations'=>$_POST['other'],
'goalsnext'=>$_POST['goals'],
'type'=>$_POST['type'],
'date'=>$_POST['date'],
'time'=>$_POST['time'],
'signed'=>$_POST['signed'],
'note'=>$_POST['notes'],
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