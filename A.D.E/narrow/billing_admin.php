<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/myclient.php?patientID=".$_GET['patientID'];
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

			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Case File</h1>
					</div>
				</div>
				<div>
					<!-- /.col-lg-12 -->
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li>
										<a href="casenotes_admin.php">Σημειώσεις Προόδου</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Σημειώσεις<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="contactlog_admin.php">Contact Logs</a>
											</li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Γενικές πληροφορίες<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="personalinformation_admin.php">Προσωπικά Στοιχεία Πελάτη</a>
											</li>
											<li>
												<a href="schedule_admin.php">Διαθέσιμο Πρόγραμμα Πελάτη</a>
											</li>
										</ul>

									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ιατρικές Πληροφορίες <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="clientrelationships_admin.php">Οικογενειακές Σχέσεις Πελάτη</a>
											</li>
											<li>
												<a href="clientmedication_admin.php">Φαρμακευτική Αγωγή Πελάτη</a>
											</li>
											<li>
												<a href="medhistory_admin.php">Medlog</a>
											</li>
											<li>
												<a href="form07_admin.php">Έκθεση αρχικής αξιολόγησης</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="externalinformation_admin.php">Εξωτερική Πληροφόρηση</a>
									</li>
									<li>
										<a href="billing_admin.php">Πληρωμές</a>
									</li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
				</div>

				<div>
					<div class="panel panel-default">
						<div class="panel-heading">
							Τιμολόγιο για τον Χ πελάτη
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label for="date">Ημερομηνία</label>
								<input type="date" class="form-control" id="date" placeholder="" />
							</div>
							<div class="form-group">
								<label for="name">Όνομα Πελάτη</label>
								<input type="text" class="form-control" id="name" placeholder="" />
							</div>
							<div class="form-group">
								<label for="psychologist">Όνομα Θεραπευτή</label>
								<input type="text" class="form-control" id="psychologist" placeholder="" />
							</div>
							<div class="form-group">
								<label for="dateofservices">Ημερομηνία λήψης υπηρεσιών</label>
								<input type="date" class="form-control" id="dateofservices" placeholder="" />
							</div>
							<div class="form-group">
								<label for="code">Κωδικός χρέωσης </label>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
								<select onchange="yesnoCheck(this);">
									<option value="1">Ατομική</option>
									<option value="2" selected="selected">Ομαδική</option>
									<option value="3">Ζευγάρι/Οικογένεια</option>
									<option value="4">Συμβουλευτική</option>
									<option value="5">Άλλο</option>
								</select>
							</div>
							<div id="ifYes" style="display: none;">
								<input type="text" class="form-control" id="other" placeholder="" />
							</div>
							<script>
								function yesnoCheck(that) {
									if (that.value == "5") {
										document.getElementById("ifYes").style.display = "block";
									} else {
										document.getElementById("ifYes").style.display = "none";
									}
								}
							</script>
							<br>
							<div class="form-group" align="center">
								<button type="button" class="form-group" name="submit" id="submit">
									Submit
								</button>
							</div>
						</div>
					</div>
					<div>
						<div class="panel panel-default">
							<div class="panel-heading">
								Στοιχεία πληρωμής
							</div>
							<div class="panel-body">
								<div class="form-group">
									<label for="date">Ημερομηνία πληρωμής</label>
									<input type="dateofpayment" class="form-control" id="dateofpayment" placeholder="" />
								</div>
								<div class="form-group">
									<label for="name">Μέθοδος πληρωμής</label>
									<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
									<select onchange="yesnoCheck(this);">
										<option value="1" selected="selected">Μετρητά</option>
										<option value="2">Επιταγή</option>
										<option value="3">Άλλο</option>
									</select>
								</div>
								<script>
									function yesnoCheck(that) {
										if (that.value == "1") {
											document.getElementById("ifepitagi").style.display = "none";
											document.getElementById("ifallo").style.display = "none";
										}
										if (that.value == "2") {
											document.getElementById("ifepitagi").style.display = "block";
											document.getElementById("ifallo").style.display = "none";
										}
										if (that.value == "3") {
											document.getElementById("ifallo").style.display = "block";
											document.getElementById("ifepitagi").style.display = "none";
										}

									}
								</script>

								<div id="ifepitagi" style="display: none;">
									<label for="number">Αριθμός Επιταγής</label>
									<input type="number" class="form-control" id="number" placeholder="" />
								</div>
								<div id="ifallo" style="display: none;">
									<input type="number" class="form-control" id="other2" placeholder="" />
								</div>

								<br>
								<div class="form-group" align="center">
									<button type="button" class="form-group" name="submit" id="submit">
										Submit
									</button>
								</div>
							</div>
						</div>
					</div>
					<!--end box-->
					<div>
						<div class="panel panel-default">
							<div class="panel-heading">
								Διαδικασία πληρωμής
							</div>
							<div class="panel-body">
								<div class="form-group">
									<label for="payments">Κατάσταση πληρωμής </label>
									<input type="hidden" name="payment" />
									<br>
									<input type="radio" name="payment" value="pending">
									Εκκρεμεί
									<br>
									<input type="radio" name="payment" value="submitted">
									Κατατέθηκε
									<br>
									<input type="radio" name="payment" value="completed">
									Ολοκληρώθηκε
									<br>
									<input type="radio" name="payment" value="canceled">
									Ακυρώθηκε
									<br>
									<input type="radio" name="payment" value="rejected">
									Απορρίφθηκε
									<br>
									<input type="radio" name="payment" value="repeated">
									Επανακατατέθηκε
									<br>
									<input type="radio" name="payment" value="late">
									Καθυστερημένη
									<br>
									<input type="radio" name="payment" value="deleted">
									Διαγράφηκε
									<br>
									<input type="radio" name="payment" value="refund">
									Επιστράφηκε
								</div>
								<div class="form-group" align="center">
									<button type="button" class="form-group" name="submit" id="submit">
										Submit
									</button>
								</div>
							</div>
						</div>
						<div>
							<br>
							<br>
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