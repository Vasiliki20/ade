<?php
require 'auth.php';

$userid = authenticate();
$response=array();
if ($userid != false) {
	$response['status']=1;
  //  echo "1Hello Client! You are logged in!";
}
if ($userid == false || isset($_POST['usr'])){ exit(); }
?>