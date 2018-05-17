<?php ob_start(); ?>
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
		<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>

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
	<style>
		strong {
			font-weight: bold;
		}
		* {
			box-sizing: border-box;
		}

		/* Create two unequal columns that floats next to each other */
		.column {
			float: left;
			padding: 10px;
		}

		.left {
			width: 50%;
		}

		.right {
			width: 50%;
		}

		/* Clear floats after the columns */
		.row:after {
			content: "";
			display: table;
			clear: both;
		}
	</style>
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
						<h1 class="page-header">Στατιστικές Αναφορές</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				<div class="panel panel-default">
					<div class="panel-heading">
						Στατιστικές
						<br>
					</div>
					<div>
						<br>
					</div>

					<div class="panel-body">
						<div class="row">
							<div class="column left">
								<form id="form01" name="myForm1" method="post" action="">
									<div class="form-group">
										<label><strong>Αριθμός πελατών ανά μήνα</strong></label>
										<br>
										<input type="text" class="form-group" id="clientspermonth1" placeholder="Χρονιά" name="st1y">
										<br>
										<input type="text" class="form-group" id="clientspermonth2" placeholder="Εξάμηνο" name="st1e">
										<br>
										<input id="submit" type="submit" name="submit" class="btn btn-default" value="Αναζήτηση">

									</div>
								</form>
								<form id="form02" name="myForm2" method="post" action="">
									<br>
									<br>
									<label><strong>Αριθμός νέων πελάτων ανά μήνα</strong></label>
									<br>
									<input type="text" class="form-group" id="newclientspermonth1" placeholder="Χρονιά" name="st2y">
									<br>
									<input type="text" class="form-group" id="newclientspermonth2" placeholder="Εξάμηνο" name="st2e">
									<br>
									<input id="submit" type="submit" name="submit1" class="btn btn-default" value="Αναζήτηση">
								</form>
								<form id="form03" name="myForm3" method="post" action="">
									<br>
									<br>
									<label><strong>Αριθμός συνεδριών ανά μήνα</strong></label>
									<br>
									<input type="text" class="form-group" id="sessionspermonth1" placeholder="Χρονιά" name="st3y">
									<br>
									<input type="text" class="form-group" id="sessionspermonth2" placeholder="Εξάμηνο" name="st3e">
									<br>
									<input id="submit" type="submit" name="submit2" class="btn btn-default" value="Αναζήτηση">
								</form>
							</div>
							<div class="column right">

								<form id="form04" name="myForm4" method="post" action="">
									<label><strong>Σύγκριση αριθμού πελατών (σύνολο και Μέσος Όρος) με προηγούμενα έτη</strong></label>
									<br>
									<input type="text" class="form-group" id="st4ye" placeholder="Αρχικό έτος σύγκρισης" name="st4ye">
									<br>
									<input type="text" class="form-group" id="st4y" placeholder="Χρονιά" name="st4y">
									<br>
									<input type="text" class="form-group" id="st4e" placeholder="Εξάμηνο" name="st4e">
									<br>
									<input id="submit" type="submit" name="submit3" class="btn btn-default" value="Αναζήτηση">
								</form>
								<form id="form05" name="myForm5" method="post" action="">
									<br>
									<br>
									<label><strong>Κατανομή των νέων περιστατικών του ΚΕ.Ψ.Υ. ανά Σχολή</strong></label>
									<br>
									<input type="text" class="form-group" id="distributionperschool1" placeholder="Χρονιά" name="st5y">
									<br>
									<input id="submit" type="submit" name="submit4" class="btn btn-default" value="Αναζήτηση">
								</form>
								<form id="form06" name="myForm6" method="post" action="">
									<br>
									<br>
									<label><strong>Παρουσιαζόμενα ζητήματα για νέα περιστατικά</strong></label>
									<br>
									<input type="text" class="form-group" id="issuesfornewcases1" placeholder="Χρονιά" name="st6y">
									<br>
									<input id="submit" type="submit" name="submit5" class="btn btn-default" value="Αναζήτηση">
								</form>
								<form id="form07" name="myForm7" method="post" action="">
									<br>
									<br>
									<label><strong>Πηγές ενημέρωσης φοιτητών για τις υπηρεσίες</strong></label>
									<br>
									<input type="text" class="form-group" id="sources1" placeholder="Χρονιά" name="st7y">
									<br>
									<input id="submit" type="submit" name="submit6" class="btn btn-default" value="Αναζήτηση">
								</form>
							</div>
						</div>
					</div>
					<script>
						$(document).ready(function() {
							jQuery.validator.addMethod("noSpace", function(value, element) {
								return value.indexOf(" ") < 0 && value != "";
							}, "Παρακαλώ σημπληρώστε ξανά χωρίς κενά");

							jQuery.validator.addMethod("sqlValidator", function(value, element) {
								return this.optional(element) || !(/[\s]*((delete)|(exec)|(drop\s*table)|(insert)|(shutdown)|(update)|(\bor\b))/.test(value));
							}, 'Παρακαλώ συμπληρώστε ξανά');

							jQuery.validator.addMethod("xssValidator", function(value, element) {
								return this.optional(element) || !(/\s*script\b[^>]*>[^<]+<\s*\/\s*script\s*/.test(value));
							}, 'Παρακαλώ συμπληρώστε ξανά');

							$('#form01').validate({
								rules : {
									st1y : {
										minlength : 1,
										sqlValidator : true,
										xssValidator : true,
										noSpace : true,
										required : true,
										min : 2000,
										max : 9999,
										digits : true
									},
									st1e : {
										minlength : 1,
										sqlValidator : true,
										xssValidator : true,
										noSpace : true,
										required : true,
										digits : true,
										min : 1,
										max : 2,
										range : [1, 2]
									}
								},
								highlight : function(element) {
									$(element).closest('.form-group').addClass('error text-danger');
								},
								success : function(element) {
									$(element).closest('.form-group').removeClass('error text-danger');
								}
							});
						});

					</script>
					<script>
						$(document).ready(function() {
							jQuery.validator.addMethod("noSpace", function(value, element) {
								return value.indexOf(" ") < 0 && value != "";
							}, "Παρακαλώ σημπληρώστε ξανά χωρίς κενά");

							jQuery.validator.addMethod("sqlValidator", function(value, element) {
								return this.optional(element) || !(/[\s]*((delete)|(exec)|(drop\s*table)|(insert)|(shutdown)|(update)|(\bor\b))/.test(value));
							}, 'Παρακαλώ συμπληρώστε ξανά');

							jQuery.validator.addMethod("xssValidator", function(value, element) {
								return this.optional(element) || !(/\s*script\b[^>]*>[^<]+<\s*\/\s*script\s*/.test(value));
							}, 'Παρακαλώ συμπληρώστε ξανά');

							$('#form02').validate({
								rules : {
									st2y : {
										minlength : 1,
										sqlValidator : true,
										xssValidator : true,
										noSpace : true,
										required : true,
										min : 2000,
										max : 9999,
										digits : true
									},
									st2e : {
										minlength : 1,
										sqlValidator : true,
										xssValidator : true,
										noSpace : true,
										required : true,
										digits : true,
										min : 1,
										max : 2,
										range : [1, 2]
									}
								},
								highlight : function(element) {
									$(element).closest('.form-group').addClass('error text-danger');
								},
								success : function(element) {
									$(element).closest('.form-group').removeClass('error text-danger');
								}
							});
						});

					</script>
