<?php session_start(); ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Κέντρο Ψυχικής Υγείας</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
								<a href="myprofile_therapist.php"><i class="fa fa-user fa-fw"></i> Προφίλ</a>
							</li>
							<li>
								<a href="usermanual_therapist.php"><i class="fa fa-gear fa-fw"></i> Εγχειρίδιο</a>
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
								<a href="psindex_therapist.php"><i class="fa fa-table"></i> Ημερολόγιο</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-list"></i> Επιλογές<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="tasklist_therapist.php">Λίστα Εργασιών</a>
									</li>
									<li>
										<a href="myclients_therapist.php">Πελάτες</a>
									</li>
									<li>
										<a href="myappointments_therapist.php">Ραντεβού</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="formupload_therapist.php"><i class="fa fa-upload"></i> Ανάρτηση Αρχείου</a>
							</li>
							<li>
								<a href="reports_therapist.php"><i class="fa fa-bar-chart-o"></i> Στατιστικές</a>
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
						<h1 class="page-header">Ραντεβού</h1>
					</div>
					<!-- /.col-lg-12 -->
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
											<th>Ημερομηνία</th>
											<th>Παρευρέθηκε</th>
											<th>Χρέωση(€)</th>
											<th>Write case note </th>
										</tr>
									</thead>
									<tbody>
																			<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/myappointments.php?psychID=".$_SESSION['id'];
$method='GET';
//if(isset($_POST['submit'])){
$postfields=http_build_query(array(
		'psychID' => $_SESSION['id']
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
											<?php if($response['result'][$j]['patientID']!=null){?>
											<td><input type="hidden" value=<?=$response['result'][$j]['appointmentID']?> name="aid[]" ><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<select name="status[]">
											<?php if(strnatcmp($response['result'][$j]['attendance'],"Scheduled")==0){ ?>
											
											<option value="Attended">Attended</option>
											<option value="not Attended" >Not Attended</option>
											<option value="Scheduled" selected="selected">Scheduled</option>
											
											<?php }elseif(strnatcmp($response['result'][$j]['attendance'],"Attended")==0){ ?>
											
											<option value="Attended" selected="selected">Attended</option>
											<option value="not Attended" >Not Attended</option>
											<option value="Scheduled" >Scheduled</option>
											
											<?php }elseif(strnatcmp($response['result'][$j]['attendance'],"not Attended")==0){ ?>
											
											<option value="Attended">Attended</option>
											<option value="not Attended" selected="selected">Not Attended</option>
											<option value="Scheduled" >Scheduled</option>
											
											<?php } ?>
											</select></td>
											<?php }else{ ?>
											<td><label>Scheduled</label></td>
											<?php } ?>
											<?php if($response['result'][$j]['patientID']!=null){?>
											<td><input value="<?=$response['result'][$j]['payment']?>" type="number" name="payment[]"></td>
											<?php }else{ ?>
											<td></td>
											<?php } ?>
											<td><a href="casenote.php?pID=<?=Encryption::encode($response['result'][$j]['appointmentID'])?>">Σημείωση προόδου</a></td>
										</tr>
									<?php  } ?>
									</tbody>
								</table>
								<input type="submit" name="submit" value="Save Attendance">
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

		
	</body>

</html>
<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/markattendance.php";
$method='POST';
$i=0;

if(isset($_POST['submit'])){
	foreach($_POST['status'] as $j){
	var_dump($_POST['status']);
$postfields=http_build_query(array(
	'id'=> $_POST['aid'][$i],
	'payment'=> $_POST['payment'][$i],		
	'status'=> $_POST['status'][$i]
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