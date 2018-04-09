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
			document.cookie='token=<?= $tok ?>';
		</script>
		<?php
		//$GLOBALS['curtoken']=giveToken();
		//print "<h5>".$GLOBALS['curtoken']."</h5>";
		$response=request($url,$method,$postfields,$tok);
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
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i> </a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<a href="#">
								<div>
									<strong>John Smith</strong>
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
									<strong>John Smith</strong>
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
									<strong>John Smith</strong>
									<span class="pull-right text-muted"> <em>Yesterday</em> </span>
								</div>
								<div>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a class="text-center" href="#"> <strong>Read All Messages</strong> <i class="fa fa-angle-right"></i> </a>
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
										<strong>Task 1</strong>
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
								<a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
										<a href="myappointments.php">My appointments</a>
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
										<a href="casenotes.php?patientID=<?=$_GET['patientID']?>">Σημειώσεις Προόδου</a>
									</li>
									<li>
										<a href="#">Αναφορές</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Σημειώσεις<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="contactlog.php?patientID=<?=$_GET['patientID']?>">Contact Logs</a>
											</li>
										</ul>
									</li>
<<<<<<< HEAD
									<li>
										<a href="personalinformation.php?patientID=<?=$_GET['patientID']?>">Γενικές πληροφορίες</a>
=======
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Γενικές πληροφορίες<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="personalinformation.php">Προσωπικά Στοιχεία Πελάτη</a>
											</li>
											<li>
												<a href="schedule.php">Διαθέσιμο Πρόγραμμα Πελάτη</a>
											</li>
										</ul>
>>>>>>> beb5bb9b414d54885af857568ff70254e5ca17e5
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ιατρικές Πληροφορίες <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="clientrelationships.php?patientID=<?=$_GET['patientID']?>">Οικογενειακές Σχέσεις Πελάτη</a>
											</li>
											<li>
												<a href="clientmedication.php?patientID=<?=$_GET['patientID']?>">Φαρμακευτική Αγωγή Πελάτη</a>
											</li>
											<li>
												<a href="medhistory.php?patientID=<?=$_GET['patientID']?>">Medlog</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="externalinformation.php?patientID=<?=$_GET['patientID']?>">Εξωτερική Πληροφόρηση</a>
									</li>
									<li>
										<a href="billing.php?patientID=<?=$_GET['patientID']?>">Πληρωμές</a>
									</li>
								</ul>
								
								
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
				</div>

				<div>
					<div class="panel panel-default">
						<div class="panel-heading">
							Contact Log
						</div>
						<div class="panel-body">
							<table id="contactlog" style="width:100%">
								<tr>
									<th>
									<center>
										Όνομα επαγγελματία:
									</center></th>
									<th>
									<center>
										Επίθετο επαγγελματία:
									</center></th>
									<th>
									<center>
										Διεύθυνση:
									</center></th>
									<th>
									<center>
										Πόλη:
									</center></th>
									<th>
									<center>
										Τηλέφωνο:
									</center></th>
									<th>
									<center>
										Ηλεκτρονική Διεύθυνση:
									</center></th>
									<th>
									<center>
										Λόγος μεταβίβασης:
									</center></th>
									<th>
									<center>
										Πληροφορίες:
									</center></th>
									<th>
									<center>
										Χρόνος μέχρι να λήξει η εξουσιοδότηση:
									</center></th>
								</tr>
								<tr>
									<td>
									<input type="text" class="form-control" id="contactlog" name="name">
									</input></td>
									<td>
									<input type="text" class="form-control" id="contactlog" name="surname">
									</input></td>
									<td>
									<input type="text" class="form-control" id="contactlog" name="address">
									</input></td>
									<td>
									<input type="text" class="form-control" id="contactlog" name="city">
									</input></td>
									<td>
									<input type="number" class="form-control" id="contactlog" name="phone">
									</input></td>
									<td>
									<input type="email" class="form-control" id="contactlog" name="email">
									</input></td>
									<td>
									<input type="text" class="form-control" id="contactlog" name="reason">
									</input></td>
									<td>
									<input type="text" class="form-control" id="contactlog" name="details">
									</input></td>
									<td>
									<input type="text" class="form-control" id="contactlog" name="time">
									</input></td>
								</tr>
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
