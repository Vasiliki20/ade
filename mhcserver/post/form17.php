<?php
 include('post.php');
 if(isset($_POST['id']) && isset($_POST['dateof']) && isset($_POST['people']) && isset($_POST['description']) && isset($_POST['affirmation'])){
 $stmt = $db->prepare('INSERT INTO Complaints(patientID,dateof,people,description,affirmation) VALUES(:id,:dateof,:people,:description,:affirmation)');
 $stmt->bindParam(':id',$_POST['id']);
 $stmt->bindParam(':dateof',$_POST['dateof']);
 $stmt->bindParam(':people',$_POST['people']);
 $stmt->bindParam(':description',$_POST['description']);
 $stmt->bindParam(':affirmation',$_POST['affirmation']);
 $stmt->execute();
 //$result = $stmt->fetch(PDO::FETCH_ASSOC);
 $response['success']=1; echo json_encode($response);
 }else{$response['success']=0; $response['error']="Wrong Fields!"; echo json_encode($response);}
 ?>