<?php
function giveToken(){
$request = new HttpRequest();
$request->setUrl('http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/index.php');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'cache-control' => 'no-cache',
  'content-type' => 'application/x-www-form-urlencoded'
));

$request->setContentType('application/x-www-form-urlencoded');
$request->setPostFields(array(
  'usr' => 'testuser',
  'pw' => '25f693ea822cfa8e5f6cb3709b5c68fa97b6aaf9c591b689d8754e78e5e382a3'
));

try {
  $response = $request->send();
	
  return json_decode($response->getBody());
} catch (HttpException $ex) {
  return $ex;
}
}
?>