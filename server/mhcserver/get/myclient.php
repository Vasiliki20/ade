<?php
include "get.php";
if(isset($_GET['patientID'])){
	try{
	$stmt = $db->prepare('SELECT appointmentID FROM Appointment WHERE patientID=:patientID');
	$stmt->bindParam(':patientID',$_GET['patientID']);
	$stmt->execute();
	$appointment=array();
	$appointment=$stmt->fetchAll(PDO::FETCH_ASSOC);
	//$response['appointment']=$appointment;
	//$k="82";
	//$i=0;
	$j=0;
	$response['casenotes']=array();
	for($i=0;$i<count($appointment);$i++){
		$stmt = $db->prepare('SELECT * FROM CaseNote WHERE appointmentID=:appointmentID');
		$stmt->bindParam(':appointmentID',$appointment[$i]['appointmentID']);
		$stmt->execute();
		$r=$stmt->fetch(PDO::FETCH_ASSOC);
		if($r!=false){
			$response['casenotes'][$j]=$r;
			$j++;
		}
	}
	$stmt = $db->prepare('SELECT * FROM patient WHERE patientID=:patientID');
	$stmt->bindParam(':patientID',$_GET['patientID']);
	$stmt->execute();
	$response['patient']=$stmt->fetch(PDO::FETCH_ASSOC);
	
	$stmt = $db->prepare('SELECT * FROM Medlog WHERE patientID=:patientID');
	$stmt->bindParam(':patientID',$_GET['patientID']);
	$stmt->execute();
	$response['medlog']=$stmt->fetch(PDO::FETCH_ASSOC);
	
	$stmt = $db->prepare('SELECT * FROM patientadditionaldata WHERE patientID=:patientID');
	$stmt->bindParam(':patientID',$_GET['patientID']);
	$stmt->execute();
	$response['questionaire']=$stmt->fetchAll(PDO::FETCH_ASSOC);
	
	$stmt = $db->prepare('SELECT * FROM patienttimeline WHERE patientID=:patientID');
	$stmt->bindParam(':patientID',$_GET['patientID']);
	$stmt->execute();
	$response['timeline']=$stmt->fetchAll(PDO::FETCH_ASSOC);
	
	$stmt = $db->prepare('SELECT * FROM patientrelationships WHERE patientID=:patientID');
	$stmt->bindParam(':patientID',$_GET['patientID']);
	$stmt->execute();
	$response['relations']=$stmt->fetchAll(PDO::FETCH_ASSOC);
	
	$stmt = $db->prepare('SELECT * FROM patientmedication WHERE patientID=:patientID');
	$stmt->bindParam(':patientID',$_GET['patientID']);
	$stmt->execute();
	$response['medication']=$stmt->fetchAll(PDO::FETCH_ASSOC);
	
	$stmt = $db->prepare('SELECT * FROM ComLog WHERE patientID=:patientID');
	$stmt->bindParam(':patientID',$_GET['patientID']);
	$stmt->execute();
	$response['communications']=$stmt->fetchAll(PDO::FETCH_ASSOC);
	}catch(PDOException $e){
		$response['success']=0; $response['sqlerror']=$e->getMessage(); echo json_encode($response); exit();
	}	
	$response['success']=1; echo json_encode($response);	
}else{
	$response['success']=0; echo json_encode($response);  
}
?>