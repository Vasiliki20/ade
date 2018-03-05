<?php session_start();?>
<!doctype html>
<html lang=''>
	<head>
		<meta charset='utf-8'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles.css">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="script.js"></script>
		<title>Κέντρο Ψυχικής Υγείας</title>
	</head>
	<body>

		<div id='cssmenu'>
			<ul>
				<li class='active'>
					<a href="http://127.0.0.1:8020/ADE/A.D.E/narrow/fullcalendar-3.5.1/demos/agenda-views.html"><span>Calendar</span></a>
				</li>
				
				<li class='active has-sub'>
					<a href='#'><span>Open</span></a>
					<ul>
						<li class='has-sub'>
							<a href='tasklist.html'><span>Task List</span></a>
						</li>
						<li class='has-sub'>
							<a href='myclients.html'><span>My Clients</span></a>
						</li>
						<li class='has-sub'>
							<a href='#waitinglist'><span>Waiting List</span></a>
						</li>
						<li class='has-sub'>
							<a href='#approveincomingdata'><span>Approve Incoming Data</span></a>
						</li>
						<li class='has-sub'>
							<a href='#search'><span>Search</span></a>
						</li>
						<li class='has-sub'>
							<a href='#notes'><span>Notes</span></a>
						</li>
						<li class='has-sub'>
							<a href='#billing'><span>Billing</span></a>
						</li>
					</ul>
				</li>
				<li class='active'>
					<a href='reports.html'><span>Reports</span></a>
				</li>
				<li class='active'>
					<a href='help.html'><span>Help</span></a>
				</li>
				<li class='active'>
					<a href='loginps.html'><span>Login</span></a>
				</li>
				<li class='active'>
					<a href='signupps.html'><span>Sign Up</span></a>
				</li>
			</ul>
		</div>

		<br>
		<br>
		<form action="#">
			Ταυτότητα Ασθενή:
			<input type="search" name="studentid">
			<br>
			<br>
			Όνομα:
			<input type="search" name="studentname">
			<br>
			<br>
			Επίθετο:
			<input type="search" name="studentsurname">
			<br>
			<br>
			<input id="submit" name="submit" type="submit">
		</form>

	</body>
<html>
	
<?php

if (isset($_POST['submit'])){
$request = new HttpRequest();
$request->setUrl('http://localhost/mhcserver/post/register.php');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'cache-control' => 'no-cache',
  'content-type' => 'application/x-www-form-urlencoded',
  'authorization' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MTg3LCJleHAiOjE1MTgyNzI4NzV9.J90clNUiOoVLnqc9ND_mivBdf7mtxtL6BoE3yEYpQ2c'
));

$request->setContentType('application/x-www-form-urlencoded');
$request->setPostFields(array(
  'id' => $_POST['studentid'],
  'name' => $_POST['studentname'],
  'surname' => $_POST['studentsurname']
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}

}

?>