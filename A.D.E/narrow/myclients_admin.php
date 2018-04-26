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
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<script>
		$(document).ready(function() {
			$('myTable').DataTable();
		});
	</script>
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
									<li>
										<a href="search_admin.php">Search</a>
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
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								&times;
							</button>
							<h4 class="modal-title">Add New Client</h4>
						</div>
						<div class="modal-body">
							<p>
								<form role="form" action="" method="post">
									<div class="form-group">
										<label class="sr-only" for="type">Τύπος πελάτη</label>
										<input type="text" name="type" placeholder="Τύπος" class="form-control" id="type">
									</div>
									<div class="form-group">
										<label class="sr-only" for="id">Αριθμός Ταυτότητας</label>
										<input type="text" name="id" placeholder="Αριθμός Ταυτότητας" class="form-control" id="id">
									</div>
									<div class="form-group">
										<label class="sr-only" for="name">Όνομα</label>
										<input type="text" name="name" placeholder="Όνομα" class="form-control" id="name">
									</div>
									<div class="form-group">
										<label class="sr-only" for="surname">Επίθετο</label>
										<input type="text" name="surname" placeholder="Επίθετο" class="form-control" id="surname">
									</div>
									<div class="form-group">
										<label class="sr-only" for="psychologist">Ψυχολόγος στον οποίο θα ανατεθεί</label>
										<input type="text" name="psychologist" placeholder="Ψυχολόγος" class="form-control" id="psychologist">
									</div>
									<div class="form-group">
										<label class="sr-only" for="datenew">Ημερομηνία Ένταξης</label>
										<input type="date" name="datenew" placeholder="Ημερομηνία Ένταξης" class="form-control" id="datenew">
									</div>
									<div class="form-group">
										<label class="sr-only" for="age">Ηλικία</label>
										<input type="text" name="age" placeholder="Ηλικία" class="form-control" id="age">
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
										<label class="sr-only" for="dof">Ημερομηνία Γέννησης</label>
										<input type="date" name="dof" placeholder="Ημερομηνία Γέννησης" class="form-control" id="dof">
									</div>
									<div class="form-group">
										<label class="sr-only" for="citizenship">Υπηκόοτητα</label>
										<input type="text" name="citizenship" placeholder="Υπηκόοτητα" class="form-control" id="citizenship">
									</div>
									<div class="form-group">
										<label class="sr-only" for="phone">Τηλέφωνο</label>
										<input type="number" name="phone" placeholder="Τηλέφωνο" class="form-control" id="phone">
									</div>
									<div class="form-group">
										<label for="email">Ηλ.Διεύθυνση:</label>
										<input type="email" class="form-control" id="email" placeholder="" name="email">
									</div>
									<div class="form-group">
										<label for="address">Διεύθυνση Διαμονής:</label>
										<input type="text" class="form-control" id="address" placeholder="" name="address">
									</div>
									<div class="form-group">
										<label for="tk">Τ.Κ:</label>
										<input type="text" class="form-control" id="tk" placeholder="" name="tk">
									</div>
									<div class="form-group">
										<label for="city">Πόλη/Χωριό:</label>
										<input type="text" class="form-control" id="city" placeholder="" name="city">
									</div>
									<div class="form-group">
										<label for="contact">Πως να επικοινωνεί το κέντρο μαζί του:</label>
										<input type="text" class="form-control" id="contact" placeholder="" name="contact">
									</div>
									<div class="form-group">
										<label for="recommended">Ποιός του σύστησε το κέντρο:</label>
										<input type="text" class="form-control" id="recommended" placeholder="" name="recommended">
									</div>
									<div class="form-group">
										<label for="mainproblem">Κύριο πρόβλημα:</label>
										<input type="text" class="form-control" id="mainproblem" placeholder="" name="mainproblem">
									</div>
									<div class="form-group">
										<label for="goal">Σκοπός θεραπείας:</label>
										<input type="text" class="form-control" id="goal" placeholder="" name="goal">
									</div>
									<div class="form-group">
										<label for="typeoftreatment">Είδος θεραπείας:</label>
										<input type="text" class="form-control" id="typeoftreatment" placeholder="" name="typeoftreatment">
									</div>
									<div class="form-group">
										<label for="previoustreatment">Προηγούμενες θεραπείες και που:</label>
										<input type="text" class="form-control" id="previoustreatment" placeholder="" name="previoustreatment">
									</div>
									<div class="form-group">
										<label for="treatmentnow">Θεραπευτής τώρα:</label>
										<input type="text" class="form-control" id="treatmentnow" placeholder="" name="treatmentnow">
									</div>
									<div class="form-group">
										<label for="phoneofps">Τηλέφωνο θεραπευτή:</label>
										<input type="number" class="form-control" id="phoneofps" placeholder="" name="phoneofps" >
									</div>
									<div class="form-group">
										<label for="numberofsessions">Αριθμός θεραπειών:</label>
										<input type="number" class="form-control" id="numberofsessions" placeholder="" name="numberofsessions">
									</div>
									<div class="form-group">
										<label for="firstcontact">Ημερομηνία πρώτης επικοινωνίας με ΚΕΨΥ:</label>
										<input type="date" class="form-control" id="firstcontact" placeholder="" name="firstcontact">
									</div>
									<div class="form-group">
										<label for="firstappointment">Ημερομηνία πρώτου ραντεβού με ΚΕΨΥ:</label>
										<input type="date" class="form-control" id="firstappointment" placeholder="" name="firstappointment">
									</div>
									<div class="form-group">
										<label for="status">Status:</label>
										<input type="text" class="form-control" id="status" placeholder="" name="status">
									</div>
									<div class="form-group">
										<label for="marital">Οικογενειακή κατάσταση:</label>
										<input type="text" class="form-control" id="marital" placeholder="" name="marital">
									</div>
									<div class="form-group">
										<label for="flag">Red flag:</label>
										<input type="text" class="form-control" id="flag" placeholder="" name="flag">
									</div>
									<div class="form-group">
										<label for="billing">Υπάρχει πληρωμή:</label>
										<input type="text" class="form-control" id="billing" placeholder="" name="billing">
									</div>
									<div class="form-group">
										<label for="moreinfo">Άλλες πληροφορίες:</label>
										<input type="text" class="form-control" id="moreinfo" placeholder="" name="moreinfo">
									</div>
									<div class="form-group">
										<label for="complaints">Παράπονα:</label>
										<input type="text" class="form-control" id="complaints" placeholder="" name="complaints">
									</div>
									<div class="form-group">
										<label for="dateofend">Ημερομηνία Τερματισμού:</label>
										<input type="date" class="form-control" id="dateofend" placeholder="" name="dateofend">
									</div>
									<div class="form-group">
										<label for="whyend">Λόγος διακοπής:</label>
										<input type="text" class="form-control" id="whyend" placeholder="" name="whyend">
									</div>
									<div class="form-group">
										<label for="review">Αξιολόγηση κέντρου μετά από τερματισμό:</label>
										<input type="text" class="form-control" id="review" placeholder="" name="review">
									</div>

									<div class="form-group">
										<label for="level">Επίπεδο σπουδών:</label>
										<input type="text" class="form-control" id="level" placeholder="" name="level">
									</div>
									<div class="form-group">
										<label for="year">Έτος σπουδών:</label>
										<input type="text" class="form-control" id="year" placeholder="" name="year">
									</div>
									<div class="form-group">
										<label for="department">Τμήμα σπουδών:</label>
										<input type="text" class="form-control" id="department" placeholder="" name="department">
									</div>
									<div class="form-group">
										<label for="study">Σχολή σπουδών:</label>
										<input type="text" class="form-control" id="study" placeholder="" name="study">
									</div>
									<div class="form-group">
										<label for="erasmus">Erasmus:</label>
										<input type="text" class="form-control" id="erasmus" placeholder="" name="erasmus">
									</div>
									<div class="form-group">
										<label for="attendancestatus">Κατάσταση φοίτησης:</label>
										<input type="text" class="form-control" id="attendancestatus" placeholder="" name="attendancestatus">
									</div>

								</form>

							</p>
						</div>
						<div class="modal-footer">
							<button type="sumbit" class="btn btn-default" data-dismiss="modal">
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
						<h1 class="page-header">Clients</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<!-- /.panel-heading -->
							<div class="panel-body">
								<div>
									<button type="button" onclick="" class="btn btn-default" name="add" data-toggle="modal" data-target="#myModal">
										Add Client
								</div>
								<form method="post" action="">
								<table id="dataTables-example" width="100%" class="table table-striped table-bordered table-hover">

									<thead>
										<tr>
											<th>Όνομα</th>
											<th>Επίθετο</th>
											<th>Ταυτότητα</th>
											<th>Options</th>
											<th>Case File</th>
										</tr>
									</thead>
									<tbody>
										<?php require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/allclients.php";
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
	
	
//}
?>
										<?php
