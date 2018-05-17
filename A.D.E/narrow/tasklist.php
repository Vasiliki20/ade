<?php
require_once("requests.php"); 
session_start(); 
ob_start();
function isincomplete($input){
	foreach($input as $i){
		if(empty($i)){
			return true;
		}
	}
	return false;
}
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/tasklist_supervisor.php?psychID=".$_SESSION['id'];
$method='GET';
$postfields=http_build_query(array(
		'psychID' => $_SESSION['id']
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
//	var_dump($response);
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
	<style>
		
		.dropbtn {
			background-color: white;
			color: black;
			padding: 16px;
			font-size: 16px;
			border: none;
			cursor: pointer;
		}

		.dropbtn:hover, .dropbtn:focus {
			background-color: white;
		}

		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: white;
			min-width: 160px;
			overflow: auto;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown a:hover {
			background-color: #ddd
		}

		.show {
			display: block;
		}
		.down {
			transform: rotate(45deg);
			-webkit-transform: rotate(45deg);
		}
	</style>
	<script>
		$(document).ready(function() {
			$('myTable').DataTable();
		});
	</script>
	<script>
		/* When the user clicks on the button,
		 toggle between hiding and showing the dropdown content */
		function myFunction() {
			document.getElementById("myDropdown").classList.toggle("show");
		}

		// Close the dropdown if the user clicks outside of it
		window.onclick = function(event) {
			if (!event.target.matches('.dropbtn')) {
				var dropdowns = document.getElementsByClassName("dropdown-content");
				var i;
				for ( i = 0; i < dropdowns.length; i++) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
					}
				}
			}
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
								<a href="myprofile.php"><i class="fa fa-user fa-fw"></i> Προφίλ</a>
							</li>
							<li>
								<a href="usermanual.php"><i class="fa fa-gear fa-fw"></i> Εγχειρίδιο</a>
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
								<a href="psindex.php"><i class="fa fa-table"></i> Ημερολόγιο</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-list"></i> Επιλογές<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="tasklist.php">Λίστα Εργασιών</a>
									</li>
									<li>
										<a href="myclients.php">Πελάτες</a>
									</li>
									<li>
										<a href="myappointments.php">Ραντεβού</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="formupload_supervisor.php"><i class="fa fa-upload"></i> Ανάρτηση Αρχείου</a>
							</li>
							<li>
								<a href="reports.php"><i class="fa fa-bar-chart-o"></i> Στατιστικές</a>
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
						<h1 class="page-header">Λίστα Εργασιών</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<!-- /.panel-heading -->
							<div class="panel-body">
								<table id="dataTables-example" width="100%" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Ημερομηνία</th>
											<th>Κατηγορία</th>
											<th>Αρ. Ταυτότητας Πελάτη</th>
											<th>Περιγραφή</th>
											<th>Δράση</th>
										</tr>
									</thead>
									<tbody>
										<?php if(isset($response)){for($i=0;$i<count($response['appointments']);$i++){ ?>
<?php if((strnatcmp($response['appointments'][$i]['attendance'],"Attended")!=0) && (strnatcmp($response['appointments'][$i]['attendance'],"not Attended")!=0) && $response['appointments'][$i]['patientID']!=NULL){
										?>
										<tr>
										<td><?=$response['appointments'][$i]['start'] ?></td>
										<td><a href="myappointments.php">Appointment</a></td>
										<td><?=$response['appointments'][$i]['patientID'] ?></td>
										<td><?=$response['appointments'][$i]['subject'] ?></td>
										<td><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
										<select>
										<option value="1" >Signature required</option>
										<option value="2">Note Incomplete</option>
										<option value="3" selected="selected">Mark attendance</option>
										</select></td>
										</tr>
										<?php }}} ?>
										<?php if(isset($response)){for($i=0;$i<count($response['casenotes']);$i++){ ?>
<?php if($response['casenotes'][$i]==false){
}elseif(strnatcmp($response['casenotes'][$i]['Signed'],"Ναί")!=0){
										?>
										<tr>
										<td><?=$response['casenotes'][$i]['dateof'] ?></td>
										<td><a href="casenotes_sign.php?c=<?=$response['casenotes'][$i]['caseID'] ?>">Case Note</a></td>
										<td></td>
										<td><?=$response['casenotes'][$i]['sessioncontent'] ?></td>
										<td><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
										<select>
										<option value="1" selected="selected">Signature required</option>
										<option value="2">Note Incomplete</option>
										<option value="3" >Mark attendance</option>
										</select></td>
										</tr>
										<?php }elseif(isincomplete($response['casenotes'][$i])){ ?>
										<tr>
										<td><?=$response['casenotes'][$i]['dateof'] ?></td>
										<td><a href="casenotes_sign.php?c=<?=$response['casenotes'][$i]['caseID'] ?>">Case Note</a></td>
										<td></td>
										<td><?=$response['casenotes'][$i]['sessioncontent'] ?></td>
										<td><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
										<select>
										<option value="1" >Signature required</option>
										<option value="2"selected="selected" >Note Incomplete</option>
										<option value="3" >Mark attendance</option>
										</select></td>
										</tr>
										<?php }}} ?>
									</tbody>
								</table>
								<br>

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