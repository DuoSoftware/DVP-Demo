<?php

/**
 * @author achintha
 * @copyright 2014
 */
 
//ExceptionThrower::start();
 try
 {
    

 
include_once("WriteLog.php");
require_once("PHPVoiceLibrary/class.DialNumber.php");
require_once("PHPVoiceLibrary/class.DialExtension.php");
require_once("PHPVoiceLibrary/class.PlayFile.php");
//require_once("PHPVoiceLibrary/class.VoiceMail.php");
//require_once("PHPVoiceLibrary/class.RecordCall.php");
//require_once("PHPVoiceLibrary/class.UploadFile.php");
//require_once("PHPVoiceLibrary/class.RecordVoiceMessage.php");
//require_once("class.HolidayCalander.php");

$wrtLg = new WriteLog();
$objProcesIvr = new ProcessIVR();
//$objHolidayCalander = new HolidayCalander();

$calldata = json_decode($HTTP_RAW_POST_DATA,true);
$wrtLg->WriteFile("Process.php  >>>>>>>>>>>321321>>>>>>>>>>>>> - ".$HTTP_RAW_POST_DATA." - ".date("Y-m-d H:i:s"));

$result= $calldata["result"];
$session = $calldata["session"];
$ani=$calldata["ani"];
$dnis=$calldata["dnis"];
$callerdirection=$calldata["direction"];
$calleridname=$calldata["name"];

$wrtLg->WriteFile("Process.php \t result \t - ".$result." - ".date("Y-m-d H:i:s"));
$wrtLg->WriteFile("Process.php \t session \t - ".$session." - ".date("Y-m-d H:i:s"));
$wrtLg->WriteFile("Process.php \t ani \t - ".$ani." - ".date("Y-m-d H:i:s"));
$wrtLg->WriteFile("Process.php \t dnis \t - ".$dnis." - ".date("Y-m-d H:i:s"));
$wrtLg->WriteFile("Process.php \t callerdirection \t - ".$callerdirection." - ".date("Y-m-d H:i:s"));
$wrtLg->WriteFile("Process.php \t calleridname \t - ".$calleridname." - ".date("Y-m-d H:i:s"));



$wrtLg->WriteFile("Process.php >>>>>>>>>>>>>>>>>>>>>>>> -  - ".date("Y-m-d H:i:s"));
//print('{"action": "dial","context": "TestInternalPbx", "nexturl": "http://172.20.112.9/IVR/Hangup.php", "dialplan": "XML", "callername": "1000", "callernumber" : "1000", "number" : "pbx/TestInternalPbx/2001"}');

$time= date("H.i");
/*if( (9.00<$time) && ($time<20.30))
{
    print(date("H:i:s"));
}
*/

$result = $objProcesIvr->ProcessDigits($result,$session,$ani,$dnis,$callerdirection,$calleridname,$time);
$wrtLg->WriteFile("ProcessIVR \t Process.php \t -".$result."  - ".date("Y-m-d H:i:s"));
print ($result);

 }
 catch(exception $ex)
 {
  $wrtLg->WriteFile("ProcessIVR \t catch \t -".$ex."  - ".date("Y-m-d H:i:s"));  
 }

//ExceptionThrower::stop();

