<?php
 include('post.php');
 if(isset($_POST['patientID']) && isset($_POST['mainproblem']) && isset($_POST['historyofproblem']) && isset($_POST['anxietyfactors']) && isset($_POST['specialrequests']) && isset($_POST['behaviour']) && isset($_POST['gnosticfunction']) && isset($_POST['mood']) && isset($_POST['psychometricresult']) && isset($_POST['clinicalimpression']) && isset($_POST['psychologicalfunc']) && isset($_POST['professionacademicfunc']) && isset($_POST['socialfunc']) && isset($_POST['autofix']) && isset($_POST['therapyfactors']) && isset($_POST['therapysuggestions']) && isset($_POST['additionalevaluation']) && isset($_POST['initialtherapyprogram'])){ 
 makenull();
 $Y="YES";
 $stmt = $db->prepare('UPDATE Medlog SET mainproblem=:mainproblem,historyofproblem=:historyofproblem,anxietyfactors=:anxietyfactors,specialrequests=:specialrequests,behaviour=:behaviour,gnosticfunction=:gnosticfunction,mood=:mood,psychometricresult=:psychometricresult,clinicalimpression=:clinicalimpression,psychologicalfunc=:psychologicalfunc,professionacademicfunc=:professionacademicfunc,socialfunc=:socialfunc,autofix=:autofix,therapyfactors=:therapyfactors,therapysuggestions=:therapysuggestions,additionalevaluation=:additionalevaluation,initialtherapyprogram=:initialtherapyprogram,signed=:signed,datecompleted=:datecompleted  WHERE patientID=:patientID');
 $stmt->bindParam(':patientID',$_POST['patientID']); 
 $stmt->bindParam(':mainproblem',$_POST['mainproblem']); 
 $stmt->bindParam(':historyofproblem',$_POST['historyofproblem']);    
 $stmt->bindParam(':anxietyfactors',$_POST['anxietyfactors']);    
 $stmt->bindParam(':specialrequests',$_POST['specialrequests']);    
 $stmt->bindParam(':behaviour',$_POST['behaviour']);    
 $stmt->bindParam(':gnosticfunction',$_POST['gnosticfunction']);    
 $stmt->bindParam(':mood',$_POST['mood']);    
 $stmt->bindParam(':psychometricresult',$_POST['psychometricresult']);    
 $stmt->bindParam(':clinicalimpression',$_POST['clinicalimpression']);	 
 $stmt->bindParam(':psychologicalfunc',$_POST['psychologicalfunc']);   
 $stmt->bindParam(':professionacademicfunc',$_POST['professionacademicfunc']);
 $stmt->bindParam(':socialfunc',$_POST['socialfunc']);
 $stmt->bindParam(':autofix',$_POST['autofix']);
 $stmt->bindParam(':therapyfactors',$_POST['therapyfactors']);
 $stmt->bindParam(':therapysuggestions',$_POST['therapysuggestions']);
 $stmt->bindParam(':additionalevaluation',$_POST['additionalevaluation']);
 $stmt->bindParam(':initialtherapyprogram',$_POST['initialtherapyprogram']);
 $stmt->bindParam(':signed',$Y);
 $stmt->bindParam(':datecompleted',date("d/m/Y"));
 $stmt->execute();

 $response['success']=1; echo json_encode($response);
 }else{$response['success']=0; $response['error']="Wrong Fields!"; echo json_encode($response);}
 ?>