<?php
ob_start();
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/showcasenote.php?caseID=".$_GET['c'];
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
//var_dump($response);
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


		<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
		

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
									<li>
										<a href="search_therapist.php">Search</a>
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
						<h1 class="page-header">Σημειώσεις προόδου</h1>
					</div>
				</div>
				<div>
					<!-- /.col-lg-12 -->
					
				</div>
				<div>
					<div class="panel panel-default">
						<div class="panel-body">
						<form method="post" action="">
							<table id="casenotes" style="width:100%">
								<tr>
									<th><label>Κλινικές παρατηρήσεις: </label></th>
									
<td>
<input type="text" class="form-control" id="casenotes" name="observations" value=<?= $response['result']['clinicalobservations'] ?>>
</input></td>

								</tr>
								<tr>
									<th><label> Περιεχόμενα session: </label></th>
									
<td>
<input type="text" class="form-control" id="casenotes" name="sessions" value=<?= $response['result']['sessioncontent'] ?>>
</input></td>

								</tr>
								<tr>
									<th><label>Άλλες παρατηρήσεις:</label></th>
									
<td>
<input type="text" class="form-control" id="casenotes" name="other" value=<?= $response['result']['otherobservations'] ?>>
</input></td>

								</tr>
								<tr>
									<th><label> Στόχος επόμενου appointment: </label></th>
									
<td>
<input type="text" class="form-control" id="casenotes" name="goals" value=<?= $response['result']['goalsfornextappoinment'] ?>>
</input></td>

								</tr>
								<tr>
									<th><label>Τύπος:</label></th>
									
<td>
<input type="text" class="form-control" id="casenotes" name="type" value=<?= $response['result']['typeof'] ?>>
</input></td>

								</tr>
								<tr>
									<th><label>Ημερομηνία γραφής:</label></th>
									
<td>
<input type="date" class="form-control" id="casenotes" name="date" value=<?= $response['result']['dateof'] ?>>
</input></td>

								</tr>
								<tr>
									<th><label>Ώρα γραφής:</label></th>
									
<td>
<input type="time" class="form-control" id="casenotes" name="time" value=<?= $response['result']['timeof'] ?>>
</input></td>

								</tr>
								<tr>
									<th><label>Υπογράφτηκε:</label></th>
									
<td>
<input type="text" class="form-control" id="casenotes" name="supervisor" value=<?= $response['result']['Signed'] ?> disabled>
</input></td>

								</tr>
								<tr>
									<th><label>Σημειώσεις:</label></th>
									
<td>
<input type="text" class="form-control" id="casenotes" name="notes" value=<?= $response['result']['Note'] ?>>
</input></td>

								</tr>
							</div>
						</table>
					</div>
						
								
								<button id="saveSig" name="submit1"  type="submit" class="btn btn-default">
									Αποθήκευση
								</button>
								</form>
								<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/casenotecomplete.php";
$method='POST';
if(isset($_POST['submit1'])){
$postfields=http_build_query(array(
'caseID'=>$_GET['c'],
'clinical'=>$_POST['observations'],
'content'=>$_POST['sessions'],
'observations'=>$_POST['other'],
'goalsnext'=>$_POST['goals'],
'type'=>$_POST['type'],
'date'=>$_POST['date'],
'time'=>$_POST['time'],
'note'=>$_POST['notes'],
));
if(isset($_COOKIE['token'])){
$response2=request($url,$method,$postfields,$_COOKIE['token']);
}else{
$response2=0;
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
$response2 = request($url, $method, $postfields, $tok);
}
var_dump($response2);
header("Refresh:0");
}
?>

								
								<br/>
								<br/>
						</fieldset>
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