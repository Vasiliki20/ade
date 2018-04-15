<?php
include "get.php";
if(isset($_GET['psychID'])){
	try{
	$stmt = $db->prepare('SELECT patientID,start,appointmentID FROM Appointment WHERE psychologistID=:psychID');
	$stmt->bindParam(':psychID',$_GET['psychID']);
	$stmt->execute();
	$result=array();
	$result=$stmt->fetchAll(\PDO::FETCH_ASSOC);//(PDO::FETCH_ASSOC);
	}catch(PDOException $e){
		$response['success']=0; $response['sqlerror']=$e->getMessage(); echo json_encode($response); exit();
	}
	$j=0;
	$result2=array();
	foreach($result as $i){
	try{
	$stmt = $db->prepare('SELECT firstname,lastname FROM patient WHERE patientID=:patientID');
	$stmt->bindParam(':patientID',$result[$j]['patientID']);
	$stmt->execute();
	$result2[$j]=$stmt->fetch(PDO::FETCH_ASSOC);
	}catch(PDOException $e){
		$response['success']=0; $response['sqlerror']=$e->getMessage(); echo json_encode($response); exit();
	}
	$j++;
	}
	$response['success']=1; $response['j']=$j; $response['result']=$result; $response['result1']=$result2; echo json_encode($response);	
}else{
	$response['success']=0; echo json_encode($response);  
}
?>