<<<<<<< HEAD

				<!--	<div class="panel-body">
						<form method="post" action="">
						<label>Αριθμός πελατών ανά μήνα:</label>
						<br>
						<input type="text" class="form-group" id="clientspermonth1" placeholder="Χρονιά" name="st1y">
						<input type="text" class="form-group" id="clientspermonth2" placeholder="Εξάμηνο" name="st1e">
						<input id="submit" type="submit" name="submit" class="btn btn-default" value="Αναζήτηση">
						<br>
						<br>
						<label>Αριθμός νέων πελάτων ανά μήνα</label>
						<br>
						<input type="text" class="form-group" id="newclientspermonth1" placeholder="Χρονιά" name="st2y">
						<input type="text" class="form-group" id="newclientspermonth2" placeholder="Εξάμηνο" name="st2e">
						<input id="submit" type="submit" name="submit1" class="btn btn-default" value="Αναζήτηση">
						<br>
						<br>
						<label>Αριθμός συνεδριών ανά μήνα</label>
						<br>
						<input type="text" class="form-group" id="sessionspermonth1" placeholder="Χρονιά" name="st3y">
						<input type="text" class="form-group" id="sessionspermonth2" placeholder="Εξάμηνο" name="st3e">
						<input id="submit" type="submit" name="submit2" class="btn btn-default" value="Αναζήτηση">
						<br>
						<br>
						<label>Σύγκριση αριθμού πελατών (σύνολο και Μέσος Όρος) με προηγούμενα έτη</label>
						<br>
						<input type="text" class="form-group" id="compareclients1" placeholder="Αρχικό έτος σύγκρισης" name="st4ye">
						<input type="text" class="form-group" id="compareclients1" placeholder="Χρονιά" name="st4y">
						<input type="text" class="form-group" id="compareclients2" placeholder="Εξάμηνο" name="st4e">
						<input id="submit" type="submit" name="submit3" class="btn btn-default" value="Αναζήτηση">
						<br>
						<br>
						<label>Κατανομή των νέων περιστατικών του ΚΕ.Ψ.Υ. ανά Σχολή</label>
						<br>
						<input type="text" class="form-group" id="distributionperschool1" placeholder="Χρονιά" name="st5y">
						<input id="submit" type="submit" name="submit4" class="btn btn-default" value="Αναζήτηση">
						<br>
						<br>
						<label>Παρουσιαζόμενα ζητήματα για νέα περιστατικά</label>
						<br>
						<input type="text" class="form-group" id="issuesfornewcases1" placeholder="Χρονιά" name="st6y">
						<input id="submit" type="submit" name="submit5" class="btn btn-default" value="Αναζήτηση">
						<br>
						<br>
						<label>Πηγές ενημέρωσης φοιτητών για τις υπηρεσίες</label>
						<br>
						<input type="text" class="form-group" id="sources1" placeholder="Χρονιά" name="st7y">
						<input id="submit" type="submit" name="submit6" class="btn btn-default" value="Αναζήτηση">
