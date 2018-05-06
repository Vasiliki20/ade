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
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		th, td {
			padding: 5px;
			text-align: center;
		}
		label {
			display: inline-block;
			width: 140px;
			text-align: center;
			float: left;
		}​
		input {
			display: inline-block;
			float: right;
			text-align: center;
		}
		tr:nth-child(10) {
			font-weight: bold;
		}
		tr:nth-child(9){
			font-weight: bold;
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
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Report 1</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				<div class="panel panel-default">
					<div class="panel-heading">
						Στατιστικές
						<br>
					</div>
					<div>
						<br>
					</div>
					<div>
						<table>
							<tr>
								<th rowspan="2" bgcolor="#E3EFF7">Μήνας</th>
								<th colspan="2" bgcolor="#E3EFF7">ΣΥΝΕΔΡΙΕΣ</th>
								<th colspan="2" bgcolor="#E3EFF7">ΠΕΛΑΤΕΣ</th>
								<th colspan="2" bgcolor="#E3EFF7">ΝΕΟΙ ΠΕΛΑΤΕΣ</th>
							</tr>
							<tr>
								<td bgcolor="#E7EAEC">ΓΨΣ Μ.Ο. 2012-2015</td>
								<td bgcolor="#E7EAEC">ΚΕΨΥ 2016Α</td>
								<td bgcolor="#E7EAEC">ΓΨΥ Μ.Ο. 2012-2015</td>
								<td bgcolor="#E7EAEC">ΚΕΨΥ 2016Α</td>
								<td bgcolor="#E7EAEC">ΓΨΥ Μ.Ο. 2012-2015</td>
								<td bgcolor="#E7EAEC">ΚΕΨΥ 2016Α</td>
							</tr>
							<tr>
								<td>Ιανουάριος</td>
								<td>65</td>
								<td>76</td>
								<td>26</td>
								<td>33</td>
								<td>7</td>
								<td>7</td>
							</tr>
							<tr>
								<td>Φεβρουάριος</td>
								<td>65</td>
								<td>76</td>
								<td>26</td>
								<td>33</td>
								<td>7</td>
								<td>7</td>
							</tr>
							<tr>
								<td>Μάρτιος</td>
								<td>65</td>
								<td>76</td>
								<td>26</td>
								<td>33</td>
								<td>7</td>
								<td>7</td>
							</tr>
							<tr>
								<td>Απρίλιος</td>
								<td>65</td>
								<td>76</td>
								<td>26</td>
								<td>33</td>
								<td>7</td>
								<td>7</td>
							</tr>
							<tr>
								<td>Μάιος</td>
								<td>65</td>
								<td>76</td>
								<td>26</td>
								<td>33</td>
								<td>7</td>
								<td>7</td>
							</tr>
							<tr>
								<td>Ιούνιος</td>
								<td>65</td>
								<td>76</td>
								<td>26</td>
								<td>33</td>
								<td>7</td>
								<td>7</td>
							</tr>
							<tr>
								<td>Μέσος όρος</td>
								<td>65</td>
								<td>76</td>
								<td>26</td>
								<td>33</td>
								<td>7</td>
								<td>7</td>
							</tr>
							<tr>
								<td>Σύνολο</td>
								<td>65</td>
								<td>76</td>
								<td>26</td>
								<td>33</td>
								<td>7</td>
								<td>7</td>
							</tr>
						</table>
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
