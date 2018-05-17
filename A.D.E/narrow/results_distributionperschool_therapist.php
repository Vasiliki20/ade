<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/statistics5.php?year=".$_GET['y'];
$method='GET';

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
						<h1 class="page-header">Αποτελέσματα Στατιστικών</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				<div class="panel panel-default">
					<div class="panel-heading">
						Κατανομή των νέων περιστατικών του ΚΕ.Ψ.Υ. ανά Σχολή για το έτος <?=$_GET['y']?>
						<br>
					</div>
					<div>
						<br>
					</div>
					<div>
						<table>
							<tr>
								<th colspan="2" bgcolor="#E3EFF7">ΣΧΟΛΗ</th>
								<th bgcolor="#E3EFF7">ΣΥΝΟΛΟ</th>
								<th bgcolor="#E3EFF7">%</th>
							</tr>
							<tr>
								<td><font color="#3498DB">ΣΑΕ</font></td>
								<td><font color="#3498DB">Σχολή Ανθρωπιστικών Επιστημών</font></td>
								<td><font color="#3498DB"><?=$response['result'][0]['COUNT(patientID)']?></font></td>
								<?php if($response['result']['all']['COUNT(patientID)']!=0){ ?>
								<td><font color="#3498DB"><?=$response['result'][0]['COUNT(patientID)']/$response['result']['all']['COUNT(patientID)']*100?>%</font></td>
								<?php }else{ ?>
								<td><font color="#3498DB">0%</font></td>
								<?php } ?>
							</tr>
							<tr>
								<td><font color="#E74C3C">ΣΘΕΕ</font></td>
								<td><font color="#E74C3C">Σχολή Θετικών και Εφαρμοσμένων Επιστημών</font></td>
								<td><font color="#E74C3C"><?=$response['result'][1]['COUNT(patientID)']?></font></td>
								<?php if($response['result']['all']['COUNT(patientID)']!=0){ ?>
								<td><font color="#E74C3C"><?=$response['result'][1]['COUNT(patientID)']/$response['result']['all']['COUNT(patientID)']*100?>%</font></td>
								<?php }else{ ?>
								<td><font color="#E74C3C">0%</font></td>
								<?php } ?>
							</tr>
							<tr>
								<td><font color="#28B463">ΣΚΕΕΑ</font></td>
								<td><font color="#28B463">Σχολή Κοινωνικών Επιστημών και Επιστημών Αγωγής</font></td>
								<td><font color="#28B463"><?=$response['result'][2]['COUNT(patientID)']?></font></td>
								<?php if($response['result']['all']['COUNT(patientID)']!=0){ ?>
								<td><font color="#28B463"><?=$response['result'][2]['COUNT(patientID)']/$response['result']['all']['COUNT(patientID)']*100?>%</font></td>
								<?php }else{ ?>
								<td><font color="#28B463">0%</font></td>
								<?php } ?>
							</tr>
							<tr>
								<td><font color="#9B59B6">ΣΟΕΔ</font></td>
								<td><font color="#9B59B6">Σχολή Οικονομικών Επιστημών και Διοίκησης</font></td>
								<td><font color="#9B59B6"><?=$response['result'][3]['COUNT(patientID)']?></font></td>
								<?php if($response['result']['all']['COUNT(patientID)']!=0){ ?>
								<td><font color="#9B59B6"><?=$response['result'][3]['COUNT(patientID)']/$response['result']['all']['COUNT(patientID)']*100?>%</font></td>
								<?php }else{ ?>
								<td><font color="#9B59B6">0%</font></td>
								<?php } ?>
							</tr>
							<tr>
								<td><font color="#00CDCD">ΠΣ</font></td>
								<td><font color="#00CDCD">Πολυτεχνική Σχολή</font></td>
								<td><font color="#00CDCD"><?=$response['result'][4]['COUNT(patientID)']?></font></td>
								<?php if($response['result']['all']['COUNT(patientID)']!=0){ ?>
								<td><font color="#00CDCD"><?=$response['result'][4]['COUNT(patientID)']/$response['result']['all']['COUNT(patientID)']*100?>%</font></td>
								<?php }else{ ?>
								<td><font color="#00CDCD">0%</font></td>
								<?php } ?>
							</tr>
							<tr>
								<td><font color="#F48436">ΦΣ</font></td>
								<td><font color="#F48436">Φιλοσοφική Σχολή</font></td>
								<td><font color="#F48436"><?=$response['result'][5]['COUNT(patientID)']?></font></td>
								<?php if($response['result']['all']['COUNT(patientID)']!=0){ ?>
								<td><font color="#F48436"><?=$response['result'][5]['COUNT(patientID)']/$response['result']['all']['COUNT(patientID)']*100?>%</font></td>
								<?php }else{ ?>
								<td><font color="#F48436">0%</font></td>
								<?php } ?>
							</tr>
							<tr>
								<td><font color="#707B7C">ΙΣ</font></td>
								<td><font color="#707B7C">Ιατρική Σχολή</font></td>
								<td><font color="#707B7C"><?=$response['result'][6]['COUNT(patientID)']?></font></td>
								<?php if($response['result']['all']['COUNT(patientID)']!=0){ ?>
								<td><font color="#707B7C"><?=$response['result'][6]['COUNT(patientID)']/$response['result']['all']['COUNT(patientID)']*100?>%</font></td>
								<?php }else{ ?>
								<td><font color="#707B7C">0%</font></td>
								<?php } ?>
							</tr>
							<tr>
								<td><font color="#707B7C">Φ</font></td>
								<td><font color="#707B7C">Φοιτητές</font></td>
								<td><font color="#707B7C"><?=$response['result']['students']['COUNT(patientID)']?></font></td>
								<?php if($response['result']['all']['COUNT(patientID)']!=0){ ?>
								<td><font color="#707B7C"><?=$response['result']['students']['COUNT(patientID)']/$response['result']['all']['COUNT(patientID)']*100?>%</font></td>
								<?php }else{ ?>
								<td><font color="#707B7C">0%</font></td>
								<?php } ?>
							</tr>
							<tr>
								<td><font color="#707B7C">ΑΠ</font></td>
								<td><font color="#707B7C">Ακαδημαικό Προσωπικό</font></td>
								<td><font color="#707B7C"><?=$response['result']['academic']['COUNT(patientID)']?></font></td>
								<?php if($response['result']['all']['COUNT(patientID)']!=0){ ?>
								<td><font color="#707B7C"><?=$response['result']['academic']['COUNT(patientID)']/$response['result']['all']['COUNT(patientID)']*100?>%</font></td>
								<?php }else{ ?>
								<td><font color="#707B7C">0%</font></td>
								<?php } ?>
							</tr>
							<tr>
								<td><font color="#707B7C">ΔΠ</font></td>
								<td><font color="#707B7C">Διοικητικό Προσωπικό</font></td>
								<td><font color="#707B7C"><?=$response['result']['adminstaff']['COUNT(patientID)']?></font></td>
								<?php if($response['result']['all']['COUNT(patientID)']!=0){ ?>
								<td><font color="#707B7C"><?=$response['result']['adminstaff']['COUNT(patientID)']/$response['result']['all']['COUNT(patientID)']*100?>%</font></td>
								<?php }else{ ?>
								<td><font color="#707B7C">0%</font></td>
								<?php } ?>
							</tr>
							<tr>
								<td><font color="#707B7C">Α</font></td>
								<td><font color="#707B7C">Άλλο</font></td>
								<td><font color="#707B7C"><?=$response['result']['other']['COUNT(patientID)']?></font></td>
								<?php if($response['result']['all']['COUNT(patientID)']!=0){ ?>
								<td><font color="#707B7C"><?=$response['result']['other']['COUNT(patientID)']/$response['result']['all']['COUNT(patientID)']*100?>%</font></td>
								<?php }else{ ?>
								<td><font color="#707B7C">0%</font></td>
								<?php } ?>
							</tr>
							<tr>
								<td colspan="2">ΣΥΝΟΛΟ</td>
								<td><?=$response['result']['all']['COUNT(patientID)']?></td>
								<?php if($response['result']['all']['COUNT(patientID)']!=0){ ?>
								<td><?=$response['result']['all']['COUNT(patientID)']/$response['result']['all']['COUNT(patientID)']*100?>%</td>
								<?php }else{ ?>
								<td><font color="#707B7C">0%</font></td>
								<?php } ?>
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