-->

					<div class="panel-body">
						<form name="myForm1" method="post" action="" onsubmit="return validateForm1()">
							<label>Αριθμός πελατών ανά μήνα:</label>
							<br>
							<input type="text" class="form-group" id="clientspermonth1" placeholder="Χρονιά" name="st1y">
							<input type="text" class="form-group" id="clientspermonth2" placeholder="Εξάμηνο" name="st1e">
							<input id="submit" type="submit" name="submit" class="btn btn-default" value="Αναζήτηση">
							<br>
							<br>
						</form>
						<form name="myForm2" method="post" action="" onsubmit="return validateForm2()">
							<label>Αριθμός νέων πελάτων ανά μήνα</label>
							<br>
							<input type="text" class="form-group" id="newclientspermonth1" placeholder="Χρονιά" name="st2y">
							<input type="text" class="form-group" id="newclientspermonth2" placeholder="Εξάμηνο" name="st2e">
							<input id="submit" type="submit" name="submit1" class="btn btn-default" value="Αναζήτηση">
							<br>
							<br>
						</form>
						<form name="myForm3" method="post" action="" onsubmit="return validateForm3()">
							<label>Αριθμός συνεδριών ανά μήνα</label>
							<br>
							<input type="text" class="form-group" id="sessionspermonth1" placeholder="Χρονιά" name="st3y">
							<input type="text" class="form-group" id="sessionspermonth2" placeholder="Εξάμηνο" name="st3e">
							<input id="submit" type="submit" name="submit2" class="btn btn-default" value="Αναζήτηση">
							<br>
							<br>
						</form>
						<form name="myForm4" method="post" action="" onsubmit="return validateForm4()">
							<label>Σύγκριση αριθμού πελατών (σύνολο και Μέσος Όρος) με προηγούμενα έτη</label>
							<br>
							<input type="text" class="form-group" id="compareclients1" placeholder="Αρχικό έτος σύγκρισης" name="st4ye">
							<input type="text" class="form-group" id="compareclients1" placeholder="Χρονιά" name="st4y">
							<input type="text" class="form-group" id="compareclients2" placeholder="Εξάμηνο" name="st4e">
							<input id="submit" type="submit" name="submit3" class="btn btn-default" value="Αναζήτηση">
							<br>
							<br>
						</form>
						<form name="myForm5" method="post" action="" onsubmit="return validateForm5()">
							<label>Κατανομή των νέων περιστατικών του ΚΕ.Ψ.Υ. ανά Σχολή</label>
							<br>
							<input type="text" class="form-group" id="distributionperschool1" placeholder="Χρονιά" name="st5y">
							<input id="submit" type="submit" name="submit4" class="btn btn-default" value="Αναζήτηση">
							<br>
							<br>
						</form>
						<form name="myForm6" method="post" action="" onsubmit="return validateForm6()">
							<label>Παρουσιαζόμενα ζητήματα για νέα περιστατικά</label>
							<br>
							<input type="text" class="form-group" id="issuesfornewcases1" placeholder="Χρονιά" name="st6y">
							<input id="submit" type="submit" name="submit5" class="btn btn-default" value="Αναζήτηση">
							<br>
							<br>
						</form>
						<form name="myForm7" method="post" action="" onsubmit="return validateForm7()">
							<label>Πηγές ενημέρωσης φοιτητών για τις υπηρεσίες</label>
							<br>
							<input type="text" class="form-group" id="sources1" placeholder="Χρονιά" name="st7y">
							<input id="submit" type="submit" name="submit6" class="btn btn-default" value="Αναζήτηση">

						</form>
					</div>
