<?php
include "get.php";
if(isset($_GET['psychID'])){
	try{
	$stmt = $db->prepare('SELECT patientID,firstname,lastname FROM patient WHERE psychologistID=:psychID');
	$stmt->bindParam(':psychID',$_GET['psychID']);
	$stmt->execute();
	$result=array();
	$result=$stmt->fetchAll(\PDO::FETCH_ASSOC);//(PDO::FETCH_ASSOC);
	}catch(PDOException $e){
		$response['success']=0; $response['sqlerror']=$e->getMessage(); echo json_encode($response); exit();
	}	
	$response['success']=1; $response['result']=$result; echo json_encode($response);	
}else{
	$response['success']=0; echo json_encode($response);  
}
?>