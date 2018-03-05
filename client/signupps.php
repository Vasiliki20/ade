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
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
		}
		* {
			box-sizing: border-box
		}

		/* Full-width input fields */
		input[type=text], input[type=password] {
			width: 100%;
			padding: 15px;
			margin: 5px 0 22px 0;
			display: inline-block;
			border: none;
			background: #f1f1f1;
		}

		input[type=text]:focus, input[type=password]:focus {
			background-color: #ddd;
			outline: none;
		}

		hr {
			border: 1px solid #f1f1f1;
			margin-bottom: 25px;
		}

		/* Set a style for all buttons */
		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
			opacity: 0.9;
		}

		button:hover {
			opacity: 1;
		}

		/* Extra styles for the cancel button */
		.cancelbtn {
			padding: 14px 20px;
			background-color: #f44336;
		}

		/* Float cancel and signup buttons and add an equal width */
		.cancelbtn, .signupbtn {
			float: left;
			width: 50%;
		}

		/* Add padding to container elements */
		.container {
			padding: 16px;
		}

		/* Clear floats */
		.clearfix::after {
			content: "";
			clear: both;
			display: table;
		}

		/* Change styles for cancel button and signup button on extra small screens */
		@media screen and (max-width: 300px) {
			.cancelbtn, .signupbtn {
				width: 100%;
			}
		}
	</style>

	<body>

		<div id='cssmenu'>
			<ul>
				<li class='active'>
					<a href='http://127.0.0.1:8020/ADE/A.D.E/narrow/fullcalendar-3.5.1/demos/agenda-views.html'><span>Calendar</span></a>
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
							<a href='search.html'><span>Search</span></a>
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
		<form action="/action_page.php" style="border:1px solid #ccc">
			<div class="container">
				<h1>Sign Up</h1>
				<p>
					Please fill in this form to create an account.
				</p>
				<hr>

				<label for="email"><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" required>

				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>

				<label for="psw-repeat"><b>Repeat Password</b></label>
				<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
				
				<label>
					<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
					Remember me </label>

				<div class="clearfix">
					<button type="button" class="cancelbtn">
						Cancel
					</button>
					<button type="submit" class="signupbtn">
						Sign Up
					</button>
				</div>
			</div>
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
  'email' => $_POST['email'],
  'password' => $_POST['psw']
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}

}

?>