=======
>>>>>>> 19b074579f92633f7888e985e1dafe08f917d698
				</div>
				<script>
					$(document).ready(function() {
						jQuery.validator.addMethod("noSpace", function(value, element) {
							return value.indexOf(" ") < 0 && value != "";
						}, "Παρακαλώ σημπληρώστε ξανά χωρίς κενά");

						jQuery.validator.addMethod("sqlValidator", function(value, element) {
							return this.optional(element) || !(/[\s]*((delete)|(exec)|(drop\s*table)|(insert)|(shutdown)|(update)|(\bor\b))/.test(value));
						}, 'Παρακαλώ συμπληρώστε ξανά');

						jQuery.validator.addMethod("xssValidator", function(value, element) {
							return this.optional(element) || !(/\s*script\b[^>]*>[^<]+<\s*\/\s*script\s*/.test(value));
						}, 'Παρακαλώ συμπληρώστε ξανά');

						$('#form03').validate({
							rules : {
								st3y : {
									minlength : 1,
									sqlValidator : true,
									xssValidator : true,
									noSpace : true,
									required : true,
									min : 2000,
									max : 9999,
									digits : true
								},
								st3e : {
									minlength : 1,
									sqlValidator : true,
									xssValidator : true,
									noSpace : true,
									required : true,
									digits : true,
									min : 1,
									max : 2,
									range : [1, 2]
								}
							},
							highlight : function(element) {
								$(element).closest('.form-group').addClass('error text-danger');
							},
							success : function(element) {
								$(element).closest('.form-group').removeClass('error text-danger');
							}
						});
					});

				</script>
				<script>
					$(document).ready(function() {
						jQuery.validator.addMethod("noSpace", function(value, element) {
							return value.indexOf(" ") < 0 && value != "";
						}, "Παρακαλώ σημπληρώστε ξανά χωρίς κενά");

						jQuery.validator.addMethod("sqlValidator", function(value, element) {
							return this.optional(element) || !(/[\s]*((delete)|(exec)|(drop\s*table)|(insert)|(shutdown)|(update)|(\bor\b))/.test(value));
						}, 'Παρακαλώ συμπληρώστε ξανά');

						jQuery.validator.addMethod("xssValidator", function(value, element) {
							return this.optional(element) || !(/\s*script\b[^>]*>[^<]+<\s*\/\s*script\s*/.test(value));
						}, 'Παρακαλώ συμπληρώστε ξανά');

						$('#form04').validate({
							rules : {
								st4ye : {
									minlength : 1,
									sqlValidator : true,
									xssValidator : true,
									noSpace : true,
									required : true,
									min : 2000,
									max : 9999,
									digits : true
								},
								st4y : {
									minlength : 1,
									sqlValidator : true,
									xssValidator : true,
									noSpace : true,
									required : true,
									min: function () { return parseInt($("#st4ye").val())+1  },
									max : 9999,
									digits : true
									
								},
								st4e : {
									minlength : 1,
									sqlValidator : true,
									xssValidator : true,
									noSpace : true,
									required : true,
									digits : true,
									min : 1,
									max : 2,
									range : [1, 2]
								}
							},
							highlight : function(element) {
								$(element).closest('.form-group').addClass('error text-danger');
							},
							success : function(element) {
								$(element).closest('.form-group').removeClass('error text-danger');
							}
						});
					});

				</script>
				<script>
					$(document).ready(function() {
						jQuery.validator.addMethod("noSpace", function(value, element) {
							return value.indexOf(" ") < 0 && value != "";
						}, "Παρακαλώ σημπληρώστε ξανά χωρίς κενά");

						jQuery.validator.addMethod("sqlValidator", function(value, element) {
							return this.optional(element) || !(/[\s]*((delete)|(exec)|(drop\s*table)|(insert)|(shutdown)|(update)|(\bor\b))/.test(value));
						}, 'Παρακαλώ συμπληρώστε ξανά');

						jQuery.validator.addMethod("xssValidator", function(value, element) {
							return this.optional(element) || !(/\s*script\b[^>]*>[^<]+<\s*\/\s*script\s*/.test(value));
						}, 'Παρακαλώ συμπληρώστε ξανά');

						$('#form05').validate({
							rules : {
								st5y : {
									minlength : 1,
									sqlValidator : true,
									xssValidator : true,
									noSpace : true,
									required : true,
									min : 2000,
									max : 9999,
									digits : true
								}
							},
							highlight : function(element) {
								$(element).closest('.form-group').addClass('error text-danger');
							},
							success : function(element) {
								$(element).closest('.form-group').removeClass('error text-danger');
							}
						});
					});

				</script>
				<script>
					$(document).ready(function() {
						jQuery.validator.addMethod("noSpace", function(value, element) {
							return value.indexOf(" ") < 0 && value != "";
						}, "Παρακαλώ σημπληρώστε ξανά χωρίς κενά");

						jQuery.validator.addMethod("sqlValidator", function(value, element) {
							return this.optional(element) || !(/[\s]*((delete)|(exec)|(drop\s*table)|(insert)|(shutdown)|(update)|(\bor\b))/.test(value));
						}, 'Παρακαλώ συμπληρώστε ξανά');

						jQuery.validator.addMethod("xssValidator", function(value, element) {
							return this.optional(element) || !(/\s*script\b[^>]*>[^<]+<\s*\/\s*script\s*/.test(value));
						}, 'Παρακαλώ συμπληρώστε ξανά');

						$('#form06').validate({
							rules : {
								st6y : {
									minlength : 1,
									sqlValidator : true,
									xssValidator : true,
									noSpace : true,
									required : true,
									min : 2000,
									max : 9999,
									digits : true
								}
							},
							highlight : function(element) {
								$(element).closest('.form-group').addClass('error text-danger');
							},
							success : function(element) {
								$(element).closest('.form-group').removeClass('error text-danger');
							}
						});
					});

				</script>
				<script>
					$(document).ready(function() {
						jQuery.validator.addMethod("noSpace", function(value, element) {
							return value.indexOf(" ") < 0 && value != "";
						}, "Παρακαλώ σημπληρώστε ξανά χωρίς κενά");

						jQuery.validator.addMethod("sqlValidator", function(value, element) {
							return this.optional(element) || !(/[\s]*((delete)|(exec)|(drop\s*table)|(insert)|(shutdown)|(update)|(\bor\b))/.test(value));
						}, 'Παρακαλώ συμπληρώστε ξανά');

						jQuery.validator.addMethod("xssValidator", function(value, element) {
							return this.optional(element) || !(/\s*script\b[^>]*>[^<]+<\s*\/\s*script\s*/.test(value));
						}, 'Παρακαλώ συμπληρώστε ξανά');

						$('#form07').validate({
							rules : {
								st7y : {
									minlength : 1,
									sqlValidator : true,
									xssValidator : true,
									noSpace : true,
									required : true,
									min : 2000,
									max : 9999,
									digits : true
								}
							},
							highlight : function(element) {
								$(element).closest('.form-group').addClass('error text-danger');
							},
							success : function(element) {
								$(element).closest('.form-group').removeClass('error text-danger');
							}
						});
					});

				</script>
			</div>

			<!-- /#wrapper -->

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
			<script src="js/jquery.validate.js"></script>
			<script src="bootstrap/vendor/jquery/jquery.validate.js"></script>

	</body>

