<?php
 include('post.php');
 if(isset($_POST['job']) && isset($_POST['patientID']) && isset($_POST['feelaboutstudies']) && isset($_POST['jobtime']) && isset($_POST['jobdutys']) && isset($_POST['jobstress']) && isset($_POST['jobprevious']) && isset($_POST['relationshipin']) && isset($_POST['relationshipinfo']) && isset($_POST['relationshipname']) && isset($_POST['relationshipjob']) && isset($_POST['children']) && isset($_POST['staywith']) && isset($_POST['staydificulties']) && isset($_POST['familysynthesis']) && isset($_POST['support']) && isset($_POST['economicstatus']) && isset($_POST['economichelp']) && isset($_POST['economichelp1']) && isset($_POST['legalissues']) && isset($_POST['legalissues1']) && isset($_POST['healthissues']) && isset($_POST['healthconsernes']) && isset($_POST['doctor']) && isset($_POST['doctorcontacts']) && isset($_POST['medicines']) && isset($_POST['medicines1']) && isset($_POST['generalhealth']) && isset($_POST['smoking']) && isset($_POST['smoking1']) && isset($_POST['alcohol']) && isset($_POST['alcohol1']) && isset($_POST['drugs']) && isset($_POST['drugs1']) && isset($_POST['marihuanafrequency']) && isset($_POST['luckygames']) && isset($_POST['luckygames1']) && isset($_POST['betmore']) && isset($_POST['speakaboutlucky']) && isset($_POST['childlife']) && isset($_POST['childlifeproblems']) && isset($_POST['militarylife']) && isset($_POST['familyproblems']) && isset($_POST['trauma']) && isset($_POST['psychosupport']) && isset($_POST['psychosupport1']) && isset($_POST['psychodiagnosis']) && isset($_POST['psychodiagnosis1']) && isset($_POST['disability']) && isset($_POST['disability1']) && isset($_POST['suicideprothesis']) && isset($_POST['suicideprothesis1']) && isset($_POST['violenceprothesis']) && isset($_POST['violenceprothesis1']) && isset($_POST['violence']) && isset($_POST['violence1']) && isset($_POST['feelfortherapy']) && isset($_POST['otherseriousinfo']) && isset($_POST['reasonsfortherapy']) && isset($_POST['relations']) && isset($_POST['namerel']) && isset($_POST['agerel']) && isset($_POST['qualityrel']) && isset($_POST['namemed']) && isset($_POST['datemed']) && isset($_POST['durationmed']) && isset($_POST['doctormed']) && isset($_POST['commentsmed'])){ 
 makenull();
 try{
 $stmt = $db->prepare('INSERT INTO Medlog(patientID,feelaboutstudies,job,jobtime,jobdutys,jobstress,jobprevious,relationshipin,relationshipinfo,relationshipname,relationshipjob,children,staywith,staydificulties,familysynthesis,support,economicstatus,economichelp,economichelp1,legalissues,legalissues1,healthissues,healthconsernes,doctor,doctorcontacts,medicines,medicines1,generalhealth,smoking,smoking1,alcohol,alcohol1,drugs,drugs1,marihuanafrequency,luckygames,luckygames1,betmore,speakaboutlucky,childlife,childlifeproblems,militarylife,familyproblems,trauma,psychosupport,psychosupport1,psychodiagnosis,psychodiagnosis1,disability,disability1,suicideprothesis,suicideprothesis1,violenceprothesis,violenceprothesis1,violence,violence1,feelfortherapy,otherseriousinfo,reasonsfortherapy) VALUES(:patientID,:feelaboutstudies,:job,:jobtime,:jobdutys,:jobstress,:jobprevious,:relationshipin,:relationshipinfo,:relationshipname,:relationshipjob,:children,:staywith,:staydificulties,:familysynthesis,:support,:economicstatus,:economichelp,:economichelp1,:legalissues,:legalissues1,:healthissues,:healthconsernes,:doctor,:doctorcontacts,:medicines,:medicines1,:generalhealth,:smoking,:smoking1,:alcohol,:alcohol1,:drugs,:drugs1,:marihuanafrequency,:luckygames,:luckygames1,:betmore,:speakaboutlucky,:childlife,:childlifeproblems,:militarylife,:familyproblems,:trauma,:psychosupport,:psychosupport1,:psychodiagnosis,:psychodiagnosis1,:disability,:disability1,:suicideprothesis,:suicideprothesis1,:violenceprothesis,:violenceprothesis1,:violence,:violence1,:feelfortherapy,:otherseriousinfo,:reasonsfortherapy);');
 $stmt->bindParam(':patientID',$_POST['patientID']); 
 $stmt->bindParam(':feelaboutstudies',$_POST['feelaboutstudies']); 
 $stmt->bindParam(':job',$_POST['job']);
 $stmt->bindParam(':jobtime',$_POST['jobtime']);    
 $stmt->bindParam(':jobdutys',$_POST['jobdutys']);    
 $stmt->bindParam(':jobstress',$_POST['jobstress']);    
 $stmt->bindParam(':jobprevious',$_POST['jobprevious']);    
 $stmt->bindParam(':relationshipin',$_POST['relationshipin']);    
 $stmt->bindParam(':relationshipinfo',$_POST['relationshipinfo']);    
 $stmt->bindParam(':relationshipname',$_POST['relationshipname']);    
 $stmt->bindParam(':relationshipjob',$_POST['relationshipjob']);	 
 $stmt->bindParam(':children',$_POST['children']);   
 $stmt->bindParam(':staywith',$_POST['staywith']);
 $stmt->bindParam(':staydificulties',$_POST['staydificulties']);
 $stmt->bindParam(':familysynthesis',$_POST['familysynthesis']);
 $stmt->bindParam(':support',$_POST['support']);
 $stmt->bindParam(':economicstatus',$_POST['economicstatus']);
 $stmt->bindParam(':economichelp',$_POST['economichelp']);
 $stmt->bindParam(':economichelp1',$_POST['economichelp1']);
 $stmt->bindParam(':legalissues',$_POST['legalissues']);
 $stmt->bindParam(':legalissues1',$_POST['legalissues1']);
 $stmt->bindParam(':healthissues',$_POST['healthissues']);
 $stmt->bindParam(':healthconsernes',$_POST['healthconsernes']);
 $stmt->bindParam(':doctor',$_POST['doctor']);
 $stmt->bindParam(':doctorcontacts',$_POST['doctorcontacts']);
 $stmt->bindParam(':medicines',$_POST['medicines']);
 $stmt->bindParam(':medicines1',$_POST['medicines1']);
 $stmt->bindParam(':generalhealth',$_POST['generalhealth']);
 $stmt->bindParam(':smoking',$_POST['smoking']);
 $stmt->bindParam(':smoking1',$_POST['smoking1']);
 $stmt->bindParam(':alcohol',$_POST['alcohol']);
 $stmt->bindParam(':alcohol1',$_POST['alcohol1']);
 $stmt->bindParam(':drugs',$_POST['drugs']);
 $stmt->bindParam(':drugs1',$_POST['drugs1']);
 $stmt->bindParam(':marihuanafrequency',$_POST['marihuanafrequency']);
 $stmt->bindParam(':luckygames',$_POST['luckygames']);
 $stmt->bindParam(':luckygames1',$_POST['luckygames1']);
 $stmt->bindParam(':betmore',$_POST['betmore']);
 $stmt->bindParam(':speakaboutlucky',$_POST['speakaboutlucky']);
 $stmt->bindParam(':childlife',$_POST['childlife']);
 $stmt->bindParam(':childlifeproblems',$_POST['childlifeproblems']);
 $stmt->bindParam(':militarylife',$_POST['militarylife']);
 $stmt->bindParam(':familyproblems',$_POST['familyproblems']);
 $stmt->bindParam(':trauma',$_POST['trauma']);
 $stmt->bindParam(':psychosupport',$_POST['psychosupport']);
 $stmt->bindParam(':psychosupport1',$_POST['psychosupport1']);
 $stmt->bindParam(':psychodiagnosis',$_POST['psychodiagnosis']);
 $stmt->bindParam(':psychodiagnosis1',$_POST['psychodiagnosis1']);
 $stmt->bindParam(':disability',$_POST['disability']);
 $stmt->bindParam(':disability1',$_POST['disability1']);
 $stmt->bindParam(':suicideprothesis',$_POST['suicideprothesis']);
 $stmt->bindParam(':suicideprothesis1',$_POST['suicideprothesis1']);
 $stmt->bindParam(':violenceprothesis',$_POST['violenceprothesis']);
 $stmt->bindParam(':violenceprothesis1',$_POST['violenceprothesis1']);
 $stmt->bindParam(':violence',$_POST['violence']);
 $stmt->bindParam(':violence1',$_POST['violence1']);
 $stmt->bindParam(':feelfortherapy',$_POST['feelfortherapy']);
 $stmt->bindParam(':otherseriousinfo',$_POST['otherseriousinfo']);
 $stmt->bindParam(':reasonsfortherapy',$_POST['reasonsfortherapy']);
 $stmt->execute();


 
 
 $relations=$_POST['relations'];
 $namerel=$_POST['namerel'];
 $agerel=$_POST['agerel'];
 $qualityrel=$_POST['qualityrel'];
 $arrayrel=unserialize(base64_decode($relations));
 $arraynamerel=unserialize(base64_decode($namerel));
 $arrayagerel=unserialize(base64_decode($agerel));
 $arrayqualityrel=unserialize(base64_decode($qualityrel));
 $j=0;
 foreach($arrayrel as $i){
	$stmt = $db->prepare('INSERT INTO patientrelationships(patientID,relation,name,age,quality) VALUES(:id,:relation,:name,:age,:quality);');
	$stmt->bindParam(':id',$_POST['patientID']);
	$stmt->bindParam(':relation',$i);
	$stmt->bindParam(':name',$arraynamerel[$j]);
	$stmt->bindParam(':age',$arrayagerel[$j]);
	$stmt->bindParam(':quality',$arrayqualityrel[$j]);
	$stmt->execute();
	$j++;
 }
 
 $namemed=$_POST['namemed'];
 $datemed=$_POST['datemed'];
 $durationmed=$_POST['durationmed'];
 $doctormed=$_POST['doctormed'];
 $commentsmed=$_POST['commentsmed'];
 $arraynamemed=unserialize(base64_decode($namemed));
 $arraydatemed=unserialize(base64_decode($datemed));
 $arraydurationmed=unserialize(base64_decode($durationmed));
 $arraydoctormed=unserialize(base64_decode($doctormed));
 $arraycommentsmed=unserialize(base64_decode($commentsmed));
 $j=0;
 foreach($arraynamemed as $i){
	$stmt = $db->prepare('INSERT INTO patientmedication(patientID,nameof,dateof,duration,doctor,comments) VALUES(:id,:nameof,:dateof,:duration,:doctor,:comments);');
	$stmt->bindParam(':id',$_POST['patientID']);
	$stmt->bindParam(':nameof',$i);
	$stmt->bindParam(':dateof',$arraydatemed[$j]);
	$stmt->bindParam(':duration',$arraydurationmed[$j]);
	$stmt->bindParam(':doctor',$arraydoctormed[$j]);
	$stmt->bindParam(':comments',$arraycommentsmed[$j]);
	$stmt->execute();
	$j++;
 }
  }catch(PDOException $e){ 
	$response['success']=0; $response['error']=$e->getMessage(); echo json_encode($response); exit(); //echo "\n".$e->getMessage()."\n"; exit();
 }
 $response['success']=1; echo json_encode($response);
 }else{$response['success']=0; $response['error']="Wrong Fields!"; echo json_encode($response);}
 ?>