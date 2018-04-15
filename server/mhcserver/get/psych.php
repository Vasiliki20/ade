<?php
include "get.php";

	try{
	$stmt = $db->prepare('SELECT psychologistID,firstname,lastname FROM psychologist');
	$stmt->execute();
	$result=$stmt->fetchAll(\PDO::FETCH_ASSOC);
	}catch(PDOException $e){
		$response['success']=0; $response['sqlerror']=$e->getMessage(); echo json_encode($response); exit();
	}
	try{
	$stmt = $db->prepare('SELECT patientID,datesubmited,firstname,lastname FROM patient WHERE psychologistID IS NULL');
	$stmt->execute();
	$result1=$stmt->fetchAll(\PDO::FETCH_ASSOC);
	}catch(PDOException $e){
		$response['success']=0; $response['sqlerror']=$e->getMessage(); echo json_encode($response); exit();
	}
	$response['success']=1; $response['result']=$result; $response['result1']=$result1; echo json_encode($response);	
?>