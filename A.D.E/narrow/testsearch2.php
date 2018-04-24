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
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<!-- meta script link style of table -->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="robots" content="noindex, nofollow">
		<meta name="googlebot" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js" datatables=""></script>

		<link rel="stylesheet" type="text/css" href="/css/normalize.css">

		<link rel="stylesheet" type="text/css" href="/css/result-light.css">

		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.0/css/jquery.dataTables.css">

		<script type="text/javascript" src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>

		<style type="text/css">
		</style>
	</head>
	
	<script>
		$(document).ready(function() {
			$('myTable').DataTable();
		});
	</script>
	<body>
		<h5><?= $_SESSION['id'] ?></h5>
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
								<a href="psindex_admin.php"><i class="fa fa-table"></i> Calendar</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-list"></i> Open<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="myclients_admin.php">Clients</a>
									</li>
									<li>
										<a href="therapists.php">Therapists</a>
									</li>
									<li>
										<a href="myappointments_admin.php">My Appointments</a>
									</li>
									<li>
										<a href="waitinglist_admin.php">Waiting List</a>
									</li>
									<li>
										<a href="search_admin.php">Search</a>
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
						<h1 class="page-header">Clients</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">	
								<div class="dataTables_length" id="example_length">
									<label>Show
										<select name="example_length" aria-controls="example" class="">
											<option value="10">10</option>
											<option value="25">25</option>
											<option value="50">50</option>
											<option value="100">100</option>
										</select> entries
									</label>
								</div>
								<div id="example_filter" class="dataTables_filter">
									<label>Search:
										<input type="search" class="" aria-controls="example">
									</label>
								</div>
								<table id="example" class="display dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
									<!-- HEAD -->
									<thead>
										<tr role="row">
											<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 54px;">Όνομα</th>
											<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Surname: activate to sort column ascending" style="width: 157px;">Επίθετο</th>
											<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Id: activate to sort column ascending" style="width: 157px;" aria-sort="ascending">Ταυτότητα</th>
											<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 94px;">Options</th>
											<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 94px;">Case File</th>
										</tr>
									</thead>
									<!-- BODY -->
									<tbody>
									<?php
										require_once("requests.php");
										$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/myclients.php?psychID=".$_SESSION['id'];
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
																																																																																document.cookie='token=<?= $tok ?>
																																																																							';
									</script>
									<?php
									//$GLOBALS['curtoken']=giveToken();
									//print "<h5>".$GLOBALS['curtoken']."</h5>";
									$response = request($url, $method, $postfields, $tok);
									}
									//}
									?>
									<?php
										if(isset($response)){for($i=0;$i<count($response['result']);$i++){ ?>
										<tr role="row" class="odd"> 
											<td><?= $response['result'][$i]['firstname'] ?></td>
											<td><?= $response['result'][$i]['lastname'] ?></td>
											<td><?= $response['result'][$i]['patientID'] ?></td>
											<td><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<select size="1" id="row-1-office" name="row-1-office">
												<option value="active" selected="selected">Active</option>
												<option value="deactive">Deactive</option>
												<option value="delete">Delete</option>
											</select></td>
											<td><a  href="casefile_admin.php?patientID=<?= $response['result'][$i]['patientID'] ?>">link</a></td>
										</tr>
									<?php }} ?>
									</tbody>
								</table>
								<div class="dataTables_info" id="example_info" role="status" aria-live="polite">
									Showing 1 to 25 of 57 entries
								</div>
								<div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
									<a class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0" tabindex="0" id="example_previous">Previous</a><span><a class="paginate_button current" aria-controls="example" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="example" data-dt-idx="3" tabindex="0">3</a></span><a class="paginate_button next" aria-controls="example" data-dt-idx="4" tabindex="0" id="example_next">Next</a>
								</div>
								<button type="submit" name="save" class="btn btn-default">
									Save Changes
								</button>
							</div>
							<!-- /.panel-body -->
						</div>
						<!-- /.panel -->
					</div>
					<!-- /.col-lg-12 -->
				</div>
			</div>
			<!-- /#page-wrapper -->

		</div>
		<script type="text/javascript">
			$.fn.dataTableExt.ofnSearch['html-input'] = function(value) {
				return $(value).val();
			};

			var table = $("#example").DataTable({
				columnDefs : [{
					"type" : "html-input",
					"targets" : [1, 2, 3]
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
				$td.find('option').each(function(i, o) {
					$(o).removeAttr('selected');
					if ($(o).val() == value)
						$(o).attr('selected', true);
				})
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