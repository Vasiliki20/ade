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
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i> </a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<a href="#">
								<div>
									<strong>John Smith</strong>
									<span class="pull-right text-muted"> <em>Yesterday</em> </span>
								</div>
								<div>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<strong>John Smith</strong>
									<span class="pull-right text-muted"> <em>Yesterday</em> </span>
								</div>
								<div>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<strong>John Smith</strong>
									<span class="pull-right text-muted"> <em>Yesterday</em> </span>
								</div>
								<div>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a class="text-center" href="#"> <strong>Read All Messages</strong> <i class="fa fa-angle-right"></i> </a>
							</li>
						</ul>
						<!-- /.dropdown-messages -->
					</li>
					<!-- /.dropdown -->
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i> </a>
						<ul class="dropdown-menu dropdown-tasks">
							<li>
								<a href="#">
								<div>
									<p>
										<strong>Task 1</strong>
										<span class="pull-right text-muted">40% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
											<span class="sr-only">40% Complete (success)</span>
										</div>
									</div>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<p>
										<strong>Task 2</strong>
										<span class="pull-right text-muted">20% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
											<span class="sr-only">20% Complete</span>
										</div>
									</div>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<p>
										<strong>Task 3</strong>
										<span class="pull-right text-muted">60% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only">60% Complete (warning)</span>
										</div>
									</div>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<p>
										<strong>Task 4</strong>
										<span class="pull-right text-muted">80% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											<span class="sr-only">80% Complete (danger)</span>
										</div>
									</div>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
							</li>
						</ul>
						<!-- /.dropdown-tasks -->
					</li>
					<!-- /.dropdown -->
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i> </a>
						<ul class="dropdown-menu dropdown-alerts">
							<li>
								<a href="#">
								<div>
									<i class="fa fa-comment fa-fw"></i> New Comment <span class="pull-right text-muted small">4 minutes ago</span>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<i class="fa fa-twitter fa-fw"></i> 3 New Followers <span class="pull-right text-muted small">12 minutes ago</span>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<i class="fa fa-envelope fa-fw"></i> Message Sent <span class="pull-right text-muted small">4 minutes ago</span>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<i class="fa fa-tasks fa-fw"></i> New Task <span class="pull-right text-muted small">4 minutes ago</span>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
								<div>
									<i class="fa fa-upload fa-fw"></i> Server Rebooted <span class="pull-right text-muted small">4 minutes ago</span>
								</div> </a>
							</li>
							<li class="divider"></li>
							<li>
								<a class="text-center" href="#"> <strong>See All Alerts</strong> <i class="fa fa-angle-right"></i> </a>
							</li>
						</ul>
						<!-- /.dropdown-alerts -->
					</li>
					<!-- /.dropdown -->
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
								<a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
							<!--
							<li class="sidebar-search">
							<div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<button class="btn btn-default" type="button">
							<i class="fa fa-search"></i>
							</button> </span>
							</div>
							<!-- /input-group -->
							<!--</li>-->
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
									<li>
										<a href="search.php">Search</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="reports.php"><i class="fa fa-bar-chart-o"></i> Reports</a>
							</li>
							<li>
								<a href="help.php"><i class="fa fa-cog"></i> Help</a>
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

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Γενικά Στοιχεία<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="personalinformation.php">Προσωπικά Στοιχεία</a>
											</li>
											<li>
												<a href="#">Χρονολογικό πρόγραμμα Πελάτη</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">Ερωτηματολόγιο</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ιατρικό Ιστορικό <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="#">Οικογενειακές Σχέσεις Πελάτη</a>
											</li>
											<li>
												<a href="#">Φαρμακευτική Αγωγή Πελάτη</a>
											</li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ιστορικό Επικοινωνίας<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="#">Μεταφορές Στοιχείων</a>
											</li>
											<li>
												<a href="#">Εξωτερικές Επικοινωνίες</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="billing.php">Πληρωμές</a>
									</li>
								</ul>

							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
				</div>

				<div>
					<div class="panel panel-default">
						<div class="panel-heading">
							Προσωπικές Πληροφορίες Πελάτη
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
