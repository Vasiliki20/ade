<?php
 include('post.php');
 if(isset($_POST['patientID']) && isset($_POST['eventID']) && isset($_POST['psychID']) && isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['type']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['building']) && isset($_POST['room']) && isset($_POST['code']) && isset($_POST['comments']) && isset($_POST['clientSMS']) && isset($_POST['clientEMAIL']) && isset($_POST['psychSMS']) && isset($_POST['psychEMAIL']) && isset($_POST['timebefore'])){
	makenull();
	$j="Scheduled";
	$arrid=unserialize(base64_decode($_POST['patientID']));
	$a=null;
	if($arrid[0]!=null){
	foreach($arrid as $i){
		
		try{ 
			$stmt = $db->prepare('INSERT INTO Appointment(patientID,psychologistID,eventID,nameofappointment,subject,Typeof,start,end,building,room,codeof,attendance,comments,RemindClientSMS,RemindClientEmail,RemindPsychoSMS,RemindPsychoEmail,ReminderTimeBefore) VALUES(:patientid,:psychid,:eventID,:name,:subject,:type,:start,:end,:building,:room,:code,:attendance,:comments,:cSMS,:cEMAIL,:pSMS,:pEMAIL,:timebefore)');
			$stmt->bindParam(':patientid',$i);
			$stmt->bindParam(':psychid',$_POST['psychID']);
			$stmt->bindParam(':eventID',$_POST['eventID']);
			$stmt->bindParam(':name',$_POST['name']);
			$stmt->bindParam(':subject',$_POST['subject']);
			$stmt->bindParam(':type',$_POST['type']);
			$stmt->bindParam(':start',$_POST['start']);
			$stmt->bindParam(':end',$_POST['end']);
			$stmt->bindParam(':building',$_POST['building']);
			$stmt->bindParam(':room',$_POST['room']);
			$stmt->bindParam(':code',$_POST['code']);
			$stmt->bindParam(':attendance',$j);
			$stmt->bindParam(':comments',$_POST['comments']);
			$stmt->bindParam(':cSMS',$_POST['clientSMS']);
			$stmt->bindParam(':cEMAIL',$_POST['clientEMAIL']);
			$stmt->bindParam(':pSMS',$_POST['psychSMS']);
			$stmt->bindParam(':pEMAIL',$_POST['psychEMAIL']);
			$stmt->bindParam(':timebefore',$_POST['timebefore']);
			$stmt->execute();
		}catch(PDOException $e){
			$response['success']=0; $response['sqlerror']=$e->getMessage(); echo json_encode($response); exit();
		}
		
	}
	}else{
		try{ 
			$stmt = $db->prepare('INSERT INTO Appointment(patientID,psychologistID,eventID,nameofappointment,subject,Typeof,start,end,building,room,codeof,attendance,comments,RemindClientSMS,RemindClientEmail,RemindPsychoSMS,RemindPsychoEmail,ReminderTimeBefore) VALUES(:patientid,:psychid,:eventID,:name,:subject,:type,:start,:end,:building,:room,:code,:attendance,:comments,:cSMS,:cEMAIL,:pSMS,:pEMAIL,:timebefore)');
			$stmt->bindParam(':patientid',$a);
			$stmt->bindParam(':psychid',$_POST['psychID']);
			$stmt->bindParam(':eventID',$_POST['eventID']);
			$stmt->bindParam(':name',$_POST['name']);
			$stmt->bindParam(':subject',$_POST['subject']);
			$stmt->bindParam(':type',$_POST['type']);
			$stmt->bindParam(':start',$_POST['start']);
			$stmt->bindParam(':end',$_POST['end']);
			$stmt->bindParam(':building',$_POST['building']);
			$stmt->bindParam(':room',$_POST['room']);
			$stmt->bindParam(':code',$_POST['code']);
			$stmt->bindParam(':attendance',$j);
			$stmt->bindParam(':comments',$_POST['comments']);
			$stmt->bindParam(':cSMS',$_POST['clientSMS']);
			$stmt->bindParam(':cEMAIL',$_POST['clientEMAIL']);
			$stmt->bindParam(':pSMS',$_POST['psychSMS']);
			$stmt->bindParam(':pEMAIL',$_POST['psychEMAIL']);
			$stmt->bindParam(':timebefore',$_POST['timebefore']);
			$stmt->execute();
		}catch(PDOException $e){
			$response['success']=0; $response['sqlerror']=$e->getMessage(); echo json_encode($response); exit();
		}
	}
	$response['success']=1; $response['arr']=$arrid;  echo json_encode($response); 
 }else{$response['success']=0; echo json_encode($response);}
 ?>