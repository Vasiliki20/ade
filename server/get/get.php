<?php
// Include confi.php
include_once('index.php');
include_once('mySqlConnect.php');
 
 
 if ($userid == false) exit("Expired Token!!" );
 
 if($_SERVER['REQUEST_METHOD'] == "GET"){
 // Get data
 if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['pwd']) && isset($_GET['status'])){
 $name =$_GET['name'];
 $email =$_GET['email'];
 $password =$_GET['pwd'];
 $status =$_GET['status'];
 echo "\nThanks $name for the information!\n";
 }else{echo "\nYou didn't put all information\n";}
 
 }