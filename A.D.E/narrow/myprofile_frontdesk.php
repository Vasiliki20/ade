<?php session_start();
ob_start();
?>
<!DOCTYPE html>
<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/myprof.php?psychID=".$_SESSION['id'];
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

		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>

	</head>
	<style>
		body {
			background-color: #f8f8f8;
		}
	</style>
	<body>
		<h5> <?= $_SESSION['id'] ?>
		</h5>
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
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								&times;
							</button>
							<h4 class="modal-title">Αλλαγή κωδικού πρόσβασης</h4>
						</div>
						<div class="modal-body">
							<form role="form" action="" method="post">
								<table>
									<tr>
										<td align="left"><label for="oldpassword">Υφιστάμενος κωδικός:</label></td>
										<td align="left">
										<input type="text" name="oldpassword" class="form-group" id="oldpassword">
										</td>
									</tr>
									<tr>
										<td align="left"><label for="newpassword">Νέος κωδικός:</label></td>
										<td align="left">
										<input type="text" name="newpassword" class="form-group" id="newpassword">
										</td>
									</tr>
									<tr>
										<td align="left"><label for="confirm">Επιβεβέωση νέου κωδικού:</label></td>
										<td align="left">
										<input type="text" name="confirm" class="form-group" id="confirm">
										</td>
									</tr>
								</table>
							<!--	<div class="g-recaptcha" data-sitekey="6LemmFYUAAAAAMsFML9AQpupI0mrxaBCvsZ9VAp1"></div>
							-->
							</form>
						
						</div>
						<div class="modal-footer">
							<input type="sumbit" name="submit1"  class="btn btn-default" value="save" data-dismiss="modal">

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
						<h1 class="page-header">Προφίλ</h1>
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

									<table>
										<tr>
											<td align="left"><label for="name">Όνομα:</label></td>
											<td align="left">
											<input type="text" name="name" class="form-group" id="name" value=<?=$response['result']['firstname']?>>
											</td>
										</tr>
										<tr>
											<td align="left"><label for="surname">Επίθετο:</label></td>
											<td align="left">
											<input type="text" name="surname" class="form-group" id="surname" value=<?=$response['result']['lastname']?>>
											</td>
										</tr>
										<tr>
											<td align="left"><label for="id">Αριθμός Ταυτότητας:</label></td>
											<td align="left">
											<input type="text" name="id" class="form-group" id="id" value=<?=$response['result']['psychologistID']?> disabled>
											</td>
										</tr>
										<tr>
											<td align="left"><label for="sex">Φύλο:</label></td>
											<td align="left">
											<input type="text" name="sex" class="form-group" id="sex" value=<?=$response['result']['sex']?>>
											</td>
										</tr>
										<tr>
											<td align="left"><label for="age">Ηλικία:</label></td>
											<td align="left">
											<input type="number" name="age" class="form-group" id="age" value=<?=$response['result']['age']?>>
											</td>
										</tr>
										<tr>
											<td align="left"><label for="address">Διεύθυνση Διαμονής:</label></td>
											<td align="left">
											<input type="text" name="address" class="form-group" id="address" value=<?=$response['result']['address']?>>
											</td>
										</tr>
										<tr>
											<td align="left"><label for="phone">Τηλέφωνο:</label></td>
											<td align="left">
											<input type="number" name="phone" class="form-group" id="phone" value=<?=$response['result']['telephone']?>>
											</td>
										</tr>
										<tr>
											<td align="left"><label for="fax">Fax:</label></td>
											<td align="left">
											<input type="number" name="fax" class="form-group" id="fax" value=<?=$response['result']['fax']?>>
											</td>
										</tr>
										<tr>
											<td align="left"><label for="position">Θέση Εργασίας:</label></td>
											<td align="left">
											<input type="text" name="position" class="form-group" id="position" value=<?=$response['result']['position']?>>
											</td>
										</tr>
										<tr>
											<td align="left"><label for="specialty">Ειδικότητα:</label></td>
											<td align="left">
											<input type="text" name="specialty" class="form-group" id="specialty" value=<?=$response['result']['speciality']?>>
											</td>
										</tr>
										<tr>
											<td align="left"><label for="building">Κτήριο:</label></td>
											<td align="left">
											<input type="text" name="building" class="form-group" id="building" value=<?=$response['result']['building']?>>
											</td>
										</tr>
										<tr>
											<td align="left"><label for="officenum">Αριθμός Γραφείου:</label></td>
											<td align="left">
											<input type="number" name="officenum" class="form-group" id="officenum" value=<?=$response['result']['office_num']?>>
											</td>
										</tr>
										<tr>
											<td align="left"><label for="email">Ηλεκτρονική Διεύθυνση:</label></td>
											<td align="left">
											<input type="email" name="email" class="form-group" id="email" value=<?=$response['result']['email']?>>
											</td>
										</tr>
									</table>
									
									<br>
									<input class="btn btn-default" type="submit" name="submit" value="Αποθήκευση αλλαγών"/>

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
		    <script src='https://www.google.com/recaptcha/api.js'></script>

	</body>

</html>

<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/myprofedit.php";
$method='POST';
if(isset($_POST['submit'])){
$postfields=http_build_query(array(
	'id'=> $_SESSION['id'],		
	'name'=> $_POST['name'],		
	'lastname'=> $_POST['surname'],		
	'sex' => $_POST['sex'],		
	'age' => $_POST['age'],		
	'address' => $_POST['address'],		
	'telephone' => $_POST['phone'],		
	'fax' => $_POST['fax'],
	'position' => $_POST['position'],		
	'speciality' => $_POST['specialty'],		
	'building' => $_POST['building'],		
	'office_num' => $_POST['officenum'],		
	'email' => $_POST['email'],			
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
			document.cookie='token=<?= $tok ?>';
		</script>
		<?php
		//$GLOBALS['curtoken']=giveToken();
		//print "<h5>".$GLOBALS['curtoken']."</h5>";
		$response1=request($url,$method,$postfields,$tok);
	}
	//var_dump($response1);
	header('Refresh:0');
}
?>
