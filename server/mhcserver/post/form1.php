<?php
 include('post.php');
 if(isset($_POST['type']) && isset($_POST['id']) && isset($_POST['phone']) && isset($_POST['period']) && isset($_POST['mainissue']) &&  isset($_POST['sentby']) && isset($_POST['days']) && isset($_POST['hours'])){
 makenull();
 $stmt = $db->prepare('UPDATE patient
SET type=:type,Telephone=:Telephone,period=:period,mainissue=:mainissue,sentby=:sentby
WHERE patientID=:id');
 $stmt->bindParam(':id',$_POST['id']);
 $stmt->bindParam(':Telephone',$_POST['phone']);
 $stmt->bindParam(':period',$_POST['period']);
 $stmt->bindParam(':mainissue',$_POST['mainissue']);
 $stmt->bindParam(':sentby',$_POST['sentby']);
 $stmt->bindParam(':type',$_POST['type']);
 $stmt->execute();
 
 $days=$_POST['days'];
 $hours=$_POST['hours'];
 $arraydays=unserialize(base64_decode($days));
 $arrayhours=unserialize(base64_decode($hours));
 $j=0;
 foreach($arraydays as $i){
	$stmt = $db->prepare('INSERT INTO patienttimeline(patientID,day,hour) VALUES(:id,:day,:hour);');
	$stmt->bindParam(':id',$_POST['id']);
	$stmt->bindParam(':day',$i);
	$stmt->bindParam(':hour',$arrayhours[$j]);
	$stmt->execute();
	$j++;
 }
	   $response['success']=1; echo json_encode($response);
 }else{$response['success']=0; $response['error']="Wrong Fields!"; echo json_encode($response);}
 ?>