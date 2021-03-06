<?php session_start(); ob_start();?>
<!DOCTYPE html>
<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/psych.php";
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
		//print "<h5>".$tok."</h5>";
		?>
		<script>
			document.cookie='token=<?= $tok ?>';
		</script>
		<?php
		//$GLOBALS['curtoken']=giveToken();
		//print "<h5>".$GLOBALS['curtoken']."</h5>";
		$response=request($url,$method,$postfields,$tok);
	}
	
//}
?>
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
								<a href="myprofile_frontdesk.php"><i class="fa fa-user fa-fw"></i> Προφίλ</a>
							</li>
							<li>
								<a href="usermanual_frontdesk.php"><i class="fa fa-gear fa-fw"></i> Εγχειρίδιο</a>
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
								<a href="psindex_frontdesk.php"><i class="fa fa-table"></i> Ημερολόγιο</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-list"></i> Επιλογές<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="myclients_frontdesk.php">Πελάτες</a>
									</li>
									<li>
										<a href="myappointments_frontdesk.php">Ραντεβού</a>
									</li>
									<li>
										<a href="waitinglist_frontdesk.php">Λίστα Αναμονής</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							<li>
								<a href="approvefiles_frontdesk.php"><i class="fa fa-check"></i> 	Έγκριση Εισερχόμενων Αρχείων</a>
							</li>
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
						<h1 class="page-header">Λίστα Αναμονής</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<!-- /.panel-heading -->
							<div class="panel-body">
								<form method="post" action="" >
								<table id="dataTables-example" width="100%" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Ημερομηνία</th>
											<th>Πελάτης</th>
											<th>Προτεταιότητα</th>
											<th>Ανάθεση</th>
										</tr>
									</thead>
									<tbody>
										<?php for($j=0;$j<count($response['result1']);$j++){?>
										<tr>
											<input type="hidden" name="id[]" value=<?=$response['result1'][$j]['patientID']?>>
											<td><?=$response['result1'][$j]['datesubmited']?></td>
											<td><?=$response['result1'][$j]['firstname']?> <?= $response['result1'][$j]['lastname']?></td>
											<td><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<?php if(strnatcmp($response['result1'][$j]['priority'],"suicide")==0){?>
											<select name="prio[]">
												<option value="suicide" selected="selected">Suicide Risk</option>
												<option value="violence" >Violence Potential</option>
												<option value="billing">Billing Issues</option>
												<option value="disability">Disability</option>
											</select></td>
											<?php }elseif(strnatcmp($response['result1'][$j]['priority'],"violence")==0){?>
											<select name="prio[]">
												<option value="suicide">Suicide Risk</option>
												<option value="violence" selected="selected">Violence Potential</option>
												<option value="billing">Billing Issues</option>
												<option value="disability">Disability</option>
											</select ></td>
											<?php }elseif(strnatcmp($response['result1'][$j]['priority'],"billing")==0){?>
											<select name="prio[]">
												<option value="suicide">Suicide Risk</option>
												<option value="violence" >Violence Potential</option>
												<option value="billing" selected="selected">Billing Issues</option>
												<option value="disability">Disability</option>
											</select></td>
											<?php }elseif(strnatcmp($response['result1'][$j]['priority'],"disability")==0){?>
											<select name="prio[]">
												<option value="suicide">Suicide Risk</option>
												<option value="violence" >Violence Potential</option>
												<option value="billing">Billing Issues</option>
												<option value="disability" selected="selected">Disability</option>

											</select></td>
											<?php }else{?>
											<select name="prio[]">
												<option selected="selected"></option>
												<option value="suicide">Suicide Risk</option>
												<option value="violence">Violence Potential</option>
												<option value="billing">Billing Issues</option>
												<option value="disability">Disability</option>
											</select></td>

											<?php } ?>
											<td><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<select name=<?=$response['result1'][$j]['patientID']?>>
												<option selected="selected"></option>
												<?php for($i=0;$i<count($response['result']);$i++){ ?>
												<option value=<?=$response['result'][$i]['psychologistID']?>><?=$response['result'][$i]['firstname'] ?> <?=$response['result'][$i]['lastname'] ?></option>
												<?php } ?>
											</select></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
								<br>
								<div class="form-group" align="left">
									<input type="submit" value="Αποθήκευση Προτεραιότητας" class="btn btn-default" name="submit1" id="submit">
								</div>
								<div class="form-group" align="left">
									<input value="Καταχώρηση" type="submit" class="btn btn-default" name="submit" id="submit">
								</div>
								
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
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/waitlist.php";
$method='POST';
if(isset($_POST['submit'])){
for($i=0;$i<count($response['result1']);$i++){	
	if($_POST[$response['result1'][$i]['patientID']]!=NULL){
$postfields=http_build_query(array(
	'patientID'=>$response['result1'][$i]['patientID'],
	'psychID'=>$_POST[$response['result1'][$i]['patientID']]
	));
	if(isset($_COOKIE['token'])){
		$response1=request($url,$method,$postfields,$_COOKIE['token']);
	}else{
		$response1=0;
	}
	while($response1['status']!=1){
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
	}
	
	}
	
header("Refresh:0");
}
?>
<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/clientpriority.php";
$method='POST';
$i=0;

if(isset($_POST['submit1'])){
	foreach($_POST['id'] as $j){
	
$postfields=http_build_query(array(
	'id'=> $_POST['id'][$i],		
	'priority'=> $_POST['prio'][$i]
		));
		$i++;
	if(isset($_COOKIE['token'])){
		$response2=request($url,$method,$postfields,$_COOKIE['token']);
	}else{
		$response2=0;
	}
	if($response2['status']!=1){
		$tok=giveToken();
		print "<h5>".$tok."</h5>";
		?>
		<script>
			document.cookie='token=<?= $tok ?>';
		</script>
		<?php
		//$GLOBALS['curtoken']=giveToken();
		//print "<h5>".$GLOBALS['curtoken']."</h5>";
		$response2=request($url,$method,$postfields,$tok);
	}
	
}
header("Refresh:0");
}
?>

