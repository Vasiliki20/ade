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

class Encryption{

    /**
    * 
    * Retourne la chaîne de caracère encodéé en MIME base64
    * ----------------------------------------------------
    * @param string
    * @return string
    *
    **/
    public static function safe_b64encode($string='') {
        $data = base64_encode($string);
        $data = str_replace(['+','/','='],['-','_',''],$data);
        return $data;
    }

    /**
    * 
    * Retourne la chaîne de caracère MIME base64 décodée
    * -------------------------------------------------
    * @param string
    * @return string
    *
    **/
    public static function safe_b64decode($string='') {
        $data = str_replace(['-','_'],['+','/'],$string);
        $mod4 = strlen($data) % 4;
        if ($mod4) {
            $data .= substr('====', $mod4);
        }
        return base64_decode($data);
    }

    /**
    *
    * Crypte une chaîne de caractères avec un algorithme de cryptage aes-256 mode cbc
    * Le crypatage s'effectue avec une clé définie dans le fichier core.php
    * ------------------------------------------------------------------------------------------
    * @param string
    * @return string
    *
    **/
    public static function encode($value=false){ 
        if(!$value) return false;
        $iv_size = openssl_cipher_iv_length('aes-256-cbc');
        $iv = openssl_random_pseudo_bytes($iv_size);
        $crypttext = openssl_encrypt($value, 'aes-256-cbc', 'mhccenter', OPENSSL_RAW_DATA, $iv);
        return self::safe_b64encode($iv.$crypttext); 
    }

    /**
    *
    * Decrypte une chaîne de caractères
    * ---------------------------------
    * @param string
    * @return string
    *
    **/
    public static function decode($value=false){
        if(!$value) return false;
        $crypttext = self::safe_b64decode($value);
        $iv_size = openssl_cipher_iv_length('aes-256-cbc');
        $iv = substr($crypttext, 0, $iv_size);
        $crypttext = substr($crypttext, $iv_size);
        if(!$crypttext) return false;
        $decrypttext = openssl_decrypt($crypttext, 'aes-256-cbc', 'mhccenter', OPENSSL_RAW_DATA, $iv);
        return rtrim($decrypttext);
    }
}

?>