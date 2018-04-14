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
						<h1 class="page-header"><small>Ανασκόπηση θεραπευτικής διαδικασίας/παρέμβασης</small></h1>
					</div>
				</div>
				<div>
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="" method="post">
								<div class="form-group">
									<label for="date"><label>1. Ημερ. Έναρξης Υπηρεσιών: </label></label>
									<input type="date" class="form-control" id="date" placeholder="" name="date">
								</div>
								<div class="form-group">
									<label for="number"><label>2. Αρ. Συνεδριών</label></label>
									<input type="number" class="form-control" id="number" placeholder="" name="number">
								</div>
								<div class="form-group">
									<label for="time"><label>3. Υπό επισκόπηση χρονική περίοδος :</label> </label>
									<input type="text" class="form-control" id="time" placeholder="" name="time">
								</div>
								<div class="form-group">
									<label for="eidos"><label>4. Είδος θεραπείας/υπηρεσιών: </label></label>
									<input type="text" class="form-control" id="eidos" placeholder="" name="eidos">
								</div>
								<div class="form-group">
									<label for="issues"><label>5. Παρουσιαζόμενα ζητήματα : </label></label>
									<input type="text" class="form-control" id="issues" placeholder="" name="issues">
								</div>

								<div class="form-group">
									<label for="firstissues"><label>6. Αρχικό παρουσιαζόμενο ζήτημα/ζητήματα και επιπρόσθετα παρουσιαζόμενα ζητήματα </label></label>
									<input type="text" class="form-control" id="firstissues" placeholder="" name="firstissues">
								</div>
								<div class="form-group">
									<label for="firstdate"><label>7. Ημερ. Αρχικής Έκθεσης Αξιολόγησης:</label></label>
									<input type="date" class="form-control" id="firstdate" placeholder="" name="firstdate">
								</div>
								<div class="form-group">
									<label for="brief"><label>8. Σύνοψη Αρχικής Αξιολόγησης:</label></label>
									<br>
									<label><em>(ιστορικό, προσωπικά στοιχεία, παράγοντες άγχους, θέματα υγείας και άλλα συναφή θέματα, κλινική/διαγνωστική εντύπωση, λειτουργικότητα, προτεινόμενο πλάνο παρέμβασης) </em></label>
									<br>
									<input type="text" class="form-control" id="brief" placeholder="" name="brief">
								</div>
								<div class="form-group">
									<label for="changes"><label>9. Σημαντικές αλλαγές στις προσωπικές και περιβαλλοντικές συνθήκες  κατά την υπό εξέταση περίοδο:</label></label>
									<br>
									<label><em>(π.χ. αλλαγές σε εργασία, σπουδές, προσωπικές σχέσεις, συνθήκες διαμονής, υγεία, κ.ο.κ)</em></label>
									<br>
									<input type="text" class="form-control" id="changes" placeholder="" name="changes">
								</div>
								</table>
								<div class="form-group">
									<label for="progress"><label>10. Εξέλιξη θεραπείας : </label></label>
									<br>
									<label><em>(Σύνοψη μέχρι στιγμής παρέμβασης/θεραπείας συμπ. αποκλίσεις από αρχικό πλάνο και αιτιολόγηση, δυσκολίες/εμπόδια, σημεία που διευκολύνουν τη θεραπεία, στάση/συμπεριφορά πελάτη κ.ο.κ.) </em></label>
									<br>
									<input type="text" class="form-control" id="progress" placeholder="" name="progress">
								</div>
								<div class="form-group">
									<label for="xeirismos"><label>11. Αλλαγές ως αποτέλεσμα της θεραπείας </label></label>
									<br>
									<label><em>(στόχοι που επιτεύχθηκαν, νέες δεξιότητες/συμπεριφορές/συνήθειες, αλλαγές στη λειτουργικότητα, νέα αιτήματα κ.ο.κ.)</em></label>
									<br>
									<input type="text" class="form-control" id="xeirismos" placeholder="" name="xeirismos">
								</div>
								<div class="form-group">
									<label for="future"><label>12. Μελλοντικό Πρόγραμμα Θεραπείας – Εισηγήσεις και Προγραμματισμός:</label></label>
									<br>
									<label><em>(συμεριλαμβάνονται στόχοι θεραπείας, μέθοδοι-τεχνικές και υπολογιζόμενος χρόνος θεραπείας)</em></label>
									<br>
									<input type="text" class="form-control" id="future" placeholder="" name="future">
								</div>
								<div class="form-group">
									<table style="width:100%">
										<tr>
											<th></th>
											<th>Απούσα</th>
											<th>Ήπια</th>
											<th>Μέτρια</th>
											<th>Σοβαρή</th>
										</tr>
										<tr>
											<td>α. ψυχολογική</td>
											<td>
											<input type="checkbox" class="form-group" id="a1">
											</td>
											<td>
											<input type="checkbox" class="form-group" id="a2">
											</td>
											<td>
											<input type="checkbox" class="form-group" id="a3">
											</td>
											<td>
											<input type="checkbox" class="form-group" id="a4">
											</td>
										</tr>
										<tr>
											<td>β. επαγγελματική/ακαδημαϊκή</td>
											<td>
											<input type="checkbox" class="form-group" id="b1">
											</td>
											<td>
											<input type="checkbox" class="form-group" id="b2">
											</td>
											<td>
											<input type="checkbox" class="form-group" id="b3">
											</td>
											<td>
											<input type="checkbox" class="form-group" id="b4">
											</td>
										</tr>
										<tr>
											<td>γ. κοινωνική</td>
											<td>
											<input type="checkbox" class="form-group" id="g1">
											</td>
											<td>
											<input type="checkbox" class="form-group" id="g2">
											</td>
											<td>
											<input type="checkbox" class="form-group" id="g3">
											</td>
											<td>
											<input type="checkbox" class="form-group" id="g4">
											</td>
										</tr>
										<tr>
											<td>δ. αυτοφροντίδα</td>
											<td>
											<input type="checkbox" class="form-group" id="d1">
											</td>
											<td>
											<input type="checkbox" class="form-group" id="d2">
											</td>
											<td>
											<input type="checkbox" class="form-group" id="d3">
											</td>
											<td>
											<input type="checkbox" class="form-group" id="d4">
											</td>
										</tr>
									</table>
								</div>
								<div class="form-group">
									<label for="more"><label>14. Οποιεσδήποτε άλλες σημαντικές πληροφορίες:</label></label>
									<input type="text" class="form-control" id="more" placeholder="" name="more">
								</div>
								<button type="submit" class="btn btn-default" name="submit">
									Submit
								</button>
							</form>
						</div>
					</div>
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