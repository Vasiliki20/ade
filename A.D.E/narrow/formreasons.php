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
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="formupload_supervisor.php"><i class="fa fa-upload"></i> Upload file</a>
							</li>
							<li>
								<a href="reports.php"><i class="fa fa-bar-chart-o"></i> Reports</a>
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
							Τερματισμός Θεραπείας/Παρέμβασης
						</div>
						<div class="panel panel-body">
							<form action="" method="post">
									<label for="dateend"><strong>1. Ημερ. Αποδέσμευσης:</strong> </label>
									<input type="date" class="form-control" id="dateend" placeholder="" name="dateend" value="<?=$response['termination']['dateended']?>">
								
								<div class="form-group">
									<label for="reasons"><strong>2. Λόγος/Λόγοι Αποδέσμευσης: </strong></label>
									<input type="text" class="form-control" id="reasons" placeholder="" name="reasons" value="<?=$response['termination']['whyterminate']?>">
								</div>
								<div class="form-group">
									<label for="brief"><strong>3. Έκβαση Θεραπείας: </strong></label>
									<br>
									<label><em>(Σύνοψη παρέμβασης/θεραπείας συμπ. αποκλίσεις από αρχικό πλάνο και αιτιολόγηση, δυσκολίες/εμπόδια, σημεία που διευκόλυναν τη θεραπεία, στάση/συμπεριφορά πελάτη κ.ο.κ., αποτελέσματα) </em></label>
									<br>
									<input type="text" class="form-control" id="brief" placeholder="" name="brief" value="<?=$response['termination']['therapyend']?>">
								</div>
								</table>
								<div class="form-group">
									<label for="future"><strong>4. Επανεκτίμηση Συνολικής Λειτουργικότητας – Βαθμός Δυσλειτουργίας κατά τον τερματισμό</strong></label>
									<br>
									<label><em>(βάλτε Χ στο σημείο που θεωρείτε ότι αντικατοπτρίζει ό,τι ισχύει για τον πελάτη κατά τον τερματισμό/ολοκλήρωση της θεραπείας) </em></label>
								</div>
								<div class="form-group">
									<table style="width:100%">
										<col width="250">
										<tr>
											<th></th>
											<th>Βαθμός(1,2,3,4)</th>
											
										</tr>
										<tr>
											<td>α. ψυχολογική</td>
											<td><input type="text" name="epsychologicalfunc"></td>											
										</tr>
										<tr>
											<td>β. επαγγελματική/ακαδημαϊκή</td>
											<td><input type="text" name="eprofessionacademicfunc"></td>
											
										</tr>
										<tr>
											<td>γ. κοινωνική</td>
											<td><input type="text" name="esocialfunc"></td>
										</tr>
										<tr>
											<td>δ. αυτοφροντίδα</td>
											<td><input type="text" name="eautofix"></td>
										</tr>
									</table>
								</div>
								<div class="form-group">
									<label for="more"><strong>5. Οποιεσδήποτε άλλες σημαντικές πληροφορίες  ή παρατηρήσεις</strong></label>
									<input type="text" class="form-control" id="more" placeholder="" name="more" value="<?=$response['termination']['infoterminate']?>">
								</div>
								<button type="submit" class="btn btn-default" name="submit">
									Submit
								</button>
							</form>
								<div>
								</br>
								<h4>Αξιολόγηση απο ασθενή</h4>
								<input type="hidden" name="q1" />
 								<label for="q1">1. Ήταν εύκολο για μένα να διευθετήσω συνάντηση </label>
								<input type="text" class="form-control" value="<?=$response['termination']['q1']?>">
								<br>
								<input type="hidden" name="q2" />
								<label for="q2">2. Ο χρόνος που χρειάστηκε να περιμένω για τη διευθέτηση συνεδρίας μου φάνηκε πάρα πολύς</label>
								<input type="text" class="form-control" value="<?=$response['termination']['q2']?>">
								<br>
								<input type="hidden" name="q3" />
								<label for="q3">3. Ένιωθα άνετα περιμένοντας στην αίθουσα αναμονής </label>
								<input type="text" class="form-control" value="<?=$response['termination']['q3']?>">
								<br>
								<input type="hidden" name="q4" />
								<label for="q4">4. Μου φάνηκε ότι μου ζητήθηκε να συμπληρώσω πάρα πολλά έντυπα</label>
								<input type="text" class="form-control" value="<?=$response['termination']['q4']?>">
								<br>
								<input type="hidden" name="q5" />
								<label for="q5">5. Η αρχική αξιολόγηση ήταν χρήσιμη για να με βοηθήσει να εντοπίσω τις ανάγκες μου και να καθορίσω τους στόχους μου :</label>
								<input type="text" class="form-control" value="<?=$response['termination']['q5']?>">
								<br>
								<input type="hidden" name="q6" />
								<label for="q6">6. Θα σύστηνα σε κάποιο φίλο ή δικό μου άτομο τις υπηρεσίες του  ΚΕΨΥ</label>
								<input type="text" class="form-control" value="<?=$response['termination']['q6']?>">
								<br>
								<input type="hidden" name="q7" />
								<label for="q7">7. Τα διάφορα εργαλεία (π.χ. ερωτηματολόγια) που συμπλήρωσα μου φάνηκαν χρήσιμα </label>
								<input type="text" class="form-control" value="<?=$response['termination']['q7']?>">
								<br>
								<input type="hidden" name="q8" />
								<label for="q8">8. Οι ανησυχίες που με ώθησαν να αποταθώ στο ΚΕΨΥ επηρέαζαν σημαντικά τις σπουδές μου </label>
								<input type="text" class="form-control" value="<?=$response['termination']['q8']?>">
								<br>
								<input type="hidden" name="q9" />
								<label for="q9">9. Οι υπηρεσίες του έλαβα ήταν χρήσιμες για μένα </label>
								<input type="text" class="form-control" value="<?=$response['termination']['q9']?>">
								<br>
								<label for="q10">Οι υπηρεσίες του έλαβα με βοήθησαν…</label>
								<br>
								<input type="hidden" name="q10" />
								<label for="q10">10. να νιώθω καλύτερα για τον εαυτό μου</label>
								<input type="text" class="form-control" value="<?=$response['termination']['q10']?>">
								<input type="hidden" name="q11" />
								<br>
								<label for="q11">11. να κατανοώ καλύτερα τον εαυτό μου</label>
								<input type="text" class="form-control" value="<?=$response['termination']['q11']?>">
								<br>
								<input type="hidden" name="q12" />
								<label for="q12">12. να παραμείνω στο Πανεπιστήμιο </label>
								<input type="text" class="form-control" value="<?=$response['termination']['q12']?>">
								<br>
								<input type="hidden" name="q13" />
								<label for="q13">13. να βελτιώσω την ακαδημαϊκή μου επίδοση</label>
								<input type="text" class="form-control" value="<?=$response['termination']['q13']?>">
								<br>
								<input type="hidden" name="q14" />
								<label for="q14">14. να βελτιώσω την  παρουσία μου στις διαλέξεις/μαθήματα</label>
								<input type="text" class="form-control" value="<?=$response['termination']['q14']?>">
								<br>
								<input type="hidden" name="q15" />
								<label for="q15">15. να βελτιώσω συνολικά την εμπειρία μου στο Πανεπιστήμιο</label>
								<input type="text" class="form-control" value="<?=$response['termination']['q15']?>">
								<br>
								<input type="hidden" name="q16" />
								<label for="q16">16. να αναπτύξω δεξιότητες ώστε να μπορώ να διαχειριστώ  θέματα που με
									απασχολούν</label>
								<input type="text" class="form-control" value="<?=$response['termination']['q16']?>">
								<br>
								<input type="hidden" name="q17" />
								<label for="q17">17.  να αναπτύξω δεξιότητες που θα βρω χρήσιμες στη μελλοντική προσωπική και
									επαγγελματική μου πορεία (π.χ. αυτό-κατανόηση, κατανόηση των άλλων, διαχείριση δύσκολων συναισθημάτων, αυτοπεποίθηση, ασφάλεια)</label>
								<input type="text" class="form-control" value="<?=$response['termination']['q17']?>">
								<br>
								<input type="hidden" name="q18" />
								<label for="q18">18. Ο θεραπευτής έδειξε να νοιάζεται πραγματικά για τις ανησυχίες μου</label>
								<input type="text" class="form-control" value="<?=$response['termination']['q18']?>">
								<br>
								<input type="hidden" name="q19" />
								<label for="q19">19. Ο θεραπευτής φάνηκε να είναι καλά καταρτισμένος για να με βοηθήσει όσον αφορά το θέμα που με απασχολούσε </label>
								<input type="text" class="form-control" value="<?=$response['termination']['q19']?>">
								<br>
								<input type="hidden" name="q20" />
								<label for="q20">20. Ο θεραπευτής μου συμπεριφέρθηκε ευγενικά </label>
								<input type="text" class="form-control" value="<?=$response['termination']['q20']?>">
								<br>
								<input type="hidden" name="q21" />
								<label for="q21">21. Αν προκύψει ξανά η ανάγκη να μιλήσω με κάποιον θα αποταθώ ξανά στο ΚΕΨΥ</label>
								<input type="text" class="form-control" value="<?=$response['termination']['q21']?>">
								<br>
							</div>
							<div class="form-group">
								<label for="q22"><strong>22. Περιγράψτε λίγο πιο αναλυτικά με ποιους τρόπους οι υπηρεσίες που λάβατε ήταν βοηθητικοί για εσάς.</strong> </label>
								<input type="text" class="form-control" id="q22" placeholder="" name="q22" value="<?=$response['termination']['helpful']?>">
							</div>
							<div class="form-group">
								<label for="q23"><strong>23. Περιγράψτε επίσης λίγο πιο αναλυτικά τα στοιχεία στις υπηρεσίες που λάβατε, τα οποία βρήκατε λιγότερο βοηθητικά ή αρνητικά. </strong>
									<br>
									<em>(συμπεριλάβετε οποιοδήποτε περιστατικό σας φάνηκε αρνητικό ή δύσκολο). </em>:</label>
								<input type="text" class="form-control" id="q23" placeholder="" name="q23" value="<?=$response['termination']['negative']?>">
							</div>
							<div class="form-group">
								<label for="q24"><strong>24.  Έχετε οποιεσδήποτε εισηγήσεις για το πώς θα μπορούσε να βελτιωθούν οι υπηρεσίες μας; </strong> </label>
								<input type="text" class="form-control" id="q24" placeholder="" name="q24" value="<?=$response['termination']['sugestions']?>">
							</div>
							<div class="form-group">
								<label for="q25"><strong>25. Θα θέλατε να αναφέρετε οτιδήποτε άλλο  σχετικά με το ΚΕΨΥ;</strong> </label>
								<input type="text" class="form-control" id="q25" placeholder="" name="q25" value="<?=$response['termination']['other']?>">
							</div>
							<div class="form-group">
								<label for="q9"><strong>26. Για ποιο λόγο τερματίσετε τις υπηρεσίες που λαμβάνατε στο ΚΕΨΥ;</strong> <em>(σημειώστε όσα ισχύουν)</em></label>
								<br>
								<input type="text" class="form-control" name="whyend" value="<?=$response['termination']['whyterminate1']?>">
								</br>
							</div>
							
						</div>
								</div>
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
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/form14.php";
$method='POST';
	if(isset($_POST['submit'])){
		$postfields=http_build_query(array(
		'id' => $_GET['patientID'],
		'dateended' => $_POST['dateend'],
		'whyterminate' => $_POST['reasons'],
		'infoterminate' => $_POST['brief'],
		'therapyend' => $_POST['more'],
		'epsychologicalfunc' => $_POST['epsychologicalfunc'],
		'eprofessionacademicfunc' => $_POST['eprofessionacademicfunc'],
		'esocialfunc' => $_POST['esocialfunc'],
		'eautofix' => $_POST['eautofix']
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
