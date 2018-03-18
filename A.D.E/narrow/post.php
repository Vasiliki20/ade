<?php 
include_once('../index.php');
include_once('../mySqlConnect.php');



if($_SERVER['REQUEST_METHOD'] == "POST"){
 foreach($_POST as $key => $value){
	if (preg_match('/[\0\'\"\b\n\r\t\Z\\\%\_]/', $value))
	{
		echo "\nNot acceptable!";
		http_response_code(406);
		exit();
	}
  trim($value);
  stripslashes($value);
  htmlspecialchars($value);
 }
 //Get data

 
}
 /*
 $json = array("status" => 1, "msg" => "Done User added!");
 }else{
 $json = array("status" => 0, "msg" => "Error adding user!");
 }
}else{
 $json = array("status" => 0, "msg" => "Request method not accepted");
}

/* Output header */
/*
 header('Content-type: application/json');
 echo json_encode($json);*/
 ?>