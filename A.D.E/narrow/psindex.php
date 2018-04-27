<?php session_start(); 
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/get/myappointments.php?psychID=".$_SESSION['id'];
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
		//print "<h5>".$tok."</h5>";

?>
<script>
	document.cookie='token=<?= $tok ?>';</script>
<?php
//$GLOBALS['curtoken']=giveToken();
//print "<h5>".$GLOBALS['curtoken']."</h5>";
$response = request($url, $method, $postfields, $tok);
}

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

		<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>

		<!-- daypilot libraries -->
		<script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>
		<!-- Bootstrap Core CSS -->
		<link href="bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- MetisMenu CSS -->
		<link href="bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

		<!-- Morris Charts CSS -->
		<link href="bootstrap/vendor/morrisjs/morris.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link type="text/css" rel="stylesheet" href="media/layout.css" />

		<link type="text/css" rel="stylesheet" href="themes/calendar_g.css" />
		<link type="text/css" rel="stylesheet" href="themes/calendar_green.css" />
		<link type="text/css" rel="stylesheet" href="themes/calendar_traditional.css" />
		<link type="text/css" rel="stylesheet" href="themes/calendar_transparent.css" />
		<link type="text/css" rel="stylesheet" href="themes/calendar_white.css" />

		<!-- helper libraries -->

	</head>

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
				<div id="page-header">
					<div class="bg-help">
						<div class="inBox">
							<h1 id="logo"><a href='https://code.daypilot.org/17910/html5-event-calendar-open-source'>HTML5/JavaScript Event Calendar</a></h1>
							<p id="claim">
								<a href="https://javascript.daypilot.org/">DayPilot for JavaScript</a> - AJAX Calendar/Scheduling Widgets for JavaScript/HTML5/jQuery
							</p>
							<hr class="hidden" />
						</div>
					</div>
				</div>
				<div class="shadow"></div>
				<div class="hideSkipLink"></div>
				<div class="main">

					<div style="float:left; width: 160px;">
						<div id="nav"></div>
					</div>
					<div style="margin-left: 160px;">

						<div class="space">
							Theme:
							<select id="theme">
								<option value="calendar_default">Default</option>
								<option value="calendar_white">White</option>
								<option value="calendar_g">Google-Like</option>
								<option value="calendar_green">Green</option>
								<option value="calendar_traditional">Traditional</option>
								<option value="calendar_transparent">Transparent</option>
							</select>
						</div>

						<div id="dp"></div>
					</div>

					<script type="text/javascript">

						var nav = new DayPilot.Navigator("nav");
nav.showMonths = 3;
nav.skipMonths = 3;
nav.selectMode = "week";
nav.onTimeRangeSelected = function(args) {
dp.startDate = args.day;
dp.update();
loadEvents();
};
nav.init();

var dp = new DayPilot.Calendar("dp");
dp.viewType = "Week";
dp.init();

dp.onEventMoved = function (args) {
$.post("moveappo.php",
{
id: args.e.id(),
newStart: args.newStart.toString(),
newEnd: args.newEnd.toString()
},
function() {
console.log("Moved.");
});
};

dp.onEventResized = function (args) {
$.post("moveappo.php",
{
id: args.e.id(),
newStart: args.newStart.toString(),
newEnd: args.newEnd.toString()
},
function() {
console.log("Moved.");
});
};

// event creating
dp.onTimeRangeSelected = function (args) {
var name = prompt("New event name:", "Event");
dp.clearSelection();
if (!name) return;
var start=args.start;
var end=args.end;
var id=DayPilot.guid();
var modal = new DayPilot.Modal({
onClosed: function(args) {
if (args.result) { loadEvents(); }
}
});

modal.showUrl("psappointment.php?start=" + args.start +"&end="+ args.end+"&name="+ name +"&id="+id);
};

dp.eventDeleteHandling = "Update";
dp.onEventDelete = function(args) {
if (!confirm("Do you really want to delete this event?")) {
args.preventDefault();
}
$.post("appodelete.php",
{
id:args.e.id()
},
function() {
console.log("Deleted.");
});
};

dp.onEventClick = function(args) {
alert("clicked: " + args.e.id());
};
loadEvents();

function loadEvents() {
var start = nav.visibleStart();
var end = nav.visibleEnd();
$.post("getevents.php",
{
start: start.toString(),
end: end.toString(),
psychID:<?=json_encode($_SESSION['id']) ?>
	},
	function(data) {
		console.log(data);
		dp.events.list = data;
		dp.update();
	});
	}

					</script>

					<script type="text/javascript">
						$(document).ready(function() {
							$("#theme").change(function(e) {
								dp.theme = this.value;
								dp.update();
							});
						});
					</script>

				</div>
				<div class="clear"></div>
			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- /#wrapper -->

	</body>
</html>

