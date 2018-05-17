<?php session_start(); ?>
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
		<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>

	<!-- daypilot libraries -->
        <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>
	</head>
	<script>
		$(document).ready(function() {
			$('myTable').DataTable();
		});
	</script>
	<style>
		label {
			font-size: smaller;
		}
	</style>
	<body>

		<div id="wrapper">

			
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header"><small>Ραντεβού</small></h1>
					</div>
				</div>
				<div>
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="" method="post">
								<div class="form-group">
									<label for="appointmentname">Όνομα συνάντησης</label>
									<input type="text" disabled value=<?=$_GET['name']?> class="form-control" id="appointmentname" placeholder="" name="appointmentname">
								</div>
								<div class="form-group">
									<label for="appointmentsubject">Θέμα συνάντησης</label>
									<input type="text" class="form-control" id="appointmentsubject" placeholder="" name="appointmentsubject">
								</div>
								<div class="form-group">
									<input type="hidden" name="type">
									<label for="type">Τύπος</label>
									<br>
									<input type="radio" class="form-group" name="type" value="Individual">
									Ατομικό
									<br>
									<input type="radio" class="form-group" name="type" value="Group" >
									Ομαδικό
									<br>
								</div>
								<div class="form-group">
									<input type="hidden" name="code">
									<label for="type">Είδος</label>
									<br>
									<input type="radio" class="form-group" name="code" value="Personal">
									Προσωπικό
									<br>
									<input type="radio" class="form-group" name="code" value="Counseling">
									Συμβουλευτικό
									<br>
								</div>
<?php	require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/myclients.php?psychID=".$_SESSION['id'];
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
	
	
//}
?>
								<div class="form-group">
									<label for="idclient">Κωδικός ασθενή ή ασθενών που συμμετέχουν</label>
									<?php 
											if(isset($response)){for($i=0;$i<count($response['result']);$i++){ ?>
									<br>
									<?=$response['result'][$i]['firstname']?> <?=$response['result'][$i]['lastname']?> <?=$response['result'][$i]['patientID']?>
									<input type="checkbox" class="form-group" id="idclient" value=<?=$response['result'][$i]['patientID']?> name="idclient[]">
									<br>
									<?php }} ?>
								</div>
								<div>Start:</div>
								<div><input type="text" id="start" name="start" disabled value=<?= $_GET['start'] ?> /></div>

								<div>End:</div>
								<div><input type="text" id="end" name="end" disabled value=<?= $_GET['end'] ?> /></div>

								<div class="form-group">
									<label for="building">Κτήριο</label>
									<input type="text" class="form-control" id="building" placeholder="" name="building">
								</div>
								<div class="form-group">
									<label for="room">Δωμάτιο</label>
									<input type="text" class="form-control" id="room" placeholder="" name="room">
								</div>
								<div class="form-group">
									<label for="comments">Σχόλια</label>
									<input type="text" class="form-control" id="comments" placeholder="" name="comments">
								</div>
								<div class="form-group">
									<input type="hidden" name="clientSMS">
									<label for="remindclient">Υπενθίμιση Πελάτη μέσω SMS</label>
									<br>
									<input type="radio" class="form-group" name="clientSMS" value="yes">
									Ναι
									<br>
									<input type="radio" class="form-group" name="clientSMS" value="no">
									Όχι
									<br>								
								</div>
								<div class="form-group">
									<input type="hidden" name="clientEMAIL">
									<label for="remindclient">Υπενθίμιση Πελάτη μέσω Email</label>
									<br>
									<input type="radio" class="form-group" name="clientEMAIL" value="yes">
									Ναι
									<br>
									<input type="radio" class="form-group" name="clientEMAIL" value="no">
									Όχι
									<br>								
								</div>
								<div class="form-group">
									<input type="hidden" name="psychSMS">
									<label for="remindclient">Υπενθίμιση Ψυχολόγου μέσω SMS</label>
									<br>
									<input type="radio" class="form-group" name="psychSMS" value="yes">
									Ναι
									<br>
									<input type="radio" class="form-group" name="psychSMS" value="no">
									Όχι
									<br>								
								</div>
								<div class="form-group">
									<input type="hidden" name="psychEMAIL">
									<label for="remindclient">Υπενθίμιση Ψυχολόγου μέσω Email</label>
									<br>
									<input type="radio" class="form-group" name="psychEMAIL" value="yes">
									Ναι
									<br>
									<input type="radio" class="form-group" name="psychEMAIL" value="no">
									Όχι
									<br>								
								</div>
								<div class="form-group">
									<label for="remindpsychologist">Υπενθίμιση πριν από:</label>
									<input type="time" class="form-control" id="comments" placeholder="" name="timebefore">						
								</div>
						</div>
					</div>
					<div class="space"><input name="submit" class="btn btn-default" type="submit" value="Αποθήκευση" id="Αποθήκευση" /> <a href="" id="cancel" >Ακύρωση</a></div>
					
					</button>
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
					$("#cancel").click(function() {
                    modal.close();
					});
					return false;
				});
			
				function jsfunction() {
					DayPilot.Modal.close("hello");
				}		
			</script>
<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/appointment.php";
$method='POST';
if(isset($_POST['submit'])){
	if(isset($_POST['idclient'])){
		var_dump($_POST['idclient']);
	}else{
		$_POST['idclient']=0;
	}
	
$arr=base64_encode(serialize($_POST['idclient']));
var_dump($_GET['id']);
$postfields=http_build_query(array(
'patientID' => $arr,
'psychID' => $_SESSION['id'],
'eventID' => $_GET['id'],
'name' => $_GET['name'],
'subject' => $_POST['appointmentsubject'],
'type' => $_POST['type'],
'start' => $_GET['start'],
'end' => $_GET['end'],
'building' => $_POST['building'],
'room' => $_POST['room'],
'code' => $_POST['code'],
'comments' => $_POST['comments'],
'clientSMS' => $_POST['clientSMS'],
'clientEMAIL' => $_POST['clientEMAIL'],
'psychSMS' => $_POST['psychSMS'],
'psychEMAIL' => $_POST['psychEMAIL'],
'timebefore' => $_POST['timebefore']
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
sleep(1);
echo "<script> jsfunction();</script>";
}

?>
	</body>

</html>

