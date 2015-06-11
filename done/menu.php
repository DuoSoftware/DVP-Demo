<?php

/**
 * @author dasitha
 * @copyright 2015
 */

require_once("PHPVoiceLibrary/class.PlayFileAndGetDigits.php");


$objPlayFile = new PlayFileAndGetDigits();


//$objPlayFile->
$calldata = json_decode($HTTP_RAW_POST_DATA,true);


$result= $calldata["result"];
$session = $calldata["session"];
$ani=$calldata["ani"];
$dnis=$calldata["dnis"];
$callerdirection=$calldata["direction"];
$calleridname=$calldata["name"];


//{"action": "playandgetdigits","file": "Duo_IVR_Menu.wav","nexturl": "http://192.168.1.195/IVR/Process.php","result": "result","errorfile": "","digittimeout": "20","inputtimeout": "100","loops": "2","terminator": "#","strip": "#","maxdigits"3""digits": "1"}
//{"action": "playandgetdigits","file": "Duo_IVR_Menu.wav","nexturl": "http://192.168.1.195/IVR/ivrProcess.php","result": "result","errorfile": "","digittimeout" : 20,"inputtimeout" : 100,"loops" : 2,"terminator" : "#","strip" : "#","maxdigits" : "2","digits" : 1}';
$objPlayFile->SetFile("done/ivr-lassanaflora.wav");
$objPlayFile->SetNextUrl("http://45.55.179.9/DVP-Demo/done/Process.php");
$objPlayFile->SetResult("result");
$objPlayFile->SetErrorFile("");
$objPlayFile->SetDigitTimeout("20");
$objPlayFile->SetInputTimeout("100");
$objPlayFile->SetLoops("3");
$objPlayFile->SetTerminator("#");
$objPlayFile->SetStrip("#");
$objPlayFile->SetMaxDigits(3);
$objPlayFile->SetDigits(1);


print($objPlayFile->GetResult());

?>
