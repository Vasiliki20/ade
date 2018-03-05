<?php
 include('post.php');
 if(isset($_POST['id']) && isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5']) && isset($_POST['q6']) && isset($_POST['q7']) && isset($_POST['q8']) && isset($_POST['q9']) && isset($_POST['q10']) && isset($_POST['q11']) && isset($_POST['q12']) && isset($_POST['q13']) && isset($_POST['q14']) && isset($_POST['q15']) && isset($_POST['q16']) && isset($_POST['q17']) && isset($_POST['q18']) && isset($_POST['q19']) && isset($_POST['q20']) && isset($_POST['q21']) && isset($_POST['helpful']) && isset($_POST['negative']) &&  isset($_POST['sugestions']) && isset($_POST['other']) && isset($_POST['whyterminate1'])){
 $stmt = $db->prepare('UPDATE TerminationEvaluation
SET q1=:q1,q2=:q2,q3=:q3,q4=:q4,q5=:q5,q6=:q6,q7=:q7,q8=:q8,q9=:q9,q10=:q10,q11=:q11,q12=:q12,q13=:q13,q14=:q14,q15=:q15,q16=:q16,q17=:q17,q18=:q18,q19=:q19,q20=:q20,q21=:q21,helpful=:helpful,negative=:negative,sugestions=:sugestions,other=:other,whyterminate1=:whyterminate1
WHERE patientID=:id');
 
 $stmt->bindParam(':id',$_POST['id']);
 $stmt->bindParam(':q1',$_POST['q1']);
 $stmt->bindParam(':q2',$_POST['q2']);
 $stmt->bindParam(':q3',$_POST['q3']);
 $stmt->bindParam(':q4',$_POST['q4']);
 $stmt->bindParam(':q5',$_POST['q5']);
 $stmt->bindParam(':q6',$_POST['q6']);
 $stmt->bindParam(':q7',$_POST['q7']);
 $stmt->bindParam(':q8',$_POST['q8']);
 $stmt->bindParam(':q9',$_POST['q9']);
 $stmt->bindParam(':q10',$_POST['q10']);
 $stmt->bindParam(':q11',$_POST['q11']);
 $stmt->bindParam(':q12',$_POST['q12']);
 $stmt->bindParam(':q13',$_POST['q13']);
 $stmt->bindParam(':q14',$_POST['q14']);
 $stmt->bindParam(':q15',$_POST['q15']);
 $stmt->bindParam(':q16',$_POST['q16']);
 $stmt->bindParam(':q17',$_POST['q17']);
 $stmt->bindParam(':q18',$_POST['q18']);
 $stmt->bindParam(':q19',$_POST['q19']);
 $stmt->bindParam(':q20',$_POST['q20']);
 $stmt->bindParam(':q21',$_POST['q21']);
 $stmt->bindParam(':helpful',$_POST['helpful']);
 $stmt->bindParam(':negative',$_POST['negative']);
 $stmt->bindParam(':sugestions',$_POST['sugestions']);
 $stmt->bindParam(':other',$_POST['other']);
 $stmt->bindParam(':whyterminate1',$_POST['whyterminate1']);
 $stmt->execute();

 
 $response['success']=1; echo json_encode($response);
 }else{$response['success']=0; $response['error']="Wrong Fields!"; echo json_encode($response);}
 ?>