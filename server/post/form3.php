<?php
 include('post.php');
 try{
 $stmt = $db->prepare('INSERT INTO patientadditionaldata(patientID,academicproblems,workingproblems,loveaffair,familyrelation,acquaintances,socialcontacts,socialisolation,lonelyfeel,fearofcloserelations,difficultexpressfeelings,difficulttoexpressopinion,burstofanger,jealous,recentdivorce,sadforrecentdivorce,sexuality,sexualorientation,pregnancy,confusionaboutbelieves,dontlikemyself,senseofinferiority,feelguilty,sadness,depressedmood,feelofabsense,reduceenergy,badmoodforactivities,badconcentration,badmemory,dificultdecide,slowthinking,badsleep,stress,intensity,phobias,obsessthinking,insistrepeatthings,problemwithdiet,problemwithweight,changesinapetite,problemhealth,physicaldisability,braintrauma,traumaticevent,hyperactivity,impelsivebehaviour,problemalcohol,problemdrugs,problemgambling,playinternetgames,timemanagement,abuse,hearingvoices,believewatchingme,believemanipulatingme,weirdbehavior,financialproblems,legalissues,thinksuicide,thinkkill,other,othergrade,other1,othergrade1) VALUES (:v1,:v2,:v3,:v4,:v5,:v6,:v7,:v8,:v9,:v10,:v11,:v12,:v13,:v14,:v15,:v16,:v17,:v18,:v19,:v20,:v21,:v22,:v23,:v24,:v25,:v26,:v27,:v28,:v29,:v30,:v31,:v32,:v33,:v34,:v35,:v36,:v37,:v38,:v39,:v40,:v41,:v42,:v43,:v44,:v45,:v46,:v47,:v48,:v49,:v50,:v51,:v52,:v53,:v54,:v55,:v56,:v57,:v58,:v59,:v60,:v61,:v62,:v63,:v64,:v65)');
 $j=0;
 $stmt->bindParam(':v1',$_POST['id']);
 
 for($j=1;$j<=64;$j++){
	 $jc=$j+1;
	 $k=":v$jc";// echo $k;
	 $c="q$j"; //echo $c;

	 $stmt->bindParam($k,$_POST[$c]);
	 
 }
 
 $stmt->execute();
 }catch(PDOException $e){ 
	$response['success']=0; $response['num']=$j; $response['error']=$e->getMessage(); echo json_encode($response); exit(); //echo "\n".$e->getMessage()."\n"; exit();
 }
 $response['success']=1; echo json_encode($response);
 //}else{$response['success']=0; $response['error']="Wrong Fields!"; echo json_encode($response);}
 ?>
 
 