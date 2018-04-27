<?php ob_start(); ?>
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
						<h1 class="page-header">Kατάσταση Πληρωμών</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<div>
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
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
				<!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<!-- /.panel-heading -->
							<div class="panel-body">
								<form method="post" action="">
								<table id="dataTables-example" width="100%" class="table table-striped table-bordered table-hover">

									<thead>
										<tr>
											<th>Όνομα</th>
											<th>Επίθετο</th>
											<th>Ταυτότητα</th>
											<th>Όνομα συνάντησης</th>
											<th>Ημερομηνία</th>
											<th>Χρέωση(€)</th>
											<th>Πληρώθηκε</th>
										</tr>
									</thead>
									<tbody>
																			<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/bill.php?patientID=".$_GET['patientID'];
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
	
	//var_dump($response);
//}
?>
									
									<?php for($j=0;$j<count($response['result']);$j++){ ?>
										
										<tr>
											<td><?=$response['result1'][$j]['firstname']?></td>
											<td><?=$response['result1'][$j]['lastname']?></td>
											<td><?=$response['result'][$j]['patientID']?></td>
											<td><?=$response['result'][$j]['start']?></td>
											<td><?=$response['result'][$j]['nameofappointment']?></td>
											<?php if($response['result'][$j]['patientID']!=null){?>
											<td><input type="hidden" name="aid[]" value=<?=$response['result'][$j]['appointmentID']?>><label><?=$response['result'][$j]['payment']?></label></td>
											<?php }else{ ?>
											<td></td>
											<?php } ?>
											<td><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<?php if($response['result'][$j]['payed']==0){ ?>
											<select name="payed[]">
											<option value="1">Yes</option>
											<option value="0" selected="selected">No</option>	
											</select></td>
											<?php }else{ ?>
											<select name="payed[]">
											<option value="1" selected="selected">Yes</option>
											<option value="0">No</option>
											<?php } ?>
											</select></td>
											</tr>
									<?php  } ?>
									</tbody>
								</table>
								<div align="center"><h3>Σύνολο Xρωστούμενων: €<?=$response['sum']['total']?></h3></div>
								<input type="submit" name="submit" value="Save Payments">
								</form>
								
							</div>
							<!-- /.panel-body -->
						</div>
						<!-- /.panel -->
					</div>
					<!-- /.col-lg-12 -->
				</div>
			</div>
			<!-- /#page-wrapper -->

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
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/pay.php";
$method='POST';
$i=0;

if(isset($_POST['submit'])){
	foreach($_POST['aid'] as $j){
	
$postfields=http_build_query(array(
	'id'=> $_POST['aid'][$i],
	'payed'=> $_POST['payed'][$i],		
		));
		$i++;
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
			document.cookie='token=<?= $tok ?>';
		</script>
		<?php
		//$GLOBALS['curtoken']=giveToken();
		//print "<h5>".$GLOBALS['curtoken']."</h5>";
		$response1=request($url,$method,$postfields,$tok);
	}
	var_dump($response1);
}
header("Refresh:0");
}
?>