if(isset($response)){for($i=0;$i<count($response['result']);$i++){ ?>
<tr>
<td><?= $response['result'][$i]['firstname'] ?></td>
										<td><?= $response['result'][$i]['lastname'] ?></td>
										<td><input type="hidden" value="<?= $response['result'][$i]['patientID'] ?>" name="id[]"><label for="id[]"><?= $response['result'][$i]['patientID'] ?></label></td>
										<td><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
										<?php if($response['result'][$i]['active']==0){ ?>
										<select name="status[]">
										<option value="1">Active</option>
										<option value="0" selected="selected">Deactive</option>
										<option value="delete">Delete</option>
										</select></td>
										<td><a  href="casefile_admin.php?patientID=<?= $response['result'][$i]['patientID']?>">link</a></td>
										<?php }else{ ?>
										<select name="status[]">
										<option value="1" selected="selected">Active</option>
										<option value="0">Deactive</option>
										<option value="delete">Delete</option>
										</select></td>
										<td><a  href="casefile_admin.php?patientID=<?= $response['result'][$i]['patientID']?>">link</a></td>
										</tr>
										<?php }}} ?>
									</tbody>
								</table>
								<button type="submit" name="submit1" class="btn btn-default">
									Save Changes
								</button>
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
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/clientactive.php";
$method='POST';
$i=0;
if(isset($_POST['submit1'])){
	 var_dump($_POST['id']);
	 var_dump($_POST['status']);
	foreach($_POST['id'] as $j){
	
$postfields=http_build_query(array(
	'id'=> $_POST['id'][$i],		
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