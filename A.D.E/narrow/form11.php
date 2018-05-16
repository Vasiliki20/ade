<?php
ob_start();
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
<<<<<<< HEAD
				
=======
>>>>>>> 19b074579f92633f7888e985e1dafe08f917d698

				<div id="page-wrapper">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-header"><small>Ανασκόπηση θεραπευτικής διαδικασίας/παρέμβασης</small></h1>
						</div>
					</div>
<<<<<<< HEAD
				</div>
				<div>
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="" method="post">
								<div class="form-group">
									<input type="hidden" name="patientID" value=<?=$_GET['patientID']?>
									<label for="date"><label>1. Ημερ. Έναρξης Υπηρεσιών: </label></label>
									<input type="date" class="form-control" id="date" placeholder="" name="datesubmited" value=<?=$response['patient']['datesubmited']?>>
								</div>
								<div class="form-group">
									<label for="eidos"><label>2. Είδος θεραπείας/υπηρεσιών: </label></label>
									<input type="text" class="form-control" id="eidos" placeholder="" name="kind" value=<?=$response['patient']['kindoftherapy']?>>
								</div>
								<div class="form-group">
									<label for="firstissues"><label>3. Αρχικό παρουσιαζόμενο ζήτημα/ζητήματα και επιπρόσθετα παρουσιαζόμενα ζητήματα </label></label>
									<input type="text" class="form-control" id="firstissues" placeholder="" name="initialproblem" value=<?=$response['patient']['mainissue']?>>
								</div>
								<div class="form-group">
									<label for="issues"><label>4. Παρουσιαζόμενα ζητήματα : </label></label>
									<input type="text" class="form-control" id="issues" placeholder="" name="problems">
								</div>
								<div class="form-group">
									<label for="brief"><label>5. Σύνοψη Αρχικής Αξιολόγησης:</label></label>
									<br>
									<label><em>(ιστορικό, προσωπικά στοιχεία, παράγοντες άγχους, θέματα υγείας και άλλα συναφή θέματα, κλινική/διαγνωστική εντύπωση, λειτουργικότητα, προτεινόμενο πλάνο παρέμβασης) </em></label>
									<br>
									<input type="text" class="form-control" id="brief" placeholder="" name="sinopsis">
								</div>
								<div class="form-group">
									<label for="changes"><label>6. Σημαντικές αλλαγές στις προσωπικές και περιβαλλοντικές συνθήκες  κατά την υπό εξέταση περίοδο:</label></label>
									<br>
									<label><em>(π.χ. αλλαγές σε εργασία, σπουδές, προσωπικές σχέσεις, συνθήκες διαμονής, υγεία, κ.ο.κ)</em></label>
									<br>
									<input type="text" class="form-control" id="changes" placeholder="" name="changesenv">
								</div>
								</table>
								<div class="form-group">
									<label for="progress"><label>7. Εξέλιξη θεραπείας : </label></label>
									<br>
									<label><em>(Σύνοψη μέχρι στιγμής παρέμβασης/θεραπείας συμπ. αποκλίσεις από αρχικό πλάνο και αιτιολόγηση, δυσκολίες/εμπόδια, σημεία που διευκολύνουν τη θεραπεία, στάση/συμπεριφορά πελάτη κ.ο.κ.) </em></label>
									<br>
									<input type="text" class="form-control" id="progress" placeholder="" name="evolution">
								</div>
								<div class="form-group">
									<label for="xeirismos"><label>8. Αλλαγές ως αποτέλεσμα της θεραπείας </label></label>
									<br>
									<label><em>(στόχοι που επιτεύχθηκαν, νέες δεξιότητες/συμπεριφορές/συνήθειες, αλλαγές στη λειτουργικότητα, νέα αιτήματα κ.ο.κ.)</em></label>
									<br>
									<input type="text" class="form-control" id="xeirismos" placeholder="" name="changes">
								</div>
								<div class="form-group">
									<label for="future"><label>9. Μελλοντικό Πρόγραμμα Θεραπείας – Εισηγήσεις και Προγραμματισμός:</label></label>
									<br>
									<label><em>(συμεριλαμβάνονται στόχοι θεραπείας, μέθοδοι-τεχνικές και υπολογιζόμενος χρόνος θεραπείας)</em></label>
									<br>
									<input type="text" class="form-control" id="future" placeholder="" name="mellon">
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
											<input type="hidden" name="psychologicalfunc" >
											<input type="radio" class="form-group" id="a1" name="psychologicalfunc" value="Απούσα">
											</td>
											<td>
											<input type="radio" class="form-group" id="a2" name="psychologicalfunc" value="Ήπια">
											</td>
											<td>
											<input type="radio" class="form-group" id="a3" name="psychologicalfunc" value="Μέτρια">
											</td>
											<td>
											<input type="radio" class="form-group" id="a4" name="psychologicalfunc" value="Σοβαρή">
											</td>
										</tr>
										<tr>
											<td>β. επαγγελματική/ακαδημαϊκή</td>
											<td>
											<input type="hidden" name="professionacademicfunc" >
											<input type="radio" class="form-group" id="b1" name="professionacademicfunc" value="Απούσα">
											</td>
											<td>
											<input type="radio" class="form-group" id="b2" name="professionacademicfunc" value="Ήπια">
											</td>
											<td>
											<input type="radio" class="form-group" id="b3" name="professionacademicfunc" value="Μέτρια">
											</td>
											<td>
											<input type="radio" class="form-group" id="b4" name="professionacademicfunc" value="Σοβαρή">
											</td>
										</tr>
										<tr>
											<td>γ. κοινωνική</td>
											<td>
											<input type="hidden" name="socialfunc" >
											<input type="radio" class="form-group" id="g1" name="socialfunc" value="Απούσα">
											</td>
											<td>
											<input type="radio" class="form-group" id="g2" name="socialfunc" value="Ήπια">
											</td>
											<td>
											<input type="radio" class="form-group" id="g3" name="socialfunc" value="Μέτρια">
											</td>
											<td>
											<input type="radio" class="form-group" id="g4" name="socialfunc" value="Σοβαρή">
											</td>
										</tr>
										<tr>
											<td>δ. αυτοφροντίδα</td>
											<td>
											<input type="hidden" name="autofix" >
											<input type="radio" class="form-group" id="d1" name="autofix" value="Απούσα">
											</td>
											<td>
											<input type="radio" class="form-group" id="d2" name="autofix" value="Ήπια">
											</td>
											<td>
											<input type="radio" class="form-group" id="d3" name="autofix" value="Μέτρια">
											</td>
											<td>
											<input type="radio" class="form-group" id="d4" name="autofix" value="Σοβαρή">
											</td>
										</tr>
