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
						<h1 class="page-header">Reports</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				<div class="panel panel-default">
					<div class="panel-heading">
						Reports
						<br>
					</div>
					<div>
						<br>
					</div>
					<div class="panel-body">
						<label>Αριθμός πελατών ανά μήνα:</label>
						<br>
						<input type="text" class="form-group" id="clientspermonth1" placeholder="Χρονιά" name="clientspermonth1">
						<input type="text" class="form-group" id="clientspermonth2" placeholder="Εξάμηνο" name="clientspermonth2">
						<input id="submit" type="button" name="submit" class="btn btn-default" value="Αναζήτηση">
						<br>
						<br>
						<label>Αριθμός νέων πελάτων ανά μήνα</label>
						<br>
						<input type="text" class="form-group" id="newclientspermonth1" placeholder="Χρονιά" name="newclientspermonth1">
						<input type="text" class="form-group" id="newclientspermonth2" placeholder="Εξάμηνο" name="newclientspermonth2">
						<input id="submit" type="button" name="newclientspermonth" class="btn btn-default" value="Αναζήτηση">
						<br>
						<br>
						<label>Αριθμός συνεδριών ανά μήνα</label>
						<br>
						<input type="text" class="form-group" id="sessionspermonth1" placeholder="Χρονιά" name="sessionspermonth1">
						<input type="text" class="form-group" id="sessionspermonth2" placeholder="Εξάμηνο" name="sessionspermonth2">
						<input id="submit" type="button" name="sessionspermonth" class="btn btn-default" value="Αναζήτηση">
						<br>
						<br>
						<label>Σύγκριση αριθμού πελατών (σύνολο και Μέσος Όρος) με προηγούμενα έτη</label>
						<br>
						<input type="text" class="form-group" id="compareclients1" placeholder="Χρονιά" name="compareclients1">
						<input type="text" class="form-group" id="compareclients2" placeholder="Εξάμηνο" name="compareclients2">
						<input id="submit" type="button" name="compareclients" class="btn btn-default" value="Αναζήτηση">
						<br>
						<br>
						<label>Κατανομή των νέων περιστατικών του ΚΕ.Ψ.Υ. ανά Σχολή</label>
						<br>
						<input type="text" class="form-group" id="distributionperschool1" placeholder="Χρονιά" name="distributionperschool1">
						<input type="text" class="form-group" id="distributionperschool2" placeholder="Εξάμηνο" name="distributionperschool2">
						<input id="submit" type="button" name="distributionperschool" class="btn btn-default" value="Αναζήτηση">
						<br>
						<br>
						<label>Παρουσιαζόμενα ζητήματα για νέα περιστατικά</label>
						<br>
						<input type="text" class="form-group" id="issuesfornewcases1" placeholder="Χρονιά" name="issuesfornewcases1">
						<input type="text" class="form-group" id="issuesfornewcases2" placeholder="Εξάμηνο" name="issuesfornewcases2">
						<input id="submit" type="button" name="" class="btn btn-default" value="Αναζήτηση">
						<br>
						<br>
						<label>Πηγές ενημέρωσης φοιτητών για τις υπηρεσίες</label>
						<br>
						<input type="text" class="form-group" id="sources1" placeholder="Χρονιά" name="sources1">
						<input type="text" class="form-group" id="sources2" placeholder="Εξάμηνο" name="sources2">
						<input id="submit" type="button" name="sources" class="btn btn-default" value="Αναζήτηση">

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