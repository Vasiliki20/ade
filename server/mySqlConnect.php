<?php
define('DBHOST','localhost');
define('DBUSER','mhc');
define('DBPASS','fmxr9bDDtGyGsKAj');
define('DBNAME','mhcdb');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";charset=utf8mb4;dbname=".DBNAME, DBUSER, DBPASS);
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);//Suggested to uncomment on production websites
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Suggested to comment on production websites
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$db->exec("SET CHARACTER SET 'utf8'");
} catch(PDOException $e) {
	//show error
    echo "\n " .$e->getMessage(); 
    exit;
}

?>