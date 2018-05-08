<?php session_start();
ob_start();
 ?>
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
		<!-- FOR DROPDOWN -->
		<meta name="robots" content="noindex, nofollow">
		<meta name="googlebot" content="noindex, nofollow">
		
		<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>

		<link rel="stylesheet" type="text/css" href="/css/result-light.css">

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
	</head>
	<script>
		$(document).ready(function() {
			$('myTable').DataTable();
		});
	</script>
	<style>
		body {
			background-color: #f8f8f8;
		}
	</style>
	<body>
		<h5> <?= $_SESSION['id'] ?> </h5>
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
								<a href="psindex_admin.php"><i class="fa fa-table"></i> Calendar</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-list"></i> Open<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="myclients_admin.php">Clients</a>
									</li>
									<li>
										<a href="therapists.php">Therapists</a>
									</li>
									<li>
										<a href="myappointments_admin.php">My Appointments</a>
									</li>
									<li>
										<a href="waitinglist_admin.php">Waiting List</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
						</ul>
					</div>
					<!-- /.sidebar-collapse -->
				</div>
				<!-- /.navbar-static-side -->
			</nav>
			<!--	<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
			<!--	<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">
			&times;
			</button>
			<h4 class="modal-title">Add New Therapist</h4>
			</div>
			<div class="modal-body">
			<p>
			<form role="form" action="therapists.php" method="post">
			<div class="form-group">
			<label class="sr-only" for="name">Όνομα</label>
			<input type="text" name="name" placeholder="Όνομα" class="form-control" id="name">
			</div>
			<div class="form-group">
			<label class="sr-only" for="surname">Επίθετο</label>
			<input type="text" name="surname" placeholder="Επίθετο" class="form-control" id="surname">
			</div>
			<div class="form-group">
			<label class="sr-only" for="id">Αριθμός Ταυτότητας</label>
			<input type="text" name="id" placeholder="Αριθμός Ταυτότητας" class="form-control" id="id">
			</div>
			<div class="form-group">
			<input class="w3-radio" type="radio" name="gender" value="male" checked>
			<label>Άρρεν</label>
			<input class="w3-radio" type="radio" name="gender" value="female">
			<label>Θήλυ</label>
			<input class="w3-radio" type="radio" name="gender" value="other">
			<label>Άλλο</label>
			</div>
			<div class="form-group">
			<label class="sr-only" for="age">Ηλικία</label>
			<input type="text" name="age" placeholder="Ηλικία" class="form-control" id="age">
			</div>
			<div class="form-group">
			<label class="sr-only" for="address">Διεύθυνση Διαμονής</label>
			<input type="text" name="address" placeholder="Διεύθυνση Διαμονής" class="form-control" id="address">
			</div>
			<div class="form-group">
			<label class="sr-only" for="phone">Τηλέφωνο</label>
			<input type="number" name="phone" placeholder="Τηλέφωνο" class="form-control" id="phone">
			</div>
			<div class="form-group">
			<label class="sr-only" for="fax">Fax</label>
			<input type="number" name="fax" placeholder="Fax" class="form-control" id="fax">
			</div>
			<div class="form-group">
			<label class="sr-only" for="position">Θέση Εργασίας</label>
			<input type="text" name="position" placeholder="Θέση Εργασίας" class="form-control" id="position">
			</div>
			<div class="form-group">
			<label class="sr-only" for="specialty">Ειδικότητα</label>
			<input type="text" name="speciality" placeholder="Ειδικότητα" class="form-control" id="specialty">
			</div>
			<div class="form-group">
			<label class="sr-only" for="building">Κτήριο</label>
			<input type="text" name="building" placeholder="Κτήριο" class="form-control" id="building">
			</div>
			<div class="form-group">
			<label class="sr-only" for="officenum">Αριθμός Γραφείου</label>
			<input type="number" name="officenum" placeholder="Αριθμός Γραφείου" class="form-control" id="officenum">
			</div>

			</p>
			</div>
			<div class="modal-footer">
			<input type="sumbit" name="submit1"  class="btn btn-default" value="save" data-dismiss="modal">

			</form>
			<button type="button" class="btn btn-default" data-dismiss="modal">
			Close
			</button>
			</div>
			</div>

			</div>
			</div>-->
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Therapists</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<!-- /.panel-heading -->
							<div class="panel-body">
								<!--	<div>
								<button type="button" onclick="" class="btn btn-default" name="add" data-toggle="modal" data-target="#myModal">
								Add Therapist
								</div>-->
								<form method="post" action="">
									<table id="dataTables-example" width="100%" class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th>Όνομα</th>
												<th>Επίθετο</th>
												<th>Ταυτότητα</th>
												<th>Τύπος</th>
												<th>Κατάσταση</th>
												<th>Επιλεγμέμνη κατάσταση</th>
											</tr>
										</thead>
										<tbody>
											<script type="text/javascript">
			$(window).load(function() {

				$("select").change(function() {
					var str = "";
					$(".item-number option:selected").each(function(i) {
						if ($(this).attr('label'))
							str = $(this).attr('label');
						else
							str = "Description shows up here ";
					});
					$(".item-name").text(str);
				}).trigger('change');

			});

		</script>
											<script>
																							document.cookie='token=<?= $tok ?>
												';
											</script>

											<?php
