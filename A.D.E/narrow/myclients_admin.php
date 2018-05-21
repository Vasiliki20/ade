<?php session_start(); ob_start(); ?>
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

		<!-- FOR DROPDOWN -->
		<!-- Java Scripts -->
		
		<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

		<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.0/css/jquery.dataTables.css">

		<link rel="stylesheet" type="text/css" href="css/normalize.css">

		<link rel="stylesheet" type="text/css" href="css/result-light.css">
	</head>
<script>
		$(document).ready(function() {
			$('myTable').DataTable({
				responsive:true
			})
		});
	</script>
	<style>
		body {
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 14px;
			line-height: 1.42857143;
		}
		body {
			background-color: #f8f8f8;
		}
	</style>
	<body>
		<h5> <?= $_SESSION['id'] ?>
		</h5>
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
						<h1 class="page-header">Πελάτες</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<!-- /.panel-heading -->
							<div class="panel-body">
								<form method="post" action="">
								<table id="example" width="100%" class="display">
									
									<thead>
										<tr>
											<th>Όνομα</th>
											<th>Επίθετο</th>
											<th>Ταυτότητα</th>
											<th>Ψυχολόγος</th>
											<th>Επιλογές</th>
											<th>Case File</th>
										</tr>
									</thead>
									<tbody>
										<?php require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/allclients.php";
$method='GET';
//if(isset($_POST['submit'])){
$postfields=http_build_query(array(
		'psychID' => $_SESSION['id']
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
										<?php
										if(isset($response)){for($i=0;$i<count($response['result']);$i++){ ?>
										<tr>
										<td><input type="text" id="row-1-age" name="row-1-age" value="<?= $response['result'][$i]['firstname'] ?>" readonly></td>
										<td><input type="text" id="row-1-age" name="row-1-age" value="<?= $response['result'][$i]['lastname'] ?>" readonly></td>
										<td><input type="hidden" value="<?= $response['result'][$i]['patientID'] ?>" name="id[]"><label for="id[]"><?= $response['result'][$i]['patientID'] ?></label></td>
										<td><input type="text" id="row-1-age" name="row-1-age" value="<?= $response['result'][$i]['psychologistID'] ?>" readonly></td>
										<td>
										<?php if($response['result'][$i]['active']==0){ ?>
										<select class="item-number" name="status[]">
										<option value="active" label="Active">Active</option>
										<option value="deactive" label="Deactive" selected="selected">Deactive</option>
										<option value="delete" label="Delete">Delete</option>
										</select></td>
										<td><a  href="casefile_admin.php?patientID=<?= $response['result'][$i]['patientID']?>">link</a></td>
										<?php }else{ ?>
										<select class="item-number" name="status[]">
										<option value="active" label="Active" selected="selected">Active</option>
										<option value="deactive" label="Deactive">Deactive</option>
										<option value="delete" label="Delete">Delete</option>
										</select></td>
										<td><a  href="casefile_admin.php?patientID=<?= $response['result'][$i]['patientID']?>">Αρχεία πελάτη</a></td>
										</tr>
										<?php }}} ?>
								</table>
									<input class="btn btn-default" type="submit" name="submit1" value="Αποθήκευση Αλλαγών"/>
								</form>
							</div>
							<!-- /.panel-body -->
						</div>

		<script>
			$.fn.dataTableExt.ofnSearch['html-input'] = function(value) {
				return $(value).val();
			};

			var table = $("#example").DataTable({
				columnDefs : [{
					"type" : "html-input",
					"targets" : [0, 1, 2, 3, 4]
				}]
			});

			$("#example td input").on('change', function() {
				var $td = $(this).parent();
				$td.find('input').attr('value', this.value);
				table.cell($td).invalidate().draw();
			});
			$("#example td select").on('change', function() {
				var $td = $(this).parent();
				var value = this.value;
				$td.find("option").filter("[selected]").removeAttr("selected").end().filter('[value="' + value + '"]').attr("selected", true);
				table.cell($td).invalidate().draw();
			});
		</script>
		<script>
			// tell the embed parent frame the height of the content
			if (window.parent && window.parent.parent) {
				window.parent.parent.postMessage(["resultsFrame", {
					height : document.body.getBoundingClientRect().height,
					slug : "s2gbafuz"
				}], "*")
			}
		</script>
</div>
					<!-- /.col-lg-12 -->
				</div>
			</div>
			<!-- /#page-wrapper -->

		</div>
	
		<script src="js/jquery-1.9.1.min.js"></script>
		<!-- jQuery DataTables-->
		<script src="js/jquery.dataTables.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>
<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/clientactive.php";
$method='POST';
$i=0;
if(isset($_POST['submit1'])){
	 var_dump($_POST['id']);
	 var_dump($_POST['status']);
	foreach($_POST['id'] as $j){
	if(strcmp($_POST['status'][$i],"active")==0){ $_POST['status'][$i]=1;}
	if(strcmp($_POST['status'][$i],"deactive")==0){ $_POST['status'][$i]=0;}
$postfields=http_build_query(array(
	'id'=> $_POST['id'][$i],		
	'status'=> $_POST['status'][$i]
		));
		$i++;
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
			document.cookie='token=<?= $tok ?>';
		</script>
		<?php
		//$GLOBALS['curtoken']=giveToken();
		//print "<h5>".$GLOBALS['curtoken']."</h5>";
		$response1=request($url,$method,$postfields,$tok);
	}
	var_dump($response1);
}
header("Refresh:0");
}
?>