<?php

/**
 * @author dasitha
 * @copyright 2015
 */

require_once("PHPVoiceLibrary/class.SetDTMF.php");


$objSetDTMF = new SetDTMF();

//$objPlayFile->
$calldata = json_decode($HTTP_RAW_POST_DATA,true);

$result= $calldata["result"];
$session = $calldata["session"];
$ani=$calldata["ani"];
$dnis=$calldata["dnis"];
$callerdirection=$calldata["direction"];
$calleridname=$calldata["name"];

$objSetDTMF->SetDTMFType("inband");
$objSetDTMF->SetNextUrl("http://45.55.179.9/DVP-Demo/done/menu.php");
//$objPlayFile->GetResult();

print($objSetDTMF->GetResult());

?>
