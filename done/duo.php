<?php

/**
 * @author Das
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
$objSetDTMF->
$objSetDTMF->SetNextUrl("http://172.20.112.9/DUO/menu.php");
//$objPlayFile->GetResult();
//$wrtLg->WriteFile("start \t callString  \t - ".$objSetDTMF->GetResult()." - ".date("Y-m-d H:i:s"));

print($objSetDTMF->GetResult());

?>
