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
			document.cookie='token=<?= $tok ?>';
		</script>
		<?php
		//$GLOBALS['curtoken']=giveToken();
		//print "<h5>".$GLOBALS['curtoken']."</h5>";
		$response=request($url,$method,$postfields,$tok);
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
								<a href="myprofile_therapist.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
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
										<a href="casenotes_therapist.php?patientID=<?=$_GET['patientID'] ?>">Σημειώσεις Προόδου</a>
									</li>
									<li>
										<a href="filesofpatient_therapist.php">Εκθέσεις/Αναφορές</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Γενικές πληροφορίες<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="personalinformation_therapist.php?patientID=<?= $_GET['patientID'] ?>">Προσωπικά Στοιχεία Πελάτη</a>
											</li>
											<li>
												<a href="schedule_therapist.php?patientID=<?= $_GET['patientID'] ?>">Διαθέσιμο Πρόγραμμα Πελάτη</a>
											</li>
											<li>
												<a href="contactlog_therapist.php?patientID=<?= $_GET['patientID'] ?>">Contact Logs</a>
											</li>
										</ul>

									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ιατρικές Πληροφορίες <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="clientrelationships_therapist.php?patientID=<?= $_GET['patientID'] ?>">Οικογενειακές Σχέσεις Πελάτη</a>
											</li>
											<li>
												<a href="clientmedication_therapist.php?patientID=<?= $_GET['patientID'] ?>">Φαρμακευτική Αγωγή Πελάτη</a>
											</li>
											<li>
												<a href="medhistory_therapist.php?patientID=<?= $_GET['patientID'] ?>">Medlog</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="externalinformation_therapist.php?patientID=<?= $_GET['patientID'] ?>">Εξωτερική Πληροφόρηση</a>
									</li>
									<li>
										<a href="billing_therapist.php?patientID=<?= $_GET['patientID'] ?>">Πληρωμές</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Τερματισμός<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="formcomplaints_therapist.php">Παράπονα πελάτη</a>
											</li>
											<li>
												<a href="formreasons_therapist.php">Λόγοι Τερματισμού</a>
											</li>
										</ul>
									</li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
				</div>

				<div>
					<div class="panel panel-default">
						<div class="panel-heading">
							Προσωπικά Στοιχεία Πελάτη
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label for="type">Τύπος πελάτη:</label>
								<input type="text" class="form-control" id="type" placeholder="" name="type">
							</div>
							<div class="form-group">
								<label for="id">Αρ.Ταυτότητας:</label>
								<input type="text" class="form-control" id="id" placeholder="" name="id">
							</div>
							<div class="form-group">
								<label for="assigned">Ανάθεση σε ψυχολόγο:</label>
								<input type="text" class="form-control" id="assigned" placeholder="" name="assigned">
							</div>
							<div class="form-group">
								<label for="idofps">Μοναδικός Κωδικός Ψυχολόγου στον οποίο υπάγεται:</label>
								<input type="number" class="form-control" id="idofps" placeholder="" name="idofps">
							</div>
							<div class="form-group">
								<label for="name">Όνομα:</label>
								<input type="text" class="form-control" id="name" placeholder="" name="name">
							</div>
							<div class="form-group">
								<label for="surname">Επίθετο:</label>
								<input type="text" class="form-control" id="surname" placeholder="" name="surname">
							</div>
							<div class="form-group">
								<label for="appointment">Περίδος Ραντεβού:</label>
								<input type="text" class="form-control" id="appointment" placeholder="" name="appointment">
							</div>
							<div class="form-group">
								<label for="age">Ηλικία:</label>
								<input type="date" class="form-control" id="age" placeholder="" name="age">
							</div>
							<div class="form-group">
								<label for="sex">Φύλο:</label>
								<input type="text" class="form-control" id="sex" placeholder="" name="sex">
							</div>
							<div class="form-group">
								<label for="dob">Ημ.Γέννησης:</label>
								<input type="date" class="form-control" id="dob" placeholder="" name="dob">
							</div>
							<div class="form-group">
								<label for="ipikootita">Υπηκοότητα:</label>
								<input type="text" class="form-control" id="ipikootita" placeholder="" name="ipikootita">
							</div>
							<div class="form-group">
								<label for="phone">Τηλέφωνο:</label>
								<input type="number" class="form-control" id="phone" placeholder="" name="phone">
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
								<input type="number" class="form-control" id="phoneofps" placeholder="" name="phoneofps">
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
								<label for="job">Εργασία:</label>
								<input type="text" class="form-control" id="job" placeholder="" name="job">
							</div>
							<div class="form-group">
								<label for="municipality">Δήμος:</label>
								<input type="text" class="form-control" id="municipality" placeholder="" name="municipality">
							</div>							
						</div>
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
		</div>

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
