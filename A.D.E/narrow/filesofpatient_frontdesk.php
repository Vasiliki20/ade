<?php
require_once("requests.php");
$_GET['patientID']=Encryption::decode($_GET['patientID']);?>
<!DOCTYPE html>
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
								<a href="#"><i class="fa fa-gear fa-fw"></i> Εγχειρίδιο</a>
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
							</li>
							<li>
								<a href="approvefiles_frontdesk.php"><i class="fa fa-check"></i> Έγκριση Εισερχόμενων Αρχείων</a>
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
						<h1 class="page-header">Αρχεία Πελάτη</h1>
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
										<a href="filesofpatient_frontdesk.php?patientID=<?=Encryption::encode($_GET['patientID']) ?>">Εκθέσεις/Αναφορές</a>
									</li>
									<li>
										<a href="billing_frontdesk.php?patientID=<?=Encryption::encode($_GET['patientID']) ?>">Πληρωμές</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Τερματισμός<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="formcomplaints_frontdesk.php?patientID=<?=Encryption::encode($_GET['patientID']) ?>">Παράπονα πελάτη</a>
											</li>
											<li>
												<a href="formreasons_frontdesk.php?patientID=<?=Encryption::encode($_GET['patientID']) ?>">Λόγοι Τερματισμού</a>
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
						<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<form id="hi" class="well" action="http://thesis.in.cs.ucy.ac.cy/mhc/upload.php" method="post" enctype="multipart/form-data">
								<input type="hidden" name="id" value=<?=$_GET['patientID'] ?> >
								<div class="form-group">
									<label for="file">Πρόσθεση αρχείων για τον πελάτη</label>
									<input id="file" type="file" name="file">
									<p class="help-block">
										<h6>Μόνο pdf,jpg,jpeg,png και gif αρχεία με μέγιστο μέγεθος 10 MB επιτρέπονται.</h6>
									</p>
									<input type="submit" class="btn  btn-default" id="sub" value="Πρόσθεση αρχείου">
								</div>
							</form>
						</div>
					</div>
					<div class="warning" id="hiresponse"></div>
					<div class="row">
						<div class="col-lg-12">
							<form class="well" id="contactForm" action="http://thesis.in.cs.ucy.ac.cy/mhc/retrieveapproved.php" method="post" >
								<input type="hidden" name="id" value=<?=$_GET['patientID'] ?> >
								<input class="btn  btn-default" type="submit" name="submit" value="Εμφάνιση εγκεκριμένων αρχείων πελάτη" >
							</form>
						</div>
					</div>
					<div id="contactResponse"></div>

				</div>
				<!-- /.panel-body -->
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
			$("#contactForm").submit(function(event) {
				/* stop form from submitting normally */
				event.preventDefault();

				/* get some values from elements on the page: */
				var $form = $(this),
				    $submit = $form.find('button[type="submit"]'),
				    id_value = $form.find('input[name="id"]').val(),
				    url = $form.attr('action');

				/* Send the data using post */
				var posting = $.post(url, {
					id : id_value
				});

				posting.done(function(data) {
					/* Put the results in a div */
					$("#contactResponse").html(data);

					/* Change the button text. */
					$submit.text('Sent, Thank you');

					/* Disable the button. */
					$submit.attr("disabled", true);
				});
			});
			$(document).ready(function() {

				$("#sub").click(function(event) {

					//stop submit the form, we will post it manually.
					event.preventDefault();

					// Get form
					var form = $('#hi')[0];

					// Create an FormData object
					var data = new FormData(form);

					// disabled the submit button
					$("sub").prop("disabled", true);

					$.ajax({
						type : "POST",
						enctype : 'multipart/form-data',
						url : "http://thesis.in.cs.ucy.ac.cy/mhc/upload.php",
						data : data,
						processData : false,
						contentType : false,
						cache : false,
						timeout : 600000,
						success : function(data) {

							$("#hiresponse").text(data);
							console.log("SUCCESS : ", data);
							$("#sub").prop("disabled", false);

						},
						error : function(e) {

							$("#hiresponse").text(e.responseText);
							console.log("ERROR : ", e);
							$("#sub").prop("disabled", false);

						}
					});

				});

			}); 
</script>
</body>

</html>
