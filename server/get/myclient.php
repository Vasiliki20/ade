<?php
include "get.php";
if(isset($_GET['patientID'])){
	try{
	$stmt = $db->prepare('SELECT * FROM patient WHERE patientID=:patientID');
	$stmt->bindParam(':patientID',$_GET['patientID']);
	$stmt->execute();
	$response['general']=$stmt->fetch(PDO::FETCH_ASSOC);
	
	$stmt = $db->prepare('SELECT * FROM Medlog WHERE patientID=:patientID');
	$stmt->bindParam(':patientID',$_GET['patientID']);
	$stmt->execute();
	$response['medlog']=$stmt->fetch(PDO::FETCH_ASSOC);
	
	$stmt = $db->prepare('SELECT * FROM patientadditionaldata WHERE patientID=:patientID');
	$stmt->bindParam(':patientID',$_GET['patientID']);
	$stmt->execute();
	$response['questionaire']=$stmt->fetch(PDO::FETCH_ASSOC);
	
	$stmt = $db->prepare('SELECT * FROM patienttimeline WHERE patientID=:patientID');
	$stmt->bindParam(':patientID',$_GET['patientID']);
	$stmt->execute();
	$response['timeline']=$stmt->fetch(PDO::FETCH_ASSOC);
	
	$stmt = $db->prepare('SELECT * FROM patientrelationships WHERE patientID=:patientID');
	$stmt->bindParam(':patientID',$_GET['patientID']);
	$stmt->execute();
	$response['relations']=$stmt->fetch(PDO::FETCH_ASSOC);
	
	$stmt = $db->prepare('SELECT * FROM patientmedication WHERE patientID=:patientID');
	$stmt->bindParam(':patientID',$_GET['patientID']);
	$stmt->execute();
	$response['medication']=$stmt->fetch(PDO::FETCH_ASSOC);
	
	$stmt = $db->prepare('SELECT * FROM ComLog WHERE patientID=:patientID');
	$stmt->bindParam(':patientID',$_GET['patientID']);
	$stmt->execute();
	$response['communications']=$stmt->fetch(PDO::FETCH_ASSOC);
	}catch(PDOException $e){
		$response['success']=0; $response['sqlerror']=$e->getMessage(); echo json_encode($response); exit();
	}	
	$response['success']=1; echo json_encode($response);	
}else{
	$response['success']=0; echo json_encode($response);  
}
?>