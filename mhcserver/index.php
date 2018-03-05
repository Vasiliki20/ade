<?php
require 'auth.php';
$userid = authenticate();
response=array();
if ($userid != false) {
    response['status']=1;
}
if ($userid == false || isset($_POST['usr'])){response['status']=0;  exit(); }
?>