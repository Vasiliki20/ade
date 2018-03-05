<?php
require 'jwt_helper.php';

//25f693ea822cfa8e5f6cb3709b5c68fa97b6aaf9c591b689d8754e78e5e382a3
function authenticate () {
    $db_usr = "testuser";
    $db_usr_pw = "mypw";
    $db_usr_id = 187;
    $secret_key = 'some_test_key';
    $valid_for = '3600';
    if (isset($_POST['usr']) && isset($_POST['pw'])) {
        $usr = $_POST['usr'];
        $pw = $_POST['pw'];
        if ($usr == $db_usr && $pw == hash('sha256', $db_usr_pw)) {
            $token = array();
            $token['id'] = $db_usr_id;
            $token['exp'] = time() + $valid_for;
            echo json_encode(JWT::encode($token, $secret_key));
			//echo JWT::encode($token, $secret_key);
            return false;
        } else {
            http_response_code(401);
            return false;
        }
    } else {
        $headers = getallheaders();
        if (array_key_exists('Authorization', $headers)) {
            $jwt = $headers['Authorization'];
			try{
				$token=JWT::decode($jwt, $secret_key);
			}catch(Exception $e){
				echo $e->getmessage();
				exit();
			}
            if ($token->exp >= time()) {
                //loggedin
                return $token->id;
            } else {
                http_response_code(401);
                return false;
            }
        } else {
            http_response_code(401);
            return false;
        }
    }
}
?>