<?php
 include('post.php');
 if(isset($_POST['id']) && isset($_POST['typeof']) && isset($_POST['typeofcall']) && isset($_POST['tel']) &&  isset($_POST['email']) &&  isset($_POST['dateofcall']) &&  isset($_POST['timeofcall']) &&  isset($_POST['nameofcaller']) &&  isset($_POST['roleofcaller']) &&  isset($_POST['nameofcallee']) &&  isset($_POST['roleofcallee']) &&  isset($_POST['subject']) &&  isset($_POST['description']) &&  isset($_POST['handle']) &&  isset($_POST['othercomments']) &&  isset($_POST['signedexternal'])){
 $stmt = $db->prepare('INSERT INTO ComLog(patientID,typeof,typeofcall,tel,email,dateofcall,timeofcall,nameofcaller,roleofcaller,nameofcallee,roleofcallee,subject,description,handle,othercomments,signedexternal) VALUES(:patientID,:typeof,:typeofcall,:tel,:email,:dateofcall,:timeofcall,:nameofcaller,:roleofcaller,:nameofcallee,:roleofcallee,:subject,:description,:handle,:othercomments,:signedexternal)');
 $stmt->bindParam(':id',$_POST['id']);
 $stmt->bindParam(':typeof',$_POST['typeof']);
 $stmt->bindParam(':typeofcall',$_POST['typeofcall']);
 $stmt->bindParam(':tel',$_POST['tel']);
 $stmt->bindParam(':email',$_POST['email']);
 $stmt->bindParam(':dateofcall',$_POST['dateofcall']);
 $stmt->bindParam(':timeofcall',$_POST['timeofcall']);
 $stmt->bindParam(':nameofcaller',$_POST['nameofcaller']);
 $stmt->bindParam(':roleofcaller',$_POST['roleofcaller']);
 $stmt->bindParam(':nameofcallee',$_POST['nameofcallee']);
 $stmt->bindParam(':roleofcallee',$_POST['roleofcallee']);
 $stmt->bindParam(':subject',$_POST['subject']);
 $stmt->bindParam(':description',$_POST['description']);
 $stmt->bindParam(':handle',$_POST['handle']);
 $stmt->bindParam(':othercomments',$_POST['othercomments']);
 $stmt->bindParam(':signedexternal',$_POST['signedexternal']);
 $stmt->execute();
 //$result = $stmt->fetch(PDO::FETCH_ASSOC);
 $response['success']=1; echo json_encode($response);
 }else{$response['success']=0; $response['error']="Wrong Fields!"; echo json_encode($response);}
 ?>