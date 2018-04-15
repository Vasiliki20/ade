<?php 
include_once('../index.php');
include_once('../mySqlConnect.php');


function makenull(){
	foreach($_GET as $key => $value){
		if(empty($value)){
			$_GET[$key]=null;
		}
	}
}

if($_SERVER['REQUEST_METHOD'] == "GET"){
 foreach($_GET as $key => $value){
	if (preg_match('/[\0\'\"\b\n\r\t\Z\\\%]/', $value))
	{
		//echo "\nNot acceptable!";
		//http_response_code(406);
		$response['sqlinjection']=1;
		echo json_encode($response);
		exit();
	}else{
		$response['sqlinjection']=0;
	}
  trim($value);
  stripslashes($value);
  htmlspecialchars($value);
 }
 //Get data

 
}
 ?>