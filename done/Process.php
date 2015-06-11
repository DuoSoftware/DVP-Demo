<?php

/**
 * @author dasitha
 * @copyright 2015
 */

require_once("PHPVoiceLibrary/class.DialNumber.php");
require_once("PHPVoiceLibrary/class.DialExtension.php");
require_once("PHPVoiceLibrary/class.PlayFile.php");


$objProcesIvr = new ProcessIVR();


$calldata = json_decode($HTTP_RAW_POST_DATA,true);

$result= $calldata["result"];
$session = $calldata["session"];
$ani=$calldata["ani"];
$dnis=$calldata["dnis"];
$callerdirection=$calldata["direction"];
$calleridname=$calldata["name"];


$time= date("H.i");


$result = $objProcesIvr->ProcessDigits($result,$session,$ani,$dnis,$callerdirection,$calleridname,$time);

print ($result);



//ExceptionThrower::stop();

Class ProcessIVR
{    
    function ProcessDigits($result,$session,$ani,$dnis,$callerdirection,$calleridname,$time)
        { 
                                   
            try
            {
             
               
               /////////////////////////////////////////start point/////////////////////////
               
                if(strlen($result)==1)
                {       
                    switch ($result)
                        {
                            case 0:
                                $string = $this->DialExtension("http://45.55.179.9/DVP-Demo/done/end.php","default","XML",$ani,$ani,"0");        
                                return $string;
                            
                            break;
                            
                            case 1:
                                $string = $this->DialExtension("http://45.55.179.9/DVP-Demo/done/end.php","default","XML",$ani,$ani,"1");        
                                return $string;
                            break;
                            
                            case 2:
                                $string = $this->DialExtension("http://45.55.179.9/DVP-Demo/done/end.php","default","XML",$ani,$ani,"2");        
                                return $string;
                            
                            break;
                            
                            case 3:
                                $string = $this->DialExtension("http://45.55.179.9/DVP-Demo/done/end.php","default","XML",$ani,$ani,"3");        
                                return $string;
                            break;
                            
                            case 4:
                                $string = $this->DialExtension("http://45.55.179.9/DVP-Demo/done/end.php","default","XML",$ani,$ani,"4");        
                                return $string;
                            
                            break;
                            
                            case 5:
                                $string = $this->DialExtension("http://45.55.179.9/DVP-Demo/done/end.php","default","XML",$ani,$ani,"5");        
                                return $string;
                            break;
                                             
                            default:
                                $string = $this->PlayVoiceFilevoice("done/ivr-lassanaflora_invalid_extension.wav");
                                return $string;
                        }
                    
                   

                }
                else
                {

                    $string= '{"action": "hangup","cause": "NORMAL_CLEAN","nexturl": "http://45.55.179.9/DVP-Demo/done/end.php"}';
                        return $string;
                } 
               
            }
            catch(exception $ex)
            {
                $wrtLg->WriteFile("ProcessIVR>>>>>>>>>>> catch ----  >>>>>>>>> -".$ex."  - ".date("Y-m-d H:i:s"));
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
