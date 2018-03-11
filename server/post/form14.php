<?php
 include('post.php');
 if(isset($_POST['id']) && isset($_POST['dateended']) && isset($_POST['whyterminate']) && isset($_POST['therapyend']) && isset($_POST['infoterminate']) &&  isset($_POST['epsychologicalfunc']) &&  isset($_POST['eprofessionacademicfunc']) &&  isset($_POST['esocialfunc']) &&  isset($_POST['eautofix'])){
 makenull();
 $stmt = $db->prepare('INSERT INTO TerminationEvaluation(patientID,dateended,whyterminate,therapyend,infoterminate,epsychologicalfunc,eprofessionacademicfunc,esocialfunc,eautofix) VALUES(:id,:dateended,:whyterminate,:therapyend,:infoterminate,:epsychologicalfunc,:eprofessionacademicfunc,:esocialfunc,:eautofix)');
 $stmt->bindParam(':id',$_POST['id']);
 $stmt->bindParam(':dateended',$_POST['dateended']);
 $stmt->bindParam(':whyterminate',$_POST['whyterminate']);
 $stmt->bindParam(':infoterminate',$_POST['infoterminate']);
 $stmt->bindParam(':therapyend',$_POST['therapyend']);
 $stmt->bindParam(':epsychologicalfunc',$_POST['epsychologicalfunc']);
 $stmt->bindParam(':eprofessionacademicfunc',$_POST['eprofessionacademicfunc']);
 $stmt->bindParam(':esocialfunc',$_POST['esocialfunc']);
 $stmt->bindParam(':eautofix',$_POST['eautofix']);
 $stmt->execute();
 //$result = $stmt->fetch(PDO::FETCH_ASSOC);
 $response['success']=1; echo json_encode($response);
 }else{$response['success']=0; $response['error']="Wrong Fields!"; echo json_encode($response);}
 ?>