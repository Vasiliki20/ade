<?php
 include('post.php');
 if(isset($_POST['id']) && isset($_POST['password'])){
	 $stmt = $db->prepare('SELECT password FROM patient WHERE patientID=:patientID');
	 $stmt->bindParam(':patientID',$_POST['id']);
	 $stmt->execute();
	 $result = $stmt->fetch(PDO::FETCH_ASSOC);
	 if(strnatcmp($result['password'],$_POST['password'])==0){
		 echo "\nTrue credentials!";
	 }else{
		 echo "\nFalse credentials!";
	 }
 }else{echo "\nYou didn't put all information\n";}