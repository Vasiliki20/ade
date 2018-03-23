<?php
 include('post.php');
 if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['sex']) && isset($_POST['age']) && isset($_POST['address']) && isset($_POST['telephone']) && isset($_POST['fax']) && isset($_POST['position']) && isset($_POST['speciality']) && isset($_POST['building']) && isset($_POST['office_num']) && isset($_POST['email']) && isset($_POST['password'])){
 makenull();
 try{ 
 $stmt = $db->prepare('INSERT INTO psychologist(psychologistID,firstname,lastname,sex,age,address,telephone,fax,position,speciality,building,office_num,email,password) VALUES(:id,:name,:lastname,:sex,:age,:address,:telephone,:fax,:position,:speciality,:building,:office_num,:email,:password)');
 $stmt->bindParam(':id',$_POST['id']);
 $stmt->bindParam(':name',$_POST['name']);
 $stmt->bindParam(':lastname',$_POST['lastname']);
 $stmt->bindParam(':sex',$_POST['sex']);
 $stmt->bindParam(':age',$_POST['age']);
 $stmt->bindParam(':address',$_POST['address']);
 $stmt->bindParam(':telephone',$_POST['telephone']);
 $stmt->bindParam(':fax',$_POST['fax']);
 $stmt->bindParam(':position',$_POST['position']);
 $stmt->bindParam(':speciality',$_POST['speciality']);
 $stmt->bindParam(':building',$_POST['building']);
 $stmt->bindParam(':office_num',$_POST['office_num']);
 $stmt->bindParam(':email',$_POST['email']);
 $stmt->bindParam(':password',$_POST['password']);
 $stmt->execute();
 }catch(PDOException $e){$response['success']=0; $response['sqlerror']=$e->getMessage(); echo json_encode($response); exit();}
 //$result = $stmt->fetch(PDO::FETCH_ASSOC);
 $response['success']=1; echo json_encode($response);
 }else{$response['success']=0; echo json_encode($response);}
 ?>