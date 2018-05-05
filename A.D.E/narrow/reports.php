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
	<script>
		function check() {
			var x,
			    text;

			// Get the value of the input field with id="numb"
			x = document.getElementById("semester").value;

			// If x is Not a Number or less than one or greater than 10
			if (isNaN(x) || x != "A" || x != "B") {
				text = "Input not valid";
			} else {
				text = "Input OK";
			}
			document.getElementById("demo").innerHTML = text;
		}
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
			<!-- clients per month -->
			<div class="modal fade" id="clientspermonth" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								&times;
							</button>
							<h4 class="modal-title">Αριθμός πελατών ανά μήνα</h4>
						</div>
						<div class="modal-body">
							<form role="form" action="" method="post">
								<table>
									<tr>
										<td align="left"><label for="year">Χρόνος:</label></td>
										<td align="left">
										<input type="text" name="year" class="form-group" id="year">
										</td>
									</tr>
									<tr>
										<td align="left"><label for="semester">Εξάμηνο:</label></td>
										<td align="left">
										<input type="text" name="semester" class="form-group" id="semester">
										</td>
									</tr>
								</table>
							</form>
						</div>
						<div class="modal-footer">
							<form action="">
								<button onclick="check()" type="sumbit" name="submit1"  class="btn btn-default" value="save" data-dismiss="modal">
									Save
								</button>
							</form>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button>
						</div>
					</div>

				</div>
			</div>
			<!-- new clients per month -->
			<div class="modal fade" id="newclientspermonth" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								&times;
							</button>
							<h4 class="modal-title">Αριθμός νέων πελατών ανά μήνα</h4>
						</div>
						<div class="modal-body">
							<form role="form" action="" method="post">
								<table>
									<tr>
										<td align="left"><label for="year">Χρόνος:</label></td>
										<td align="left">
										<input type="text" name="year" class="form-group" id="year">
										</td>
									</tr>
									<tr>
										<td align="left"><label for="semester">Εξάμηνο:</label></td>
										<td align="left">
										<input type="text" name="semester" class="form-group" id="semester">
										</td>
									</tr>
								</table>
							</form>
						</div>
						<div class="modal-footer">
							<form action="">
								<button onclick="check()" type="sumbit" name="submit1"  class="btn btn-default" value="save" data-dismiss="modal">
									Save
								</button>
							</form>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button>
						</div>
					</div>

				</div>
			</div>
			<!-- number of sessions per month -->
			<div class="modal fade" id="sessionspermonth" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								&times;
							</button>
							<h4 class="modal-title">Αριθμός συνεδριών ανά μήνα</h4>
						</div>
						<div class="modal-body">
							<form role="form" action="" method="post">
								<table>
									<tr>
										<td align="left"><label for="year">Χρόνος:</label></td>
										<td align="left">
										<input type="text" name="year" class="form-group" id="year">
										</td>
									</tr>
									<tr>
										<td align="left"><label for="semester">Εξάμηνο:</label></td>
										<td align="left">
										<input type="text" name="semester" class="form-group" id="semester">
										</td>
									</tr>
								</table>
							</form>
						</div>
						<div class="modal-footer">
							<form action="">
								<button onclick="check()" type="sumbit" name="submit1"  class="btn btn-default" value="save" data-dismiss="modal">
									Save
								</button>
							</form>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button>
						</div>
					</div>
				</div>
			</div>
			<!-- compare clients with previous years -->
			<div class="modal fade" id="compareclients" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								&times;
							</button>
							<h4 class="modal-title">Σύγκριση αριθμού πελατών (σύνολο και Μέσος Όρος) με προηγούμενα έτη</h4>
						</div>
						<div class="modal-body">
							<form role="form" action="" method="post">
								<table>
									<tr>
										<td align="left"><label for="year">Χρόνος:</label></td>
										<td align="left">
										<input type="text" name="year" class="form-group" id="year">
										</td>
									</tr>
									<tr>
										<td align="left"><label for="semester">Εξάμηνο:</label></td>
										<td align="left">
										<input type="text" name="semester" class="form-group" id="semester">
										</td>
									</tr>
								</table>
							</form>
						</div>
						<div class="modal-footer">
							<form action="">
								<button onclick="check()" type="sumbit" name="submit1"  class="btn btn-default" value="save" data-dismiss="modal">
									Save
								</button>
							</form>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button>
						</div>
					</div>
				</div>
			</div>
			<!-- distribution per school -->
			<div class="modal fade" id="distributionperschool" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								&times;
							</button>
							<h4 class="modal-title">Κατανομή των νέων περιστατικών του ΚΕ.Ψ.Υ. ανά Σχολή</h4>
						</div>
						<div class="modal-body">
							<form role="form" action="" method="post">
								<table>
									<tr>
										<td align="left"><label for="year">Χρόνος:</label></td>
										<td align="left">
										<input type="text" name="year" class="form-group" id="year">
										</td>
									</tr>
									<tr>
										<td align="left"><label for="semester">Εξάμηνο:</label></td>
										<td align="left">
										<input type="text" name="semester" class="form-group" id="semester">
										</td>
									</tr>
								</table>
							</form>
						</div>
						<div class="modal-footer">
							<form action="">
								<button onclick="check()" type="sumbit" name="submit1"  class="btn btn-default" value="save" data-dismiss="modal">
									Save
								</button>
							</form>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button>
						</div>
					</div>
				</div>
			</div>
			<!-- issues for new cases -->
			<div class="modal fade" id="issuesfornewcases" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								&times;
							</button>
							<h4 class="modal-title">Παρουσιαζόμενα ζητήματα για νέα περιστατικά </h4>
						</div>
						<div class="modal-body">
							<form role="form" action="" method="post">
								<table>
									<tr>
										<td align="left"><label for="year">Χρόνος:</label></td>
										<td align="left">
										<input type="text" name="year" class="form-group" id="year">
										</td>
									</tr>
									<tr>
										<td align="left"><label for="semester">Εξάμηνο:</label></td>
										<td align="left">
										<input type="text" name="semester" class="form-group" id="semester">
										</td>
									</tr>
								</table>
							</form>
						</div>
						<div class="modal-footer">
							<button onclick="check()" type="sumbit" name="submit1"  class="btn btn-default" value="save" data-dismiss="modal">
								Save
							</button>

							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button>
						</div>
					</div>
				</div>
			</div>
			<!-- sources of students for the services of the center -->
			<div class="modal fade" id="sources" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								&times;
							</button>
							<h4 class="modal-title">Πηγές ενημέρωσης φοιτητών για τις υπηρεσίες</h4>
						</div>
						<div class="modal-body">
							<form role="form" action="" method="post">
								<table>
									<tr>
										<td align="left"><label for="year">Χρόνος:</label></td>
										<td align="left">
										<input type="text" name="year" class="form-group" id="year">
										</td>
									</tr>
									<tr>
										<td align="left"><label for="semester">Εξάμηνο:</label></td>
										<td align="left">
										<input type="text" name="semester" class="form-group" id="semester">
										</td>
									</tr>
								</table>
							</form>
						</div>
						<div class="modal-footer">
							<button onclick="check()" type="sumbit" name="submit1"  class="btn btn-default" value="save" data-dismiss="modal">
								Save
							</button>

							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button>
						</div>
					</div>
				</div>
			</div>
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
						<button type="button" onclick="" class="btn btn-default" name="add" data-toggle="modal" data-target="#clientspermonth">
							Αριθμός πελατών ανά μήνα
						</button>
						<br>
						<br>
						<button type="button" onclick="" class="btn btn-default" name="add" data-toggle="modal" data-target="#newclientspermonth">
							Αριθμός νέων πελάτων ανά μήνα
						</button>
						<br>
						<br>
						<button type="button" onclick="" class="btn btn-default" name="add" data-toggle="modal" data-target="#sessionspermonth">
							Αριθμός συνεδριών ανά μήνα
						</button>
						<br>
						<br>
						<button type="button" onclick="" class="btn btn-default" name="add" data-toggle="modal" data-target="#compareclients">
							Σύγκριση αριθμού πελατών (σύνολο και Μέσος Όρος) με προηγούμενα έτη
						</button>
						<br>
						<br>
						<button type="button" onclick="" class="btn btn-default" name="add" data-toggle="modal" data-target="#distributionperschool">
							Κατανομή των νέων περιστατικών του ΚΕ.Ψ.Υ. ανά Σχολή
						</button>
						<br>
						<br>
						<button type="button" onclick="" class="btn btn-default" name="add" data-toggle="modal" data-target="#issuesfornewcases">
							Παρουσιαζόμενα ζητήματα για νέα περιστατικά
						</button>
						<br>
						<br>
						<button type="button" onclick="" class="btn btn-default" name="add" data-toggle="modal" data-target="#sources">
							Πηγές ενημέρωσης φοιτητών για τις υπηρεσίες
						</button>
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
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/statistics4.php?year=2018&monthclass=B";
$method='POST';

$postfields=http_build_query(array(
));
if(isset($_COOKIE['token'])){
$response=request($url,$method,$postfields,$_COOKIE['token']);
}else{
$response=0;
}
if($response['status']!=1){
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
?>
<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/statistics5.php";
$method='POST';

$postfields=http_build_query(array(
));
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
?>