Class ProcessIVR
{   
 
  
    function ProcessDigits($result,$session,$ani,$dnis,$callerdirection,$calleridname,$time)
        { 
            $wrtLg = new WriteLog();
                       
            try
            {
             
               
               /////////////////////////////////////////start point/////////////////////////
               
                if(strlen($result)==1)
                {       
                    switch ($result)
                        {
                            case 0:
                                $string = $this->DirectDial("http://172.20.112.9/PremadasaGemsIVR/end.php","155_156_lf","XML",$ani,$ani,"0112699557");        
                                $wrtLg->WriteFile("ProcessIVR>>>>>>>>>>>case 0 >>>>>>>>> -".$string."  - ".date("Y-m-d H:i:s"));
                                return $string;
                            
                            break;
                            
                            case 1:
                                $string = $this->DirectDial("http://172.20.112.9/PremadasaGemsIVR/end.php","155_156_lf","XML",$ani,$ani,"0112699556");        
                                $wrtLg->WriteFile("ProcessIVR>>>>>>>>>>>case 1 >>>>>>>>> -".$string."  - ".date("Y-m-d H:i:s"));
                                return $string;
                            break;
                            
                            case 2:
                                $string = $this->DirectDial("http://172.20.112.9/PremadasaGemsIVR/end.php","155_156_lf","XML",$ani,$ani,"0112672865");        
                                $wrtLg->WriteFile("ProcessIVR>>>>>>>>>>>case 2 >>>>>>>>> -".$string."  - ".date("Y-m-d H:i:s"));
                                return $string;
                            
                            break;
                            
                            case 3:
                                $string = $this->DirectDial("http://172.20.112.9/PremadasaGemsIVR/end.php","155_156_lf","XML",$ani,$ani,"0114349435");        
                                $wrtLg->WriteFile("ProcessIVR>>>>>>>>>>>case 3 >>>>>>>>> -".$string."  - ".date("Y-m-d H:i:s"));
                                return $string;
                            break;
                            
                            case 4:
                                $string = $this->DirectDial("http://172.20.112.9/PremadasaGemsIVR/end.php","155_156_lf","XML",$ani,$ani,"0812384317");        
                                $wrtLg->WriteFile("ProcessIVR>>>>>>>>>>>case 4 >>>>>>>>> -".$string."  - ".date("Y-m-d H:i:s"));
                                return $string;
                            
                            break;
                            
                            case 5:
                                $string = $this->DirectDial("http://172.20.112.9/PremadasaGemsIVR/end.php","155_156_lf","XML",$ani,$ani,"0812384318");        
                                $wrtLg->WriteFile("ProcessIVR>>>>>>>>>>>case 5 >>>>>>>>> -".$string."  - ".date("Y-m-d H:i:s"));
                                return $string;
                            break;
                            
                            case 6:
                                $string = $this->DirectDial("http://172.20.112.9/PremadasaGemsIVR/end.php","155_156_lf","XML",$ani,$ani,"0662056731");        
                                $wrtLg->WriteFile("ProcessIVR>>>>>>>>>>>case 6 >>>>>>>>> -".$string."  - ".date("Y-m-d H:i:s"));
                                return $string;
                            
                            break;
                            
                            case 7:
                                $string = $this->DirectDial("http://172.20.112.9/PremadasaGemsIVR/end.php","155_156_lf","XML",$ani,$ani,"0662056732");        
                                $wrtLg->WriteFile("ProcessIVR>>>>>>>>>>>case 7 >>>>>>>>> -".$string."  - ".date("Y-m-d H:i:s"));
                                return $string;
                            break;
                            
                            case 8:
                                $string = $this->DirectDial("http://172.20.112.9/PremadasaGemsIVR/end.php","155_156_lf","XML",$ani,$ani,"0912222173");        
                                $wrtLg->WriteFile("ProcessIVR>>>>>>>>>>>case 8 >>>>>>>>> -".$string."  - ".date("Y-m-d H:i:s"));
                                return $string;
                            
                            break;
                            
                            case 9:
                                $string = $this->DirectDial("http://172.20.112.9/PremadasaGemsIVR/end.php","155_156_lf","XML",$ani,$ani,"0777810144");        
                                $wrtLg->WriteFile("ProcessIVR>>>>>>>>>>>case 9 >>>>>>>>> -".$string."  - ".date("Y-m-d H:i:s"));
                                return $string;
                            break;
                            
                            default:
                                $string = $this->PlayVoiceFilevoice("premadasagems/ivr-premadasagems_invalid_extension.wav");
                                return $string;
                        }
                    
                   

                }
                else
                {
                    //$string = $this->PlayFile("http://172.20.112.9/DuoIVR/end.php","TestInternalPbx","XML","1000","1000",$result);
                    $string= '{"action": "hangup","cause": "NORMAL_CLEAN","nexturl": "http://172.20.112.9/PremadasaGemsIVR/end.php"}';
                     //   $filename=$ani."_".$dnis."-".$d."-".$time.".wav";
                      //  $string = $this->RecordMessage("filename.wav","http://172.20.112.9/DuoIVR/end.php","result_12","","5","10","3000","","","http://172.20.112.9/DuoIVR/upload.php","9");
                      //  $wrtLg->WriteFile("ProcessIVR>>>>>>>>>>> case 3 ---- else >>RecordMessage>>>>>>> -".$string."  - ".date("Y-m-d H:i:s"));
                     //   $wrtLg->WriteFile("ProcessIVR>>>>>>>>>>> case 3 ---- else >>RecordMessage>>>>>>> ".date("Y-m-d H:i:s"));
                            // return '{"action": "hangup","cause": "NORMAL_CLEAN","nexturl": ""}';
                        return $string;
                } 
               
            }
            catch(exception $ex)
            {
                $wrtLg->WriteFile("ProcessIVR>>>>>>>>>>> catch ----  >>>>>>>>> -".$ex."  - ".date("Y-m-d H:i:s"));
                return $ex;
            }
            
        }
    
    function DirectDial($nexturl,$context,$dialplan,$callername,$callernumber,$number)
        {
            try
             {
                $dialNum = new DialNumber();
                
                $dialNum->SetNextUrl($nexturl);
                $dialNum->SetContext($context);
                $dialNum->SetDialplan($dialplan);
                $dialNum->SetCallerName($callername);
                $dialNum->SetCallerNumber($callernumber);
                $dialNum->SetNumber($number);
                 
                $result = $dialNum->GetResult();
                return $result;
             
             }
            catch(exception $ex)
             {
                return $ex;
             }         
        }
    
    
    function DialExtension($nexturl,$context,$dialplan,$callername,$callernumber,$number)
        {
            try
             {
                $dialNum = new DialExtension();
                
                $dialNum->SetNextUrl($nexturl);
                $dialNum->SetContext($context);
                $dialNum->SetDialplan($dialplan);
                $dialNum->SetCallerName($callername);
                $dialNum->SetCallerNumber($callernumber);
                $dialNum->SetNumber($number);
                 
                $result = $dialNum->GetResult();
                return $result;
             
             }
            catch(exception $ex)
             {
                return $ex;
             }         
        }
        
           
     function PlayVoiceFilevoice($file) 
        {
        try
            {
                $playFile = new PlayFile();
                $playFile->SetFile($file);
            }
        catch (exception $ex)
            {
               return $ex; 
            }
       }   
    
}


?>
