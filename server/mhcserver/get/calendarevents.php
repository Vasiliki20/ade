<?php
include "post.php";
if(isset($_POST['start']) && isset($_POST['end'])){
	try{
	$stmt = $db->prepare('SELECT * FROM Appointment WHERE NOT ((end <= :start) OR (start >= :end))');
	$stmt->bindParam(':start', $_POST['start']);
	$stmt->bindParam(':end', $_POST['end']);
	$stmt->execute();
	$result = $stmt->fetchAll();	
	}catch(PDOException $e){
		$response['success']=0; $response['sqlerror']=$e->getMessage(); echo json_encode($response); exit();
	}	
	$response['success']=1; $response['result']=$result; echo json_encode($response);	
}else{
	$response['success']=0; echo json_encode($response);  
}
?>