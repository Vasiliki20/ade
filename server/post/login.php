<?php
 include('post.php');
 if(isset($_POST['id']) && isset($_POST['password'])){
	 $stmt = $db->prepare('SELECT password FROM patient WHERE patientID=:patientID');
	 $stmt->bindParam(':patientID',$_POST['id']);
	 $stmt->execute();
	 $result = $stmt->fetch(PDO::FETCH_ASSOC);
	 if(strnatcmp($result['password'],$_POST['password'])==0){
		 $response['login']=true; $response['success']=1; echo json_encode($response);//echo "\nTrue credentials!";
	 }else{
		 $response['login']=false; $response['success']=1; echo json_encode($response); //echo "\nFalse credentials!";
	 }
 }else{$response['login']=false; $response['success']=0; $response['error']="Wrong Fields!"; echo json_encode($response);}
 ?>