=======
					<div>
						<div class="panel panel-default">
							<div class="panel-body">
								<form action="" method="post">
									<div class="form-group">
										<input type="hidden" name="patientID" value=<?=$_GET['patientID'] ?>
										<label for="date"><label>1. Ημερ. Έναρξης Υπηρεσιών: </label></label>
										<input type="date" class="form-control" id="date" placeholder="" name="datesubmited" value=<?=$response['patient']['datesubmited'] ?>>
										</div>
										<div class="form-group">
										<label for="eidos"><label>2. Είδος θεραπείας/υπηρεσιών: </label></label>
										<input type="text" class="form-control" id="eidos" placeholder="" name="kind" value=<?=$response['patient']['kindoftherapy'] ?>>
										</div>
										<div class="form-group">
										<label for="firstissues"><label>3. Αρχικό παρουσιαζόμενο ζήτημα/ζητήματα και επιπρόσθετα παρουσιαζόμενα ζητήματα </label></label>
										<input type="text" class="form-control" id="firstissues" placeholder="" name="initialproblem" value=<?=$response['patient']['mainissue'] ?>>
										</div>
										<div class="form-group">
										<label for="issues"><label>4. Παρουσιαζόμενα ζητήματα : </label></label>
										<input type="text" class="form-control" id="issues" placeholder="" name="problems">
										</div>
										<div class="form-group">
										<label for="brief"><label>5. Σύνοψη Αρχικής Αξιολόγησης:</label></label>
										<br>
										<label><em>(ιστορικό, προσωπικά στοιχεία, παράγοντες άγχους, θέματα υγείας και άλλα συναφή θέματα, κλινική/διαγνωστική εντύπωση, λειτουργικότητα, προτεινόμενο πλάνο παρέμβασης) </em></label>
										<br>
										<input type="text" class="form-control" id="brief" placeholder="" name="sinopsis">
										</div>
										<div class="form-group">
										<label for="changes"><label>6. Σημαντικές αλλαγές στις προσωπικές και περιβαλλοντικές συνθήκες  κατά την υπό εξέταση περίοδο:</label></label>
										<br>
										<label><em>(π.χ. αλλαγές σε εργασία, σπουδές, προσωπικές σχέσεις, συνθήκες διαμονής, υγεία, κ.ο.κ)</em></label>
										<br>
										<input type="text" class="form-control" id="changes" placeholder="" name="changesenv">
									</div>
