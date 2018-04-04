<?php
require_once("requests.php");
$url="http://thesis.in.cs.ucy.ac.cy/mhc/mhcserver/post/calendarevents.php";
$method='POST';
$a="2018-04-02 11:00:00";
$b="2018-04-02 13:00:00";
$postfields=http_build_query(array(
		'start' =>$_POST['start'],
		'end' => $_POST['end'],
		'psychID' => $_POST['psychID']
	));
	if(isset($_COOKIE['token'])){
		$response=request($url,$method,$postfields,$_COOKIE['token']);
	}else{
		$response=0;
	}
	while($response['status']!=1){
		$tok=giveToken();
		//print "<h5>".$tok."</h5>";
		
		echo"<script>
			document.cookie='token=<?= $tok ?>';
		</script>";
		
		//$GLOBALS['curtoken']=giveToken();
		//print "<h5>".$GLOBALS['curtoken']."</h5>";
		$response=request($url,$method,$postfields,$tok);
	}

class Event {}
$events = array();

foreach($response['result'] as $row) {
  $e = new Event();
  $e->id = $row['eventID'];
  $e->text = $row['nameofappointment'];
  $e->start = $row['start'];
  $e->end = $row['end'];
  $events[] = $e;
}

header('Content-Type: application/json');
echo json_encode($events);
?>