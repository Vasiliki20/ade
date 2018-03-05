<?php
 include('post.php');
 if(isset($_POST['id']) && isset($_POST['email']) && isset($_POST['name']) && isset($_POST['lastname']) &&  isset($_POST['password'])){
 $name=$_POST['name'];
 try{ 
 $stmt = $db->prepare('INSERT INTO psychologist(psychologistID,email,firstname,lastname,password) VALUES(:id,:email,:name,:lastname,:password)');
 $stmt->bindParam(':id',$_POST['id']);
 $stmt->bindParam(':email',$_POST['email']);
 $stmt->bindParam(':name',$_POST['name']);
 $stmt->bindParam(':lastname',$_POST['lastname']);
 $stmt->bindParam(':password',$_POST['password']);
 $stmt->execute();
 }catch(PDOException $e){$response['success']=0; $response['sqlerror']=$e->getMessage(); echo json_encode($response); exit();}
 //$result = $stmt->fetch(PDO::FETCH_ASSOC);
 $response['success']=1; echo json_encode($response);
 }else{$response['success']=0; echo json_encode($response);}
 ?>