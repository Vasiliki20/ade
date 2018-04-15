<?php
 include('post.php');
 if(isset($_POST['appointmentID']) && isset($_POST['clinical']) && isset($_POST['content']) && isset($_POST['observations']) && isset($_POST['goalsnext']) && isset($_POST['type']) && isset($_POST['time']) && isset($_POST['signed']) && isset($_POST['note'])){
 makenull();
 try{ 
 $stmt = $db->prepare('INSERT INTO CaseNote(appointmentID,clinicalobservations,sessioncontent,otherobservations,goalsfornextappoinment,typeof,dateof,timeof,Signed,Note) VALUES(:appointmentID,:clinical,:content,:observations,:goalsnext,:type,:date,:time,:signed,:note)');
 $stmt->bindParam(':appointmentID',$_POST['appointmentID']);
 $stmt->bindParam(':clinical',$_POST['clinical']);
 $stmt->bindParam(':content',$_POST['content']);
 $stmt->bindParam(':observations',$_POST['observations']);
 $stmt->bindParam(':goalsnext',$_POST['goalsnext']);
 $stmt->bindParam(':type',$_POST['type']);
 $stmt->bindParam(':date',$_POST['date']);
 $stmt->bindParam(':time',$_POST['time']);
 $stmt->bindParam(':signed',$_POST['signed']);
 $stmt->bindParam(':note',$_POST['note']);
 $stmt->execute();
 }catch(PDOException $e){ 
	$response['success']=0; $response['error']=$e->getMessage(); echo json_encode($response); exit(); //echo "\n".$e->getMessage()."\n"; exit();
 }
 //$result = $stmt->fetch(PDO::FETCH_ASSOC);
 $response['success']=1; echo json_encode($response);
 }else{$response['success']=0; $response['error']="Wrong Fields!"; echo json_encode($response);//echo "\nYou didn't put all information\n";
 }
?>