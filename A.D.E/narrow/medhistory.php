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
									<li>
										<a href="casenotes.php">Σημειώσεις Προόδου</a>
									</li>
									<li>
										<a href="#">Αναφορές</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Σημειώσεις<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="#">Contact Logs</a>
											</li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Γενικά Στοιχεία<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="personalinformation.php">Προσωπικές πληροφορίες</a>
											</li>
											<li>
												<a href="medhistory.php">Ιστορικό</a>
											</li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ιατρικές Πληροφορίες <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="#">Οικογενειακές Σχέσεις Πελάτη</a>
											</li>
											<li>
												<a href="#">Φαρμακευτική Αγωγή Πελάτη</a>
											</li>
											<li>
												<a href="#">Medlog</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="externalinformation.php">Εξωτερική Πληροφόρηση</a>
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
							Ιστορικό Πελάτη
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label for="id">Μοναδικός κωδικός ιστορικού:</label>
								<input type="number" class="form-control" id="id" placeholder="" name="id">
							</div>
							<div class="form-group">
								<label for="idclient">Μοναδικός κωδικός πελάτη:</label>
								<input type="text" class="form-control" id="idclient" placeholder="" name="idclient">
							</div>
							<div class="form-group">
								<label for="mainproblem">Κύριο πρόβλημα:</label>
								<input type="text" class="form-control" id="mainproblem" placeholder="" name="mainproblem">
							</div>
							<div class="form-group">
								<label for="request">Ειδικά αιτήματα πελάτη:</label>
								<input type="number" class="form-control" id="request" placeholder="" name="request">
							</div>
							<div class="form-group">
								<label for="historyproblem">Ιστορικό προβλήματος:</label>
								<input type="text" class="form-control" id="historyproblem" placeholder="" name="historyproble">
							</div>
							<div class="form-group">
								<label for="anxietycause">Παράγοντες άγχους:</label>
								<input type="text" class="form-control" id="anxietycause" placeholder="" name="anxietycause">
							</div>
							<div class="form-group">
								<label for="emotionsforuni">Συναισθήματα για πανεπιστήμιο:</label>
								<input type="text" class="form-control" id="emotionsforuni" placeholder="" name="emotionsforuni">
							</div>
							<div class="form-group">
								<label for="timeofwork">Ώρα εργασίας:</label>
								<input type="text" class="form-control" id="timeofwork" placeholder="" name="timeofwork">
							</div>
							<div class="form-group">
								<label for="workduties">Καθήκοντα εργασίας:</label>
								<input type="text" class="form-control" id="workduties" placeholder="" name="workduties">
							</div>
							<div class="form-group">
								<label for="anexietywork">Άγχος εργασίας:</label>
								<input type="text" class="form-control" id="anexietywork" placeholder="" name="anexietywork">
							</div>
							<div class="form-group">
								<label for="previouswork">Προηγούμενη εργασία:</label>
								<input type="text" class="form-control" id="previouswork" placeholder="" name="previouswork">
							</div>
							<div class="form-group">
								<label for="relationship">Σε σχέση:</label>
								<input type="text" class="form-control" id="relationship" placeholder="" name="relationship">
							</div>
							<div class="form-group">
								<label for="moreinfoforrel">Πληροφορίες για σχέσεις:</label>
								<input type="text" class="form-control" id="moreinfoforrel" placeholder="" name="moreinfoforrel">
							</div>
							<div class="form-group">
								<label for="nameofrel">Όνομα σχέσης:</label>
								<input type="text" class="form-control" id="nameofrel" placeholder="" name="nameofrel">
							</div>
							<div class="form-group">
								<label for="jobofrel">Εργασία σχέσης:</label>
								<input type="text" class="form-control" id="jobofrel" placeholder="" name="jobofrel">
							</div>
							<div class="form-group">
								<label for="kids">Παιδία:</label>
								<input type="text" class="form-control" id="kids" placeholder="" name="kids">
							</div>
							<div class="form-group">
								<label for="roommate">Συγκατοίκηση:</label>
								<input type="text" class="form-control" id="roommate" placeholder="" name="roommate">
							</div>
							<div class="form-group">
								<label for="roomatedif">Δυσκολίες συγκατοίκησης:</label>
								<input type="text" class="form-control" id="roomatedif" placeholder="" name="roomatedif">
							</div>
							<div class="form-group">
								<label for="family">Σύνθεση οικογένειας:</label>
								<input type="text" class="form-control" id="family" placeholder="" name="family">
							</div>
							<div class="form-group">
								<label for="support">Υποστήρικη απο οικογένεια/φίλους:</label>
								<input type="text" class="form-control" id="support" placeholder="" name="support">
							</div>
							<div class="form-group">
								<label for="finance">Οικονομική κατάσταση:</label>
								<input type="text" class="form-control" id="finance" placeholder="" name="finance">
							</div>
							<div class="form-group">
								<label for="legalissues">Νομικά προβλήματα:</label>
								<input type="text" class="form-control" id="legalissues" placeholder="" name="legalissues">
							</div>
							<div class="form-group">
								<label for="medproblems">Ιατρικά προβλήματα:</label>
								<input type="text" class="form-control" id="medproblems" placeholder="" name="medproblems">
							</div>
							<div class="form-group">
								<label for="concerns">Ιατρικές ανησυχίες:</label>
								<input type="text" class="form-control" id="concerns" placeholder="" name="concerns">
							</div>
							<div class="form-group">
								<label for="doc">Γιατρός:</label>
								<input type="text" class="form-control" id="doc" placeholder="" name="doc">
							</div>
							<div class="form-group">
								<label for="contactdoc">Στοιχεία επικοινωνίας ιατρού:</label>
								<input type="text" class="form-control" id="contactdoc" placeholder="" name="contactdoc">
							</div>
							<div class="form-group">
								<label for="behave">Συμπεριφορά:</label>
								<input type="date" class="form-control" id="behave" placeholder="" name="behave">
							</div>
							<div class="form-group">
								<label for="medicaltreatment">Ιατρική Αγωγή:</label>
								<input type="text" class="form-control" id="medicaltreatment" placeholder="" name="medicaltreatment">
							</div>
							<div class="form-group">
								<label for="generalhealth">Γενική υγεία:</label>
								<input type="text" class="form-control" id="generalhealth" placeholder="" name="generalhealth">
							</div>
							<div class="form-group">
								<label for="flag">Κάπνισμα:</label>
								<input type="text" class="form-control" id="flag" placeholder="" name="flag">
							</div>
							<div class="form-group">
								<label for="alcohol">Αλκοόλ:</label>
								<input type="text" class="form-control" id="alcohol" placeholder="" name="alcohol">
							</div>
							<div class="form-group">
								<label for="drugs">Ναρκωτικά:</label>
								<input type="text" class="form-control" id="drugs" placeholder="" name="drugs">
							</div>
							<div class="form-group">
								<label for="marihuana">Συχνότητα λήψης marihuana:</label>
								<input type="text" class="form-control" id="marihuana" placeholder="" name="marihuana">
							</div>
							<div class="form-group">
								<label for="games">Τυχερά παιχνίδια:</label>
								<input type="text" class="form-control" id="games" placeholder="" name="games">
							</div>
							<div class="form-group">
								<label for="addiction">Εθισμός:</label>
								<input type="text" class="form-control" id="addiction" placeholder="" name="addiction">
							</div>
							<div class="form-group">
								<label for="gambling">Συναισθήματα για τζόγο:</label>
								<input type="text" class="form-control" id="gambling" placeholder="" name="gambling">
							</div>
							<div class="form-group">
								<label for="youngage">Παιδική ηλικία:</label>
								<input type="text" class="form-control" id="youngage" placeholder="" name="youngage">
							</div>
							<div class="form-group">
								<label for="youngageproblems">Προβλήματα παιδικής ηλικίας:</label>
								<input type="text" class="form-control" id="youngageproblems" placeholder="" name="youngageproblems">
							</div>
							<div class="form-group">
								<label for="previous">Προηγούμενη ψυχολογική υποστήριξη:</label>
								<input type="text" class="form-control" id="previous" placeholder="" name="previous">
							</div>
							<div class="form-group">
								<label for="previousdiagnosis">Προηγούμενη ψυχολογική διάγνωση:</label>
								<input type="text" class="form-control" id="previousdiagnosis" placeholder="" name="previousdiagnosis">
							</div>
							<div class="form-group">
								<label for="malfunction">Δυσλειτουργικότητα:</label>
								<input type="text" class="form-control" id="malfunction" placeholder="" name="malfunction">
							</div>
							<div class="form-group">
								<label for="sucide">Αυτοκτονική πρόθεση:</label>
								<input type="text" class="form-control" id="sucide" placeholder="" name="sucide">
							</div>
							<div class="form-group">
								<label for="violentintention">Βίαιη πρόθεση:</label>
								<input type="text" class="form-control" id="violentintention" placeholder="" name="violentintention">
							</div>
							<div class="form-group">
								<label for="violence">Βία:</label>
								<input type="text" class="form-control" id="violence" placeholder="" name="violence">
							</div>
							<div class="form-group">
								<label for="emotionsfortherapy">Συναισθήματα για τη θεραπεία:</label>
								<input type="text" class="form-control" id="emotionsfortherapy" placeholder="" name="emotionsfortherapy">
							</div>
							<div class="form-group">
								<label for="moreinfo">Άλλες σημαντικές πληροφορίες:</label>
								<input type="text" class="form-control" id="moreinfo" placeholder="" name="moreinfo">
							</div>
							<div class="form-group">
								<label for="reasons">Λόγοι για θεραπεία:</label>
								<input type="text" class="form-control" id="reasons" placeholder="" name="reasons">
							</div>
							<div class="form-group">
								<label for="cognitivefunctionality">Γνωστική λειτουργικότητα:</label>
								<input type="text" class="form-control" id="cognitivefunctionality" placeholder="" name="cognitivefunctionality">
							</div>

							<div class="form-group">
								<label for="mood">Διάθεση:</label>
								<input type="text" class="form-control" id="mood" placeholder="" name="mood">
							</div>
							<div class="form-group">
								<label for="psychometricresults">Ψυχομετρικά αποτελέσματα:</label>
								<input type="text" class="form-control" id="psychometricresults" placeholder="" name="psychometricresults">
							</div>
							<div class="form-group">
								<label for="clinicalimpression">Κλινική εντύπωση:</label>
								<input type="text" class="form-control" id="clinicalimpression" placeholder="" name="clinicalimpression">
							</div>
							<div class="form-group">
								<label for="psychologicalfunctionality">Ψυχολογική λειτουργικότητα:</label>
								<input type="text" class="form-control" id="psychologicalfunctionality" placeholder="" name="psychologicalfunctionality">
							</div>
							<div class="form-group">
								<label for="academicfunctionality">Ακαδημαική λειτουργικότητα:</label>
								<input type="text" class="form-control" id="academicfunctionality" placeholder="" name="academicfunctionality">
							</div>
							<div class="form-group">
								<label for="socialfunctionality">Κοινωνική λειτουργικότητα:</label>
								<input type="text" class="form-control" id="socialfunctionality" placeholder="" name="socialfunctionality">
							</div>

							<div class="form-group">
								<label for="selfimprovement">Αυτοβελτίωση:</label>
								<input type="text" class="form-control" id="selfimprovement" placeholder="" name="selfimprovement">
							</div>
							<div class="form-group">
								<label for="treatmentfactors">Παράγοντες θεραπείας:</label>
								<input type="text" class="form-control" id="treatmentfactors" placeholder="" name="treatmentfactors">
							</div>
							<div class="form-group">
								<label for="recommtherapy">Εισηγήσεις θεραπείας:</label>
								<input type="text" class="form-control" id="recommtherapy" placeholder="" name="recommtherapy">
							</div>
							<div class="form-group">
								<label for="additionalev">Επιπλέον αξιολόγηση:</label>
								<input type="text" class="form-control" id="additionalev" placeholder="" name="additionalev">
							</div>
							<div class="form-group">
								<label for="firstprogram">Αρχικό πρόγραμμα θεραπείας:</label>
								<input type="text" class="form-control" id="firstprogram" placeholder="" name="firstprogram">
							</div>
							<div class="form-group">
								<label for="signed">Υπογεγραμμένο απο Supervisor:</label>
								<input type="text" class="form-control" id="signed" placeholder="" name="signed">
							</div>
							<div class="form-group">
								<label for="completed">Ημερομηνία που έχει συμπληρωθεί εντελώς:</label>
								<input type="date" class="form-control" id="completed" placeholder="" name="completed">
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
