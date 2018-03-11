 <?php
 include('post.php');
 if(isset($_POST['id']) && isset($_POST['dateofbirth']) && isset($_POST['age']) && isset($_POST['sex']) && isset($_POST['citizenship']) &&  isset($_POST['address']) && isset($_POST['city']) && isset($_POST['postalcode']) && isset($_POST['communicatevia']) && isset($_POST['speciality']) && isset($_POST['positionatHierarchy']) && isset($_POST['fax']) && isset($_POST['building']) && isset($_POST['office_num']) && isset($_POST['emergencyname']) && isset($_POST['emergencyrelation']) && isset($_POST['emergencynumber']) && isset($_POST['maritalstatus']) && isset($_POST['previoustherapy']) && isset($_POST['previoustherapist']) && isset($_POST['comnowtherapistb'])){
 makenull();
 $stmt = $db->prepare('UPDATE patient
SET dateofbirth=:dateofbirth,age=:age,sex=:sex,citizenship=:citizenship,address=:address,city=:city,postalCode=:postalcode,communicatevia=:communicatevia,positionatHierarchy=:positionatHierarchy,building=:building,speciality=:speciality,office_num=:office_num,fax=:fax,emergencyname=:emergencyname,emergencyrelation=:emergencyrelation,emergencynumber=:emergencynumber,maritalstatus=:maritalstatus,previoustherapy=:previoustherapy,previoustherapist=:previoustherapist,nowtherapist=:nowtherapist,comnowtherapistb=:comnowtherapistb
WHERE patientID=:id');
 $stmt->bindParam(':id',$_POST['id']);
 $stmt->bindParam(':dateofbirth',$_POST['dateofbirth']);
 $stmt->bindParam(':age',$_POST['age']);
 $stmt->bindParam(':sex',$_POST['sex']);
 $stmt->bindParam(':citizenship',$_POST['citizenship']);
 $stmt->bindParam(':address',$_POST['address']);
 $stmt->bindParam(':city',$_POST['city']);
 $stmt->bindParam(':postalcode',$_POST['postalcode']);
 $stmt->bindParam(':communicatevia',$_POST['communicatevia']);
 
 $stmt->bindParam(':positionatHierarchy',$_POST['positionatHierarchy']);
 $stmt->bindParam(':building',$_POST['building']);
 $stmt->bindParam(':speciality',$_POST['speciality']);
 $stmt->bindParam(':office_num',$_POST['office_num']);
 $stmt->bindParam(':fax',$_POST['fax']);

 $stmt->bindParam(':emergencyname',$_POST['emergencyname']);
 $stmt->bindParam(':emergencyrelation',$_POST['emergencyrelation']);
 $stmt->bindParam(':emergencynumber',$_POST['emergencynumber']);
 $stmt->bindParam(':maritalstatus',$_POST['maritalstatus']);
 $stmt->bindParam(':previoustherapy',$_POST['previoustherapy']);
 $stmt->bindParam(':previoustherapist',$_POST['previoustherapist']);
 $stmt->bindParam(':nowtherapist',$_POST['nowtherapist']);
 $stmt->bindParam(':comnowtherapistb',$_POST['comnowtherapistb']);
 $stmt->execute();
 //$result = $stmt->fetch(PDO::FETCH_ASSOC);
 $response['success']=1; echo json_encode($response);
 }else{$response['success']=0; $response['error']="Wrong Fields!"; echo json_encode($response);}
 ?>