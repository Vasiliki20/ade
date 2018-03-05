<?php
 include('post.php');
 if(isset($_POST['id']) && isset($_POST['typeof']) && isset($_POST['nameofprof']) && isset($_POST['addressofprof']) && isset($_POST['cityofprof']) &&  isset($_POST['telofprof']) &&  isset($_POST['emailofprof']) &&  isset($_POST['purposeofinfo']) &&  isset($_POST['infototransfer']) &&  isset($_POST['timeofexpire']) &&  isset($_POST['signedinfo'])){
 $stmt = $db->prepare('INSERT INTO ComLog(patientID,typeof,nameofprof,addressofprof,cityofprof,telofprof,emailofprof,purposeofinfo,infototransfer,timeofexpire,signedinfo) VALUES(:id,:typeof,:nameofprof,:addressofprof,:cityofprof,:telofprof,:emailofprof,:purposeofinfo,:infototransfer,:timeofexpire,:signedinfo)');
 $stmt->bindParam(':id',$_POST['id']);
 $stmt->bindParam(':typeof',$_POST['typeof']);
 $stmt->bindParam(':nameofprof',$_POST['nameofprof']);
 $stmt->bindParam(':addressofprof',$_POST['addressofprof']);
 $stmt->bindParam(':cityofprof',$_POST['cityofprof']);
 $stmt->bindParam(':telofprof',$_POST['telofprof']);
 $stmt->bindParam(':emailofprof',$_POST['emailofprof']);
 $stmt->bindParam(':purposeofinfo',$_POST['purposeofinfo']);
 $stmt->bindParam(':infototransfer',$_POST['infototransfer']);
 $stmt->bindParam(':timeofexpire',$_POST['timeofexpire']);
 $stmt->bindParam(':signedinfo',$_POST['signedinfo']);
 $stmt->execute();
 //$result = $stmt->fetch(PDO::FETCH_ASSOC);
 $response['success']=1; echo json_encode($response);
 }else{$response['success']=0; $response['error']="Wrong Fields!"; echo json_encode($response);}
 ?>