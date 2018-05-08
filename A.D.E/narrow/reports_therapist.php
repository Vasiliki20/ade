<?php ob_start(); ?>
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
		function validateForm1() {
			var x = document.forms["myForm1"]["st1e"].value;
			var y = document.forms["myForm1"]["st1y"].value;
			if (y < 1999 || y > 9000 || isNaN(y)) {
				alert("Η χρονιά πρέπει να είναι 4ψήφιος αριθμός");
				return false;
			}
			if ((x != "1" && x != "2") || isNaN(x)) {
				alert("Το εξάμηνο πρέπει να είναι 1 ή 2");
				return false;
			}
		}

		function validateForm2() {
			var x = document.forms["myForm2"]["st2e"].value;
			var y = document.forms["myForm2"]["st2y"].value;
			if (y < 1999 || y > 9000 || isNaN(y)) {
				alert("Η χρονιά πρέπει να είναι 4ψήφιος αριθμός");
				return false;
			}
			if ((x != "1" && x != "2") || isNaN(x)) {
				alert("Το εξάμηνο πρέπει να είναι 1 ή 2");
				return false;
			}
		}

		function validateForm3() {
			var x = document.forms["myForm3"]["st3e"].value;
			var y = document.forms["myForm3"]["st3y"].value;
			if (y < 1999 || y > 9000 || isNaN(y)) {
				alert("Η χρονιά πρέπει να είναι 4ψήφιος αριθμός");
				return false;
			}
			if ((x != "1" && x != "2")|| isNaN(x) ){
				alert("Το εξάμηνο πρέπει να είναι 1 ή 2");
				return false;
			}
		}

		function validateForm4() {
			var x = document.forms["myForm4"]["st4e"].value;
			var y1 = document.forms["myForm4"]["st4ye"].value;
			var y2 = document.forms["myForm4"]["st4y"].value;
			if (y1 < 1999 || y1 > 9000 || isNaN(y1)) {
				alert("Η χρονιά πρέπει να είναι 4ψήφιος αριθμός");
			}
			if (y2 < 1999 || y2 > 9000 || isNaN(y2)) {
				alert("Η χρονιά πρέπει να είναι 4ψήφιος αριθμός");
			}
			if (y1 > y2 || y1 == y2) {
				alert("Το αρχικό έτος σύγκρισης πρέπει να είναι μικρότερο από το τελικό έτος")
			}
			if ((x != "1" && x != "2") || isNaN(x)) {
				alert("Το εξάμηνο πρέπει να είναι 1 ή 2");
				return false;
			}
		}

		function validateForm5() {
			var y = document.forms["myForm5"]["st5y"].value;
			if (y < 1999 || y > 9000 || isNaN(y)) {
				alert("Η χρονιά πρέπει να είναι 4ψήφιος αριθμός");
				return false;
			}
		}

		function validateForm6() {
			var y = document.forms["myForm6"]["st6y"].value;
			if (y < 1999 || y > 9000 || isNaN(y)) {
				alert("Η χρονιά πρέπει να είναι 4ψήφιος αριθμός");
				return false;
			}
		}

		function validateForm7() {
			var y = document.forms["myForm7"]["st7y"].value;
			if (y < 1999 || y > 9000 || isNaN(y)) {
				alert("Η χρονιά πρέπει να είναι 4ψήφιος αριθμός");
				return false;
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
								<a href="myprofile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
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
						<h1 class="page-header">Reports</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				<div class="panel panel-default">
					<div class="panel-heading">
						Reports
						<br>
					</div>
					<div>
						<br>
					</div>

					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<script>
						$('#submit').click(function() {
							if ($('#clientspermonth2').val() == '') {
								alert('Input can not be left blank');
							}
						});
					</script>
					<div class="panel-body">
						<form name="myForm1" method="post" action="" onsubmit="return validateForm1()">
							<label>Αριθμός πελατών ανά μήνα:</label>
							<br>
							<input type="text" class="form-group" id="clientspermonth1" placeholder="Χρονιά" name="st1y">
							<input type="text" class="form-group" id="clientspermonth2" placeholder="Εξάμηνο" name="st1e">
							<input id="submit" type="submit" name="submit" class="btn btn-default" value="Αναζήτηση">
							<br>
							<br>
						</form>
						<form name="myForm2" method="post" action="" onsubmit="return validateForm2()">
							<label>Αριθμός νέων πελάτων ανά μήνα</label>
							<br>
							<input type="text" class="form-group" id="newclientspermonth1" placeholder="Χρονιά" name="st2y">
							<input type="text" class="form-group" id="newclientspermonth2" placeholder="Εξάμηνο" name="st2e">
							<input id="submit" type="submit" name="submit1" class="btn btn-default" value="Αναζήτηση">
							<br>
							<br>
						</form>
						<form name="myForm3" method="post" action="" onsubmit="return validateForm3()">
							<label>Αριθμός συνεδριών ανά μήνα</label>
							<br>
							<input type="text" class="form-group" id="sessionspermonth1" placeholder="Χρονιά" name="st3y">
							<input type="text" class="form-group" id="sessionspermonth2" placeholder="Εξάμηνο" name="st3e">
							<input id="submit" type="submit" name="submit2" class="btn btn-default" value="Αναζήτηση">
							<br>
							<br>
						</form>
						<form name="myForm4" method="post" action="" onsubmit="return validateForm4()">
							<label>Σύγκριση αριθμού πελατών (σύνολο και Μέσος Όρος) με προηγούμενα έτη</label>
							<br>
							<input type="text" class="form-group" id="compareclients1" placeholder="Αρχικό έτος σύγκρισης" name="st4ye">
							<input type="text" class="form-group" id="compareclients1" placeholder="Χρονιά" name="st4y">
							<input type="text" class="form-group" id="compareclients2" placeholder="Εξάμηνο" name="st4e">
							<input id="submit" type="submit" name="submit3" class="btn btn-default" value="Αναζήτηση">
							<br>
							<br>
						</form>
						<form name="myForm5" method="post" action="" onsubmit="return validateForm5()">
							<label>Κατανομή των νέων περιστατικών του ΚΕ.Ψ.Υ. ανά Σχολή</label>
							<br>
							<input type="text" class="form-group" id="distributionperschool1" placeholder="Χρονιά" name="st5y">
							<input id="submit" type="submit" name="submit4" class="btn btn-default" value="Αναζήτηση">
							<br>
							<br>
						</form>
						<form name="myForm6" method="post" action="" onsubmit="return validateForm6()">
							<label>Παρουσιαζόμενα ζητήματα για νέα περιστατικά</label>
							<br>
							<input type="text" class="form-group" id="issuesfornewcases1" placeholder="Χρονιά" name="st6y">
							<input id="submit" type="submit" name="submit5" class="btn btn-default" value="Αναζήτηση">
							<br>
							<br>
						</form>
						<form name="myForm7" method="post" action="" onsubmit="return validateForm7()">
							<label>Πηγές ενημέρωσης φοιτητών για τις υπηρεσίες</label>
							<br>
							<input type="text" class="form-group" id="sources1" placeholder="Χρονιά" name="st7y">
							<input id="submit" type="submit" name="submit6" class="btn btn-default" value="Αναζήτηση">

						</form>
					</div>
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

if (isset($_POST['submit'])) {
	header('Location: results_clientspermonth.php?y=' . $_POST['st1y'] . '&e=' . $_POST['st1e']);
}
if (isset($_POST['submit1'])) {
	header('Location: results_newclientspermonth.php?y=' . $_POST['st2y'] . '&e=' . $_POST['st2e']);
}
if (isset($_POST['submit2'])) {
	header('Location: results_sessionpermonth.php?y=' . $_POST['st3y'] . '&e=' . $_POST['st3e']);
}
if (isset($_POST['submit3'])) {
	header('Location: results_compareclients.php?ye=' . $_POST['st4ye'] . '&y=' . $_POST['st4y'] . '&e=' . $_POST['st4e']);
}
if (isset($_POST['submit4'])) {
	header('Location: results_distributionperschool.php?y=' . $_POST['st5y']);
}
if (isset($_POST['submit5'])) {
	header('Location: results_issuesfornewcases?y=' . $_POST['st6y']);
}
if (isset($_POST['submit6'])) {
	header('Location: results_sources.php?y=' . $_POST['st7y']);
}
if (isset($_POST['submit'])) {
	header('Location: results_clientspermonth.php?y=' . $_POST['st1y'] . '&e=' . $_POST['st1e']);
}
if (isset($_POST['submit1'])) {
	header('Location: results_newclientspermonth.php?y=' . $_POST['st2y'] . '&e=' . $_POST['st2e']);
}
if (isset($_POST['submit2'])) {
	header('Location: results_sessionpermonth.php?y=' . $_POST['st3y'] . '&e=' . $_POST['st3e']);
}
if (isset($_POST['submit3'])) {
	header('Location: results_compareclients.php?ye=' . $_POST['st4ye'] . '&y=' . $_POST['st4y'] . '&e=' . $_POST['st4e']);
}
if (isset($_POST['submit4'])) {
	header('Location: results_distributionperschool.php?y=' . $_POST['st5y']);
}
if (isset($_POST['submit5'])) {
	header('Location: results_issuesfornewcases?y=' . $_POST['st6y']);
}
if (isset($_POST['submit6'])) {
	header('Location: results_sources.php?y=' . $_POST['st7y']);

}
?>