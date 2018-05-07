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
								<a href="myprofile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
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
						<h1 class="page-header">Σημειώσεις προόδου</h1>
					</div>
				</div>
				<div>
					<!-- /.col-lg-12 -->
					<!--<nav class="navbar navbar-default">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<!--<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							
						</div><!-- /.container-fluid -->
					</nav>
				</div>
				<div>
					<div class="panel panel-default">
						<div class="panel-body">
							<form method="post" action="">
							<table id="casenotes" style="width:100%">
								<tr>
									<th> Κλινικές παρατηρήσεις: </th>
									<td>
									<input type="text" class="form-control" id="casenotes" name="observations">
									</input></td>
								</tr>
								<tr>
									<th> Περιεχόμενα session: </th>
									<td>
									<input type="text" class="form-control" id="casenotes" name="sessions">
									</input></td>
								</tr>
								<tr>
									<th> Άλλες παρατηρήσεις: </th>
									<td>
									<input type="text" class="form-control" id="casenotes" name="other">
									</input></td>
								</tr>
								<tr>
									<th> Στόχος επόμενου appointment: </th>
									<td>
									<input type="text" class="form-control" id="casenotes" name="goals">
									</input></td>
								</tr>
								<tr>
									<th> Τύπος: </th>
									<td>
									<input type="text" class="form-control" id="casenotes" name="type">
									</input></td>
								</tr>
								<tr>
									<th> Ημερομηνία γραφής: </th>
									<td>
									<input type="date" class="form-control" id="casenotes" name="date">
									</input></td>
								</tr>
								<tr>
									<th> Ώρα γραφής: </th>
									<td>
									<input type="time" class="form-control" id="casenotes" name="time">
									</input></td>
								</tr>
								<tr>
									<th> Σημειώσεις: </th>
									<td>
									<input type="text" class="form-control" id="casenotes" name="notes">
									</input></td>
								</tr>
								<tr>
									<th> Καταχώρηση: </th>
									<td>
									<input type="submit" name="submit" class="btn btn-default"></input></td>
								</tr>
						</div>
						</form>
						
					
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
'signed'=>"Όχι",
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