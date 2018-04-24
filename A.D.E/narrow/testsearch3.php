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

		<!-- search -->
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

				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<!-- /.panel-heading -->
							<div class="panel-body">

								<div id="example_wrapper" class="dataTables_wrapper">
									<table id="example" class="display dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
										<thead>
											<tr role="row">
												<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 54px;">Όνομα</th>
												<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 157px;">Επίθετο</th>
												<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 157px;" aria-sort="ascending">Ταυτότητα</th>
												<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 94px;">Επιλογές</th>
												<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 94px;">Case File</th>
											</tr>
										</thead>

										<tfoot>
											<tr>
												<th rowspan="1" colspan="1">Όνομα</th>
												<th rowspan="1" colspan="1">Επίθετο</th>
												<th rowspan="1" colspan="1">Ταυτότητα</th>
												<th rowspan="1" colspan="1">Επιλογές</th>
												<th rowspan="1" colspan="1">Case File</th>
											</tr>
										</tfoot>

										<tbody>

											<tr role="row" class="odd">
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Βασιλική">
												</td>
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Παντελή">
												</td>
												<td class="sorting_1">
												<input type="text" id="row-1-position" name="row-1-position" value="917832">
												</td>
												<td>
												<select size="1" id="row-1-office" name="row-1-office">
													<option value="Active" selected="selected"> Active </option>
													<option value="Deactive"> Deactive </option>
													<option value="Delete"> Delete </option>
												</select></td>
												<td class="">
												<a href="casefile.php">link</a>
												</td>
											</tr>
											<tr role="row" class="odd">
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Κυριάκος">
												</td>
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Αθανασίου">
												</td>
												<td class="sorting_1">
												<input type="text" id="row-1-position" name="row-1-position" value="955845">
												</td>
												<td>
												<select size="1" id="row-1-office" name="row-1-office">
													<option value="Active" selected="selected"> Active </option>
													<option value="Deactive"> Deactive </option>
													<option value="Delete"> Delete </option>
												</select></td>
												<td class="">
												<a href="casefile.php">link</a>
												</td>
											</tr>
											<tr role="row" class="odd">
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Χρίστος">
												</td>
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Ελευθεριάδου">
												</td>
												<td class="sorting_1">
												<input type="text" id="row-1-position" name="row-1-position" value="323241">
												</td>
												<td>
												<select size="1" id="row-1-office" name="row-1-office">
													<option value="Active" selected="selected"> Active </option>
													<option value="Deactive"> Deactive </option>
													<option value="Delete"> Delete </option>
												</select></td>
												<td class="">
												<a href="casefile.php">link</a>
												</td>
											</tr>
											<tr role="row" class="odd">
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Αλεξάντρα">
												</td>
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Ελευθεριάδου">
												</td>
												<td class="sorting_1">
												<input type="text" id="row-1-position" name="row-1-position" value="958493">
												</td>
												<td>
												<select size="1" id="row-1-office" name="row-1-office">
													<option value="Active" selected="selected"> Active </option>
													<option value="Deactive"> Deactive </option>
													<option value="Delete"> Delete </option>
												</select></td>
												<td class="">
												<a href="casefile.php">link</a>
												</td>
											</tr>
											<tr role="row" class="odd">
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Σπύρος">
												</td>
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Κωστή">
												</td>
												<td class="sorting_1">
												<input type="text" id="row-1-position" name="row-1-position" value="32654">
												</td>
												<td>
												<select size="1" id="row-1-office" name="row-1-office">
													<option value="Active" selected="selected"> Active </option>
													<option value="Deactive"> Deactive </option>
													<option value="Delete"> Delete </option>
												</select></td>
												<td class="">
												<a href="casefile.php">link</a>
												</td>
											</tr>
											<tr role="row" class="odd">
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Αντρέας">
												</td>
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Κωστή">
												</td>
												<td class="sorting_1">
												<input type="text" id="row-1-position" name="row-1-position" value="337432">
												</td>
												<td>
												<select size="1" id="row-1-office" name="row-1-office">
													<option value="Active" selected="selected"> Active </option>
													<option value="Deactive"> Deactive </option>
													<option value="Delete"> Delete </option>
												</select></td>
												<td class="">
												<a href="casefile.php">link</a>
												</td>
											</tr>
											<tr role="row" class="odd">
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Ραφαέλλα">
												</td>
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Χαραλάμπους">
												</td>
												<td class="sorting_1">
												<input type="text" id="row-1-position" name="row-1-position" value="337432">
												</td>
												<td>
												<select size="1" id="row-1-office" name="row-1-office">
													<option value="Active" selected="selected"> Active </option>
													<option value="Deactive"> Deactive </option>
													<option value="Delete"> Delete </option>
												</select></td>
												<td class="">
												<a href="casefile.php">link</a>
												</td>
											</tr>
											<tr role="row" class="odd">
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Ραφαέλλα">
												</td>
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Βαφέα">
												</td>
												<td class="sorting_1">
												<input type="text" id="row-1-position" name="row-1-position" value="321543">
												</td>
												<td>
												<select size="1" id="row-1-office" name="row-1-office">
													<option value="Active"> Active </option>
													<option value="Deactive"  selected="selected"> Deactive </option>
													<option value="Delete"> Delete </option>
												</select></td>
												<td class="">
												<a href="casefile.php">link</a>
												</td>
											</tr>
											<tr role="row" class="odd">
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Γεωργία">
												</td>
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Κακκίντιρου">
												</td>
												<td class="sorting_1">
												<input type="text" id="row-1-position" name="row-1-position" value="123232">
												</td>
												<td>
												<select size="1" id="row-1-office" name="row-1-office">
													<option value="Active"> Active </option>
													<option value="Deactive"  selected="selected"> Deactive </option>
													<option value="Delete"> Delete </option>
												</select></td>
												<td class="">
												<a href="casefile.php">link</a>
												</td>
											</tr>
											<tr role="row" class="odd">
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Ραφαήλ">
												</td>
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Μιχαήλ">
												</td>
												<td class="sorting_1">
												<input type="text" id="row-1-position" name="row-1-position" value="987869">
												</td>
												<td>
												<select size="1" id="row-1-office" name="row-1-office">
													<option value="Active"> Active </option>
													<option value="Deactive"  > Deactive </option>
													<option value="Delete" selected="selected"> Delete </option>
												</select></td>
												<td class="">
												<a href="casefile.php">link</a>
												</td>
											</tr>
											<tr role="row" class="odd">
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Αντρέας">
												</td>
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Κωνσταντίνου">
												</td>
												<td class="sorting_1">
												<input type="text" id="row-1-position" name="row-1-position" value="435434">
												</td>
												<td>
												<select size="1" id="row-1-office" name="row-1-office">
													<option value="Active"> Active </option>
													<option value="Deactive"> Deactive </option>
													<option value="Delete"   selected="selected"> Delete </option>
												</select></td>
												<td class="">
												<a href="casefile.php">link</a>
												</td>
											</tr>
											<tr role="row" class="odd">
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Χριστιάνα">
												</td>
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Βαλιαντή">
												</td>
												<td class="sorting_1">
												<input type="text" id="row-1-position" name="row-1-position" value="432543">
												</td>
												<td>
												<select size="1" id="row-1-office" name="row-1-office">
													<option value="Active" selected="selected"> Active </option>
													<option value="Deactive"  > Deactive </option>
													<option value="Delete"> Delete </option>
												</select></td>
												<td class="">
												<a href="casefile.php">link</a>
												</td>
											</tr>
											<tr role="row" class="odd">
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Κωνσταντίνος">
												</td>
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Ζαντής">
												</td>
												<td class="sorting_1">
												<input type="text" id="row-1-position" name="row-1-position" value="321543">
												</td>
												<td>
												<select size="1" id="row-1-office" name="row-1-office">
													<option value="Active"> Active </option>
													<option value="Deactive"  selected="selected"> Deactive </option>
													<option value="Delete"> Delete </option>
												</select></td>
												<td class="">
												<a href="casefile.php">link</a>
												</td>
											</tr>
											<tr role="row" class="odd">
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Άννα">
												</td>
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Βαφέα">
												</td>
												<td class="sorting_1">
												<input type="text" id="row-1-position" name="row-1-position" value="435434">
												</td>
												<td>
												<select size="1" id="row-1-office" name="row-1-office">
													<option value="Active"> Active </option>
													<option value="Deactive"  selected="selected"> Deactive </option>
													<option value="Delete"> Delete </option>
												</select></td>
												<td class="">
												<a href="casefile.php">link</a>
												</td>
											</tr>
											<tr role="row" class="odd">
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Στέφανη">
												</td>
												<td class="">
												<input type="text" id="row-1-age" name="row-1-age" value="Παραρέ">
												</td>
												<td class="sorting_1">
												<input type="text" id="row-1-position" name="row-1-position" value="323254">
												</td>
												<td>
												<select size="1" id="row-1-office" name="row-1-office">
													<option value="Active"> Active </option>
													<option value="Deactive"  > Deactive </option>
													<option value="Delete" selected="active"> Delete </option>
												</select></td>
												<td class="">
												<a href="casefile.php">link</a>
												</td>
											</tr>
											
											</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
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

	</body>
</html>