>>>>>>> 19b074579f92633f7888e985e1dafe08f917d698
									</table>
									<div class="form-group">
										<label for="progress"><label>7. Εξέλιξη θεραπείας : </label></label>
										<br>
										<label><em>(Σύνοψη μέχρι στιγμής παρέμβασης/θεραπείας συμπ. αποκλίσεις από αρχικό πλάνο και αιτιολόγηση, δυσκολίες/εμπόδια, σημεία που διευκολύνουν τη θεραπεία, στάση/συμπεριφορά πελάτη κ.ο.κ.) </em></label>
										<br>
										<input type="text" class="form-control" id="progress" placeholder="" name="evolution">
									</div>
									<div class="form-group">
										<label for="xeirismos"><label>8. Αλλαγές ως αποτέλεσμα της θεραπείας </label></label>
										<br>
										<label><em>(στόχοι που επιτεύχθηκαν, νέες δεξιότητες/συμπεριφορές/συνήθειες, αλλαγές στη λειτουργικότητα, νέα αιτήματα κ.ο.κ.)</em></label>
										<br>
										<input type="text" class="form-control" id="xeirismos" placeholder="" name="changes">
									</div>
									<div class="form-group">
										<label for="future"><label>9. Μελλοντικό Πρόγραμμα Θεραπείας – Εισηγήσεις και Προγραμματισμός:</label></label>
										<br>
										<label><em>(συμεριλαμβάνονται στόχοι θεραπείας, μέθοδοι-τεχνικές και υπολογιζόμενος χρόνος θεραπείας)</em></label>
										<br>
										<input type="text" class="form-control" id="future" placeholder="" name="mellon">
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
												<input type="hidden" name="q10">
												<input type="radio" value="Απούσα Ψυχολογική" name="q10" class="form-group" id="a1">
												</td>
												<td>
												<input type="radio" value="Ήπια Ψυχολογική" name="q10" class="form-group" id="a2">
												</td>
												<td>
												<input type="radio" value="Μέτρια Ψυχολογική" name="q10" class="form-group" id="a3">
												</td>
												<td>
												<input type="radio" value="Σοβαρή Ψυχολογική" name="q10" class="form-group" id="a4">
												</td>
											</tr>
											<tr>
												<td>β. επαγγελματική/ακαδημαϊκή</td>
												<td>
													<input type="hidden" name="q11">
												<input type="radio" value="Απούσα επαγγελματική" name="q11" class="form-group" id="b1">
												</td>
												<td>
												<input type="radio" value="Ήπια επαγγελματική" name="q11" class="form-group" id="b2">
												</td>
												<td>
												<input type="radio" value="Μέτρια επαγγελματική" name="q11" class="form-group" id="b3">
												</td>
												<td>
												<input type="radio" value="Σοβαρή επαγγελματική" name="q11" class="form-group" id="b4">
												</td>
											</tr>
											<tr>
												<td>γ. κοινωνική</td>
												<td>
													<input type="hidden" name="q12">
												<input type="radio" value="Απούσα κοινωνική" name="q12" class="form-group" id="g1">
												</td>
												<td>
												<input type="radio" value="Ήπια κοινωνική" name="q12" class="form-group" id="g2">
												</td>
												<td>
												<input type="radio" value="Μέτρια κοινωνική" name="q12" class="form-group" id="g3">
												</td>
												<td>
												<input type="radio" value="Σοβαρή κοινωνική" name="q12" class="form-group" id="g4">
												</td>
											</tr>
											<tr>
												<td>δ. αυτοφροντίδα</td>
												<td>
													<input type="hidden" name="q13">
												<input type="radio" value="Απούσα αυτοφροντίδα" name="q13" class="form-group" id="d1">
												</td>
												<td>
												<input type="radio" value="Ήπια αυτοφροντίδα" name="q13" class="form-group" id="d2">
												</td>
												<td>
												<input type="radio" value="Μέτρια αυτοφροντίδα" name="q13" class="form-group" id="d3">
												</td>
												<td>
												<input type="radio" value="Σοβαρή αυτοφροντίδα" name="q13" class="form-group" id="d4">
												</td>
											</tr>

										</table>
									</div>
									<div class="form-group">
										<label for="more"><label>10. Οποιεσδήποτε άλλες σημαντικές πληροφορίες:</label></label>
										<input type="text" class="form-control" id="more" placeholder="" name="infos">
									</div>
									<button type="submit" class="btn btn-default" name="submit">
										Καταχώρηση
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
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/form11.php";
$method='POST';
if(isset($_POST['submit'])){
$postfields=http_build_query($_POST);
if(isset($_COOKIE['token'])){
$response1=request($url,$method,$postfields,$_COOKIE['token']);
}else{
$response1=0;
}
while($response1['status']!=1){
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
?>