</html>
<?php

if(isset($_POST['submit'])){
	header('Location: results_clientspermonth.php?y='.$_POST['st1y'].'&e='.$_POST['st1e']);
}
if(isset($_POST['submit1'])){
	header('Location: results_newclientspermonth.php?y='.$_POST['st2y'].'&e='.$_POST['st2e']);
}
if(isset($_POST['submit2'])){
	header('Location: results_sessionpermonth.php?y='.$_POST['st3y'].'&e='.$_POST['st3e']);
}
if(isset($_POST['submit3'])){
	header('Location: results_compareclients.php?ye='.$_POST['st4ye'].'&y='.$_POST['st4y'].'&e='.$_POST['st4e']);
}
if(isset($_POST['submit4'])){
	header('Location: results_distributionperschool.php?y='.$_POST['st5y']);
}
if(isset($_POST['submit5'])){
	header('Location: results_issuesfornewcases?y='.$_POST['st6y']);
}
if(isset($_POST['submit6'])){
	header('Location: results_sources.php?y='.$_POST['st7y']);
}
if (isset($_POST['submit'])) {
	header('Location: results_clientspermonth.php?y=' . $_POST['st1y'] . '&e=' . $_POST['st1e']);
}
if (isset($_POST['submit1'])) {
	header('Location: results_newclientspermonth.php?y=' . $_POST['st2y'] . '&e=' . $_POST['st2e']);
}
if (isset($_POST['submit2'])) {
	header('Location: results_sessionpermonth.php?y=' . $_POST['st3y'] . '&e=' . $_POST['st3e']);
}
if (isset($_POST['submit3'])) {
	header('Location: results_compareclients.php?ye=' . $_POST['st4ye'] . '&y=' . $_POST['st4y'] . '&e=' . $_POST['st4e']);
}
if (isset($_POST['submit4'])) {
	header('Location: results_distributionperschool.php?y=' . $_POST['st5y']);
}
if (isset($_POST['submit5'])) {
	header('Location: results_issuesfornewcases?y=' . $_POST['st6y']);
}
if (isset($_POST['submit6'])) {
	header('Location: results_sources.php?y=' . $_POST['st7y']);

}
if (isset($_POST['submit'])) {
	header('Location: results_clientspermonth.php?y=' . $_POST['st1y'] . '&e=' . $_POST['st1e']);
}
if (isset($_POST['submit1'])) {
	header('Location: results_newclientspermonth.php?y=' . $_POST['st2y'] . '&e=' . $_POST['st2e']);
}
if (isset($_POST['submit2'])) {
	header('Location: results_sessionpermonth.php?y=' . $_POST['st3y'] . '&e=' . $_POST['st3e']);
}
if (isset($_POST['submit3'])) {
	header('Location: results_compareclients.php?ye=' . $_POST['st4ye'] . '&y=' . $_POST['st4y'] . '&e=' . $_POST['st4e']);
}
if (isset($_POST['submit4'])) {
	header('Location: results_distributionperschool.php?y=' . $_POST['st5y']);
}
if (isset($_POST['submit5'])) {
	header('Location: results_issuesfornewcases?y=' . $_POST['st6y']);
}
if (isset($_POST['submit6'])) {
	header('Location: results_sources.php?y=' . $_POST['st7y']);

}
if (isset($_POST['submit'])) {
	header('Location: results_clientspermonth.php?y=' . $_POST['st1y'] . '&e=' . $_POST['st1e']);
}
if (isset($_POST['submit1'])) {
	header('Location: results_newclientspermonth.php?y=' . $_POST['st2y'] . '&e=' . $_POST['st2e']);
}
if (isset($_POST['submit2'])) {
	header('Location: results_sessionpermonth.php?y=' . $_POST['st3y'] . '&e=' . $_POST['st3e']);
}
if (isset($_POST['submit3'])) {
	header('Location: results_compareclients.php?ye=' . $_POST['st4ye'] . '&y=' . $_POST['st4y'] . '&e=' . $_POST['st4e']);
}
if (isset($_POST['submit4'])) {
	header('Location: results_distributionperschool.php?y=' . $_POST['st5y']);
}
if (isset($_POST['submit5'])) {
	header('Location: results_issuesfornewcases?y=' . $_POST['st6y']);
}
if (isset($_POST['submit6'])) {
	header('Location: results_sources.php?y=' . $_POST['st7y']);

}
?>