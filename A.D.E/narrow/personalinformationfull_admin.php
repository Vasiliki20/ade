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
								<a href="myprofile_admin.php"><i class="fa fa-user fa-fw"></i> Προφίλ</a>
							</li>
							<li>
								<a href="usermanual_admin.php"><i class="fa fa-gear fa-fw"></i> Εγχειρίδιο</a>
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
								<a href="psindex_admin.php"><i class="fa fa-table"></i> Ημερολόγιο</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-list"></i> Επιλογές<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="myclients_admin.php">Πελάτες</a>
									</li>
									<li>
										<a href="therapists.php">Θεραπευτές</a>
									</li>
									<li>
										<a href="myappointments_admin.php">Ραντεβού</a>
									</li>
									<li>
										<a href="waitinglist_admin.php">Λίστα Αναμονής</a>
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
										<a href="casenotes_admin.php?patientID=<?=$_GET['patientID'] ?>">Σημειώσεις Προόδου</a>
									</li>
									<li>
										<a href="filesofpatient_admin.php?patientID=<?=$_GET['patientID'] ?>">Εκθέσεις/Αναφορές</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Γενικές πληροφορίες<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="personalinformationfull_admin.php?patientID=<?= $_GET['patientID'] ?>">Προσωπικά Στοιχεία Πελάτη</a>
											</li>
											<li>
												<a href="schedule_admin.php?patientID=<?= $_GET['patientID'] ?>">Διαθέσιμο Πρόγραμμα Πελάτη</a>
											</li>
											<li>
												<a href="contactlog_admin.php?patientID=<?= $_GET['patientID'] ?>">Contact Logs</a>
											</li>
										</ul>

									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ιατρικές Πληροφορίες <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="clientrelationships_admin.php?patientID=<?= $_GET['patientID'] ?>">Οικογενειακές Σχέσεις Πελάτη</a>
											</li>
											<li>
												<a href="clientmedication_admin.php?patientID=<?= $_GET['patientID'] ?>">Φαρμακευτική Αγωγή Πελάτη</a>
											</li>
											<li>
												<a href="medhistory_admin.php?patientID=<?= $_GET['patientID'] ?>">Medlog</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="externalinformation_admin.php?patientID=<?= $_GET['patientID'] ?>">Εξωτερική Πληροφόρηση</a>
									</li>
									<li>
										<a href="billing_admin.php?patientID=<?= $_GET['patientID'] ?>">Πληρωμές</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Τερματισμός<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="formcomplaints_admin.php?patientID=<?=$_GET['patientID'] ?>">Παράπονα πελάτη</a>
											</li>
											<li>
												<a href="formreasons_admin.php?patientID=<?=$_GET['patientID'] ?>">Λόγοι Τερματισμού</a>
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
						<form method="post" action="">
						<div class="panel-body">
							<div class="form-group">
								<label for="type">Τύπος πελάτη:(Αν το αλλάξετε παρακαλώ να βάλετε ένα από τα επόμενα:φοιτητής,ακαδημαικό,διοικητικό,άλλο)</label>
								<input type="text" class="form-control" id="type" placeholder="" name="type" value="<?=$response['patient']['type']?>">
							</div>
							 <input type="hidden" name="patientID" value="<?=$response['patient']['patientID']?> />
							<div class="form-group">
								<label for="id">Αρ.Ταυτότητας:</label>
								<input type="text" class="form-control" id="id" placeholder="" name="patientID" value="<?=$response['patient']['patientID']?>" disabled>
							</div>
							
							<div class="form-group">
								<label for="idofps">Μοναδικός Κωδικός Ψυχολόγου στον οποίο υπάγεται:</label>
								<input type="number" class="form-control" id="idofps" placeholder="" name="psychologistID" value="<?=$response['patient']['psychologistID']?>">
							</div>
							<div class="form-group">
								<label for="name">Όνομα:</label>
								<input type="text" class="form-control" id="name" placeholder="" name="firstname" value="<?=$response['patient']['firstname']?>">
							</div>
							<div class="form-group">
								<label for="surname">Επίθετο:</label>
								<input type="text" class="form-control" id="surname" placeholder="" name="lastname" value="<?=$response['patient']['lastname']?>">
							</div>
							<div class="form-group">
								<label for="appointment">Ημερομηνία Ένταξης:</label>
								<input type="text" class="form-control" id="appointment" placeholder="" name="datesubmited" value="<?=$response['patient']['datesubmited']?>">
							</div>
							<div class="form-group">
								<label for="age">Ηλικία:</label>
								<input type="text" class="form-control" id="age" placeholder="" name="age" value="<?=$response['patient']['age']?>">
							</div>
							<div class="form-group">
								<label for="sex">Φύλο:</label>
								<input type="text" class="form-control" id="sex" placeholder="" name="sex" value="<?=$response['patient']['sex']?>">
							</div>
							<div class="form-group">
								<label for="dob">Ημ.Γέννησης:</label>
								<input type="date" class="form-control" id="dob" placeholder="" name="dateofbirth" value="<?=$response['patient']['dateofbirth']?>">
							</div>
							<div class="form-group">
								<label for="ipikootita">Υπηκοότητα:</label>
								<input type="text" class="form-control" id="ipikootita" placeholder="" name="citizenship" value="<?=$response['patient']['citizenship']?>">
							</div>
							<div class="form-group">
								<label for="phone">Τηλέφωνο:</label>
								<input type="number" class="form-control" id="phone" placeholder="" name="telephone" value="<?=$response['patient']['telephone']?>">
							</div>
							<div class="form-group">
								<label for="email">Ηλ.Διεύθυνση:</label>
								<input type="email" class="form-control" id="email" placeholder="" name="email" value="<?=$response['patient']['email']?>">
							</div>
							<div class="form-group">
								<label for="address">Διεύθυνση Διαμονής:</label>
								<input type="text" class="form-control" id="address" placeholder="" name="address" value="<?=$response['patient']['address']?>">
							</div>
							<div class="form-group">
								<label for="tk">Τ.Κ:</label>
								<input type="text" class="form-control" id="tk" placeholder="" name="postalCode" value="<?=$response['patient']['postalCode']?>">
							</div>
							<div class="form-group">
								<label for="city">Πόλη/Χωριό:</label>
								<input type="text" class="form-control" id="city" placeholder="" name="city" value="<?=$response['patient']['city']?>">
							</div>
							<div class="form-group">
								<label for="contact">Πως να επικοινωνεί το κέντρο μαζί του:</label>
								<input type="text" class="form-control" id="contact" placeholder="" name="communicatevia" value="<?=$response['patient']['communicatevia']?>">
							</div>
							<div class="form-group">
								<label for="recommended">Ποιός του σύστησε το κέντρο:</label>
								<input type="text" class="form-control" id="recommended" placeholder="" name="sentby" value="<?=$response['patient']['sentby']?>">
							</div>
							<h4>Επαφή Έκτακτης Ανάγκης</h4>
							<input type="hidden" name="emergencyname" value="<?=$response['patient']['emergencyname']?>">
							<input type="hidden" name="emergencyrelation" value="<?=$response['patient']['emergencyrelation']?>">
							<input type="hidden" name="emergencynumber" value="<?=$response['patient']['emergencynumber']?>">
							<div class="form-group">
								<label for="recommended">Ονοματεπώνυμο:</label>
								<input type="text" class="form-control" id="recommended" placeholder="" name="emergencyname" value="<?=$response['patient']['emergencyname']?>" disabled>
							</div>
							<div class="form-group">
								<label for="recommended">Σχέση:</label>
								<input type="text" class="form-control" id="recommended" placeholder="" name="emergencyrelation" value="<?=$response['patient']['emergencyrelation']?>" disabled>
							</div>
							<div class="form-group">
								<label for="recommended">Τηλέφωνο:</label>
								<input type="text" class="form-control" id="recommended" placeholder="" name="emergencynumber" value="<?=$response['patient']['emergencynumber']?>" disabled>
							</div>
							<hr>
							<div class="form-group">
								<label for="mainproblem">Κύριο πρόβλημα:</label>
								<input type="text" class="form-control" id="mainproblem" placeholder="" name="mainissue" value="<?=$response['patient']['mainissue']?>">
							</div>
							<!--<div class="form-group">
								<label for="goal">Σκοπός θεραπείας:</label>
								<input type="text" class="form-control" id="goal" placeholder="" name="purposeoftherapy" value="<?=$response['patient']['purposeoftherapy']?>">
							</div>
							<div class="form-group">
								<label for="typeoftreatment">Είδος θεραπείας:</label>
								<input type="text" class="form-control" id="typeoftreatment" placeholder="" name="kindoftherapy" value="<?=$response['patient']['kindoftherapy']?>">
							</div>-->
							<div class="form-group">
								<label for="previoustreatment">Προηγούμενες θεραπείες και που:</label>
								<input type="text" class="form-control" id="previoustreatment" placeholder="" name="previoustherapy" value="<?=$response['patient']['previoustherapy']." , ".$response['patient']['previoustherapist']?>">
							</div>
							<div class="form-group">
								<label for="treatmentnow">Θεραπευτής τώρα:</label>
								<input type="text" class="form-control" id="treatmentnow" placeholder="" name="nowtherapist" value="<?=$response['patient']['nowtherapist']?>">
							</div>
							<div class="form-group">
								<label for="phoneofps">Τηλέφωνο θεραπευτή:</label>
								<input type="number" class="form-control" id="phoneofps" placeholder="" name="comnowtherapistb" value="<?=$response['patient']['comnowtherapistb']?>">
							</div>
							
							<div class="form-group">
								<label for="firstcontact">Ημερομηνία πρώτης επικοινωνίας με ΚΕΨΥ:</label>
								<input type="date" class="form-control" id="firstcontact" placeholder="" name="firstcommunication" value="<?=$response['patient']['datesubmited']?>">
							</div>
							<div class="form-group">
								<label for="marital">Οικογενειακή κατάσταση:</label>
								<input type="text" class="form-control" id="marital" placeholder="" name="maritalstatus" value="<?=$response['patient']['maritalstatus']?>">
							</div>
							<div class="form-group">
								<label for="flag">Red flag:</label>
								<input type="text" class="form-control" id="flag" placeholder="" name="redflag" value="<?=$response['patient']['redflag']?>">
							</div>
							<?php if(strnatcmp($response['patient']['type'],"φοιτητής")==0){?>
							<!-- student -->
							<div class="form-group">
								<label for="level">Επίπεδο σπουδών:</label>
								<input type="text" class="form-control" id="level" placeholder="" name="levelofstudies" value="<?=$response['patient']['levelofstudies']?>">
							</div>
							<div class="form-group">
								<label for="year">Έτος σπουδών:</label>
								<input type="text" class="form-control" id="year" placeholder="" name="yearofstudies" value="<?=$response['patient']['yearofstudies']?>">
							</div>
							<div class="form-group">
								<label for="department">Τμήμα σπουδών:</label>
								<input type="text" class="form-control" id="department" placeholder="" name="departmentofstudies" value="<?=$response['patient']['departmentofstudies']?>">
							</div>
							<div class="form-group">
								<label for="study">Σχολή σπουδών:</label>
								<input type="text" class="form-control" id="study" placeholder="" name="schoolofstudies" value="<?=$response['patient']['schoolofstudies']?>">
							</div>
							<div class="form-group">
								<label for="erasmus">Erasmus:</label>
								<input type="text" class="form-control" id="erasmus" placeholder="" name="erasmusstudent" value="<?=$response['patient']['erasmusstudent']?>">
							</div>
							<div class="form-group">
								<label for="attendancestatus">Κατάσταση φοίτησης:</label>
								<input type="text" class="form-control" id="attendancestatus" placeholder="" name="statusofstudies" value="<?=$response['patient']['statusofstudies']?>">
							</div>
							<?php } if(strnatcmp($response['patient']['type'],"ακαδημαικό")==0){?>
							<!-- academic -->
							<div class="form-group">
								<label for="department">Τμήμα:</label>
								<input type="text" class="form-control" id="department" placeholder="" name="departmentofstudies" value="<?=$response['patient']['departmentofstudies']?>">
							</div>
							<div class="form-group">
								<label for="level">Επίπεδο ακαδημαικού:</label>
								<input type="text" class="form-control" id="level" placeholder="" name="academiclevel" value="<?=$response['patient']['academiclevel']?>">
							</div>
							<div class="form-group">
								<label for="building">Κτήριο:</label>
								<input type="text" class="form-control" id="building" placeholder="" name="building" value="<?=$response['patient']['building']?>">
							</div>
							<div class="form-group">
								<label for="officenumber">Αριθμός Γραφείου:</label>
								<input type="number" class="form-control" id="officenumber" placeholder="" name="office_num" value="<?=$response['patient']['office_num']?>">
							</div>
							<div class="form-group">
								<label for="fax">Fax:</label>
								<input type="number" class="form-control" id="fax" placeholder="" name="fax" value="<?=$response['patient']['fax']?>">
							</div>
							<?php } if(strnatcmp($response['patient']['type'],"διοικητικό")==0){?>
							<!-- admin -->
							<div class="form-group">
								<label for="position">Θέση στην ιεραρχία:</label>
								<input type="text" class="form-control" id="position" placeholder="" name="positionatHierarchy" value="<?=$response['patient']['positionatHierarchy']?>">
							</div>
							<div class="form-group">
								<label for="specialty">Ειδικότητα:</label>
								<input type="text" class="form-control" id="specialty" placeholder="" name="speciality" value="<?=$response['patient']['speciality']?>">
							</div>
							<div class="form-group">
								<label for="building">Κτήριο:</label>
								<input type="text" class="form-control" id="building" placeholder="" name="building" value="<?=$response['patient']['building']?>">
							</div>
							<div class="form-group">
								<label for="officenumber">Αριθμός Γραφείου:</label>
								<input type="number" class="form-control" id="officenumber" placeholder="" name="office_num" value="<?=$response['patient']['office_num']?>">
							</div>
							<div class="form-group">
								<label for="fax">Fax:</label>
								<input type="number" class="form-control" id="fax" placeholder="" name="fax" value="<?=$response['patient']['fax']?>">
							</div>
							<?php } if(strnatcmp($response['patient']['type'],"άλλο")==0){?>
							<!-- other -->
							<div class="form-group">
								<label for="job">Εργασία:</label>
								<input type="text" class="form-control" id="job" placeholder="" name="job" value="<?=$response['patient']['job']?>">
							</div>
							<div class="form-group">
								<label for="municipality">Δήμος:</label>
								<input type="text" class="form-control" id="municipality" placeholder="" name="municipality" value="<?=$response['patient']['municipality']?>">
							</div>	
							<?php }?>
							<div class="form-group">
								<input type="submit" name="submit" class="btn btn-default" value="Αποθήκευση">
							</div>
							
						</div>
						</form>
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
//var_dump($_POST);
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/editpatient.php";
$method='POST';
if(isset($_POST['submit'])){
$postfields=http_build_query($_POST);
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
	document.cookie='token=<?= $tok ?>';</script>
<?php
//$GLOBALS['curtoken']=giveToken();
//print "<h5>".$GLOBALS['curtoken']."</h5>";
$response1 = request($url, $method, $postfields, $tok);
}
	var_dump($response1);
	header("Refresh:0");
}
?>