if(isset($response)){for($i=0;$i<count($response['result']);$i++){ ?>
<tr>
<td><?= $response['result'][$i]['firstname'] ?></td>
											<td><?= $response['result'][$i]['lastname'] ?></td>
											<td><input type="hidden" value="<?= $response['result'][$i]['psychologistID'] ?>" name="id[]"><label for="id[]"><?= $response['result'][$i]['psychologistID'] ?></label></td>
											<td><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<?php if(strnatcmp($response['result'][$i]['typeof'],"frontdesk")==0){
											?>
											<input type="hidden" value="<?= $response['result'][$i]['typeof'] ?>" name="type[]"><label for="type[]"><?= $response['result'][$i]['typeof'] ?></label>
											</td>
											<?php }else if(strnatcmp($response['result'][$i]['typeof'],"admin")==0){ ?>
											<input type="hidden" value="<?= $response['result'][$i]['typeof'] ?>" name="type[]"><label for="type[]"><?= $response['result'][$i]['typeof'] ?></label>
											</td>
											<?php }else if(strnatcmp($response['result'][$i]['typeof'],"therapist")==0){ ?>
											<select name="type[]">
											<option value="therapist" selected="selected">Therapist</option>
											<option value="supervisor" >Supervisor</option>
											</select></td>
											<?php }else if(strnatcmp($response['result'][$i]['typeof'],"supervisor")==0){ ?>
											<select name="type[]">
											<option value="therapist" >Therapist</option>
											<option value="supervisor" selected="selected">Supervisor</option>
											</select></td>
											<?php } ?>
											<td><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
												<?php if($response['result'][$i]['active']==0){
												?>
											<select name="status[]" class="item-number">
											<option value="1" label="Active">Active</option>
											<option value="0" label="Deactive" selected="selected">Deactive</option>
											<option value="delete" label="Delete">Delete</option>
											</select></td>
											<?php }else{ ?>
											<select name="status[]" class="item-number">
											<option value="1" label="Active" selected="selected">Active</option>
											<option value="0" label="Deactive">Deactive</option>
											<option value="delete" label="Delete">Delete</option>
											</select></td>
											<td>
											<span class="item-name">Description shows up here</span>
											</td>
											<?php } ?>
											</tr>
											<?php }} ?>
									</table>
									<input type="submit" name="submit1" value="Save Changes"/>
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
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/therapistflags.php";
$method='POST';
$i=0;
if(isset($_POST['submit1'])){
var_dump($_POST['id']);
var_dump($_POST['type']);
var_dump($_POST['status']);
foreach($_POST['id'] as $j){

$postfields=http_build_query(array(
'id'=> $_POST['id'][$i],
'type'=> $_POST['type'][$i],
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
	document.cookie='token=<?= $tok ?>';</script>
<?php
//$GLOBALS['curtoken']=giveToken();
//print "<h5>".$GLOBALS['curtoken']."</h5>";
$response1 = request($url, $method, $postfields, $tok);
}
var_dump($response1);
}
header("Refresh:0");
}
?>
