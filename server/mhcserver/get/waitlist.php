<?php
 include('post.php');
 if(isset($_POST['patientID']) && isset($_POST['psychID'])){
 makenull();
 try{ 
 $stmt = $db->prepare('INSERT INTO patient(psychologistID) VALUES (:psychID) WHERE patientID=:patientID');
 $stmt->bindParam(':patientID',$_POST['patientID']);
 $stmt->bindParam(':psychID',$_POST['psychID']);
 $stmt->execute();
 }catch(PDOException $e){ 
	$response['success']=0; $response['error']=$e->getMessage(); echo json_encode($response); exit(); //echo "\n".$e->getMessage()."\n"; exit();
 }
 //$result = $stmt->fetch(PDO::FETCH_ASSOC);
 $response['success']=1; echo json_encode($response);
 }else{$response['success']=0; $response['error']="Wrong Fields!"; echo json_encode($response);//echo "\nYou didn't put all information\n";
 }
?>