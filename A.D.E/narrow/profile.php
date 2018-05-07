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

		<style>
			body {
				font-family: Arial, Helvetica, sans-serif;
			}

			/* The Modal (background) */
			.modal {
				display: none; /* Hidden by default */
				position: fixed; /* Stay in place */
				z-index: 1; /* Sit on top */
				padding-top: 100px; /* Location of the box */
				left: 0;
				top: 0;
				width: 100%; /* Full width */
				height: 100%; /* Full height */
				overflow: auto; /* Enable scroll if needed */
				background-color: rgb(0,0,0); /* Fallback color */
				background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			}

			/* Modal Content */
			.modal-content {
				background-color: #fefefe;
				margin: auto;
				padding: 20px;
				border: 1px solid #888;
				width: 50%;
			}

			/* The Close Button */
			.close {
				color: #aaaaaa;
				float: right;
				font-size: 28px;
				font-weight: bold;
			}

			.close:hover, .close:focus {
				color: #000;
				text-decoration: none;
				cursor: pointer;
			}
		</style>
	</head>

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
						<h1 class="page-header">My profile</h1>
					</div>
				</div>

				<form>
					<div class="form-group">
						<table>
							<tr>
								<td align="left"><label for="name">Όνομα:</label></td>
								<td align="left">
								<input type="text" name="name" class="form-group" id="name">
								</td>
							</tr>
							<tr>
								<td align="left"><label for="surname">Επίθετο:</label></td>
								<td align="left">
								<input type="text" name="surname" class="form-group" id="surname">
								</td>
							</tr>
							<tr>
								<td align="left"><label for="id">Αριθμός Ταυτότητας:</label></td>
								<td align="left">
								<input type="text" name="id" class="form-group" id="id">
								</td>
							</tr>
							<tr>
								<td align="left"><label for="sex">Φύλο:</label></td>
								<td align="left">
								<input type="text" name="sex" class="form-group" id="sex">
								</td>
							</tr>
							<tr>
								<td align="left"><label for="age">Ηλικία:</label></td>
								<td align="left">
								<input type="number" name="age" class="form-group" id="age">
								</td>
							</tr>
							<tr>
								<td align="left"><label for="address">Διεύθυνση Διαμονής:</label></td>
								<td align="left">
								<input type="text" name="address" class="form-group" id="address">
								</td>
							</tr>
							<tr>
								<td align="left"><label for="phone">Τηλέφωνο:</label></td>
								<td align="left">
								<input type="number" name="phone" class="form-group" id="phone">
								</td>
							</tr>
							<tr>
								<td align="left"><label for="fax">Fax:</label></td>
								<td align="left">
								<input type="number" name="fax" class="form-group" id="fax">
								</td>
							</tr>
							<tr>
								<td align="left"><label for="position">Θέση Εργασίας:</label></td>
								<td align="left">
								<input type="text" name="position" class="form-group" id="position">
								</td>
							</tr>
							<tr>
								<td align="left"><label for="specialty">Ειδικότητα:</label></td>
								<td align="left">
								<input type="text" name="specialty" class="form-group" id="specialty">
								</td>
							</tr>
							<tr>
								<td align="left"><label for="building">Κτήριο:</label></td>
								<td align="left">
								<input type="text" name="building" class="form-group" id="building">
								</td>
							</tr>
							<tr>
								<td align="left"><label for="officenum">Αριθμός Γραφείου:</label></td>
								<td align="left">
								<input type="number" name="officenum" class="form-group" id="officenum">
								</td>
							</tr>
							<tr>
								<td align="left"><label for="email">Ηλεκτρονική Διεύθυνση:</label></td>
								<td align="left">
								<input type="email" name="email" class="form-group" id="email">
								</td>
							</tr>
						</table>
				</form>
				<button id="myBtn" class="btn btn-default">
					Αλλαγή κωδικού πρόσβασης
				</button>

				<br>
				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">
									&times;
								</button>
								<h4 class="modal-title">Αλλαγή κωδικού</h4>
							</div>
							<div class="modal-body">
								<table>
									<tr>
										<td align="left"><label for="oldpassword">Υφιστάμενος κωδικός:</label></td>
										<td align="left">
										<input type="text" name="oldpassword" class="form-group" id="oldpassword">
										</td>
									</tr>
									<tr>
										<td align="left"><label for="newpassword">Νέος κωδικός:</label></td>
										<td align="left">
										<input type="text" name="newpassword" class="form-group" id="newpassword">
										</td>
									</tr>
									<tr>
										<td align="left"><label for="confirm">Επιβεβέωση νέου κωδικού:</label></td>
										<td align="left">
										<input type="text" name="confirm" class="form-group" id="confirm">
										</td>
									</tr>
								</table>
							</div>
							<div class="modal-footer">
								<input type="sumbit" name="submit1"  class="btn btn-default" value="save" data-dismiss="modal">

								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script>
				// Get the modal
				var modal = document.getElementById('myModal');

				// Get the button that opens the modal
				var btn = document.getElementById("myBtn");

				// Get the <span> element that closes the modal
				var span = document.getElementsByClassName("close")[0];

				// When the user clicks the button, open the modal
				btn.onclick = function() {
					modal.style.display = "block";
				}
				// When the user clicks on <span> (x), close the modal
				span.onclick = function() {
					modal.style.display = "none";
				}
				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
					if (event.target == modal) {
						modal.style.display = "none";
					}
				}
			</script>
		</div>
		</form>
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
