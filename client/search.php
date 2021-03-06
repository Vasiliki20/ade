<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>Κέντρο Ψυχικής Υγείας</title>
		<link href="zontal-admin/assets/css/bootstrap.css" rel="stylesheet" />
		<link href="zontal-admin/assets/css/font-awesome.css" rel="stylesheet" />
		<link href="zontal-admin/assets/css/style.css" rel="stylesheet" />

	</head>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		th, td {
			padding: 5px;
			text-align: left;
		}​
		.dropbtn {
			background-color: white;
			color: black;
			padding: 16px;
			font-size: 16px;
			border: none;
			cursor: pointer;
		}

		.dropbtn:hover, .dropbtn:focus {
			background-color: white;
		}

		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: white;
			min-width: 160px;
			overflow: auto;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown a:hover {
			background-color: #ddd
		}

		.show {
			display: block;
		}
		.down {
			transform: rotate(45deg);
			-webkit-transform: rotate(45deg);
		}

	</style>
	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<strong>Email: </strong>mentalhealth@ucy.ac.cy
						&nbsp;&nbsp;
						<strong>Support: </strong>(+357) 22892136
					</div>
				</div>
		</header>

		<div class="navbar navbar-inverse set-radius-zero">
			<div class="container">
				<div class="navbar-header" align="left" style="padding-bottom: 5px;">
					<a class="navbar-brand" href="#"> <img src="zontal-admin/assets/img/ucy_logo.jpg" /> </a>
				</div>

				<div class="col-sm-9" align="right">
					<div class="user-settings-wrapper">
						<ul class="nav">

							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"> <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span> </a>
								<div class="dropdown-menu dropdown-settings">
									<div class="media">
										<a class="media-left" href="#"> <img src="assets/img/64-64.jpg" alt="" class="img-rounded" /> </a>
										<div class="media-body">
											<h4 class="media-heading">Μαρία Χρίστου </h4>
											<h5>Ψυχολόγος</h5>

										</div>
									</div>
									<hr />
									<a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="psychlogin.html" class="btn btn-danger btn-sm">Logout</a>

								</div>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- LOGO HEADER END-->
		<section class="menu-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="navbar-collapse collapse ">
							<ul id="menu-top" class="nav navbar-nav navbar-right">
								<li>
									<a class="menu-top-active" href="calendar.html">Calendar</a>
								</li>
								<li>
									<a data-toggle="dropdown" class="dropdown-toggle">Open</a>
									<ul class="dropdown-menu">
										<li>
											<a href="tasklist.html" style="color: black">Task List</a>
										</li>
										<li>
											<a href="myclients.html"style="color: black">My Clients</a>
										</li>
										<li>
											<a href="#" style="color: black">Approve Incoming Data</a>
										</li>
										<li>
											<a href="#" style="color: black">Notes</a>
										</li>
										<!--	<li>
										<a href="#" style="color: black">Billing</a>
										</li>-->
										<li>
											<a href="waitinglist.html" style="color: black">Waiting List</a>
										</li>
										<li>
											<a href="search.html" style="color: black">Search</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="reports.html">Reports</a>
								</li>
								<li>
									<a href="help.html">Help</a>
								</li>
								<li>
									<a href="psychlogin.html">Logout</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- MENU SECTION END-->
		<script>
			/* When the user clicks on the button,
			 toggle between hiding and showing the dropdown content */
			function myFunction() {
				document.getElementById("myDropdown").classList.toggle("show");
			}

			// Close the dropdown if the user clicks outside of it
			window.onclick = function(event) {
				if (!event.target.matches('.dropbtn')) {
					var dropdowns = document.getElementsByClassName("dropdown-content");
					var i;
					for ( i = 0; i < dropdowns.length; i++) {
						var openDropdown = dropdowns[i];
						if (openDropdown.classList.contains('show')) {
							openDropdown.classList.remove('show');
						}
					}
				}
			}
		</script>
		<div class="content-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h4 class="page-head-line">Search Client</h4>
					</div>
					<div class="col-md-12">

						<form action="#">
							<label>Ταυτότητα Ασθενή:</label>
							<input type="search" name="student id">
							<br>
							<br>
							<label>Όνομα:</label>
							<input type="search" name="student name">
							<br>
							<br>
							<label>Επίθετο:</label>
							<input type="search" name="student surname">
							<br>
							<br>
							<input id="submit" name="submit" type="submit">
						</form>
					</div>
				</div>
			</div>
		</div>

		<script src="zontal-admin/assets/js/jquery-1.11.1.js"></script>
		<script src="zontal-admin/assets/js/bootstrap.js"></script>
	</body>
</html>
<?php
if(isset($_POST['submit'])) {
$request=new HttpRequest();
$request->setUrl('http://localhost/mhcserver/post/register.php');
$request->setMethod(HTTP_METH_POST);
$request->setHeaders(array('cache-control'=>'no-cache','content-type'=>'application/x-www-form-urlencoded','authorization'=>'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MTg3LCJleHAiOjE1MTgyNzI4NzV9.J90clNUiOoVLnqc9ND_mivBdf7mtxtL6BoE3yEYpQ2c'));
$request->setContentType('application/x-www-form-urlencoded');
$request->setPostFields(array('id'=>$_POST['studentid'],'name'=>$_POST['studentname'],'surname'=>$_POST['studentsurname']));
try {
$response=$request->send();
echo $response->getBody();
} catch (HttpException $ex) {
echo $ex;
}
}
?>