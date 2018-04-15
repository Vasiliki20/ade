<?php
session_start();
// get correct file path
$fileName = $_GET['name'];
$filePath = 'uploads/'.$_GET['id']."/".$fileName;
// remove file if it exists
if ( file_exists($filePath) ) {
    unlink($filePath);
    header('Location:formupload.php');
}
?>