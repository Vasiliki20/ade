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
								<a href="myprofile.php"><i class="fa fa-user fa-fw"></i> Προφίλ</a>
							</li>
							<li>
								<a href="usermanual.php"><i class="fa fa-gear fa-fw"></i> Εγχειρίδιο</a>
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
								<a href="psindex.php"><i class="fa fa-table"></i> Ημερολόγιο</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-list"></i> Επιλογές<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="tasklist.php">Λίστα Εργασιών</a>
									</li>
									<li>
										<a href="myclients.php">Πελάτες</a>
									</li>
									<li>
										<a href="myappointments.php">Ραντεβού</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="formupload_supervisor.php"><i class="fa fa-upload"></i> Ανάρτηση Αρχείου</a>
							</li>
							<li>
								<a href="reports.php"><i class="fa fa-bar-chart-o"></i> Στατιστικές</a>
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
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li>
										<a href="casenotes.php?patientID=<?=$_GET['patientID'] ?>">Σημειώσεις Προόδου</a>
									</li>
									<li>
										<a href="filesofpatient.php?patientID=<?= $_GET['patientID'] ?>">Εκθέσεις/Αναφορές</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Γενικές πληροφορίες<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="personalinformationfull.php?patientID=<?= $_GET['patientID'] ?>">Προσωπικά Στοιχεία Πελάτη</a>
											</li>
											<li>
												<a href="schedule.php?patientID=<?= $_GET['patientID'] ?>">Διαθέσιμο Πρόγραμμα Πελάτη</a>
											</li>
											<li>
												<a href="contactlog.php?patientID=<?= $_GET['patientID'] ?>">Contact Logs</a>
											</li>
										</ul>

									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ιατρικές Πληροφορίες <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="clientrelationships.php?patientID=<?= $_GET['patientID'] ?>">Οικογενειακές Σχέσεις Πελάτη</a>
											</li>
											<li>
												<a href="clientmedication.php?patientID=<?= $_GET['patientID'] ?>">Φαρμακευτική Αγωγή Πελάτη</a>
											</li>
											<li>
												<a href="medhistory.php?patientID=<?= $_GET['patientID'] ?>">Medlog</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="externalinformation.php?patientID=<?= $_GET['patientID'] ?>">Εξωτερική Πληροφόρηση</a>
									</li>
									<li>
										<a href="billing.php?patientID=<?= $_GET['patientID'] ?>">Πληρωμές</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Τερματισμός<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="formcomplaints.php?patientID=<?= $_GET['patientID'] ?>">Παράπονα πελάτη</a>
											</li>
											<li>
												<a href="formreasons.php?patientID=<?= $_GET['patientID'] ?>">Λόγοι Τερματισμού</a>
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
							Εξωτερική πληροφόρηση
						</div>
						<div class="panel-body">
							<table id="casenotes" style="width:100%">
								
								<tr>
									<th> <label>Ημερομηνία κλήσης:</label> </th>
									<?php for($i=0;$i<count($response['communications']);$i++){ 
											if(strnatcmp($response['communications'][$i]['typeof'],"Communication")==0){ ?>
									<td>
									<input type="date" class="form-control" id="dateofcomm" placeholder="" name="dateofcomm" value="<?=$response['communications'][$i]['dateofcall'] ?>">
									</input></td>
									<?php }} ?>
								</tr>
								<tr>
									<th><label> Ώρα κλήσης: </label></th>
									<?php for($i=0;$i<count($response['communications']);$i++){ 
											if(strnatcmp($response['communications'][$i]['typeof'],"Communication")==0){ ?>
									<td>
									<input type="time" class="form-control" id="timeofcomm" placeholder="" name="timeofcomm" value="<?=$response['communications'][$i]['timeofcall'] ?>">
									</input></td>
									<?php }} ?>
								</tr>
								<tr>
									<th> <label>Όνομα caller:</label></th>
									<?php for($i=0;$i<count($response['communications']);$i++){ 
											if(strnatcmp($response['communications'][$i]['typeof'],"Communication")==0){ ?>
									<td>
									<input type="text" class="form-control" id="namecaller" placeholder="" name="namecaller" value="<?=$response['communications'][$i]['nameofcaller'] ?>">
									</input></td>
									<?php }} ?>
								</tr>
								
								<tr>
									<th> <label>Ρόλος caller: </label></th>
									<?php for($i=0;$i<count($response['communications']);$i++){ 
											if(strnatcmp($response['communications'][$i]['typeof'],"Communication")==0){ ?>
									<td>
									<input type="text" class="form-control" id="rolecaller" placeholder="" name="rolecaller" value="<?=$response['communications'][$i]['roleofcaller'] ?>">
									</input></td>
									<?php }} ?>
								</tr>
								<tr>
									<th><label> Όνομα called:</label> </th>
									<?php for($i=0;$i<count($response['communications']);$i++){ 
											if(strnatcmp($response['communications'][$i]['typeof'],"Communication")==0){ ?>
									<td>
									<input type="text" class="form-control" id="namecalled" placeholder="" name="namecalled" value="<?=$response['communications'][$i]['nameofcallee'] ?>">
									</input></td>
									<?php }} ?>
								</tr>
							
								<tr>
									<th> <label>Ρόλος called: </label></th>
									<?php for($i=0;$i<count($response['communications']);$i++){ 
											if(strnatcmp($response['communications'][$i]['typeof'],"Communication")==0){ ?>
									<td>
									<input type="text" class="form-control" id="rolecalled" placeholder="" name="rolecalled" value="<?=$response['communications'][$i]['roleofcallee'] ?>">
									</input></td>
									<?php }} ?>
								</tr>
								<tr>
									<th> <label>Θέμα κλήσης:</label></th>
									<?php for($i=0;$i<count($response['communications']);$i++){ 
											if(strnatcmp($response['communications'][$i]['typeof'],"Communication")==0){ ?>
									<td>
									<input type="text" class="form-control" id="subject" placeholder="" name="subject" value="<?=$response['communications'][$i]['subject'] ?>">
									</input></td>
									<?php }} ?>
								</tr>
								<tr>
									<th> <label>Περιγραφή κλήσης:</label> </th>
									<?php for($i=0;$i<count($response['communications']);$i++){ 
											if(strnatcmp($response['communications'][$i]['typeof'],"Communication")==0){ ?>
									<td>
									<input type="text" class="form-control" id="description" placeholder="" name="description" value="<?=$response['communications'][$i]['description'] ?>">
									</input></td>
									<?php }} ?>
								</tr>
								<tr>
									<th><label> Διαχείριση κλήσης:</label> </th>
									<?php for($i=0;$i<count($response['communications']);$i++){ 
											if(strnatcmp($response['communications'][$i]['typeof'],"Communication")==0){ ?>
									<td>
									<input type="text" class="form-control" id="manage" placeholder="" name="manage" value="<?=$response['communications'][$i]['handle'] ?>">
									</input></td>
									<?php }} ?>
								</tr>
								<tr>
									<th><label> Άλλα σχόλια: </label></th>
									<?php for($i=0;$i<count($response['communications']);$i++){ 
											if(strnatcmp($response['communications'][$i]['typeof'],"Communication")==0){ ?>
									<td>
									<input type="text" class="form-control" id="comments" placeholder="" name="comments" value="<?=$response['communications'][$i]['othercomments'] ?>">
									</input></td>
									<?php }} ?>
								</tr>
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
