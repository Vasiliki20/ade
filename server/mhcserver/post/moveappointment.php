<?php
 include('post.php');
 if(isset($_POST['start']) && isset($_POST['end']) && isset($_POST['id'])){
	makenull();	
		try{ 
			$stmt = $db->prepare('UPDATE Appointment SET start = :start, end = :end WHERE eventID = :eventID');
			$stmt->bindParam(':eventID',$_POST['id']);
			$stmt->bindParam(':start',$_POST['start']);
			$stmt->bindParam(':end',$_POST['end']);
			$stmt->execute();
		}catch(PDOException $e){
			$response['success']=0; $response['sqlerror']=$e->getMessage(); echo json_encode($response); exit();
		}
	$response['success']=1;   echo json_encode($response); 
 }else{$response['success']=0; echo json_encode($response);}
 ?>