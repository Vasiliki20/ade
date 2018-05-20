<?php
//$GLOBALS['curtoken']="";
//setcookie("token","hello");
function request($url,$method,$fields,$cookie){
	$options = array(
		'http' => array(
			'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
						"Authorization: ".$cookie."\r\n",
						//"Authorization: ".$GLOBALS['curtoken']."\r\n",
			'method'  => $method,
			'content' => $fields
		));
		$context  = stream_context_create($options);
		try{
		$result = file_get_contents($url,false, $context);
		}catch (Exception $e){ }  
		//if ($result === FALSE) { /* Handle error */ }
		//var_dump($result);
		
		return json_decode($result,true);
}

function giveToken(){

$options = array(
        CURLOPT_RETURNTRANSFER => true,   // return web page
        CURLOPT_HEADER         => false,  // don't return headers
        CURLOPT_FOLLOWLOCATION => true,   // follow redirects
        CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
        CURLOPT_ENCODING       => "",     // handle compressed
        CURLOPT_USERAGENT      => "test", // name of client
        CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
        CURLOPT_TIMEOUT        => 120,    // time-out on response
    ); 

    $ch = curl_init('http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/index.php');
    curl_setopt_array($ch, $options);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('cache-control' => 'no-cache',
												'content-type' => 'application/x-www-form-urlencoded'));
	curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query(array(
    'usr' => 'testuser',
	'pw' => '25f693ea822cfa8e5f6cb3709b5c68fa97b6aaf9c591b689d8754e78e5e382a3'
	)));
	curl_setopt($ch, CURLOPT_POST, 1);
    $content  = json_decode(curl_exec($ch));
	
	return($content);
    curl_close($ch);	
}	

?>