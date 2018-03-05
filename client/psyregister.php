<?php
 include('post.php');
 if(isset($_POST['id']) && isset($_POST['email']) && isset($_POST['name']) && isset($_POST['lastname']) &&  isset($_POST['password'])){
 $name=$_POST['name'];
 $stmt = $db->prepare('INSERT INTO patient(patientID,email,firstname,lastname,password) VALUES(:id,:email,:name,:lastname,:password)');
 $stmt->bindParam(':id',$_POST['id']);
 $stmt->bindParam(':email',$_POST['email']);
 $stmt->bindParam(':name',$_POST['name']);
 $stmt->bindParam(':lastname',$_POST['lastname']);
 $stmt->bindParam(':password',$_POST['password']);
 $stmt->execute();
 //$result = $stmt->fetch(PDO::FETCH_ASSOC);
 echo "\nThanks $name for the information!\n";
 }else{echo "\nYou didn't put all information\n";}
 ?>