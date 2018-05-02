<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Κέντρο Ψυχικής Υγείας</title>

		<!-- CSS -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
		<link rel="stylesheet" href="bootzard-bootstrap-wizard-template/assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootzard-bootstrap-wizard-template/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="bootzard-bootstrap-wizard-template/assets/css/form-elements.css">
		<link rel="stylesheet" href="bootzard-bootstrap-wizard-template/assets/css/style.css">

	</head>

	<style>
		body {
			background-image: url("1.jpg");
		}
	</style>
	<body>

		<!-- Top content -->
		<div class="top-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
						<form role="form" action="" method="post" class="f1">
							<img src="logo_el.png">
							<br>
							<br>
							<br>
							<h3><strong>Ξεχασατε τον κωδικο σας;</strong></h3>
							<p>
								Συμπληρώστε τα στοιχεία σας και ελέγξετε στην ηλεκτρονική σας διεύθυνση για επιβεβέωση
							</p>

							<fieldset>
								<div class="form-group">
									<label class="sr-only" for="id">Ταυτότητα</label>
									<input type="number" name="id" placeholder="Ταυτότητα" class="form-control" id="id">
								</div>
								<div class="form-group">
									<label class="sr-only" for="password">Νέος κωδικός</label>
									<input type="text" name="password" placeholder="Νέος κωδικός" class="form-control" id="password">
								</div>
								<div class="form-group">
									<label class="sr-only" for="confirmpassword">Επιβεβέωση νέου κωδικού</label>
									<input type="text" name="confirmpassword" placeholder="Επιβεβέωση νέου κωδικού" class="form-control" id="confirmpassword">
								</div>
								<div class="f1-buttons">
									<button type="submit" name="submit" class="btn btn-submit">
										Submit
									</button>
								</div>
							</fieldset>

						</form>
					</div>
				</div>

			</div>
		</div>

		<!-- Javascript -->
		<script src="bootzard-bootstrap-wizard-template/assets/js/jquery-1.11.1.min.js"></script>
		<script src="bootzard-bootstrap-wizard-template/assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="bootzard-bootstrap-wizard-template/assets/js/jquery.backstretch.min.js"></script>
		<script src="bootzard-bootstrap-wizard-template/assets/js/retina-1.1.0.min.js"></script>
		<script src="bootzard-bootstrap-wizard-template/assets/js/scripts.js"></script>

		<!--[if lt IE 10]>
		<script src="assets/js/placeholder.js"></script>
		<![endif]-->
	</body>
</html>


<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/psylogin.php";
$method='POST';
if(isset($_POST['submit'])){
$postfields=http_build_query(array(
'id' => $_POST['id'],
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
$response = request($url, $method, $postfields, $tok);
}
if(strnatcmp($response['login'],true)==0){
	session_start();
	$_SESSION['id']=$_POST['id'];
	echo $_SESSION['id'];
	if(strnatcmp($response['role'],"therapist")==0){
	header('Location: psindex.php');
	}
	if(strnatcmp($response['role'],"supervisor")==0){
	header('Location: psindex.php');
	}
	if(strnatcmp($response['role'],"frontdesk")==0){
	header('Location: psindex_frontdesk.php');
	}
	if(strnatcmp($response['role'],"admin")==0){
	header('Location: psindex_admin.php');
	}
	

}
}
?>